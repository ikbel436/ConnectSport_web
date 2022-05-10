<?php

namespace App\Controller;

use App\Entity\Personne;
use App\Entity\Sponsor;
use App\Form\SponsorType;
use App\Repository\EvenementRepository;
use App\Repository\SponsorRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use MercurySeries\FlashyBundle\FlashyNotifier;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

/**
 * @Route("/sponsor")
 */
class SponsorController extends AbstractController
{
    /**
     * @Route("/m", name="app_sponsor_index", methods={"GET"})
     */
    public function index(EntityManagerInterface $entityManager): Response
    {
        $user=$this->get('security.token_storage')->getToken()->getUser();

        $sponsors = $entityManager
            ->getRepository(Sponsor::class)->findByIdp($user->getId());
        //var_dump($sponsors);
        //die;
        return $this->render('sponsor/index.html.twig', [
            'sponsors' => $sponsors,
        ]);
    }

    /**
     * @Route("/new", name="app_sponsor_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $user=$this->get('security.token_storage')->getToken()->getUser();

        $sponsor = new Sponsor();
        $form = $this->createForm(SponsorType::class, $sponsor);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
$sponsor->setIdp($user);
            $entityManager->persist($sponsor);
            $entityManager->flush();
            $this->addFlash('success', 'Sponsor Created! Knowledge is power!');

            return $this->redirectToRoute('app_sponsor_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('sponsor/new.html.twig', [
            'sponsor' => $sponsor,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_sponsor_show", methods={"GET"})
     */
    public function show(Sponsor $sponsor): Response
    {
        return $this->render('sponsor/show.html.twig', [
            'sponsor' => $sponsor,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_sponsor_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Sponsor $sponsor, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(SponsorType::class, $sponsor);
        $form->handleRequest($request);
        $user=$this->get('security.token_storage')->getToken()->getUser();
        if ($form->isSubmitted() && $form->isValid()) {
           // $entityManager->flush();
            $entityManager->flush();
            $this->addFlash('success', 'update avec succées');

            return $this->redirectToRoute('app_sponsor_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('sponsor/edit.html.twig', [
            'sponsor' => $sponsor,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_sponsor_delete", methods={"POST"})
     */
    public function delete(Request $request, Sponsor $sponsor, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$sponsor->getId(), $request->request->get('_token'))) {
            $entityManager->remove($sponsor);
            $entityManager->flush();
//            $entityManager->flush();
            $this->addFlash('success', 'supprimer avec succées!');

        }

        return $this->redirectToRoute('app_sponsor_index', [], Response::HTTP_SEE_OTHER);
    }
    /**
     * @Route("/",name="sponsor_back", methods={"GET"})
     */
    public function afficherback(EntityManagerInterface $entityManager): Response
    {
        $sponsors = $entityManager
            ->getRepository(Sponsor::class)
            ->findAll();

        return $this->render('sponsor/admin.html.twig', [
            'sponsors' => $sponsors,
        ]);
    }
    /**
     * @Route("/showww/{id}", name="showEvent")
     */
    public function ShowStuByClass(SponsorRepository  $repF, EvenementRepository $repS, $id)
    {

        $four=$repF->find($id);
        $sto=$repS->finbyfour($four->getId());
        return $this->render('sponsor/event.html.twig', array(
            "fours" => $four,
            "stos"=>$sto));

    }
    /**
     * @Route("/sponsoe/mobile", name="mobile_sponsor")
     */

    public function AllSponsors(NormalizerInterface $normalizer)
    {
        $repository=$this->getDoctrine()->getRepository(Sponsor::class);
        $sponsor=$repository->findAll();
        $jsonContent=$normalizer->normalize($sponsor,'json',['groups'=>'post:read']);

        return new Response(json_encode($jsonContent));
    }

    /**
     * @Route("/sponsor/mobileajout",name="mobile_ajout1")
     */

    public function addSponsor(NormalizerInterface  $normalizer,Request $request)
    {  $idp=$request->query->get('idp');
        $user=$this->getDoctrine()->getRepository(Personne::class)->find($idp);


      $entityManager=$this->getDoctrine()->getManager();
        $p =new Sponsor();
        $p->setNom($request->get('nom'));
        $p->setPrenom($request->get('prenom'));
        $p->setAdresse($request->get('adresse'));
        $p->setDatenaissance(new \DateTime($request->get('datenaissance')));
        $p->setMail($request->get('mail'));
        $p->setTel($request->get('tel'));
        $p->setIdp($user);
        // $p->setIdp($request->get('idp'));
        //$p->setRole($request->get('role'));
        //$p->setMdp($request->get('mdp'));
       // $p->setNomequipe($request->get('nomequipe'));
       // $p->setEtat($request->get('etat'));
        //$p->setImage($request->get('image'));





        $entityManager->persist($p);
        $entityManager->flush();
        $jsonContent=$normalizer->normalize($p,'json',['groups'=>'post:read']);
        return new Response(json_encode($jsonContent));
    }
    /**
     * @Route("/sponsor/mobilemodifier/{id}",name="mobile_modifier1")
     */

    public function modifierSponsor(NormalizerInterface  $normalizer,Request $request,$id)
    {
        $entityManager=$this->getDoctrine()->getManager();
        $repo=$this->getDoctrine()->getRepository(Sponsor::class);
        $p=$repo->find($id);

        $p->setNom($request->get('nom'));
        $p->setPrenom($request->get('prenom'));
        $p->setAdresse($request->get('adresse'));
        //$p->setDatenaissance(new \DateTime($request->get('datenaissance')));
        $p->setMail($request->get('mail'));
        $p->setTel($request->get('tel'));
        //$p->setRole($request->get('role'));
       // $p->setIdp($request->get('idp'));
      //  $p->setNomequipe($request->get('nomequipe'));
        //  $p->setEtat($request->get('etat'));
        //$p->setImage($request->get('image'));

        $entityManager->flush();
        $jsonContent=$normalizer->normalize($p,'json',['groups'=>'post:read']);
        return new Response("information modifie".json_encode($jsonContent));
    }

    /**
     * @Route("/sponsor/mobilesupprimer/{id}",name="mobile_supprimer1")
     */

    public function supprimerSpon(NormalizerInterface  $normalizer,Request $request,$id)
    {
        $entityManager=$this->getDoctrine()->getManager();
        $repo=$this->getDoctrine()->getRepository(Sponsor::class);
        $p=$repo->find($id);
        $entityManager->remove($p);
        $entityManager->flush();
        $jsonContent=$normalizer->normalize($p,'json',['groups'=>'post:read']);
        return new Response("user supprimer".json_encode($jsonContent));
    }
}

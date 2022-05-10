<?php

namespace App\Controller;

use App\Entity\Contrat;
use App\Entity\Personne;
use App\Entity\Sponsor;
use App\Form\ContactpType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;


class ContactpController extends AbstractController
{
    /**
     * @Route("/contactp", name="app_contactp")
     */

    public function index(Request $request, \Swift_Mailer $mailer): Response
    {
        $form = $this->createForm(ContactpType::class);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $contact = $form->getData();

            // Ici nous enverrons le mail
            $message = (new \Swift_Message('Nouveau Contact'))
                // On attribue l'expéditeur
                ->setFrom($contact['email'])

                // On attribue le destinataire
                ->setTo('benmansourmalak18@gmail.com')

                // On crée le message avec la vue Twig
                ->setBody(
                    $this->renderView(
                        'emails/contact.html.twig', compact('contact')
                    ),
                    'text/html'
                )
            ;

            // On envoie le message
            $mailer->send($message);

            $this->addFlash('message', 'Le message a bien été envoyé');
            return $this->redirectToRoute('app_personnel_index');
        }

        return $this->render('contactp/index.html.twig', [
            'ContactpForm' => $form->createView()
        ]);
    }
    /**
     * @Route("/contrat/mobile", name="mobile_sponsor2")
     */

    public function AllContrat(NormalizerInterface $normalizer)
    {
        $repository=$this->getDoctrine()->getRepository(Contrat::class);
        $sponsor=$repository->findAll();
        $jsonContent=$normalizer->normalize($sponsor,'json',['groups'=>'post:read']);

        return new Response(json_encode($jsonContent));
    }

    /**
     * @Route("/contrat/mobileajout",name="mobile_ajout2")
     */

    public function addSponsor(NormalizerInterface  $normalizer,Request $request)
    {  $idr=$request->query->get('idr');
        $user=$this->getDoctrine()->getRepository(Personne::class)->find($idr);

        $idp=$request->query->get('idp');
        $perso=$this->getDoctrine()->getRepository(Personnel::class)->find($idp);

        $idr=$request->query->get('idr');
        $entityManager=$this->getDoctrine()->getManager();
        $p =new Contrat();
        $p->setNom($request->get('nom'));
       // $p->setDatecontrat($request->get('datecontrat'));
        $p->setType($request->get('type'));
        $p->setDatecontrat(new \DateTime($request->get('datecontrat')));
       // $p->setMail($request->get('mail'));
        //$p->setTel($request->get('tel'));
        $p->setIdr($user);
        $p->setIdp($perso);
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
     * @Route("/contrat/mobilemodifier/{id}",name="mobile_modifier2")
     */

    public function modifierSponsor(NormalizerInterface  $normalizer,Request $request,$id)
    {
        $entityManager=$this->getDoctrine()->getManager();
        $repo=$this->getDoctrine()->getRepository(Contrat::class);
        $p=$repo->find($id);

        $p->setNom($request->get('nom'));
        $p->setType($request->get('type'));
        //$p->setAdresse($request->get('adresse'));
        //$p->setDatenaissance(new \DateTime($request->get('datenaissance')));
       // $p->setMail($request->get('mail'));
        //$p->setTel($request->get('tel'));
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
     * @Route("/contrat/mobilesupprimer/{id}",name="mobile_supprimer2")
     */

    public function supprimerSpon(NormalizerInterface  $normalizer,Request $request,$id)
    {
        $entityManager=$this->getDoctrine()->getManager();
        $repo=$this->getDoctrine()->getRepository(Contrat::class);
        $p=$repo->find($id);
        $entityManager->remove($p);
        $entityManager->flush();
        $jsonContent=$normalizer->normalize($p,'json',['groups'=>'post:read']);
        return new Response("user supprimer".json_encode($jsonContent));
    }
}

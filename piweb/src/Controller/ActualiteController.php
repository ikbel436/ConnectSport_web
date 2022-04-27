<?php

namespace App\Controller;

use App\Entity\Actualite;
use App\Entity\Commentaire;
use App\Entity\Personne;
use App\Entity\Reclamation;
use App\Form\ActualiteType;
use App\Form\CommentaireType;
use App\Form\ActualiteupType;
use App\Form\ReclamationfanType;
use App\Repository\ActualiteRepository;
use Doctrine\ORM\EntityManagerInterface;
use mysql_xdevapi\Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use App\Controller\PdfController;

use Dompdf\Dompdf;
use Dompdf\Options;

/**
 * @Route("/actualite")
 */
class ActualiteController extends AbstractController
{
    var $idfan=7;
    /**
     * @Route("/", name="app_actualite_index", methods={"GET"})
     */
    public function index(EntityManagerInterface $entityManager): Response
    {
        $actualites = $entityManager
            ->getRepository(Actualite::class)
            ->findAll();

        return $this->render('actualite/index.html.twig', [
            'actualites' => $actualites,
        ]);
    }

    /**
     * @Route("/new", name="app_actualite_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $actualite = new Actualite();
        $form = $this->createForm(ActualiteType::class, $actualite);
        $form->handleRequest($request);
        $repository = $this->getDoctrine()->getRepository(Personne::class);
        $res=$repository->find(10);

        //var_dump($actualite);
        //die ;
        $actualite->setIdres($res);
        $actualite->setDateajout(new \DateTime('now'));
        //$actualite->setDateajout(new \DateTime('now'));
        if ($form->isSubmitted() && $form->isValid()) {
try {
    $file = $form->get('image')->getData();
   $filename = md5(uniqid()) . '.' . $file->guessExtension();
    $file->move($this->getParameter('uploads_directory'), $filename);



}catch(Exception $e){


            }
            $actualite->setImage($filename);
            //($actualite);
            //die ;
                $entityManager->persist($actualite);
                $entityManager->flush();

                return $this->redirectToRoute('app_actualite_index', [], Response::HTTP_SEE_OTHER);
            }

            return $this->render('actualite/new.html.twig', [
                'actualite' => $actualite,
                'form' => $form->createView(),
            ]);
        }
    /**
     * @Route("/{id}", name="app_actualite_show", methods={"GET"})
     */
    public function show(Actualite $actualite): Response
    {
        return $this->render('actualite/show.html.twig', [
            'actualite' => $actualite,
        ]);
    }
    /**
     * @Route("/act/{id}", name="app_actualite_showfan", methods={"GET", "POST"})
     */
    public function showfan($id,Actualite $actualite,Request $request, EntityManagerInterface $entityManager): Response
    {

        $commentaires = $this->getDoctrine()
            ->getRepository(Commentaire::class)
            -> findByidAct($id);


        $commentaire = new Commentaire();
        $form = $this->createForm(CommentaireType::class, $commentaire);
        $form->handleRequest($request);




        $repository = $this->getDoctrine()->getRepository(Personne::class);
        $personne=$repository->find($this->idfan);
        $repo = $this->getDoctrine()->getRepository(Actualite::class);
        $act=$repo->find($id);
        $commentaire->setIdPer($personne);
        $commentaire->setIdAct($act);
        $commentaire->setDateajout(new \DateTime('now'));
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($commentaire);
            $entityManager->flush();



            return $this->redirectToRoute('app_actualite_showfan', ['id' => $id], Response::HTTP_SEE_OTHER);
        }




        return $this->render('actualite/showact.html.twig', [
            'actualite' => $actualite,
            'formc' => $form->createView(),
            'commentaire' => $commentaire,
            'commentaires' => $commentaires
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_actualite_edit", methods={"GET", "POST"})
     */
    public function edit($id,Request $request, Actualite $actualite, EntityManagerInterface $entityManager,ActualiteRepository $rep): Response
    {
        $actualite=$rep->find($id);
        $form = $this->createForm(ActualiteupType::class, $actualite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file = $form->get('image')->getData();
            $filename = md5(uniqid()).'.'.$file->guessExtension();
            $file->move($this->getParameter('uploads_directory'),$filename);
            $actualite->setImage($filename);
            $entityManager->flush();

            return $this->redirectToRoute('app_actualite_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('actualite/edit.html.twig', [
            'actualite' => $actualite,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_actualite_delete", methods={"POST"})
     */
    public function delete(Request $request, Actualite $actualite, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$actualite->getId(), $request->request->get('_token'))) {
            $entityManager->remove($actualite);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_actualite_index', [], Response::HTTP_SEE_OTHER);
    }

    /**
     * @Route("/actualite/fan", name="app_actualite_fan", methods={"GET"})
     */
    public function indexfan(EntityManagerInterface $entityManager): Response
    {
        $actualites = $entityManager
            ->getRepository(Actualite::class)
            ->findAll();

        return $this->render('actualite/actualiteFan.html.twig', [
            'actualites' => $actualites,
        ]);
    }
    /**
     * @Route("/actualite/back", name="app_actualite_back", methods={"GET"})
     */
    public function indexBack(EntityManagerInterface $entityManager): Response
    {
        $actualites = $entityManager
            ->getRepository(Actualite::class)
            ->findAll();

        return $this->render('actualite/actualiteBack.html.twig', [
            'actualites' => $actualites,
        ]);
    }
    /**
     * @Route("/s/searchAct", name="searchAct")
     */
    public function searchArticle(Request $request,NormalizerInterface $Normalizer,ActualiteRepository $repository):Response
    {
//$repository = $this->getDoctrine()->getRepository(Article::class);
        $requestString=$request->get('searchValue');
        $actualites = $repository->findByTitre($requestString);
        $jsonContent = $Normalizer->normalize($actualites, 'json',['Groups'=>'actualites:read']);
        $retour =json_encode($jsonContent);

        return new Response($retour);

    }

    /**
     * @Route("/actualite/lista", name="app_actualite_list", methods={"GET"})
     */
    public function lista(ActualiteRepository $actualiteRepository): Response
    {
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);
        $actualites = $actualiteRepository
            ->findAll();


        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('actualite/listact.html.twig', [
            'actualites' => $actualites,
        ]);

        // Load HTML to Dompdf
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser (force download)
        $dompdf->stream("mypdf.pdf", [
            "Attachment" => true
        ]);

    }
    /**
     * @Route("/actualite/actf/{id}", name="app_actualite_actf", methods={"GET"})
     */
    public function actf($id,ActualiteRepository $actualiteRepository): Response
    {
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);
        $actualite = $actualiteRepository
            ->find($id);
        $png = file_get_contents('responsable/uploads/images/'.$actualite->getImage());
         $pngbase64 = base64_encode($png);

        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('actualite/actf.html.twig', [
            'actualite' => $actualite,
            'pngbase64' => $pngbase64
        ]);

        // Load HTML to Dompdf
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser (force download)
        $dompdf->stream("mypdf.pdf", [
            "Attachment" => true
        ]);

    }

    /**
     * @Route("/actualite/newcom/{id}", name="app_actualite_newcom", methods={"GET", "POST"})
     */
    public function newcom($id,Request $request, EntityManagerInterface $entityManager): Response
    {
        $commentaire = new Commentaire();
        $form = $this->createForm(CommentaireType::class, $commentaire);
        $form->handleRequest($request);



        $repository = $this->getDoctrine()->getRepository(Personne::class);
        $personne=$repository->find($this->idfan);
        $repo = $this->getDoctrine()->getRepository(Actualite::class);
        $act=$repository->find($id);
        $commentaire->setIdPer($personne);
        $commentaire->setIdAct($act);
        $commentaire->setDateajout(new \DateTime('now'));
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($commentaire);
            $entityManager->flush();



            return $this->redirectToRoute('app_actualite_showfan', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('actualite/showact.html.twig', [
            'commentaire' => $commentaire,
            'formc' => $form->createView(),
        ]);
    }
}

<?php

namespace App\Controller;
use App\Repository\CategorieRepository;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\PieChart;
use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Personne;
use App\Entity\Reclamation;
use App\Entity\Categorie;
use App\Form\ReclamationfanType;
use App\Form\ReclamationType;
use App\Repository\ActualiteRepository;
use App\Repository\ReclamationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
/**
 * @Route("/reclamation")
 */
class ReclamationController extends AbstractController
{

    var $idfan=7;
    var $idres=10;
    /**
     * @Route("/", name="app_reclamation_index", methods={"GET"})
     */
    public function index(EntityManagerInterface $entityManager): Response
    {
        $reclamations = $entityManager
            ->getRepository(Reclamation::class)
            ->findAll();

        return $this->render('reclamation/index.html.twig', [
            'reclamations' => $reclamations,
        ]);
    }

    /**
     * @Route("/new", name="app_reclamation_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $reclamation = new Reclamation();
        $form = $this->createForm(ReclamationType::class, $reclamation);
        $form->handleRequest($request);
        $repository = $this->getDoctrine()->getRepository(Personne::class);
        $personne=$repository->find($this->idres);

        $reclamation->setIdPer($personne);
        $reclamation->setDateajout(new \DateTime('now'));

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($reclamation);
            $entityManager->flush();

            return $this->redirectToRoute('app_reclamation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('reclamation/new.html.twig', [
            'reclamation' => $reclamation,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_reclamation_show", methods={"GET"})
     */
    public function show(Reclamation $reclamation): Response
    {
        return $this->render('reclamation/show.html.twig', [
            'reclamation' => $reclamation,
        ]);
    }
    public function mailrecc( \Swift_Mailer $mailer,EntityManagerInterface $entityManager,Reclamation $reclamation)
    {
        $fan=new Personne();

        $repository = $this->getDoctrine()->getRepository(Personne::class);
        $fan=$repository->find($this->idfan);
        $name=$fan->getNom()." ".$fan->getPrenom();
        $status=$reclamation->getEtat();
        $title=$reclamation->getTitre();
        $message = (new \Swift_Message('Réclamation'))
            ->setFrom('abidhiefahmed@gmail.com')
            ->setTo($fan->getMail())

            ->setBody(
                $this->renderView(
                // templates/hello/email.txt.twig
                    'reclamation/emaiil.html.twig',
                    ['name' => $name,'status' => $status,'title' => $title]



                )
            )
        ;
        $mailer->send($message);

        $reclamations = $entityManager
            ->getRepository(Reclamation::class)
            ->findAll();

        return $this->render('reclamation/index.html.twig', [
            'reclamations' => $reclamations,
        ]);
    }
    /**
     * @Route("/{id}/edit", name="app_reclamation_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Reclamation $reclamation, EntityManagerInterface $entityManager,\Swift_Mailer $mailer): Response
    {
        $form = $this->createForm(ReclamationType::class, $reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            self::mailrecc( $mailer, $entityManager,$reclamation);
            return $this->redirectToRoute('app_reclamation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('reclamation/edit.html.twig', [
            'reclamation' => $reclamation,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_reclamation_delete", methods={"POST"})
     */
    public function delete(Request $request, Reclamation $reclamation, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reclamation->getId(), $request->request->get('_token'))) {
            $entityManager->remove($reclamation);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_reclamation_index', [], Response::HTTP_SEE_OTHER);
    }
    /*  /**
        * @Route("/reclamation/show/mail", name="app_reclamation_mail", methods={"GET"})
        */
    public function mailrec( \Swift_Mailer $mailer,EntityManagerInterface $entityManager)
    {
        $fan=new Personne();
        $repository = $this->getDoctrine()->getRepository(Personne::class);
        $fan=$repository->find($this->idfan);
        $name=$fan->getNom()." ".$fan->getPrenom();
        $message = (new \Swift_Message('Réclamation reçue avec succès'))
            ->setFrom('abidhiefahmed@gmail.com')
            ->setTo($fan->getMail())

            ->setBody(
                $this->renderView(
                // templates/hello/email.txt.twig
                    'reclamation/email.html.twig',
                    ['name' => $name]
                )
            )
        ;
        $mailer->send($message);

        $reclamations = $entityManager
            ->getRepository(Reclamation::class)
            ->findAll();

        return $this->render('reclamation/index.html.twig', [
            'reclamations' => $reclamations,
        ]);
    }

    /**
     * @Route("/reclamation/newfans", name="app_reclamation_newfan", methods={"GET", "POST"})
     */
    public function newfan(Request $request, EntityManagerInterface $entityManager,\Swift_Mailer $mailer): Response
    {
        $reclamation = new Reclamation();
        $form = $this->createForm(ReclamationfanType::class, $reclamation);
        $form->handleRequest($request);



        $repository = $this->getDoctrine()->getRepository(Personne::class);
        $personne=$repository->find($this->idfan);

        $reclamation->setIdPer($personne);
        $reclamation->setDateajout(new \DateTime('now'));
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($reclamation);
            $entityManager->flush();

             self::mailrec( $mailer, $entityManager);

            return $this->redirectToRoute('app_reclamation_fan', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('reclamation/newfans.html.twig', [
            'reclamation' => $reclamation,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/reclamation/recfans", name="app_reclamation_fan", methods={"GET"})
     */
    public function recfan(EntityManagerInterface $entityManager): Response
    {
        $repository = $this->getDoctrine()->getRepository(Personne::class);
        $fan=$repository->find($this->idfan);
        $reclamations = $this->getDoctrine()
            ->getRepository(Reclamation::class)
            -> findByidPer($fan);

        return $this->render('reclamation/recfan.html.twig', [
            'reclamations' => $reclamations,
        ]);
    }
    /**
     * @Route("/reclamation/{id}", name="app_reclamation_showfan", methods={"GET"})
     */
    public function showfan(Reclamation $reclamation): Response
    {
        return $this->render('reclamation/showfan.html.twig', [
            'reclamation' => $reclamation,
        ]);
    }

    /**
     * @Route("/s/searchRec", name="searchRec")
     */
    public function searchArticles(Request $request,NormalizerInterface $Normalizer,ReclamationRepository $repository):Response
    {
//$repository = $this->getDoctrine()->getRepository(Article::class);
        $requestString=$request->get('searchValue');
        $reclamations = $repository->findByTitres($requestString);
        $jsonContent = $Normalizer->normalize($reclamations, 'json',['Groups'=>'reclamations:read']);
        $retour =json_encode($jsonContent);

        return new Response($retour);

    }
    /**
     * @Route("/r/stats", name="app_reclamation_stat")
     */
    public function stat(ReclamationRepository $repository,CategorieRepository $repo): Response
    {
        $cat = $repo->findAll();
        $pieChart = new PieChart();
        $tab=array(sizeof($cat));
        $tab[0]= ['cat', 'rec'];
        $i=1;
        foreach ($cat as $c)
        {
            $rec = $repository->findByCat($c->getNom());
            $tab[$i]=  [$c->getNom(),sizeof($rec)];
            $i=$i+1;

        }




        $pieChart->getData()->setArrayToDataTable( $tab);

        $pieChart->getOptions()->setTitle('   Nombre de réclamations / Catégories ');
        $pieChart->getOptions()->setHeight(600);
        $pieChart->getOptions()->setWidth(1500);
        $pieChart->getOptions()->getTitleTextStyle()->setColor('#07600');
        $pieChart->getOptions()->getTitleTextStyle()->setFontSize(30);


        return $this->render('reclamation/stat.html.twig', array(
                'piechart' => $pieChart,
            )

        );
    }

    /**
     * @Route("/reclamation/show/listr", name="app_reclamation_list", methods={"GET"})
     */
    public function listr(ReclamationRepository $reclamationRepository): Response
    {
        $spreadsheet = new Spreadsheet();
        $reclamations = $reclamationRepository
            ->findAll();
        /* @var $sheet \PhpOffice\PhpSpreadsheet\Writer\Xlsx\Worksheet */
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', 'Titre');
        $sheet->setCellValue('B1', 'Description');
        $sheet->setCellValue('C1', 'Date Ajout');
        $sheet->setCellValue('D1', 'Catégorie');
        $sheet->setCellValue('E1', 'Etat');
        $sheet->setCellValue('F1', 'N° Commande');
        $sheet->setCellValue('G1', 'Personne');
        $sheet->setTitle("Liste des réclamations");

        $i=2;
        foreach ($reclamations as $r)
        {
            $sheet->setCellValue('A'.$i, $r->getTitre());
            $sheet->setCellValue('B'.$i, $r->getDescription());
            $sheet->setCellValue('C'.$i, $r->getDateajout());
            $sheet->setCellValue('D'.$i, $r->getIdCat()->getNom());
            $sheet->setCellValue('E'.$i, $r->getEtat());
            $sheet->setCellValue('F'.$i, $r->getNumCommande());
            $sheet->setCellValue('G'.$i, $r->getIdPer()->getNom());
            $i=$i+1;

        }

        // Create your Office 2007 Excel (XLSX Format)
        $writer = new Xlsx($spreadsheet);

        // Create a Temporary file in the system
        $fileName = 'liste_reclamations.xlsx';
        $temp_file = tempnam(sys_get_temp_dir(), $fileName);

        // Create the excel file in the tmp directory of the system
        $writer->save($temp_file);

        // Return the excel file as an attachment
        return $this->file($temp_file, $fileName, ResponseHeaderBag::DISPOSITION_INLINE);

    }


}

<?php

namespace App\Controller;

use App\Entity\Contrat;
use App\Entity\Personnel;
use App\Form\ContratType;
use App\Repository\ContratRepository;
use App\Repository\PersonnelRepository;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\PieChart;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Dompdf\Dompdf;
use Dompdf\Options;
/**
 * @Route("/contrat")
 */
class ContratController extends AbstractController
{
    /**
     * @Route("/", name="app_contrat_index", methods={"GET"})
     */
    public function index(EntityManagerInterface $entityManager): Response
    {
        $contrats = $entityManager
            ->getRepository(Contrat::class)
            ->findAll();

        return $this->render('contrat/index.html.twig', [
            'contrats' => $contrats,
        ]);
    }

    /**
     * @Route("/new", name="app_contrat_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $contrat = new Contrat();
        $form = $this->createForm(ContratType::class, $contrat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($contrat);
            $entityManager->flush();

            return $this->redirectToRoute('app_contrat_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('contrat/new.html.twig', [
            'contrat' => $contrat,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_contrat_show", methods={"GET"})
     */
    public function show(Contrat $contrat): Response
    {
        return $this->render('contrat/show.html.twig', [
            'contrat' => $contrat,
        ]);
    }
    /**
     * @Route("/contrat/contrat/{nom}", name="app_contrat_per", methods={"GET"})
     */
    public function showper(Personnel $personnel): Response
    {
        return $this->render('personnel/showback.html.twig', [
            'personnel' => $personnel,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_contrat_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Contrat $contrat, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ContratType::class, $contrat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_contrat_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('contrat/edit.html.twig', [
            'contrat' => $contrat,
            'form' => $form->createView(),
        ]);
    }


    /**
     * @Route("/{id}", name="app_contrat_delete", methods={"POST"})
     */
    public function delete(Request $request, Contrat $contrat, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$contrat->getId(), $request->request->get('_token'))) {
            $entityManager->remove($contrat);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_contrat_index', [], Response::HTTP_SEE_OTHER);
    }
    /**
     * @Route("/contrat/back", name="app_contart_back", methods={"GET"})
     */
    public function indexback(EntityManagerInterface $entityManager): Response
    {
        $contrat = $entityManager
            ->getRepository(Contrat::class)
            ->findAll();

        return $this->render('contrat/backContart.html.twig', [
            'contrat' => $contrat,
        ]);
    }

    /**
     * @return \Symfony\Component\HttpFoundation\BinaryFileResponse
     * @throws \PhpOffice\PhpSpreadsheet\Writer\Exception
     * @Route ("/contrat/excel", name="contrat_excel")
     */
    public function excel(ContratRepository $repo)
    {
        $contrat=$repo->findAll();
        $spreadsheet = new Spreadsheet();

        /* @var $sheet \PhpOffice\PhpSpreadsheet\Writer\Xlsx\Worksheet */
        $sheet = $spreadsheet->getActiveSheet();
        $x=1;
        foreach ($contrat as $contrat) {
            $sheet->setCellValue('A'.$x, $contrat->getNom());
            $sheet->setCellValue('B'.$x, $contrat->getDatecontrat());
            $sheet->setCellValue('C'.$x, $contrat->getType());



            $sheet->setTitle("Contrat Personnel");
            $x++;
        }

        // Create your Office 2007 Excel (XLSX Format)
        $writer = new Xlsx($spreadsheet);

        // Create a Temporary file in the system
        $fileName = 'Contrat Personnel.xlsx';
        $temp_file = tempnam(sys_get_temp_dir(), $fileName);

        // Create the excel file in the tmp directory of the system
        $writer->save($temp_file);

        // Return the excel file as an attachment
        return $this->file($temp_file, $fileName, ResponseHeaderBag::DISPOSITION_INLINE);
    }

    /**
     * @param EvenementRepository $repository
     * @return Response
     * @Route ("/contrat/pdf",name="PDF")
     */
    public function PDF(ContratRepository $repository)
    {
        // Configure Dompdf according to your needs
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);

        // Retrieve the HTML generated in our twig file

        $voyage = $repository->findAll();
        // Load HTML to Dompdf
        $html = $this->renderView('contrat/pdf.html.twig',
            ['destination'=> $voyage]);

        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'landscape');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser (force download)
        $dompdf->stream("pdf.pdf", [
            "Attachment" => false
        ]);
    }
    /**
     * @Route("/contrat/calendar", name="booking_calendar", methods={"GET"})
     */
    public function calendar(): Response
    {
        return $this->render('contrat/calendar.html.twig');
    }
    /**
     * @Route("/contrat/stat", name="contrat_stat")
     */
    public function indexAction(){
        $repository = $this->getDoctrine()->getRepository(Contrat::class);
        $contrats = $repository->findAll();
        $em = $this->getDoctrine()->getManager();

        $rd=0;
        $qu=0;
        $x=0;
        $es=0;


        foreach ($contrats as $contrats)
        {
            if (  $contrats->getType()=='professionnel')  :

                $rd+=1;
            elseif ($contrats->getType()=='debutant'):

                $qu+=1;
            elseif ($contrats->getType()=='jeune'):

                $x+=1;
            else :
                $es +=1;

            endif;

        }


        $pieChart = new PieChart();
        $pieChart->getData()->setArrayToDataTable(
            [['Contrats', 'nombres'],
                ['professionnel',     $rd],
                ['debutant',      $qu],
                ['jeune',      $x]
            ]
        );
        $pieChart->getOptions()->setTitle('stat des contrats selon le type ');
        $pieChart->getOptions()->setHeight(500);
        $pieChart->getOptions()->setWidth(900);
        $pieChart->getOptions()->getTitleTextStyle()->setBold(true);
        $pieChart->getOptions()->getTitleTextStyle()->setColor('#009900');
        $pieChart->getOptions()->getTitleTextStyle()->setItalic(true);
        $pieChart->getOptions()->getTitleTextStyle()->setFontName('Arial');
        $pieChart->getOptions()->getTitleTextStyle()->setFontSize(20);

        return $this->render('personnel/stat.html.twig', array('piechart' => $pieChart));
    }
}

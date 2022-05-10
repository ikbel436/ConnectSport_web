<?php

namespace App\Controller;

use App\Entity\Magasin;
use App\Form\MagasinType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\MagasinRepository;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;

// Include PhpSpreadsheet required namespaces
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

/**
 * @Route("/magasin")
 */
class MagasinController extends AbstractController
{
    /**
     * @Route("/", name="app_magasin_index", methods={"GET"})
     */
    public function index(EntityManagerInterface $entityManager): Response
    {
        $user=$this->get('security.token_storage')->getToken()->getUser();

        $magasins = $entityManager
            ->getRepository(Magasin::class)
            ->findByIdps($user->getId());

        return $this->render('magasin/index.html.twig', [
            'magasins' => $magasins,
        ]);
    }

    /**
     * @Route("/new", name="app_magasin_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $magasin = new Magasin();
        $form = $this->createForm(MagasinType::class, $magasin);
        $form->handleRequest($request);
        $user=$this->get('security.token_storage')->getToken()->getUser();
        if ($form->isSubmitted() && $form->isValid()) {
            $magasin->setIdps($user);
            $entityManager->persist($magasin);
            $entityManager->flush();

            return $this->redirectToRoute('app_magasin_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('magasin/new.html.twig', [
            'magasin' => $magasin,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idm}", name="app_magasin_show", methods={"GET"})
     */
    public function show(Magasin $magasin): Response
    {
        return $this->render('magasin/show.html.twig', [
            'magasin' => $magasin,
        ]);
    }

    /**
     * @Route("/{idm}/edit", name="app_magasin_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Magasin $magasin, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(MagasinType::class, $magasin);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_magasin_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('magasin/edit.html.twig', [
            'magasin' => $magasin,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idm}", name="app_magasin_delete", methods={"POST"})
     */
    public function delete(Request $request, Magasin $magasin, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$magasin->getIdm(), $request->request->get('_token'))) {
            $entityManager->remove($magasin);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_magasin_index', [], Response::HTTP_SEE_OTHER);
    }


    /**
     * @Route("/magasin/back", name="app_magasin_back", methods={"GET"})
     */
    public function indexback(EntityManagerInterface $entityManager): Response
    {
        $magasins = $entityManager
            ->getRepository(Magasin::class)
            ->findAll();

        return $this->render('magasin/magasinback.html.twig', [
            'magasins' => $magasins,
        ]);
    }
    /**
     * @Route("/magasin/excel", name="Magasinexcel")
     */
    public function excel(   EntityManagerInterface $entityManager,MagasinRepository $repo)
    {
        //$user=$this->get('security.token_storage')->getToken()->getUser();

        $user=$this->get('security.token_storage')->getToken()->getUser();

        $magasin = $entityManager
            ->getRepository(Magasin::class)
            ->findByIdps($user->getId());
        //$magasin=$repo->findByIdps($user->getId());
        $spreadsheet = new Spreadsheet();

        /* @var $sheet \PhpOffice\PhpSpreadsheet\Writer\Xlsx\Worksheet */
        $sheet = $spreadsheet->getActiveSheet();
        $x=1;
        foreach ($magasin as $magasins) {
            $sheet->setCellValue('A'.$x, $magasins->getNom());
            $sheet->setCellValue('B'.$x, $magasins->getAdresse());
            $sheet->setCellValue('C'.$x, $magasins->getNombrebloc());


            $sheet->setTitle("Magasin");
            $x++;
        }

        // Create your Office 2007 Excel (XLSX Format)
        $writer = new Xlsx($spreadsheet);

        // Create a Temporary file in the system
        $fileName = 'Magasin.xlsx';
        $temp_file = tempnam(sys_get_temp_dir(), $fileName);

        // Create the excel file in the tmp directory of the system
        $writer->save($temp_file);

        // Return the excel file as an attachment
        return $this->file($temp_file, $fileName, ResponseHeaderBag::DISPOSITION_INLINE);
    }
}

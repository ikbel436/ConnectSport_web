<?php

namespace App\Controller;


use App\Entity\Categorie;
use App\Repository\ReclamationRepository;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\PieChart;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StatController extends AbstractController
{
    /**
     * @Route("/", name="indexback")
     */
    public function index(ReclamationRepository $repository,StatController $statController): Response
    {
        $pieChart = new PieChart();



        $pieChart->getData()->setArrayToDataTable( array(
            ['Task', 'Hours per Day'],
            ['Work',     30],
            ['temp libre',      70],
        ));

        $pieChart->getOptions()->setTitle('You still in work');
        $pieChart->getOptions()->setHeight(400);
        $pieChart->getOptions()->setWidth(400);
        $pieChart->getOptions()->getTitleTextStyle()->setColor('#07600');
        $pieChart->getOptions()->getTitleTextStyle()->setFontSize(25);


        return $this->render(':stat:teste.html.twig', array(
                'piechart' => $pieChart,
            )

        );
    }
}

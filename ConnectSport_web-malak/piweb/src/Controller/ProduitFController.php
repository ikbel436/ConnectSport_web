<?php

namespace App\Controller;
use App\Entity\Produit;
use App\Form\ProduitType;
use App\Repository\ProduitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\Form\Extension\Core\Type\FileType;


class ProduitFController extends AbstractController
{
    /**
     * @Route("/front", name="display_front")
     */
    public function index(): Response
    {
        return $this->render('front/index.html.twig', [
            'controller_name' => 'FrontController',
        ]);
    }

    /**
     * @Route("/produitfront", name="ev_front_aff")
     */

    function afficher(ProduitRepository $rep)
    {
         $produit = $rep->findall();
         return $this->render('front/produitfront.html.twig', [
             'tab' => $produit
         ]);

    }
   
}

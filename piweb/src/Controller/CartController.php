<?php

namespace App\Controller;

use App\Entity\Produit;
use App\Entity\Lcommande;
use App\Repository\ProduitRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/cart", name="cart_")
 */
class CartController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(SessionInterface $session, ProduitRepository $produitrep): Response
    {
        $panier = $session->get("panier",[]);

        // on fabrique les données

        $dataPanier = [];
        $total = 0;

        foreach ($panier as $id => $quantite){
            $produit = $produitrep->find($id);
            $dataPanier[] = [
                "produit" => $produit,
                "quantite" => $quantite
            ];
        }

        foreach($dataPanier as $item)
        {
            $totalItem = $item['produit']->getPrix() * $item['quantite'];
            $total += $totalItem ;
        }
        $quantitetotale = 0;
        foreach($dataPanier as $item)
        {
            $qtlItem = $item['quantite'];
            $quantitetotale += $qtlItem ;
        }

        return $this->render('cart/index.html.twig', [
            'elements' => $dataPanier,
            'total' => $total,
            'quantitetotale' => $quantitetotale
        ]);
    }
    /**
     * @Route("/add/{id}", name="add")
     */
    public function add(Produit $produit,ProduitRepository $rep, SessionInterface $session)
    {

        // On récupère le panier actuel
        $panier = $session->get("panier", []);
        $id= $produit->getIdP();


        if(!empty($panier[$id])){
            $panier[$id]++;
        }else{
            $panier[$id] = 1;
        }

        $session->set("panier", $panier);



        return $this->redirecttoRoute("cart_index");

    }


    /**
     * @Route("/remove/{id}", name="remove")
     */
    public function remove(Produit $produit, SessionInterface $session)
    {
        // On récupère le panier actuel
        $panier = $session->get("panier", []);
        $id= $produit->getIdP();

        if(!empty($panier[$id])){
            if($panier[$id]>1){
                $panier[$id]-- ;
            }else{
                unset($panier[$id]);
            }}


        $session->set("panier", $panier);

        return $this->redirecttoRoute("cart_index");
    }

    /**
     * @Route("/delete/{id}", name="delete")
     */
    public function delete(Produit $produit,ProduitRepository $rep , SessionInterface $session)
    {
        // On récupère le panier actuel
        $panier = $session->get("panier", []);
        $id= $produit->getIdP();

        if(!empty($panier[$id])){

            unset($panier[$id]);
        }

        // on sauvgarde dans la session
        $session->set("panier", $panier);



        return $this->redirecttoRoute("cart_index");
    }



    /**
     * @Route("/deleteall", name="deleteall")
     */
    public function deleteall( SessionInterface $session)
    {

        $session->remove("panier");

        return $this->redirecttoRoute("cart_index");
    }


}
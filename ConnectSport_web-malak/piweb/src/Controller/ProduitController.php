<?php

namespace App\Controller;

use App\Entity\Produit;
use App\Form\ProduitType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use App\services\QrCodeService;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ProduitRepository;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Dompdf\Dompdf;
use Dompdf\Options;
use Knp\Component\Pager\PaginatorInterface;
use MercurySeries\FlashyBundle\FlashyNotifier;

/**
 * @Route("/produit")
 */
class ProduitController extends AbstractController
{
    /**
     * @Route("/", name="app_produit_index", methods={"GET"})
     */
    public function index(EntityManagerInterface $entityManager ,ProduitRepository $produitRepository, PaginatorInterface $paginator, Request $request,FlashyNotifier $flashy): Response
    {
        $user=$this->get('security.token_storage')->getToken()->getUser();

        $donnes = $produitRepository->findByIdperso($user->getId());

        // $donnes = $produitRepository->findAll();
        $produits = $paginator->paginate(
            $donnes,
            $request->query->getInt('page', 1),
            4
        );

        return $this->render('produit/index.html.twig', [
            'produits' => $produits,
        ]);
    }

    /**
     * @Route("/new", name="app_produit_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $produit = new Produit();
        $form = $this->createForm(ProduitType::class, $produit);
        $form->handleRequest($request);
        $user=$this->get('security.token_storage')->getToken()->getUser();
        if ($form->isSubmitted() && $form->isValid()) {
//
            $file = $form->get("image")->getData();
            $fileName = $this->generateUniqueFileName() . '.' . $file->guessExtension();
            $file->move(
                $this->getParameter('$uploads'),
                $fileName);
           $produit->setimage($fileName);
           $em=$this->getDoctrine()->getManager();

           //
            $produit->setIdperso($user);
            $entityManager->persist($produit);
            $entityManager->flush();

            return $this->redirectToRoute('app_produit_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('produit/new.html.twig', [
            'produit' => $produit,
            'form' => $form->createView(),
        ]);
    }
    /**
     * @return string
     */
    private function generateUniqueFileName()
    {
        // md5() reduces the similarity of the file names generated by
        // uniqid(), which is based on timestamps
        return md5(uniqid());
    }

    /**
     * @Route("/{idp}", name="app_produit_show", methods={"GET"} , requirements={"idp":"\d+"})
     */
    public function show(Produit $produit): Response
    {
        return $this->render('produit/show.html.twig', [
            'produit' => $produit,
        ]);
    }

    /**
     * @Route("/{idp}/edit", name="app_produit_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Produit $produit, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ProduitType::class, $produit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_produit_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('produit/edit.html.twig', [
            'produit' => $produit,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idp}", name="app_produit_delete", methods={"POST"})
     */
    public function delete(Request $request, Produit $produit, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$produit->getIdp(), $request->request->get('_token'))) {
            $entityManager->remove($produit);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_produit_index', [], Response::HTTP_SEE_OTHER);
    }
    /**
     * @Route("/produit/fan", name="app_produit_fan", methods={"GET"})
     */
    public function index1(EntityManagerInterface $entityManager): Response
    {
        $produits = $entityManager
            ->getRepository(Produit::class)
            ->findAll();

        return $this->render('produit/fanproduit.html.twig', [
            'produits' => $produits,
        ]);
    }
     /**
      * @Route("/produit/back", name="app_produit_back", methods={"GET"})
      */
     public function index2(EntityManagerInterface $entityManager): Response
     {
         $produits = $entityManager
             ->getRepository(Produit::class)
             ->findAll();

         return $this->render('produit/backproduit.html.twig', [
             'produits' => $produits,
         ]);
     }



    /**
     * @Route("/s/searchProduit", name="searchProduit")
     */
    public function searchArticle(Request $request,NormalizerInterface $Normalizer,ProduitRepository $repository):Response
    {
//$repository = $this->getDoctrine()->getRepository(Article::class);
        $requestString=$request->get('searchValue');
        $produits = $repository->findByCritere($requestString);
        $jsonContent = $Normalizer->normalize($produits, 'json',['Groups'=>'produits:read']);
        $retour =json_encode($jsonContent);

        return new Response($retour);

    }


    /**
     * @Route("/list", name="produit_list", methods={"GET", "POST"})
     */
    public function list(ProduitRepository $produitRepository, Request $request): Response
    {
        // Configure Dompdf according to your needs
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);
        $png = file_get_contents("logo.png");
        $pngbase64 = base64_encode($png);
        $produit=$produitRepository->findAll();

        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('produit/list.html.twig', [
            'produits' => $produit,
            "img64" => $pngbase64

        ]);

        // Load HTML to Dompdf
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A3', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser (force download)
        $dompdf->stream("Produits.pdf", [
            "Attachment" => true
        ]);



    }


    /**
     * @Route("/produit/statistique", name="Produits_stats")
     */

    public function statistiques(Request $request , ProduitRepository $produitRep){
        $Produit= [];
        $Produit= $this->getDoctrine()->getRepository(Produit::class)->findAll();


        $categNom=[];
        $Produitcount=[];


        $checker=[];

        foreach($Produit as $produits ){

            if(in_array( $produits->getcategorie() , $checker) ){

            }else{
                $checker[]=$produits->getcategorie();
                $Produitsx=$produitRep->countbycategorie($produits->getcategorie());

                $categNom[]= $produits->getcategorie();
                $Produitscount[]= $Produitsx[0]['count'];

            }

        }



        return $this->render('produit/produitstat.html.twig',[
            'categNom'=>json_encode($categNom),
            'rolescount'=>json_encode($Produitscount),

        ]);
    }




    /**
     * @Route("/qr/{id}", name="qr")
     */
    public function qr($id,Request $request, QrCodeService $qrcodeService,EntityManagerInterface $entityManager): Response
    {
        $qrCode = null;
        $produit = $this->getDoctrine()
            ->getRepository(Produit::class)
            ->find($id);
        $url = 'nom: '.$produit->getNomP().' | ';
        $url = $url.'prix: '.$produit->getPrix().' | ';
        $url = $url.'categorie: '.$produit->getCategorie().' | ';


        $qrCode = $qrcodeService->qrcode($url);


        $form = $this->createForm(ProduitType::class);
        $form->handleRequest($request);


        $qrCode = $qrcodeService->qrcode($url);

        $produits = $entityManager
            ->getRepository(Produit::class)
            ->findAll();
        return $this->render('produit/fanproduit.html.twig', [
            'qrCode' => $qrCode ,
            'produits' =>$produits
        ]);
    }

    /**
     * @Route("/produit/tri", name="triNomProduits")
     */

    public function triNomProduits(ProduitRepository $produitRepository, PaginatorInterface $paginator, Request $request,FlashyNotifier $flashy): Response
    {
        $user=$this->get('security.token_storage')->getToken()->getUser();

        $donnes = $produitRepository->listOrderByNom($user->getId());
       $produits = $paginator->paginate(
           $donnes,
           $request->query->getInt('page', 1),
            4
       );
        $flashy->success('trie etablie!', 'http://your-awesome-link.com');
       return $this->render('produit/index.html.twig', [
            'produits' => $produits,
        ]);

   }

    /**
     * @Route("/produit/tri1", name="triPrix")
     */

    public function triPrix(ProduitRepository $produitRepository, PaginatorInterface $paginator, Request $request,FlashyNotifier $flashy): Response
    {   $user=$this->get('security.token_storage')->getToken()->getUser();


        $donnes = $produitRepository->listOrderByPrix($user->getId());
        $produits = $paginator->paginate(
            $donnes,
            $request->query->getInt('page', 1),
            4
        );
        $flashy->success('trie etablie!', 'http://your-awesome-link.com');
        return $this->render('produit/index.html.twig', [
            'produits' => $produits,
        ]);

    }

}

<?php

namespace App\Controller;

use App\Entity\Evenement;
use App\Entity\Reservation;
use App\Form\ReservationType;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Routing\Annotation\Route;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Twilio\Rest\Client;
//use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Mime\Email;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
/**
 * @Route("/reservation")
 */
class ReservationController extends AbstractController
{
    /**
     * @Route("/", name="app_reservation_index", methods={"GET"})
     */
    public function index(EntityManagerInterface $entityManager, Request $req, PaginatorInterface $paginator): Response
    {

        $user=$this->get('security.token_storage')->getToken()->getUser();

        $rev = $entityManager
            ->getRepository(Reservation::class)
            ->findAll();
        $reservations = $paginator->paginate(
            $rev, // Requête contenant les données à paginer (ici nos articles)
            $req->query->getInt('page', 1), // Numéro de la page en cours, passé dans l'URL, 1 si aucune page
            4 // Nombre de résultats par page

        );
        return $this->render('reservation/index.html.twig', [
            'reservations' => $reservations,
        ]);
    }

    /**
     * @Route("/new/{id}", name="app_reservation_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager,$id,MailerInterface $mailer): Response
    {
        $reservation = new Reservation();
        $idv=$this->getDoctrine()->getRepository(Evenement::class)->find($id);
        $form = $this->createForm(ReservationType::class, $reservation);
        $form->handleRequest($request);
        $user=$this->get('security.token_storage')->getToken()->getUser();

        if ($form->isSubmitted() && $form->isValid()) {
           /* $sid    = "AC8f0451690fa9c5464ad0e13b3e9170c2";
            $token  = "dd9b74d7bccf7c10257dea05fb0073e5";
            $twilio = new Client($sid, $token);

            $message = $twilio->messages
                ->create("+21653959045", // to
                    array(
                        "messagingServiceSid" => "MGd6e3d10f1992ef828d6f1bda55b42818",
                        "body" => "reservation avec succées"
                    )
                );

            print($message->sid);*/



            $nb=$idv->getNbparticipation()-1;
            $idv->setNbparticipation($nb);
            $reservation->setIdr($idv);
            $reservation->setIdf($user);
            $entityManager->persist($reservation);

            $entityManager->flush();
           /* $message = (new Email())
                ->from('ikbel.benmansour@esprit.tn')
                ->To('ikbel.benmansour@esprit.tn')
                ->subject('reservation ajouté')
                ->html(
                    "Hello,<br><br> reservation  ajouté: ",

                    'text/html'
                )
            ;
            $mailer->send($message);*/
            $mail = (new TemplatedEmail())
                ->from('ikbel.benmansour@esprit.tn')
                ->to('ikbel.benmansour@esprit.tn')
                ->subject('reservation ajouté')
                ->htmlTemplate('reservation/mail.html.twig')
                ->context([
                    'nomeve' => $idv->getNom(),
                    'nom'=>$reservation->getNom(),
                    'date'=>$idv->getDate(),
                    'nb'=>$idv->getNbparticipation(),
                    'lieu'=>$idv->getLieu()

                ]
                )
                //->getContext(['nom'=>$reservation->getNom()])
            ;

            $mailer->send($mail);



             return $this->redirectToRoute('event_fan', [], Response::HTTP_SEE_OTHER);

        }

        return $this->render('reservation/new.html.twig', [
            'reservation' => $reservation,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/", name="app_reservation_show", methods={"GET"})
     */
    public function show(Reservation $reservation): Response
    {
        return $this->render('reservation/show.html.twig', [
            'reservation' => $reservation,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_reservation_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Reservation $reservation, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ReservationType::class, $reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_reservation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('reservation/edit.html.twig', [
            'reservation' => $reservation,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_reservation_delete", methods={"POST"})
     */
    public function delete(Request $request, Reservation $reservation, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reservation->getId(), $request->request->get('_token'))) {
            $entityManager->remove($reservation);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_reservation_index', [], Response::HTTP_SEE_OTHER);
    }
    public function getData() :array
    {
        /**
         * @var $Reservation Resta[]
         */
        $list = [];

        $Use = $this->getDoctrine()->getRepository(Reservation::class)->findAll();

        foreach ($Use as $Resta) {
            $list[] = [
                $Resta->getId(),
                $Resta->getNom(),
                // $Resta->getRoles(),
                $Resta->getPrenom(),
                $Resta->getAge(),


            ];
        }
        return $list;
    }
    /**
     * @Route("/excel/export",  name="export")
     */
    public function export(Request  $request)
    {

        $spreadsheet = new Spreadsheet();

        $sheet = $spreadsheet->getActiveSheet();

        $sheet->setTitle("DataUser List");

        $sheet->getCell("A1")->setValue("ID");
        $sheet->getCell("B1")->setValue("nom");
        $sheet->getCell("C1")->setValue("Prenom");
        $sheet->getCell("D1")->setValue("age");




        $sheet->getColumnDimension("A")->setWidth(10);
        $sheet->getColumnDimension("B")->setWidth(10);
        $sheet->getColumnDimension("C")->setWidth(10);
        $sheet->getColumnDimension("D")->setWidth(10);



        $spreadsheet->getActiveSheet()->setAutoFilter(
            $spreadsheet->getActiveSheet()->calculateWorksheetDimension()
        );
        $sheet->fromArray($this->getData(), null, "A2", true);
        $writer = new Xlsx($spreadsheet);
        $writer->save("uploads/data.xlsx");

        $response = new BinaryFileResponse("uploads/data.xlsx");

        $disposition = $response->headers->makeDisposition(
            ResponseHeaderBag::DISPOSITION_ATTACHMENT,
            "data.xlsx"
        );

        $response->headers->set("Content-Disposition", $disposition);

        return $response;



    }
}

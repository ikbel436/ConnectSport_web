<?php

namespace App\Controller;

use App\Form\ContactpType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

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
}

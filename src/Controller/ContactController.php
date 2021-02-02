<?php

namespace App\Controller;

use App\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    public function index(Request $request, \Swift_Mailer $mailer)
    {
        $form = $this->createForm(ContactType::class);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $contact = $form->getData();

            // envoie de mail

            $message = (new \Swift_Message('Nouveau Contact'))
                // attribuer l'expediteur
                
                ->setFrom($contact['email'])
            
                // attribuer le destinataire
                ->setTo('mydailyfridge@gmail.com')
            
                // On créé le message
                ->setBody(
                    $this->renderView(
                        'emails/contact.html.twig', compact('contact')
                    ),
                    'text/html'
                )
            ;

                //On envoie le message
                $mailer->send($message);

                $this->addFlash('message', 'le message a bien été envoyé');
                
                return $this->redirectToRoute('contact');   
                
                dd($message);

        }


        return $this->render('contact/index.html.twig', [
            'contactForm' => $form->createView()
        ]);
    }
}

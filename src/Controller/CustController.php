<?php

namespace App\Controller;

use App\Entity\Ticket;
use App\Form\TicketFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
/**
 * @Route("/cust", name ="cust_View")
 */
class CustController extends AbstractController
{
    /**
     * @Route("/create", name ="cust_createTicket")
     */
    public function createTicket(Request $request)
    {
        $ticket = new Ticket();
        $form = $this->createForm(TicketFormType::class, $ticket);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $ticket->setTicketTitle($form->get('ticketTitle')->getData());
            $ticket->setStatus(0);
            $ticket->setLevel(0);
            $ticket->setCounter(0);
            $ticket->setPrioritylevel(0);
            $ticket->setDate($form->get('date')->getData());
            $ticket->setContent($form->get('content')->getData());


            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($ticket);
            $entityManager->flush();

            // do anything else you need here, like send an email





        }
        return $this->render('cust/ticketView.html.twig', [
            'ticketForm' => $form->createView(),
        ]);
    }

    /**
     * @Route("/", name="cust_index")
     */
    public function index()
    {
        return $this->render('cust/index.html.twig', [
            'controller_name' => 'CustController',
        ]);
    }
}

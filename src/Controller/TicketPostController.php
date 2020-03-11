<?php

namespace App\Controller;

use App\Entity\Ticket;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
class TicketPostController extends AbstractController
{
    /**
     * @Route("/ticket/post", name="ticket_post")
     */
    public function listAction()
    {
        $posts =  $this->getDoctrine()->getRepository(Ticket::class)->getTickets(0);
        return $this->render('ticket_post/index.html.twig', [
            'controller_name' => 'TicketPostController', 'posts' => $posts
        ]);
    }
}

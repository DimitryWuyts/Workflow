<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
/**
 * @Route("/guest", name="guest")
 */
class GuestController extends AbstractController
{
    /**
     * @Route("/", name="guest_index")
     */
    public function index()
    {
        return $this->render('guest/index.html.twig', [
            'controller_name' => 'GuestController',
        ]);
    }
}

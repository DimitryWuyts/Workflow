<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
/**
 * @Route("/cust")
 */
class CustController extends AbstractController
{
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

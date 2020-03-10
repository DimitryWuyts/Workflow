<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
/**
 * @Route("/agent/l1", name="agent_l1")
 */
class AgentL1Controller extends AbstractController
{
    /**
     * @Route("/", name="agent_l1_index")
     */
    public function index()
    {
        return $this->render('agent_l1/index.html.twig', [
            'controller_name' => 'AgentL1Controller',
        ]);
    }
}

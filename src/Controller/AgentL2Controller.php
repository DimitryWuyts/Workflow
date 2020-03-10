<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/agent/l2", name="agent_l2")
 */
class AgentL2Controller extends AbstractController
{
    /**
     * @Route("/", name="agent_l2_index")
     */
    public function index()
    {
        return $this->render('agent_l2/index.html.twig', [
            'controller_name' => 'AgentL2Controller',
        ]);
    }
}

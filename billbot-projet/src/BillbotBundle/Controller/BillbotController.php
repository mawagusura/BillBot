<?php

namespace BillbotBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class BillbotController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('BillbotBundle:Billbot:index.html.twig');
    }

    /**
     * @Route("/projet", name="projet")
     */
    public function projetAction(){
    	return $this->render('BillbotBundle:Billbot:projet.html.twig');
    }
}

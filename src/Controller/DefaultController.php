<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index()
    {
        return $this->render('default/index.html.twig');
    }

    /**
     * @Route("/alerts")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function alerts()
    {
        return $this->render('default/alerts.html.twig');
    }
    /**
     * @Route("/navbar")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function navbar()
    {
        return $this->render('default/navbar.html.twig');
    }


}
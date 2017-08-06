<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class StarterTemplateController extends Controller
{
    /**
     * @Route("/example/starter-template", name="starter_template_index")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index()
    {
       return $this->render('starter-template/index.html.twig');
    }
}
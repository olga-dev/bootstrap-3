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

    /**
     * @Route("/example/starter-template-about", name="starter_template_about")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function about()
    {
        return $this->render('starter-template/about.html.twig');
    }

    /**
     * @Route("/example/starter-template-contact", name="starter_template_contact")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function contact()
    {
        return $this->render('starter-template/contact.html.twig');
    }
}
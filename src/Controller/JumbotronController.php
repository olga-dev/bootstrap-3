<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Class JumbotronController
 * @package App\Controller
 */
class JumbotronController extends Controller
{
    /**
     * @Route("/example/jumbotron")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        return $this->render('jumbotron/index.html.twig');
    }
}

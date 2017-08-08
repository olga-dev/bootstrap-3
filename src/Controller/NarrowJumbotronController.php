<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class NarrowJumbotronController
 * @package App\Controller
 */
class NarrowJumbotronController extends Controller
{
    /**
     * @Route("/example/narrow-jumbotron", name="narrow_jumbotron_home")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function homeAction()
    {
        $content = [];
        for ($i = 0; $i < 10; $i++) {
            $item = new \stdClass();
            $item->head = 'Subheading';
            $item->text = 'Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.';
            $content[] = $item;
        }
        return $this->render(
            'narrow-jumbotron/home.html.twig',
            [
                'content' => $content
            ]
        );
    }

    /**
     * @Route("/example/narrow-jumbotron-about", name="narrow_jumbotron_about")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function aboutAction()
    {
        return $this->render('narrow-jumbotron/about.html.twig');
    }

    /**
     * @Route("/example/narrow-jumbotron-contact", name="narrow_jumbotron_contact")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function contactAction()
    {
        return $this->render('narrow-jumbotron/contact.html.twig');
    }

    /**
     * @Route("/example/narrow-jumbotron/signup", name="narrow_jumbotron_signup")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function signUpAction()
    {
        return $this->render('narrow-jumbotron/signup.html.twig');
    }
}

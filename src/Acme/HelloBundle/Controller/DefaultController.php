<?php

namespace Acme\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        die('ddd');
        return $this->render('AcmeHelloBundle:Default:index.html.twig', array('name' => $name));
    }
}

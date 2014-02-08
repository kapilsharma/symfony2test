<?php

namespace Ksi\Test\LmsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('KsiTestLmsBundle:Default:index.html.twig', array('name' => $name));
    }
}

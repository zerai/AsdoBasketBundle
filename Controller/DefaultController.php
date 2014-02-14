<?php

namespace Zlab\AsdoBasketBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ZlabAsdoBasketBundle:Default:index.html.twig', array('name' => $name));
    }
}

<?php

namespace Galaxy\InfoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name="InfoBundle")
    {
        return $this->render('GalaxyInfoBundle:Default:index.html.twig', array('name' => $name));
    }
}

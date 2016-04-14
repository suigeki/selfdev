<?php

namespace LAB\SelfdevBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('LABSelfdevBundle:Default:index.html.twig');
    }
}

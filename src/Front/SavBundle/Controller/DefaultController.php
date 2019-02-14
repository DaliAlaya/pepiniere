<?php

namespace Front\SavBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('FrontSavBundle:Default:index.html.twig');
    }
}

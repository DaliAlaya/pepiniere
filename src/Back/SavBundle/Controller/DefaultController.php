<?php

namespace Back\SavBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BackSavBundle:Default:index.html.twig');
    }
}

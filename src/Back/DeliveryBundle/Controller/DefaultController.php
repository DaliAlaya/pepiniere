<?php

namespace Back\DeliveryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BackDeliveryBundle:Default:index.html.twig');
    }
}

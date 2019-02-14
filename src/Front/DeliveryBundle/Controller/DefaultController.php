<?php

namespace Front\DeliveryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('FrontDeliveryBundle:Default:index.html.twig');
    }
}

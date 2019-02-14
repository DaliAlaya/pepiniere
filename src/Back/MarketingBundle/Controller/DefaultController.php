<?php

namespace Back\MarketingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BackMarketingBundle:Default:index.html.twig');
    }
}

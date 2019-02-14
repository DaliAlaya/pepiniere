<?php

namespace Front\MarketingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('FrontMarketingBundle:Default:index.html.twig');
    }
}

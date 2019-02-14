<?php

namespace Front\ProductBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@FrontProduct/Default/index.html.twig');
    }
}

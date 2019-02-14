<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
       if( $this->isGranted('ROLE_ADMIN'))

           return $this->render('default/index2.html.twig');



       if($this->isGranted('ROLE_USER'))
           return $this->render('default/index3.html.twig');

        return $this->render('default/index3.html.twig');



    }

    /**
     * @Route("/admin", name="admin")
     */
    public function indexAction2(Request $request)
    {
         if($this->isGranted('ROLE_ADMIN')) {
             return $this->render('default/index2.html.twig');
         }
         return $this->render('default/index.html.twig');





    }
    /**
     * @Route("/user", name="user")
     */
    public function indexAction3(Request $request)
    {
        $this->denyAccessUnlessGranted('ROLE_USER');


        return $this->render('default/index3.html.twig');


    }

}

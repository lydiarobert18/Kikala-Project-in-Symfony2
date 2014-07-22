<?php

namespace Xiaomei\XiaomeiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function homeAction()
    {   
        //$user=$this->getUser();
        //print_r($user);
        //$name=$user->getUsername();
        
        return $this->render('XiaomeiXiaomeiBundle:Default:home.html.twig');
    }
    public function legalAction()
    {
        return $this->render('XiaomeiXiaomeiBundle:Default:legal.html.twig');
    }
    public function aboutAction()
    {
        return $this->render('XiaomeiXiaomeiBundle:Default:about.html.twig');
    }
}

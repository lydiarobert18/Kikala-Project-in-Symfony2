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

        $coursRepository = $this->getDoctrine()->getRepository("XiaomeiXiaomeiBundle:Cours");
        $usersRepository = $this->getDoctrine()->getRepository("XiaomeiXiaomeiBundle:User");

       $nombrecours = $coursRepository->findcount();
       $nombrecours= $nombrecours[1];

        $nombreusers= $usersRepository->findcount();
        $nombreusers= $nombreusers[1];

        $params=array(
            "nombrecours"=> $nombrecours,
            "nombreusers"=> $nombreusers
            );
        
        return $this->render('XiaomeiXiaomeiBundle:Default:home.html.twig',$params);
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

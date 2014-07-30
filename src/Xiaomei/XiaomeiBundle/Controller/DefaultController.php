<?php

namespace Xiaomei\XiaomeiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Xiaomei\XiaomeiBundle\Entity\Cours;
use Xiaomei\XiaomeiBundle\Entity\Inscription;
use Xiaomei\XiaomeiBundle\Form\CoursType;
use \Datetime;
use Xiaomei\XiaomeiBundle\Form\RechercheCoursType;

class DefaultController extends Controller
{
    public function homeAction(Request $request)
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

//formualaire de recherche
       
       //methode 2: créer un formulaire sans class:
        // methode 1 : 

        $cours=new Cours();
        $form=$this->createForm(new RechercheCoursType,$cours);

        $form->handleRequest($request);
        
 
        if ($form->isValid()) {
            //getdata POST  generate url
            print_r($_POST);
            $duration=$_POST['xiaomei_xiaomeibundle_recherchecours']['duration'];
            $lieu=$_POST['xiaomei_xiaomeibundle_recherchecours']['lieu'];
            if(empty($lieu)){$lieu='all';}
            if(empty($duration)){$duration='all';}
            if(empty($category)){$category='1';}
            $category=$_POST['xiaomei_xiaomeibundle_recherchecours']['category'];
         return $this->redirect($this->generateUrl('xiaomei_xiaomei_showcoursall',array(
            'lieu'=>"$lieu",'duration'=>"$duration",'category'=>"$category")));  
           };
         
         $contentCreateFormView = $form->createView();


   //fin d'ajout formulaire      
        $params=array(
            "nombrecours"=> $nombrecours,
            "nombreusers"=> $nombreusers,
            "recherche" => $contentCreateFormView,
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

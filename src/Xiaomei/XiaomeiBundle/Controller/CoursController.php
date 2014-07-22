<?php

namespace Xiaomei\XiaomeiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Xiaomei\XiaomeiBundle\Entity\Cours;
use Symfony\Component\HttpFoundation\Request;
use Xiaomei\XiaomeiBundle\Form\CoursType;
use \Datetime;
use \time;
use \strtotime;


class CoursController extends Controller

{   


    public function ordersubmitAction(Request $request)
    {
        $defaultData = array();

        $form = $this->createFormBuilder($defaultData)
       // ->setAction($this->generateUrl('target_route'))
         ->setMethod('GET')
         ->add('order', 'choice', array(
         'choices' => array('c.categorie.name' => 'Category', 'c.lieu' => 'lieu de formation','c.nrPlaceReste' => 'places restantes')))
         ->add('ok','submit')
         ->getForm();
      $form->handleRequest($request);

        if ($form->isValid()) {
            // Les données sont un tableau avec les clés "name", "email", et "message"
            $data = $form->getData();
        }    
           
          print_r($data);
        //$contentCreateForm = $this->createForm(new CoursType, $content);

 
         $contentCreateFormView1 = $form->createView();

        $params2 = array(
            "order" => $contentCreateFormView1
        );
        // ... affiche le formulaire
        return $this->render('XiaomeiXiaomeiBundle:Cours:order.html.twig',$params2);
    }
   
   /* public function showtriAction(){
            $request=$this->getRequest();
            $tri=$request->query->get ('form[order]'); 
            echo $tri ;
            die(); 
           // $this->generateUrl("xiaomei_xiaomei_showcoursall");


    }*/
    
    public function showcoursAction($tri=null,Request $request)
    {
       $contentRepository = $this->getDoctrine()->getRepository("XiaomeiXiaomeiBundle:Cours");
       
        //récupère tous les contenus de la table, avec tri et limit
        $contents = $contentRepository->findHomeContents($tri=null);
        
        //$daydifference=(time()-strtotime($this->birthday))/(24*60*60);
           

// début 
    $defaultData = array();

        $form = $this->createFormBuilder($defaultData)
         //->setAction($this->generateUrl('xiaomei_xiaomei_showtri'))
         ->setMethod('GET')
         ->add('order', 'choice', array(
         'choices' => array('c.categorie.name' => 'Category', 'c.lieu' => 'lieu de formation','c.nrPlaceReste' => 'places restantes')))
         ->add('ok','submit')
         ->getForm();
         $form->handleRequest($request);

       


        if ($form->isValid()) {
            // Les données sont un tableau avec les clés "name", "email", et "message"
            $data = $form->getData();
        }

             //print_r($data);         
            //Array ( [order] => c.categorie.name )
            //echo $data['order'];
    
            
            

        //$contentCreateForm = $this->createForm(new CoursType, $content);

 
         $contentCreateFormView1 = $form->createView();

        $params2 = array(
            "order" => $contentCreateFormView1,
              "contents" => $contents,

        );
        // ... affiche le formulaire
        return $this->render('XiaomeiXiaomeiBundle:Cours:cours.html.twig',$params2);
//fin 
    }
    
     public function showcourAction($id){

       $contentRepository = $this->getDoctrine()->getRepository("XiaomeiXiaomeiBundle:Cours");
        
        //récupère l'objet Content dont l'id est égal à celui dans l'url
        $content = $contentRepository->findFullSingleContent($id);

        //shoote ça à la vue
        $params = array(
            "content" => $content
        );
        return $this->render('XiaomeiXiaomeiBundle:Cours:cours_show.html.twig', $params);

     }

     public function createcoursAction(Request $request){
        //session user id,username
        $content=new Cours();
        $contentCreateForm = $this->createForm(new CoursType, $content);
        $contentCreateForm->handleRequest($request);

        if ($contentCreateForm->isValid()){
            $place=$content->getNrPlaceTotal();
            $content->setNrPlaceRestant($place);



            $content->setDateCreated(new DateTime());
         //$content->setPsydoformateur(session user username);

            //récupération du manager pour sauvegarder l'entity
            $em = $this->getDoctrine()->getManager();
            $em->persist( $content );
            $em->flush();

        }

        //crée la "vue" du formulaire, à passer dans render()
        $contentCreateFormView = $contentCreateForm->createView();

        $params = array(
            "ccfv" => $contentCreateFormView
        );

        return $this->render('XiaomeiXiaomeiBundle:Cours:createcours.html.twig', $params);
     }

     
     public function registercoursAction($id){
 
     //condition crédit est bon 
    //condition déja login:$_Session(login)=true;  {% if app.user %}

    //resultat: table intermédiare cours-user: une ligne de plus 
    //resultat: débiter dans nombrecrédit de l'inscripteur
    //resultat: créditer dans nombrecrédit de formateur: 
    $params = array(
            "content" => $id
        );
    return $this->render('XiaomeiXiaomeiBundle:Cours:register.html.twig',$params);

    }

    public function registercoursconfirmerAction($id){
     //condition déja login:$_Session(login)=true;  {% if app.user %}:déja fait
     //condition crédit est bon :
    //faire une requete du nombre crédit de la personne ; $nombreCredit
            // $user = $this->getDoctrine()->getRepository("XiaomeiXiaomeiBundle:User");
            // $userSession = $user->findOneByName($name);??
            // $nombreCredit=$userName->getNombreCredit();
      
    //faire la différence entre nombre crédit et nombrekiko de la formation :durée d'heures
     //$id est id du cours, on sait la durée

            // $cours = $this->getDoctrine()->getRepository("XiaomeiXiaomeiBundle:Cours");
            // $coursid = $cours->findOneById($id);
            // $duration=$coursid->getDuration();
             //$NrPlaceRestant=$coursid->getNrPlaceRestant();



    // if (($nombreCredit-$duration)>=0) then le reste: 
    //resultat: table intermédiare cours-user: deux ligne de plus
    // id cours id user statut (stagiaire)

            $userSession->addcours($coursid);
    //????ajouter  statut stagiaire ????


   //id cours  id user(psydoformateur du cours);statut (enseignant)
       
    //resultat: débiter dans nombrecrédit de l'inscripteur (deja fait en haut)
      //nombrecredit-=$durée

    //resultat: créditer dans nombrecrédit de formateur: ()
    //nombreCredit+=$durée

   //update $NrPlaceRestant-1 dans Cours.php:
    

    return $this->render('XiaomeiXiaomeiBundle:Cours:registerok.html.twig');

    }



}


    



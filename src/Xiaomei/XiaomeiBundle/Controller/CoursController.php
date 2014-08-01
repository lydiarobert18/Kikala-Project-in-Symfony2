<?php

namespace Xiaomei\XiaomeiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Xiaomei\XiaomeiBundle\Entity\Cours;
use Xiaomei\XiaomeiBundle\Entity\Inscription;
use Symfony\Component\HttpFoundation\Request;
use Xiaomei\XiaomeiBundle\Form\CoursType;
use \Datetime;
use \time;
use \strtotime;


class CoursController extends Controller

{   

  /*  public function ordersubmitAction(Request $request)
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
   */
       public function showtriAction(){
          
            //print_r($_POST);
            $tri=$_POST['form']['order'];
             /*$request=$this->getRequest();
            $form=$request->query->get('form'); */
        
         
           // Array ( [form] => Array ( [order] => c.lieu [ok] => [_token] => drjgPLARQ6qb2GUTJkSfgnWyk08o0bBRJO7LUmhxPGM ) )
         return $this->redirect($this->generateUrl('xiaomei_xiaomei_showcoursall',array('tri'=>"$tri")));  
       }
    

    public function showcoursAction($tri,$page,$lieu,$duration,$keyword,$category,Request $request)
    {
       $contentRepository = $this->getDoctrine()->getRepository("XiaomeiXiaomeiBundle:Cours");
       
        //récupère tous les contenus de la table, avec tri et limit
        $contents = $contentRepository->findHomeContents_essai($tri,$page,$lieu,$duration,$keyword,$category);
         //\Doctrine\Common\Util\Debug::dump($contents);

        $count=$contentRepository->countcourspage($lieu,$duration,$keyword,$category);
        //print_r($count[0][1]);
       
        $count=$count[0][1];
        $nombrepage=$count/5;
        
        $dateactuelle=new Datetime();


// début 
    $defaultData = array();

        $form = $this->createFormBuilder($defaultData)
         //->setAction($this->generateUrl('xiaomei_xiaomei_showtri'))
         //->setMethod('GET')
         ->add('order', 'choice', array(
         'choices' => array('cat.name' => 'Category', 'c.lieu' => 'lieu de formation','c.nrPlaceRestant' => 'places restantes')))
         ->add('ok','submit')
         ->getForm();
         $form->handleRequest($request);

  
        if ($form->isValid()) {
            // Les données sont un tableau avec les clés "name", "email", et "message"
            $data = $form->getData();
            $tri=$data['order'];
           return $this->redirect($this->generateUrl('xiaomei_xiaomei_showcoursall',
            array('lieu'=>"$lieu",'duration'=>"$duration",'category'=>"$category",'keyword'=>$keyword,'tri'=>$tri)));  

        }

             //print_r($data);         
            //Array ( [order] => c.categorie.name )
            //echo $data['order'];
        

        //$contentCreateForm = $this->createForm(new CoursType, $content);

 
         $contentCreateFormView1 = $form->createView();

        $params2 = array(
            "order" => $contentCreateFormView1,
            'tri'=>$tri,
              "contents" => $contents,
              'page'=>$page,
              'lieu'=>$lieu,
              'duration'=>$duration,
              'category' =>$category,
              'nombrepage' =>$nombrepage,
              'keyword'=>$keyword
            //  "daydifference" =>$daydifference

        );
        // ... affiche le formulaire
        return $this->render('XiaomeiXiaomeiBundle:Cours:cours.html.twig',$params2);
//fin 
    }
    
     public function showcourAction($id){

        $contentRepository = $this->getDoctrine()->getRepository("XiaomeiXiaomeiBundle:Cours");
        $InscriptionRepository=$this->getDoctrine()->getRepository("XiaomeiXiaomeiBundle:Inscription");
        //si user est connecté et non inscrit à la formation 
          $user=$this->getUser();
        //if ($user==true && $dejainscrit=false  )    
         $dejainscrit=$InscriptionRepository->findFullSingleContent($user,$id);
         $dejainscrit= $dejainscrit[1];
   
        //récupère l'objet Content dont l'id est égal à celui dans l'url
        $content = $contentRepository->findFullSingleContent($id);
        $inscriptions= $content->getInscription();
        $arrayuserid=[];

         //recupérer  array id des users inscrits dans cette formation;
         foreach( $inscriptions as $inscription){
          $user=$inscription->getUser();
          $userid=$user->getID();
          $arrayuserid[]=$userid;   
          } ;

          //print_r($arrayuserid); 


        
    
        // passe cet array id users comme paramètre dans la function coursrecommendation($arrayuserid)
          $courscounts = $InscriptionRepository->coursrecommendation($arrayuserid);
         //  print_r($courscounts );

           $arraycoursid=[];
           foreach($courscounts as $courscount){
            $arraycoursid[]=$courscount['id'];
           };
             
            //print_r($arraycoursid);
           
           
          //il faut supprimer le premer $content2[0], avec array_pop;ensuite il faut recomposer un array avec seulement la clé idcours
          //il faut stocker dans la table cours  un champs array cours_rec_id;(option)
          //il faut ensuite écrire une méthode cours_rec_afficher($arraycoursid);
           $cours_rec_resulats=$contentRepository->cours_rec_afficher($arraycoursid);
           
         
          //avec cette fonction, doit sortir $content qui est sous objet tous les cours ,
          //dans twig, on fait boucle et on affiche tout ; 
    
        //shoote ça à la vue
         $params = array(
            "content" => $content,
            "dejainscrit" => $dejainscrit,
            "connected"=>$user,
             "cours_rec_resulats"=> $cours_rec_resulats
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
            $content->setIsannulation(false);
            $content->setDateCreated(new DateTime());
            $user= $this->getUser();
            $content->setUser($user);

            //récupération du manager pour sauvegarder l'entity
            $em = $this->getDoctrine()->getManager();
            $em->persist( $content );
            $em->flush();
            return $this->redirect($this->generateUrl('xiaomei_xiaomei_showcoursall'));


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
//pas encore fait la condition de crédit pour qu'il puisse pouvoir s'inscrire 
//pas encore fait comment empecher s'inscrire 2 fois 
          /* $user = $this->getDoctrine()->getRepository("XiaomeiXiaomeiBundle:User");
           $userSession = $user->findOneByName($name);??
            $nombreCredit=$user->getNombreCredit();*/
      
      //pour avoir user session connecté et son crédit 
              $user=$this->getUser();
              $nombrecredit= $user->getNombreCredit();

              //requete avec $id pour avoir $cours;
            
              $coursRepo= $this->getDoctrine()->getRepository("XiaomeiXiaomeiBundle:Cours");
              $cours = $coursRepo->findOneById($id);
              $creditcours=$cours->getDuration();
              $nombreplacerestant=$cours->getNrPlaceRestant();

              //comment avoir nombrecredit de créateur du cours
              $createur=$cours->getUser();
              $nombrecredit_createur=$createur->getNombreCredit();
              
               $userID=$user->getID();
               $createurID=$createur->getID(); 
     // nombreReste>0  ; and if je ne suis pas déja inscrit;  && $nombreplacerestant >0 faut mettre ailleurs
            if( $userID!==$createurID ){
             if($nombrecredit >=$creditcours && $nombreplacerestant >0 ){
              $content=new Inscription();
              $content->setUser($user);

             $content->setDateInscription(new DateTime());
             $content->setIsannulation(false);
              $content->setCours($cours);

            //récupération du manager pour sauvegarder l'entity
            $em = $this->getDoctrine()->getManager();
            $em->persist( $content );
            $em->flush();

            //Update: nombrecrédit dans User moins-durée de cours: nombreplacerestant dans user moins-1
            //update: nombrecrdit dans user autre ID  + durée de cours:
            $cours->setNrPlaceRestant( $nombreplacerestant-1);
            $user->setNombreCredit($nombrecredit-$creditcours);
            $createur->setNombreCredit($nombrecredit_createur+$creditcours);
            $em->flush();
    
          return $this->render('XiaomeiXiaomeiBundle:Cours:inscriptionreussi.html.twig');}
           elseif( $nombrecredit < $creditcours)

              {return $this->render('XiaomeiXiaomeiBundle:Cours:pasdecredit.html.twig');
             }
          else

          {return $this->render('XiaomeiXiaomeiBundle:Cours:pasdeplace.html.twig');
         };
     }
     else{
        return $this->render('XiaomeiXiaomeiBundle:Cours:pasderepetition.html.twig');;
     }

 
    }

    
    public function cancelinscriptionsAction($id){
      $insRepository = $this->getDoctrine()->getRepository("XiaomeiXiaomeiBundle:Inscription");
      $inscription= $insRepository ->find($id);         
       $inscription->setIsannulation(true);
       $inscription->setDateCancellation(new Datetime());

//trouver $cours
       $coursRepository = $this->getDoctrine()->getRepository("XiaomeiXiaomeiBundle:Cours");
       $cours=$inscription->getCours();
       $coursid=$cours->getID();
       $cours= $coursRepository ->find($coursid);      

        $em = $this->getDoctrine()->getManager();      

                $em->persist( $inscription );
                
                $em->flush();
   
      //  //trafic de score : $scorerecuperer=$duration coursid/2   dans user
     //$scoreperdu=$duraton coursid/2 dans cours
             $creditcours=$cours->getDuration();
             $creditcours=$creditcours/2;

             $user=$inscription->getUser();
             $nombrecredit= $user->getNombreCredit();
             $user->setNombreCredit($nombrecredit+$creditcours);
           
            $createur= $cours->getUser();
            $nombrecredit_createur=$createur->getNombreCredit();
            $createur->setNombreCredit($nombrecredit_createur-$creditcours);
            $em->flush();
              
       return $this->redirect($this->generateUrl('xiaomei_xiaomei_moncompte'));
}

   public function cancelcoursAction($id){
       $coursRepository = $this->getDoctrine()->getRepository("XiaomeiXiaomeiBundle:Cours");
       $cours= $coursRepository ->find($id);         
       $cours->setIsannulation(true);
       $cours->setDateCancellation(new Datetime());

        $em = $this->getDoctrine()->getManager();      

                $em->persist( $cours );
                
                $em->flush();
   

      //  //trafic de score : rendre les scores duration à tous les inscrits ;
        //perdre duration *nombre d'inscrits:

             $creditcours=$cours->getDuration();
             
            $inscriptions=$cours->getInscription();
            $count=count($inscriptions);
            $user=$cours->getUser();
            $creditactuel=$user->getNombreCredit(); 
            $user->setNombreCredit( $creditactuel-$count*$creditcours);


              //une boucle : chaque inscrit recoit $nombrecredit dans son crédit actuelle:
           $inscriptions=$cours->getInscription();
           

         foreach($inscriptions as $key => $inscription){
             $user= $inscription->getUser() ;
             $NombreCredit=$user->getNombreCredit(); 
             $user->setNombreCredit( $NombreCredit+$creditcours);
          }

            
             
             $em->flush();
              
       return $this->redirect($this->generateUrl('xiaomei_xiaomei_moncompte'));

   }

       



}



<?php 

namespace Xiaomei\XiaomeiBundle\Controller;

use abeautifulsite\SimpleImage;
//use Symfony\vendor\abeautifulsite\SimpleImage;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Util\SecureRandom;
use Symfony\Component\Security\Core\SecurityContext;

use Xiaomei\XiaomeiBundle\Entity\User;

use \DateTime;

use Xiaomei\XiaomeiBundle\Form\RegisterType;
use Xiaomei\XiaomeiBundle\Form\ModifierType;

class UserController extends Controller
{

public function loginAction()
    {
        $request = $this->getRequest();
        $session = $request->getSession();
        // get the login error if there is one
        if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
        } else {
            $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
            $session->remove(SecurityContext::AUTHENTICATION_ERROR);
        }
        return $this->render('XiaomeiXiaomeiBundle:User:login.html.twig', array(
            // last username entered by the user
            'last_username' => $session->get(SecurityContext::LAST_USERNAME),
            'error'         => $error,
        ));
        //return $this->redirect( $this->generateUrl('xiaomei_xiaomei_showcoursall');

    }



public function formateurAction($id)
    {
        $contentRepository = $this->getDoctrine()->getRepository("XiaomeiXiaomeiBundle:User");

        $content = $contentRepository->findFullSingleContent($id);
        
        //shoote ça à la vue
        $params = array(
            "content" => $content
        );

        
        return $this->render("XiaomeiXiaomeiBundle:User:formateur.html.twig",$params);
    }

//comment stocker dès inscription user name et id de la personne?
public function moncompteAction()
    {
        $contentRepository = $this->getDoctrine()->getRepository("XiaomeiXiaomeiBundle:User");
        
        $iduser=$this->getUser()->getID();
      
        $content = $contentRepository->findFullSingleContent($iduser);
        
        //shoote ça à la vue
        $params = array(
            "content" => $content
        );

        
        return $this->render("XiaomeiXiaomeiBundle:User:moncompte.html.twig",$params);
    }




public function mesformationsAction(){

        $contentRepository = $this->getDoctrine()->getRepository("XiaomeiXiaomeiBundle:User");
        
        $iduser=$this->getUser()->getID();
      
        $content = $contentRepository->findFullSingleContent($iduser);

        $params = array(
            "contents" => $content
         );

        

        return $this->render("XiaomeiXiaomeiBundle:User:mesformations.html.twig",$params);
}

public function mesinscriptionsAction(){
        $contentRepository = $this->getDoctrine()->getRepository("XiaomeiXiaomeiBundle:User");
        
        $iduser=$this->getUser()->getID();
      
        $content = $contentRepository->findFullSingleContent($iduser);

        $params = array(
            "contents" => $content
         );

  
        return $this->render("XiaomeiXiaomeiBundle:User:mesinscriptions.html.twig",$params);
}
     


public function registerAction(Request $request){
        $user=new User();
        $register_form=$this->createForm(new RegisterType,$user);
        $register_form->handleRequest($request);

        if($register_form->isValid()){
       //il manque un role 

// photo reçue

         $file = $user->getFile();
         print_r($file);
         $filename=$file->getPathName();
        // $filename="C:/xampp/tmp/".$filename;

         print_r($filename);
   
         //print_r($file['tmp_name']);
        


//      donnner nouveau nom et move et web/uploads
        $dir = $this->get('kernel')->getRootDir() . '/../web/uploads';
        $extension = $file->guessExtension();
        //pour que le newname soit unique et aussi random; 
        $newFilename = base64_encode(microtime()).'.'.$extension;

       
//simpleimage


            $img = new SimpleImage($filename);

            //medium image
            $img->best_fit(400, 400)->save($dir.'/medium/'.$newFilename);
 
            //thumbnails 
            $img->thumbnail(150)->save($dir.'/thumbnails/'.$newFilename);
           
            //original
           // move_uploaded_file($tmp_name, 'uploads/img/originals/'.$newFilename);

 //original
             $file->move($dir.'/original/', $newFilename);
             $user->setPhoto($newFilename);

//
        $user->setIsActive(true);
        $user->setDateRegistered(new Datetime());
        $user->setNombreCredit(2);


        //salt
        $generator = new SecureRandom();
        $salt = bin2hex($generator->nextBytes(40));
        /*echo $random;
        die();*/
         $user->setSalt($salt);

         //token
         $token = bin2hex($generator->nextBytes(40));
       
         $user->setToken($token);


        //password
        $factory = $this->get('security.encoder_factory');
        $encoder = $factory->getEncoder($user);
        $password = $encoder->encodePassword($user->getPassword(), $user->getSalt());
        $user->setPassword($password);

        //notre utilisateur est un "user"
            //on récupère le role depuis la base
            //pour avoir réellement une entité de Role
            $roleRepo = $this->getDoctrine()->getRepository("XiaomeiXiaomeiBundle:Role");
            $role = $roleRepo->findOneByName("ROLE_USER");

            //et on l'affecte à notre user
            $user->addRole($role);

        $em=$this->getDoctrine()->getManager();
        
        $em->persist($user);
        $em->flush();
        }
        //print_r($user);

        $params=array(
            "register_form"=>$register_form->createView()
            );

   return $this->render("XiaomeiXiaomeiBundle:User:register.html.twig",$params);
  }


   
    public function modifierprofilAction(Request $request){
    //update les contenus; on peut tout modifier sauf email ;
        $user=$this->getUser();
         $photo=$user->getPhoto();
        $register_form=$this->createForm(new ModifierType,$user);
        $register_form->handleRequest($request);
       
        if($register_form->isValid()){

        //remettre photo
        $file = $user->getFile();
         print_r($file);
         $filename=$file->getPathName();

        // $filename="C:/xampp/tmp/".$filename;

    /*    $file:Symfony\Component\HttpFoundation\File\UploadedFile Object ( [test:Symfony\Component\HttpFoundation\File\UploadedFile:private] => 
        [originalName:Symfony\Component\HttpFoundation\File\UploadedFile:private] => 014c674.jpg 
        [mimeType:Symfony\Component\HttpFoundation\File\UploadedFile:private] => image/jpeg 
        [size:Symfony\Component\HttpFoundation\File\UploadedFile:private] => 9356 
        [error:Symfony\Component\HttpFoundation\File\UploadedFile:private] => 0 
        [pathName:SplFileInfo:private] => C:\xampp\tmp\php7A9B.tmp [fileName:SplFileInfo:private] =>
         php7A9B.tmp ) C:\xampp\tmp\php7A9B.tmp*/

//      donnner nouveau nom et move et web/uploads
        $dir = $this->get('kernel')->getRootDir() . '/../web/uploads';
        $extension = $file->guessExtension();
        //pour que le newname soit unique et aussi random; 
        $newFilename = base64_encode(microtime()).'.'.$extension;
       

       
//simpleimage


            $img = new SimpleImage($filename);

            //medium image
            $img->best_fit(400, 400)->save($dir.'/medium/'.$newFilename);
 
            //thumbnails 
            $img->thumbnail(150)->save($dir.'/thumbnails/'.$newFilename);
           
            //original
           // move_uploaded_file($tmp_name, 'uploads/img/originals/'.$newFilename);

 //original
             $file->move($dir.'/original/', $newFilename);
             $user->setPhoto($newFilename);

//photo actuelle avant modif dans la base de données:
         

    //finir remettre photo
    
        $em=$this->getDoctrine()->getManager();
        
        $em->persist($user);
        $em->flush();
        }
        //print_r($user);

        $params=array(
            "register_form"=>$register_form->createView(),
            "photoshow" => $photo
            );

        return $this->render("XiaomeiXiaomeiBundle:User:modifierprofil.html.twig",$params);
    }


 }
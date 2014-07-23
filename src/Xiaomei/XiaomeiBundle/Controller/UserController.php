<?php 

namespace Xiaomei\XiaomeiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Util\SecureRandom;
use Symfony\Component\Security\Core\SecurityContext;

use Xiaomei\XiaomeiBundle\Entity\User;

use \DateTime;

use Xiaomei\XiaomeiBundle\Form\RegisterType;

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



public function formateurAction($username)
    {
        $contentRepository = $this->getDoctrine()->getRepository("XiaomeiXiaomeiBundle:User");
        
        $content = $contentRepository->findFullSingleContent($username);
        
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


public function registerAction(Request $request){
        $user=new User();
        $register_form=$this->createForm(new RegisterType,$user);
        $register_form->handleRequest($request);

        if($register_form->isValid()){
       //il manque un role 



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


// public function modifierprofilAction(Request $request){
//     //update les contenus; on peut tout modifier sauf email ;

      
//         $em=$this->getDoctrine()->getManager();
        
//         $em->persist($user);
//         $em->flush();
//         }
       

//         $params=array(
//             "register_form"=>$register_form->createView()
//             );

//         return $this->render("XiaomeiXiaomeiBundle:User:modifierprofil.html.twig",$params);
//     }


 }
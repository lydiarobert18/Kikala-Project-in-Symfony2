<?php

namespace Xiaomei\XiaomeiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\EquatableInterface;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;
 
/**
 * User
 *
 * @ORM\Table("xiaomei_user")
 * @ORM\Entity(repositoryClass="Xiaomei\XiaomeiBundle\Entity\UserRepository")
 * @UniqueEntity("username")
 */
class User implements UserInterface, EquatableInterface, \Serializable
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     * @Assert\NotBlank(message="Le username ne peut pas être vide !")
     *
     * @ORM\Column(name="username", type="string", length=255)
     */
    private $username;

    /**
     * @var string
     * @Assert\Email(
     *     message = "'{{ value }}' n'est pas un email valide.",
     *     checkMX = true
     * )
     * @Assert\NotBlank(message="Le email ne peut pas être vide !")
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     * @Assert\NotBlank(message="Le name ne peut pas être vide !")
     */
    private $name;

     
    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=255)
     * @Assert\NotBlank(message="Le firstname ne peut pas être vide !")
     */
    private $firstname;
   
    
    
    /**
     * @var integer
     *
     * @ORM\Column(name="nombreCredit", type="integer")
     */
    private $nombreCredit;



    /**
     * @var \DateTime
     *
     * @ORM\Column(name="birthyear", type="datetime")
     * @Assert\NotBlank(message="Le birthyear ne peut pas être vide !")
     */
    private $birthyear;

    /**
     * @var string
     *
     * @ORM\Column(name="sex", type="string")
     * @Assert\NotBlank(message="Le sex ne peut pas être vide !")
     */
    private $sex;

    /**
     * @var string
     *
     * @ORM\Column(name="metier", type="text")
     */
    private $metier;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptif_formateur", type="text")
     */
    private $descriptifFormateur;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptif_etudiant", type="text")
     */
    private $descriptifEtudiant;

    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="string", length=255)
     */
    private $photo;

    /**
     * @var string
     *
     * @ORM\Column(name="salt", type="string", length=255)
     */
    private $salt;

    /**
     * @var string
     *
     * @ORM\Column(name="token", type="string", length=255)
     */
    private $token;

    /**
     * @var boolean
     *
     * @ORM\Column(name="isActive", type="boolean")
     */
    private $isActive;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateRegistered", type="datetime")
     */
    private $dateRegistered;



     /**
    *  @var \Doctrine\Common\Collections\ArrayCollection
    *  
    * @ORM\ManyToMany(targetEntity="Role")
    */
     private $roles;


     /**
    *  @var \Doctrine\Common\Collections\ArrayCollection
    *  
    * @ORM\OneToMany(targetEntity="Cours",mappedBy="user")
    */
     private $cours;

  
      /**
    *  @var \Doctrine\Common\Collections\ArrayCollection
    *  
    * @ORM\OneToMany(targetEntity="Inscription",mappedBy="user")
    */
     private $inscription;





    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set pseudo
     *
     * @param string $pseudo
     * @return User
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get pseudo
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return User
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     * @return User
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string 
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set birthyear
     *
     * @param \DateTime $birthyear
     * @return User
     */
    public function setBirthyear($birthyear)
    {
        $this->birthyear = $birthyear;

        return $this;
    }

    /**
     * Get birthyear
     *
     * @return \DateTime 
     */
    public function getBirthyear()
    {
        return $this->birthyear;
    }

    /**
     * Set sex
     *
     * @param string $sex
     * @return User
     */
    public function setSex($sex)
    {
        $this->sex = $sex;

        return $this;
    }

    /**
     * Get sex
     *
     * @return string
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * Set metier
     *
     * @param string $metier
     * @return User
     */
    public function setMetier($metier)
    {
        $this->metier = $metier;

        return $this;
    }

    /**
     * Get metier
     *
     * @return string 
     */
    public function getMetier()
    {
        return $this->metier;
    }



    /**
     * Set descriptifFormateur
     *
     * @param string $descriptifFormateur
     * @return User
     */
    public function setDescriptifFormateur($descriptifFormateur)
    {
        $this->descriptifFormateur = $descriptifFormateur;

        return $this;
    }

    /**
     * Get descriptifFormateur
     *
     * @return string 
     */
    public function getDescriptifFormateur()
    {
        return $this->descriptifFormateur;
    }

    /**
     * Set descriptifEtudiant
     *
     * @param string $descriptifEtudiant
     * @return User
     */
    public function setDescriptifEtudiant($descriptifEtudiant)
    {
        $this->descriptifEtudiant = $descriptifEtudiant;

        return $this;
    }

    /**
     * Get descriptifEtudiant
     *
     * @return string 
     */
    public function getDescriptifEtudiant()
    {
        return $this->descriptifEtudiant;
    }

    /**
     * Set photo
     *
     * @param string $photo
     * @return User
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string 
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set salt
     *
     * @param string $salt
     * @return User
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;

        return $this;
    }

    /**
     * Get salt
     *
     * @return string 
     */
    public function getSalt()
    {
        return $this->salt;
    }

    /**
     * Set token
     *
     * @param string $token
     * @return User
     */
    public function setToken($token)
    {
        $this->token = $token;

        return $this;
    }

    /**
     * Get token
     *
     * @return string 
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     * @return User
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Get isActive
     *
     * @return boolean 
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Set dateRegistered
     *
     * @param \DateTime $dateRegistered
     * @return User
     */
    public function setDateRegistered($dateRegistered)
    {
        $this->dateRegistered = $dateRegistered;

        return $this;
    }

    /**
     * Get dateRegistered
     *
     * @return \DateTime 
     */
    public function getDateRegistered()
    {
        return $this->dateRegistered;
    }


    


    public function getRoles()
    {
        return $this->roles->toArray();
    }

//remet password  vide, pour effacer 
    public function eraseCredentials()
    {$this->setPassword("");
    }

    public  function serialize(){
        return serialize(array(
        $this->id,
        $this->username,
        $this->password,
        $this->salt,
        $this->token
        ));
    }

    public  function unserialize($serialized){
        list (
            $this->id,
            $this->username,
            $this->password,
            $this->salt,
            $this->token

            ) = unserialize($serialized);
         }


    /**
     * Add roles
     *
     * @param \Xiaomei\XiaomeiBundle\Entity\Role $roles
     * @return User
     */
    public function addRole(\Xiaomei\XiaomeiBundle\Entity\Role $roles)
    {
        $this->roles[] = $roles;

        return $this;
    }

    /**
     * Remove roles
     *
     * @param \Xiaomei\XiaomeiBundle\Entity\Role $roles
     */
    public function removeRole(\Xiaomei\XiaomeiBundle\Entity\Role $roles)
    {
        $this->roles->removeElement($roles);
    }



    /**
     * Set nombreCredit
     *
     * @param integer $nombreCredit
     * @return User
     */
    public function setNombreCredit($nombreCredit)
    {
        $this->nombreCredit = $nombreCredit;

        return $this;
    }

    /**
     * Get nombreCredit
     *
     * @return string 
     */
    public function getNombreCredit()
    {
        return $this->nombreCredit;
    }

    public function isEqualTo(UserInterface $user){
   if($this->id ===$user->getId() 
   && $this->token===$user->getToken()){
    return true;
   }
   return false;
  }

     /**
     * Constructor
     */
    public function __construct()
    {
        $this->roles = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Add cours
     *
     * @param \Xiaomei\XiaomeiBundle\Entity\Cours $cours
     * @return User
     */
    public function addCour(\Xiaomei\XiaomeiBundle\Entity\Cours $cours)
    {
        $this->cours[] = $cours;

        return $this;
    }

    /**
     * Remove cours
     *
     * @param \Xiaomei\XiaomeiBundle\Entity\Cours $cours
     */
    public function removeCour(\Xiaomei\XiaomeiBundle\Entity\Cours $cours)
    {
        $this->cours->removeElement($cours);
    }

    /**
     * Get cours
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCours()
    {
        return $this->cours;
    }

    /**
     * Add inscription
     *
     * @param \Xiaomei\XiaomeiBundle\Entity\Inscription $inscription
     * @return User
     */
    public function addInscription(\Xiaomei\XiaomeiBundle\Entity\Inscription $inscription)
    {
        $this->inscription[] = $inscription;

        return $this;
    }

    /**
     * Remove inscription
     *
     * @param \Xiaomei\XiaomeiBundle\Entity\Inscription $inscription
     */
    public function removeInscription(\Xiaomei\XiaomeiBundle\Entity\Inscription $inscription)
    {
        $this->inscription->removeElement($inscription);
    }

    /**
     * Get inscription
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getInscription()
    {
        return $this->inscription;
    }
}

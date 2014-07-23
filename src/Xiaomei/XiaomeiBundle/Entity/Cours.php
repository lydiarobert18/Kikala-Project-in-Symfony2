<?php

namespace Xiaomei\XiaomeiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * Cours
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Xiaomei\XiaomeiBundle\Entity\CoursRepository")
 * @UniqueEntity("name")
 */

class Cours
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
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     * @Assert\NotBlank(message="Le name ne peut pas être vide !")
     *
     * @ORM\Column(name="image", type="string", length=255)
     */
    private $image;

    /**
     * @var \DateTime
     * @Assert\NotBlank(message="Le date ne peut pas être vide !")
     *
     * @ORM\Column(name="dateCours", type="datetime")
     */
    private $dateCours;

    /**
     * @var string
     * @Assert\NotBlank(message="Le lieu ne peut pas être vide !")
     *
     * @ORM\Column(name="lieu", type="string", length=255)
     */
    private $lieu;

    /**
     * @var integer
     * @Assert\NotBlank(message="Le duration ne peut pas être vide !")
     *
     * @ORM\Column(name="duration", type="integer")
     */
    private $duration;

   
    /**
     * @var string
     * @Assert\NotBlank(message="Le descriptif ne peut pas être vide !")
     * @Assert\Length(
     *      min = "2",
     *      max = "255",
     *      minMessage = "Le descriptif doit faire au moins {{ limit }} caractères",
     *      maxMessage = "Le titre ne peut pas être plus long que {{ limit }} caractères"
     * )
     *
     * @ORM\Column(name="descriptif", type="text")
     */
    private $descriptif;

    /**
     * @var integer
     * @Assert\NotBlank(message="Le nombreplace ne peut pas être vide !")
     *
     * @ORM\Column(name="nrPlaceTotal", type="integer")
     */
    private $nrPlaceTotal;

    /**
     * @var integer
     *
     * @ORM\Column(name="nrPlaceRestant", type="integer")
     */
    private $nrPlaceRestant;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreated", type="datetime")
     */
    private $dateCreated;

    /**
       * @var Xiaomei\XiaomeiBundle\Entity\Category;
       *
       * @ORM\ManyToOne(targetEntity="Category",inversedBy="cours")
       */

    private $category;


     /**
       * @var Xiaomei\XiaomeiBundle\Entity\User;
       *
       * @ORM\ManyToOne(targetEntity="User",inversedBy="cours")
       */

    private $user;


        /**
    *  @var \Doctrine\Common\Collections\ArrayCollection
    *  
    * @ORM\OneToMany(targetEntity="Inscription",mappedBy="cours")
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
     * Set name
     *
     * @param string $name
     * @return Cours
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
     * Set image
     *
     * @param string $image
     * @return Cours
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set dateCours
     *
     * @param \DateTime $dateCours
     * @return Cours
     */
    public function setDateCours($dateCours)
    {
        $this->dateCours = $dateCours;

        return $this;
    }

    /**
     * Get dateCours
     *
     * @return \DateTime 
     */
    public function getDateCours()
    {
        return $this->dateCours;
    }

    /**
     * Set lieu
     *
     * @param string $lieu
     * @return Cours
     */
    public function setLieu($lieu)
    {
        $this->lieu = $lieu;

        return $this;
    }

    /**
     * Get lieu
     *
     * @return string 
     */
    public function getLieu()
    {
        return $this->lieu;
    }

    /**
     * Set duration
     *
     * @param integer $duration
     * @return Cours
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get duration
     *
     * @return integer 
     */
    public function getDuration()
    {
        return $this->duration;
    }

    
    /**
     * Set descriptif
     *
     * @param string $descriptif
     * @return Cours
     */
    public function setDescriptif($descriptif)
    {
        $this->descriptif = $descriptif;

        return $this;
    }

    /**
     * Get descriptif
     *
     * @return string 
     */
    public function getDescriptif()
    {
        return $this->descriptif;
    }

    /**
     * Set nrPlaceTotal
     *
     * @param integer $nrPlaceTotal
     * @return Cours
     */
    public function setNrPlaceTotal($nrPlaceTotal)
    {
        $this->nrPlaceTotal = $nrPlaceTotal;

        return $this;
    }

    /**
     * Get nrPlaceTotal
     *
     * @return integer 
     */
    public function getNrPlaceTotal()
    {
        return $this->nrPlaceTotal;
    }

    /**
     * Set nrPlaceRestant
     *
     * @param integer $nrPlaceRestant
     * @return Cours
     */
    public function setNrPlaceRestant($nrPlaceRestant)
    {
        $this->nrPlaceRestant = $nrPlaceRestant;

        return $this;
    }

    /**
     * Get nrPlaceRestant
     *
     * @return integer 
     */
    public function getNrPlaceRestant()
    {
        return $this->nrPlaceRestant;
    }

    /**
     * Set dateCreated
     *
     * @param \DateTime $dateCreated
     * @return Cours
     */
    public function setDateCreated($dateCreated)
    {
        $this->dateCreated = $dateCreated;

        return $this;
    }

    /**
     * Get dateCreated
     *
     * @return \DateTime 
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    /**
     * Set category
     *
     * @param \Xiaomei\XiaomeiBundle\Entity\Category $category
     * @return Cours
     */
    public function setCategory(\Xiaomei\XiaomeiBundle\Entity\Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \Xiaomei\XiaomeiBundle\Entity\Category 
     */
    public function getCategory()
    {
        return $this->category;
    }

    

    /**
     * Set user
     *
     * @param \Xiaomei\XiaomeiBundle\Entity\User $user
     * @return Cours
     */
    public function setUser(\Xiaomei\XiaomeiBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Xiaomei\XiaomeiBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->inscription = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add inscription
     *
     * @param \Xiaomei\XiaomeiBundle\Entity\Inscription $inscription
     * @return Cours
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

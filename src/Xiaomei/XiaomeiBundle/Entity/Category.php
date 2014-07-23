<?php

namespace Xiaomei\XiaomeiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Category
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Xiaomei\XiaomeiBundle\Entity\CategoryRepository")
 */
class Category
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
     * @ORM\Column(name="name", type="string", length=50)
     */
    private $name;


     /**
    *  @var \Doctrine\Common\Collections\ArrayCollection
    *  
    * @ORM\OneToMany(targetEntity="Cours",mappedBy="category")
    */
     private $cours;



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
     * @return Category
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
     * Constructor
     */
    public function __construct()
    {
        $this->cours = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add cours
     *
     * @param \Xiaomei\XiaomeiBundle\Entity\Cours $cours
     * @return Category
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
}

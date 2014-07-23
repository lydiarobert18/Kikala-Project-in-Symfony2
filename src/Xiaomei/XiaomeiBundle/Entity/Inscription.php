<?php

namespace Xiaomei\XiaomeiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Inscription
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Xiaomei\XiaomeiBundle\Entity\InscriptionRepository")
 */
class Inscription
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
       * @var Xiaomei\XiaomeiBundle\Entity\Cours;
       *
       * @ORM\ManyToOne(targetEntity="Cours",inversedBy="inscription")
       */

    private $cours ;

    /**
       * @var Xiaomei\XiaomeiBundle\Entity\User;
       *
       * @ORM\ManyToOne(targetEntity="User",inversedBy="inscription")
       */

    private $user ;


    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateInscription", type="datetime")
     */
    private $dateInscription;

    /**
     * @var boolean
     *
     * @ORM\Column(name="isannulation", type="boolean")
     */
    private $isannulation;


    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCancellation", type="datetime")
     */
    private $dateCancellation;


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
     * Set dateInscription
     *
     * @param \DateTime $dateInscription
     * @return Inscription
     */
    public function setDateInscription($dateInscription)
    {
        $this->dateInscription = $dateInscription;

        return $this;
    }

    /**
     * Get dateInscription
     *
     * @return \DateTime 
     */
    public function getDateInscription()
    {
        return $this->dateInscription;
    }



  /**
     * Set dateCancellation
     *
     * @param \DateTime $dateCancellation
     * @return Cancellation
     */
    public function setDateCancellation($dateCancellation)
    {
        $this->dateCancellation = $dateCancellation;

        return $this;
    }

    /**
     * Get dateCancellation
     *
     * @return \DateTime 
     */
    public function getDateCancellation()
    {
        return $this->DateCancellation;
    }



    /**
     * Set isannulation
     *
     * @param boolean $isannulation
     * @return Inscription
     */
    public function setIsannulation($isannulation)
    {
        $this->isannulation = $isannulation;

        return $this;
    }

    /**
     * Get isannulation
     *
     * @return boolean 
     */
    public function getIsannulation()
    {
        return $this->isannulation;
    }

    /**
     * Set cours
     *
     * @param \Xiaomei\XiaomeiBundle\Entity\Cours $cours
     * @return Inscription
     */
    public function setCours(\Xiaomei\XiaomeiBundle\Entity\Cours $cours = null)
    {
        $this->cours = $cours;

        return $this;
    }

    /**
     * Get cours
     *
     * @return \Xiaomei\XiaomeiBundle\Entity\Cours 
     */
    public function getCours()
    {
        return $this->cours;
    }

    /**
     * Set user
     *
     * @param \Xiaomei\XiaomeiBundle\Entity\User $user
     * @return Inscription
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
}

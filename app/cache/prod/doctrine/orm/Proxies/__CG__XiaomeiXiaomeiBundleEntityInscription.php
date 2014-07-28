<?php

namespace Proxies\__CG__\Xiaomei\XiaomeiBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Inscription extends \Xiaomei\XiaomeiBundle\Entity\Inscription implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'Xiaomei\\XiaomeiBundle\\Entity\\Inscription' . "\0" . 'id', '' . "\0" . 'Xiaomei\\XiaomeiBundle\\Entity\\Inscription' . "\0" . 'cours', '' . "\0" . 'Xiaomei\\XiaomeiBundle\\Entity\\Inscription' . "\0" . 'user', '' . "\0" . 'Xiaomei\\XiaomeiBundle\\Entity\\Inscription' . "\0" . 'dateInscription', '' . "\0" . 'Xiaomei\\XiaomeiBundle\\Entity\\Inscription' . "\0" . 'isannulation', '' . "\0" . 'Xiaomei\\XiaomeiBundle\\Entity\\Inscription' . "\0" . 'dateCancellation');
        }

        return array('__isInitialized__', '' . "\0" . 'Xiaomei\\XiaomeiBundle\\Entity\\Inscription' . "\0" . 'id', '' . "\0" . 'Xiaomei\\XiaomeiBundle\\Entity\\Inscription' . "\0" . 'cours', '' . "\0" . 'Xiaomei\\XiaomeiBundle\\Entity\\Inscription' . "\0" . 'user', '' . "\0" . 'Xiaomei\\XiaomeiBundle\\Entity\\Inscription' . "\0" . 'dateInscription', '' . "\0" . 'Xiaomei\\XiaomeiBundle\\Entity\\Inscription' . "\0" . 'isannulation', '' . "\0" . 'Xiaomei\\XiaomeiBundle\\Entity\\Inscription' . "\0" . 'dateCancellation');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Inscription $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateInscription($dateInscription)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateInscription', array($dateInscription));

        return parent::setDateInscription($dateInscription);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateInscription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateInscription', array());

        return parent::getDateInscription();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateCancellation($dateCancellation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateCancellation', array($dateCancellation));

        return parent::setDateCancellation($dateCancellation);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateCancellation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateCancellation', array());

        return parent::getDateCancellation();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsannulation($isannulation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsannulation', array($isannulation));

        return parent::setIsannulation($isannulation);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsannulation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsannulation', array());

        return parent::getIsannulation();
    }

    /**
     * {@inheritDoc}
     */
    public function setCours(\Xiaomei\XiaomeiBundle\Entity\Cours $cours = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCours', array($cours));

        return parent::setCours($cours);
    }

    /**
     * {@inheritDoc}
     */
    public function getCours()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCours', array());

        return parent::getCours();
    }

    /**
     * {@inheritDoc}
     */
    public function setUser(\Xiaomei\XiaomeiBundle\Entity\User $user = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUser', array($user));

        return parent::setUser($user);
    }

    /**
     * {@inheritDoc}
     */
    public function getUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUser', array());

        return parent::getUser();
    }

}
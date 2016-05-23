<?php

namespace Proxies\__CG__\MyLabelBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Labels extends \MyLabelBundle\Entity\Labels implements \Doctrine\ORM\Proxy\Proxy
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
    public static $lazyPropertiesDefaults = [];



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
            return ['__isInitialized__', '' . "\0" . 'MyLabelBundle\\Entity\\Labels' . "\0" . 'id', '' . "\0" . 'MyLabelBundle\\Entity\\Labels' . "\0" . 'nomProjet', '' . "\0" . 'MyLabelBundle\\Entity\\Labels' . "\0" . 'lienProjet', '' . "\0" . 'MyLabelBundle\\Entity\\Labels' . "\0" . 'versionProjet', '' . "\0" . 'MyLabelBundle\\Entity\\Labels' . "\0" . 'labelProjet', '' . "\0" . 'MyLabelBundle\\Entity\\Labels' . "\0" . 'annee1Label', '' . "\0" . 'MyLabelBundle\\Entity\\Labels' . "\0" . 'annee2Label', '' . "\0" . 'MyLabelBundle\\Entity\\Labels' . "\0" . 'annee3Label'];
        }

        return ['__isInitialized__', '' . "\0" . 'MyLabelBundle\\Entity\\Labels' . "\0" . 'id', '' . "\0" . 'MyLabelBundle\\Entity\\Labels' . "\0" . 'nomProjet', '' . "\0" . 'MyLabelBundle\\Entity\\Labels' . "\0" . 'lienProjet', '' . "\0" . 'MyLabelBundle\\Entity\\Labels' . "\0" . 'versionProjet', '' . "\0" . 'MyLabelBundle\\Entity\\Labels' . "\0" . 'labelProjet', '' . "\0" . 'MyLabelBundle\\Entity\\Labels' . "\0" . 'annee1Label', '' . "\0" . 'MyLabelBundle\\Entity\\Labels' . "\0" . 'annee2Label', '' . "\0" . 'MyLabelBundle\\Entity\\Labels' . "\0" . 'annee3Label'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Labels $proxy) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
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


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setNomProjet($nomProjet)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNomProjet', [$nomProjet]);

        return parent::setNomProjet($nomProjet);
    }

    /**
     * {@inheritDoc}
     */
    public function getNomProjet()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNomProjet', []);

        return parent::getNomProjet();
    }

    /**
     * {@inheritDoc}
     */
    public function setLienProjet($lienProjet)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLienProjet', [$lienProjet]);

        return parent::setLienProjet($lienProjet);
    }

    /**
     * {@inheritDoc}
     */
    public function getLienProjet()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLienProjet', []);

        return parent::getLienProjet();
    }

    /**
     * {@inheritDoc}
     */
    public function setVersionProjet($versionProjet)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVersionProjet', [$versionProjet]);

        return parent::setVersionProjet($versionProjet);
    }

    /**
     * {@inheritDoc}
     */
    public function getVersionProjet()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVersionProjet', []);

        return parent::getVersionProjet();
    }

    /**
     * {@inheritDoc}
     */
    public function setLabelProjet($labelProjet)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLabelProjet', [$labelProjet]);

        return parent::setLabelProjet($labelProjet);
    }

    /**
     * {@inheritDoc}
     */
    public function getLabelProjet()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLabelProjet', []);

        return parent::getLabelProjet();
    }

    /**
     * {@inheritDoc}
     */
    public function setAnnee1Label($annee1Label)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAnnee1Label', [$annee1Label]);

        return parent::setAnnee1Label($annee1Label);
    }

    /**
     * {@inheritDoc}
     */
    public function getAnnee1Label()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAnnee1Label', []);

        return parent::getAnnee1Label();
    }

    /**
     * {@inheritDoc}
     */
    public function setAnnee2Label($annee2Label)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAnnee2Label', [$annee2Label]);

        return parent::setAnnee2Label($annee2Label);
    }

    /**
     * {@inheritDoc}
     */
    public function getAnnee2Label()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAnnee2Label', []);

        return parent::getAnnee2Label();
    }

    /**
     * {@inheritDoc}
     */
    public function setAnnee3Label($annee3Label)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAnnee3Label', [$annee3Label]);

        return parent::setAnnee3Label($annee3Label);
    }

    /**
     * {@inheritDoc}
     */
    public function getAnnee3Label()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAnnee3Label', []);

        return parent::getAnnee3Label();
    }

}

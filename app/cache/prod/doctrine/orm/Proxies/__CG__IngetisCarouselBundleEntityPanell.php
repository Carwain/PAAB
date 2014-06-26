<?php

namespace Proxies\__CG__\Ingetis\CarouselBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Panell extends \Ingetis\CarouselBundle\Entity\Panell implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'Ingetis\\CarouselBundle\\Entity\\Panell' . "\0" . 'idPanell', '' . "\0" . 'Ingetis\\CarouselBundle\\Entity\\Panell' . "\0" . 'event', '' . "\0" . 'Ingetis\\CarouselBundle\\Entity\\Panell' . "\0" . 'idSectionPanell', '' . "\0" . 'Ingetis\\CarouselBundle\\Entity\\Panell' . "\0" . 'idTypeArticle', '' . "\0" . 'Ingetis\\CarouselBundle\\Entity\\Panell' . "\0" . 'titrePanell', '' . "\0" . 'Ingetis\\CarouselBundle\\Entity\\Panell' . "\0" . 'imagePanell', '' . "\0" . 'Ingetis\\CarouselBundle\\Entity\\Panell' . "\0" . 'videoPanell', '' . "\0" . 'Ingetis\\CarouselBundle\\Entity\\Panell' . "\0" . 'swfPanell', '' . "\0" . 'Ingetis\\CarouselBundle\\Entity\\Panell' . "\0" . 'lienPanell', '' . "\0" . 'Ingetis\\CarouselBundle\\Entity\\Panell' . "\0" . 'descPanell', '' . "\0" . 'Ingetis\\CarouselBundle\\Entity\\Panell' . "\0" . 'delaisPanell');
        }

        return array('__isInitialized__', '' . "\0" . 'Ingetis\\CarouselBundle\\Entity\\Panell' . "\0" . 'idPanell', '' . "\0" . 'Ingetis\\CarouselBundle\\Entity\\Panell' . "\0" . 'event', '' . "\0" . 'Ingetis\\CarouselBundle\\Entity\\Panell' . "\0" . 'idSectionPanell', '' . "\0" . 'Ingetis\\CarouselBundle\\Entity\\Panell' . "\0" . 'idTypeArticle', '' . "\0" . 'Ingetis\\CarouselBundle\\Entity\\Panell' . "\0" . 'titrePanell', '' . "\0" . 'Ingetis\\CarouselBundle\\Entity\\Panell' . "\0" . 'imagePanell', '' . "\0" . 'Ingetis\\CarouselBundle\\Entity\\Panell' . "\0" . 'videoPanell', '' . "\0" . 'Ingetis\\CarouselBundle\\Entity\\Panell' . "\0" . 'swfPanell', '' . "\0" . 'Ingetis\\CarouselBundle\\Entity\\Panell' . "\0" . 'lienPanell', '' . "\0" . 'Ingetis\\CarouselBundle\\Entity\\Panell' . "\0" . 'descPanell', '' . "\0" . 'Ingetis\\CarouselBundle\\Entity\\Panell' . "\0" . 'delaisPanell');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Panell $proxy) {
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
    public function getIdPanell()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getIdPanell();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdPanell', array());

        return parent::getIdPanell();
    }

    /**
     * {@inheritDoc}
     */
    public function setEvent($event)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEvent', array($event));

        return parent::setEvent($event);
    }

    /**
     * {@inheritDoc}
     */
    public function getEvent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEvent', array());

        return parent::getEvent();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdSectionPanell($idSectionPanell)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdSectionPanell', array($idSectionPanell));

        return parent::setIdSectionPanell($idSectionPanell);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdSectionPanell()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdSectionPanell', array());

        return parent::getIdSectionPanell();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdTypeArticle($idTypeArticle)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdTypeArticle', array($idTypeArticle));

        return parent::setIdTypeArticle($idTypeArticle);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdTypeArticle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdTypeArticle', array());

        return parent::getIdTypeArticle();
    }

    /**
     * {@inheritDoc}
     */
    public function setTitrePanell($titrePanell)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitrePanell', array($titrePanell));

        return parent::setTitrePanell($titrePanell);
    }

    /**
     * {@inheritDoc}
     */
    public function getTitrePanell()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitrePanell', array());

        return parent::getTitrePanell();
    }

    /**
     * {@inheritDoc}
     */
    public function setImagePanell($imagePanell)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImagePanell', array($imagePanell));

        return parent::setImagePanell($imagePanell);
    }

    /**
     * {@inheritDoc}
     */
    public function getImagePanell()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImagePanell', array());

        return parent::getImagePanell();
    }

    /**
     * {@inheritDoc}
     */
    public function setVideoPanell($videoPanell)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVideoPanell', array($videoPanell));

        return parent::setVideoPanell($videoPanell);
    }

    /**
     * {@inheritDoc}
     */
    public function getVideoPanell()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVideoPanell', array());

        return parent::getVideoPanell();
    }

    /**
     * {@inheritDoc}
     */
    public function setSwfPanell($swfPanell)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSwfPanell', array($swfPanell));

        return parent::setSwfPanell($swfPanell);
    }

    /**
     * {@inheritDoc}
     */
    public function getSwfPanell()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSwfPanell', array());

        return parent::getSwfPanell();
    }

    /**
     * {@inheritDoc}
     */
    public function setLienPanell($lienPanell)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLienPanell', array($lienPanell));

        return parent::setLienPanell($lienPanell);
    }

    /**
     * {@inheritDoc}
     */
    public function getLienPanell()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLienPanell', array());

        return parent::getLienPanell();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescPanell($descPanell)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescPanell', array($descPanell));

        return parent::setDescPanell($descPanell);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescPanell()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescPanell', array());

        return parent::getDescPanell();
    }

    /**
     * {@inheritDoc}
     */
    public function setDelaisPanell($delaisPanell)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDelaisPanell', array($delaisPanell));

        return parent::setDelaisPanell($delaisPanell);
    }

    /**
     * {@inheritDoc}
     */
    public function getDelaisPanell()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDelaisPanell', array());

        return parent::getDelaisPanell();
    }

}
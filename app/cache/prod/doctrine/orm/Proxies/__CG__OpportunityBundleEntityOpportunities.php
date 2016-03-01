<?php

namespace Proxies\__CG__\OpportunityBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Opportunities extends \OpportunityBundle\Entity\Opportunities implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'OpportunityBundle\\Entity\\Opportunities' . "\0" . 'personname', '' . "\0" . 'OpportunityBundle\\Entity\\Opportunities' . "\0" . 'username', '' . "\0" . 'OpportunityBundle\\Entity\\Opportunities' . "\0" . 'ownedcompany', '' . "\0" . 'OpportunityBundle\\Entity\\Opportunities' . "\0" . 'organizationname', '' . "\0" . 'OpportunityBundle\\Entity\\Opportunities' . "\0" . 'projectedrevenue', '' . "\0" . 'OpportunityBundle\\Entity\\Opportunities' . "\0" . 'accounttype', '' . "\0" . 'OpportunityBundle\\Entity\\Opportunities' . "\0" . 'stage', '' . "\0" . 'OpportunityBundle\\Entity\\Opportunities' . "\0" . 'producttype', '' . "\0" . 'OpportunityBundle\\Entity\\Opportunities' . "\0" . 'opportunitysource', '' . "\0" . 'OpportunityBundle\\Entity\\Opportunities' . "\0" . 'closeddate', '' . "\0" . 'OpportunityBundle\\Entity\\Opportunities' . "\0" . 'notes', '' . "\0" . 'OpportunityBundle\\Entity\\Opportunities' . "\0" . 'visibility', '' . "\0" . 'OpportunityBundle\\Entity\\Opportunities' . "\0" . 'status', '' . "\0" . 'OpportunityBundle\\Entity\\Opportunities' . "\0" . 'revenue', '' . "\0" . 'OpportunityBundle\\Entity\\Opportunities' . "\0" . 'reason', '' . "\0" . 'OpportunityBundle\\Entity\\Opportunities' . "\0" . 'id', '' . "\0" . 'OpportunityBundle\\Entity\\Opportunities' . "\0" . 'forecast', '' . "\0" . 'OpportunityBundle\\Entity\\Opportunities' . "\0" . 'sharing', '' . "\0" . 'OpportunityBundle\\Entity\\Opportunities' . "\0" . 'chanceofsale', '' . "\0" . 'OpportunityBundle\\Entity\\Opportunities' . "\0" . 'currentuserforecast', '' . "\0" . 'OpportunityBundle\\Entity\\Opportunities' . "\0" . 'ownerfullname', '' . "\0" . 'OpportunityBundle\\Entity\\Opportunities' . "\0" . 'userrevenue', '' . "\0" . 'OpportunityBundle\\Entity\\Opportunities' . "\0" . 'contactid', '' . "\0" . 'OpportunityBundle\\Entity\\Opportunities' . "\0" . 'wonnotes', '' . "\0" . 'OpportunityBundle\\Entity\\Opportunities' . "\0" . 'tags', '' . "\0" . 'OpportunityBundle\\Entity\\Opportunities' . "\0" . 'partnername', '' . "\0" . 'OpportunityBundle\\Entity\\Opportunities' . "\0" . 'partnerpercentage');
        }

        return array('__isInitialized__', '' . "\0" . 'OpportunityBundle\\Entity\\Opportunities' . "\0" . 'personname', '' . "\0" . 'OpportunityBundle\\Entity\\Opportunities' . "\0" . 'username', '' . "\0" . 'OpportunityBundle\\Entity\\Opportunities' . "\0" . 'ownedcompany', '' . "\0" . 'OpportunityBundle\\Entity\\Opportunities' . "\0" . 'organizationname', '' . "\0" . 'OpportunityBundle\\Entity\\Opportunities' . "\0" . 'projectedrevenue', '' . "\0" . 'OpportunityBundle\\Entity\\Opportunities' . "\0" . 'accounttype', '' . "\0" . 'OpportunityBundle\\Entity\\Opportunities' . "\0" . 'stage', '' . "\0" . 'OpportunityBundle\\Entity\\Opportunities' . "\0" . 'producttype', '' . "\0" . 'OpportunityBundle\\Entity\\Opportunities' . "\0" . 'opportunitysource', '' . "\0" . 'OpportunityBundle\\Entity\\Opportunities' . "\0" . 'closeddate', '' . "\0" . 'OpportunityBundle\\Entity\\Opportunities' . "\0" . 'notes', '' . "\0" . 'OpportunityBundle\\Entity\\Opportunities' . "\0" . 'visibility', '' . "\0" . 'OpportunityBundle\\Entity\\Opportunities' . "\0" . 'status', '' . "\0" . 'OpportunityBundle\\Entity\\Opportunities' . "\0" . 'revenue', '' . "\0" . 'OpportunityBundle\\Entity\\Opportunities' . "\0" . 'reason', '' . "\0" . 'OpportunityBundle\\Entity\\Opportunities' . "\0" . 'id', '' . "\0" . 'OpportunityBundle\\Entity\\Opportunities' . "\0" . 'forecast', '' . "\0" . 'OpportunityBundle\\Entity\\Opportunities' . "\0" . 'sharing', '' . "\0" . 'OpportunityBundle\\Entity\\Opportunities' . "\0" . 'chanceofsale', '' . "\0" . 'OpportunityBundle\\Entity\\Opportunities' . "\0" . 'currentuserforecast', '' . "\0" . 'OpportunityBundle\\Entity\\Opportunities' . "\0" . 'ownerfullname', '' . "\0" . 'OpportunityBundle\\Entity\\Opportunities' . "\0" . 'userrevenue', '' . "\0" . 'OpportunityBundle\\Entity\\Opportunities' . "\0" . 'contactid', '' . "\0" . 'OpportunityBundle\\Entity\\Opportunities' . "\0" . 'wonnotes', '' . "\0" . 'OpportunityBundle\\Entity\\Opportunities' . "\0" . 'tags', '' . "\0" . 'OpportunityBundle\\Entity\\Opportunities' . "\0" . 'partnername', '' . "\0" . 'OpportunityBundle\\Entity\\Opportunities' . "\0" . 'partnerpercentage');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Opportunities $proxy) {
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
    public function getPartnername()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPartnername', array());

        return parent::getPartnername();
    }

    /**
     * {@inheritDoc}
     */
    public function setPartnername($partnername)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPartnername', array($partnername));

        return parent::setPartnername($partnername);
    }

    /**
     * {@inheritDoc}
     */
    public function getPartnerpercentage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPartnerpercentage', array());

        return parent::getPartnerpercentage();
    }

    /**
     * {@inheritDoc}
     */
    public function setPartnerpercentage($partnerpercentage)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPartnerpercentage', array($partnerpercentage));

        return parent::setPartnerpercentage($partnerpercentage);
    }

    /**
     * {@inheritDoc}
     */
    public function getWonnotes()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWonnotes', array());

        return parent::getWonnotes();
    }

    /**
     * {@inheritDoc}
     */
    public function setWonnotes($wonnotes)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWonnotes', array($wonnotes));

        return parent::setWonnotes($wonnotes);
    }

    /**
     * {@inheritDoc}
     */
    public function getTags()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTags', array());

        return parent::getTags();
    }

    /**
     * {@inheritDoc}
     */
    public function setTags($tags)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTags', array($tags));

        return parent::setTags($tags);
    }

    /**
     * {@inheritDoc}
     */
    public function getContactid()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContactid', array());

        return parent::getContactid();
    }

    /**
     * {@inheritDoc}
     */
    public function setContactid($contactid)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setContactid', array($contactid));

        return parent::setContactid($contactid);
    }

    /**
     * {@inheritDoc}
     */
    public function getUserrevenue()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUserrevenue', array());

        return parent::getUserrevenue();
    }

    /**
     * {@inheritDoc}
     */
    public function setUserrevenue($userrevenue)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUserrevenue', array($userrevenue));

        return parent::setUserrevenue($userrevenue);
    }

    /**
     * {@inheritDoc}
     */
    public function getOwnerfullname()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOwnerfullname', array());

        return parent::getOwnerfullname();
    }

    /**
     * {@inheritDoc}
     */
    public function setOwnerfullname($fullname)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOwnerfullname', array($fullname));

        return parent::setOwnerfullname($fullname);
    }

    /**
     * {@inheritDoc}
     */
    public function setCurrentuserforecast($currentuserforecast)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCurrentuserforecast', array($currentuserforecast));

        return parent::setCurrentuserforecast($currentuserforecast);
    }

    /**
     * {@inheritDoc}
     */
    public function getCurrentuserforecast()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCurrentuserforecast', array());

        return parent::getCurrentuserforecast();
    }

    /**
     * {@inheritDoc}
     */
    public function setChanceofsale($chanceofsale)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setChanceofsale', array($chanceofsale));

        return parent::setChanceofsale($chanceofsale);
    }

    /**
     * {@inheritDoc}
     */
    public function getChanceofsale()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChanceofsale', array());

        return parent::getChanceofsale();
    }

    /**
     * {@inheritDoc}
     */
    public function setForecast($forecast)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setForecast', array($forecast));

        return parent::setForecast($forecast);
    }

    /**
     * {@inheritDoc}
     */
    public function getForecast()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getForecast', array());

        return parent::getForecast();
    }

    /**
     * {@inheritDoc}
     */
    public function setSharing($sharing)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSharing', array($sharing));

        return parent::setSharing($sharing);
    }

    /**
     * {@inheritDoc}
     */
    public function getSharing()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSharing', array());

        return parent::getSharing();
    }

    /**
     * {@inheritDoc}
     */
    public function setPersonname($personname)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPersonname', array($personname));

        return parent::setPersonname($personname);
    }

    /**
     * {@inheritDoc}
     */
    public function getPersonname()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPersonname', array());

        return parent::getPersonname();
    }

    /**
     * {@inheritDoc}
     */
    public function setUsername($username)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUsername', array($username));

        return parent::setUsername($username);
    }

    /**
     * {@inheritDoc}
     */
    public function getUsername()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsername', array());

        return parent::getUsername();
    }

    /**
     * {@inheritDoc}
     */
    public function setOwnedcompany($ownedcompany)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOwnedcompany', array($ownedcompany));

        return parent::setOwnedcompany($ownedcompany);
    }

    /**
     * {@inheritDoc}
     */
    public function getOwnedcompany()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOwnedcompany', array());

        return parent::getOwnedcompany();
    }

    /**
     * {@inheritDoc}
     */
    public function setOrganizationname($organizationname)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOrganizationname', array($organizationname));

        return parent::setOrganizationname($organizationname);
    }

    /**
     * {@inheritDoc}
     */
    public function getOrganizationname()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOrganizationname', array());

        return parent::getOrganizationname();
    }

    /**
     * {@inheritDoc}
     */
    public function setProjectedrevenue($projectedrevenue)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProjectedrevenue', array($projectedrevenue));

        return parent::setProjectedrevenue($projectedrevenue);
    }

    /**
     * {@inheritDoc}
     */
    public function getProjectedrevenue()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProjectedrevenue', array());

        return parent::getProjectedrevenue();
    }

    /**
     * {@inheritDoc}
     */
    public function setAccounttype($accounttype)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAccounttype', array($accounttype));

        return parent::setAccounttype($accounttype);
    }

    /**
     * {@inheritDoc}
     */
    public function getAccounttype()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAccounttype', array());

        return parent::getAccounttype();
    }

    /**
     * {@inheritDoc}
     */
    public function setStage($stage)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStage', array($stage));

        return parent::setStage($stage);
    }

    /**
     * {@inheritDoc}
     */
    public function getStage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStage', array());

        return parent::getStage();
    }

    /**
     * {@inheritDoc}
     */
    public function setProducttype($producttype)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProducttype', array($producttype));

        return parent::setProducttype($producttype);
    }

    /**
     * {@inheritDoc}
     */
    public function getProducttype()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProducttype', array());

        return parent::getProducttype();
    }

    /**
     * {@inheritDoc}
     */
    public function setOpportunitysource($opportunitysource)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOpportunitysource', array($opportunitysource));

        return parent::setOpportunitysource($opportunitysource);
    }

    /**
     * {@inheritDoc}
     */
    public function getOpportunitysource()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOpportunitysource', array());

        return parent::getOpportunitysource();
    }

    /**
     * {@inheritDoc}
     */
    public function setCloseddate($closeddate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCloseddate', array($closeddate));

        return parent::setCloseddate($closeddate);
    }

    /**
     * {@inheritDoc}
     */
    public function getCloseddate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCloseddate', array());

        return parent::getCloseddate();
    }

    /**
     * {@inheritDoc}
     */
    public function setNotes($notes)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNotes', array($notes));

        return parent::setNotes($notes);
    }

    /**
     * {@inheritDoc}
     */
    public function getNotes()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNotes', array());

        return parent::getNotes();
    }

    /**
     * {@inheritDoc}
     */
    public function setVisibility($visibility)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVisibility', array($visibility));

        return parent::setVisibility($visibility);
    }

    /**
     * {@inheritDoc}
     */
    public function getVisibility()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVisibility', array());

        return parent::getVisibility();
    }

    /**
     * {@inheritDoc}
     */
    public function setStatus($status)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStatus', array($status));

        return parent::setStatus($status);
    }

    /**
     * {@inheritDoc}
     */
    public function getStatus()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStatus', array());

        return parent::getStatus();
    }

    /**
     * {@inheritDoc}
     */
    public function setRevenue($revenue)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRevenue', array($revenue));

        return parent::setRevenue($revenue);
    }

    /**
     * {@inheritDoc}
     */
    public function getRevenue()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRevenue', array());

        return parent::getRevenue();
    }

    /**
     * {@inheritDoc}
     */
    public function setReason($reason)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setReason', array($reason));

        return parent::setReason($reason);
    }

    /**
     * {@inheritDoc}
     */
    public function getReason()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReason', array());

        return parent::getReason();
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

}

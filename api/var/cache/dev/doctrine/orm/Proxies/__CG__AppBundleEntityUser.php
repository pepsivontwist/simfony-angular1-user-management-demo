<?php

namespace Proxies\__CG__\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class User extends \AppBundle\Entity\User implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'firstName', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'lastName', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'email', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'password', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'photo', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'gender', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'supervisor', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'duties', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'lastLogin', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'createdAt', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'updatedAt', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'deletedAt'];
        }

        return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'firstName', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'lastName', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'email', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'password', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'photo', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'gender', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'supervisor', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'duties', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'lastLogin', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'createdAt', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'updatedAt', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'deletedAt'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (User $proxy) {
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
    public function setFirstName($firstName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFirstName', [$firstName]);

        return parent::setFirstName($firstName);
    }

    /**
     * {@inheritDoc}
     */
    public function getFirstName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFirstName', []);

        return parent::getFirstName();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastName($lastName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastName', [$lastName]);

        return parent::setLastName($lastName);
    }

    /**
     * {@inheritDoc}
     */
    public function getLastName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastName', []);

        return parent::getLastName();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail($email)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', [$email]);

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', []);

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setPassword($password, $hash = true)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPassword', [$password, $hash]);

        return parent::setPassword($password, $hash);
    }

    /**
     * {@inheritDoc}
     */
    public function clearPassword()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'clearPassword', []);

        return parent::clearPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function getPassword()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPassword', []);

        return parent::getPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function checkPassword($password)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'checkPassword', [$password]);

        return parent::checkPassword($password);
    }

    /**
     * {@inheritDoc}
     */
    public function setPhoto($photo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPhoto', [$photo]);

        return parent::setPhoto($photo);
    }

    /**
     * {@inheritDoc}
     */
    public function getPhoto()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPhoto', []);

        return parent::getPhoto();
    }

    /**
     * {@inheritDoc}
     */
    public function setGender($gender)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGender', [$gender]);

        return parent::setGender($gender);
    }

    /**
     * {@inheritDoc}
     */
    public function getGender()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGender', []);

        return parent::getGender();
    }

    /**
     * {@inheritDoc}
     */
    public function setSupervisor($supervisor)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSupervisor', [$supervisor]);

        return parent::setSupervisor($supervisor);
    }

    /**
     * {@inheritDoc}
     */
    public function getSupervisor()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSupervisor', []);

        return parent::getSupervisor();
    }

    /**
     * {@inheritDoc}
     */
    public function setDuties($duties)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDuties', [$duties]);

        return parent::setDuties($duties);
    }

    /**
     * {@inheritDoc}
     */
    public function getDuties()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDuties', []);

        return parent::getDuties();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastLogin($lastLogin)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastLogin', [$lastLogin]);

        return parent::setLastLogin($lastLogin);
    }

    /**
     * {@inheritDoc}
     */
    public function getLastLogin()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastLogin', []);

        return parent::getLastLogin();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedAt($createdAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedAt', [$createdAt]);

        return parent::setCreatedAt($createdAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedAt', []);

        return parent::getCreatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdatedAt($updatedAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedAt', [$updatedAt]);

        return parent::setUpdatedAt($updatedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdatedAt', []);

        return parent::getUpdatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setDeletedAt($deletedAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDeletedAt', [$deletedAt]);

        return parent::setDeletedAt($deletedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getDeletedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDeletedAt', []);

        return parent::getDeletedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function onPrePersist()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'onPrePersist', []);

        return parent::onPrePersist();
    }

    /**
     * {@inheritDoc}
     */
    public function onPreUpdate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'onPreUpdate', []);

        return parent::onPreUpdate();
    }

    /**
     * {@inheritDoc}
     */
    public function getRoles()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRoles', []);

        return parent::getRoles();
    }

    /**
     * {@inheritDoc}
     */
    public function getSalt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSalt', []);

        return parent::getSalt();
    }

    /**
     * {@inheritDoc}
     */
    public function getUsername()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsername', []);

        return parent::getUsername();
    }

    /**
     * {@inheritDoc}
     */
    public function eraseCredentials()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'eraseCredentials', []);

        return parent::eraseCredentials();
    }

}

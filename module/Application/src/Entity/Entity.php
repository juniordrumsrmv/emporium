<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity
 *
 * @ORM\Table(name="entity", uniqueConstraints={@ORM\UniqueConstraint(name="index_entity_id", columns={"entity_type_key", "entity_id"})})
 * @ORM\Entity
 */
class Entity
{
    /**
     * @var integer
     *
     * @ORM\Column(name="entity_key", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $entityKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="entity_type_key", type="integer", nullable=false)
     */
    private $entityTypeKey;

    /**
     * @var string
     *
     * @ORM\Column(name="entity_id", type="string", length=10, nullable=false)
     */
    private $entityId;

    /**
     * @var string
     *
     * @ORM\Column(name="entity_name", type="string", length=50, nullable=true)
     */
    private $entityName;

    /**
     * @var string
     *
     * @ORM\Column(name="entity_external_name", type="string", length=255, nullable=true)
     */
    private $entityExternalName;

    /**
     * @var integer
     *
     * @ORM\Column(name="entity_check_interval", type="integer", nullable=true)
     */
    private $entityCheckInterval;

    /**
     * @var integer
     *
     * @ORM\Column(name="entity_notify_interval", type="integer", nullable=true)
     */
    private $entityNotifyInterval;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="entity_last_notify", type="datetime", nullable=true)
     */
    private $entityLastNotify;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="entity_last_check", type="datetime", nullable=true)
     */
    private $entityLastCheck;

    /**
     * @var boolean
     *
     * @ORM\Column(name="entity_send", type="boolean", nullable=true)
     */
    private $entitySend;

    /**
     * @var boolean
     *
     * @ORM\Column(name="entity_popup", type="boolean", nullable=true)
     */
    private $entityPopup;

    /**
     * @var boolean
     *
     * @ORM\Column(name="entity_sms", type="boolean", nullable=true)
     */
    private $entitySms;

    /**
     * @var boolean
     *
     * @ORM\Column(name="entity_cron_option", type="boolean", nullable=true)
     */
    private $entityCronOption;

    /**
     * @var string
     *
     * @ORM\Column(name="entity_cron_spec", type="string", length=255, nullable=true)
     */
    private $entityCronSpec;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="entity_last_execution", type="datetime", nullable=true)
     */
    private $entityLastExecution;



    /**
     * Get entityKey
     *
     * @return integer
     */
    public function getEntityKey()
    {
        return $this->entityKey;
    }

    /**
     * Set entityTypeKey
     *
     * @param integer $entityTypeKey
     *
     * @return Entity
     */
    public function setEntityTypeKey($entityTypeKey)
    {
        $this->entityTypeKey = $entityTypeKey;

        return $this;
    }

    /**
     * Get entityTypeKey
     *
     * @return integer
     */
    public function getEntityTypeKey()
    {
        return $this->entityTypeKey;
    }

    /**
     * Set entityId
     *
     * @param string $entityId
     *
     * @return Entity
     */
    public function setEntityId($entityId)
    {
        $this->entityId = $entityId;

        return $this;
    }

    /**
     * Get entityId
     *
     * @return string
     */
    public function getEntityId()
    {
        return $this->entityId;
    }

    /**
     * Set entityName
     *
     * @param string $entityName
     *
     * @return Entity
     */
    public function setEntityName($entityName)
    {
        $this->entityName = $entityName;

        return $this;
    }

    /**
     * Get entityName
     *
     * @return string
     */
    public function getEntityName()
    {
        return $this->entityName;
    }

    /**
     * Set entityExternalName
     *
     * @param string $entityExternalName
     *
     * @return Entity
     */
    public function setEntityExternalName($entityExternalName)
    {
        $this->entityExternalName = $entityExternalName;

        return $this;
    }

    /**
     * Get entityExternalName
     *
     * @return string
     */
    public function getEntityExternalName()
    {
        return $this->entityExternalName;
    }

    /**
     * Set entityCheckInterval
     *
     * @param integer $entityCheckInterval
     *
     * @return Entity
     */
    public function setEntityCheckInterval($entityCheckInterval)
    {
        $this->entityCheckInterval = $entityCheckInterval;

        return $this;
    }

    /**
     * Get entityCheckInterval
     *
     * @return integer
     */
    public function getEntityCheckInterval()
    {
        return $this->entityCheckInterval;
    }

    /**
     * Set entityNotifyInterval
     *
     * @param integer $entityNotifyInterval
     *
     * @return Entity
     */
    public function setEntityNotifyInterval($entityNotifyInterval)
    {
        $this->entityNotifyInterval = $entityNotifyInterval;

        return $this;
    }

    /**
     * Get entityNotifyInterval
     *
     * @return integer
     */
    public function getEntityNotifyInterval()
    {
        return $this->entityNotifyInterval;
    }

    /**
     * Set entityLastNotify
     *
     * @param \DateTime $entityLastNotify
     *
     * @return Entity
     */
    public function setEntityLastNotify($entityLastNotify)
    {
        $this->entityLastNotify = $entityLastNotify;

        return $this;
    }

    /**
     * Get entityLastNotify
     *
     * @return \DateTime
     */
    public function getEntityLastNotify()
    {
        return $this->entityLastNotify;
    }

    /**
     * Set entityLastCheck
     *
     * @param \DateTime $entityLastCheck
     *
     * @return Entity
     */
    public function setEntityLastCheck($entityLastCheck)
    {
        $this->entityLastCheck = $entityLastCheck;

        return $this;
    }

    /**
     * Get entityLastCheck
     *
     * @return \DateTime
     */
    public function getEntityLastCheck()
    {
        return $this->entityLastCheck;
    }

    /**
     * Set entitySend
     *
     * @param boolean $entitySend
     *
     * @return Entity
     */
    public function setEntitySend($entitySend)
    {
        $this->entitySend = $entitySend;

        return $this;
    }

    /**
     * Get entitySend
     *
     * @return boolean
     */
    public function getEntitySend()
    {
        return $this->entitySend;
    }

    /**
     * Set entityPopup
     *
     * @param boolean $entityPopup
     *
     * @return Entity
     */
    public function setEntityPopup($entityPopup)
    {
        $this->entityPopup = $entityPopup;

        return $this;
    }

    /**
     * Get entityPopup
     *
     * @return boolean
     */
    public function getEntityPopup()
    {
        return $this->entityPopup;
    }

    /**
     * Set entitySms
     *
     * @param boolean $entitySms
     *
     * @return Entity
     */
    public function setEntitySms($entitySms)
    {
        $this->entitySms = $entitySms;

        return $this;
    }

    /**
     * Get entitySms
     *
     * @return boolean
     */
    public function getEntitySms()
    {
        return $this->entitySms;
    }

    /**
     * Set entityCronOption
     *
     * @param boolean $entityCronOption
     *
     * @return Entity
     */
    public function setEntityCronOption($entityCronOption)
    {
        $this->entityCronOption = $entityCronOption;

        return $this;
    }

    /**
     * Get entityCronOption
     *
     * @return boolean
     */
    public function getEntityCronOption()
    {
        return $this->entityCronOption;
    }

    /**
     * Set entityCronSpec
     *
     * @param string $entityCronSpec
     *
     * @return Entity
     */
    public function setEntityCronSpec($entityCronSpec)
    {
        $this->entityCronSpec = $entityCronSpec;

        return $this;
    }

    /**
     * Get entityCronSpec
     *
     * @return string
     */
    public function getEntityCronSpec()
    {
        return $this->entityCronSpec;
    }

    /**
     * Set entityLastExecution
     *
     * @param \DateTime $entityLastExecution
     *
     * @return Entity
     */
    public function setEntityLastExecution($entityLastExecution)
    {
        $this->entityLastExecution = $entityLastExecution;

        return $this;
    }

    /**
     * Get entityLastExecution
     *
     * @return \DateTime
     */
    public function getEntityLastExecution()
    {
        return $this->entityLastExecution;
    }
}

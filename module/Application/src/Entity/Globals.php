<?php

namespace Emporium\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Globals
 *
 * @ORM\Table(name="globals")
 * @ORM\Entity
 */
class Globals
{
    /**
     * @var integer
     *
     * @ORM\Column(name="database_version", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $databaseVersion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="database_update_time", type="datetime", nullable=true)
     */
    private $databaseUpdateTime;

    /**
     * @var string
     *
     * @ORM\Column(name="emporium_prefix", type="string", length=255, nullable=true)
     */
    private $emporiumPrefix;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_plu_import_time", type="datetime", nullable=true)
     */
    private $lastPluImportTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_plu_export_time", type="datetime", nullable=true)
     */
    private $lastPluExportTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_customer_import_time", type="datetime", nullable=true)
     */
    private $lastCustomerImportTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_customer_export_time", type="datetime", nullable=true)
     */
    private $lastCustomerExportTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="last_plu_update", type="bigint", nullable=true)
     */
    private $lastPluUpdate;

    /**
     * @var integer
     *
     * @ORM\Column(name="last_plu_export_update", type="bigint", nullable=true)
     */
    private $lastPluExportUpdate;

    /**
     * @var integer
     *
     * @ORM\Column(name="last_customer_update", type="bigint", nullable=true)
     */
    private $lastCustomerUpdate;

    /**
     * @var integer
     *
     * @ORM\Column(name="last_customer_export_update", type="bigint", nullable=true)
     */
    private $lastCustomerExportUpdate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_plu_update_time", type="datetime", nullable=true)
     */
    private $lastPluUpdateTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_customer_update_time", type="datetime", nullable=true)
     */
    private $lastCustomerUpdateTime;

    /**
     * @var string
     *
     * @ORM\Column(name="system_version", type="string", length=12, nullable=true)
     */
    private $systemVersion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="plu_by_store", type="boolean", nullable=true)
     */
    private $pluByStore;

    /**
     * @var integer
     *
     * @ORM\Column(name="max_send_sessions", type="smallint", nullable=true)
     */
    private $maxSendSessions;

    /**
     * @var integer
     *
     * @ORM\Column(name="block_transmit_delay", type="bigint", nullable=true)
     */
    private $blockTransmitDelay;

    /**
     * @var integer
     *
     * @ORM\Column(name="block_transmit_bytes", type="bigint", nullable=true)
     */
    private $blockTransmitBytes;

    /**
     * @var integer
     *
     * @ORM\Column(name="backoffice", type="smallint", nullable=true)
     */
    private $backoffice;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ignore_fiscal_date", type="boolean", nullable=true)
     */
    private $ignoreFiscalDate;

    /**
     * @var boolean
     *
     * @ORM\Column(name="plu_autosend", type="boolean", nullable=true)
     */
    private $pluAutosend;

    /**
     * @var boolean
     *
     * @ORM\Column(name="customer_autosend", type="boolean", nullable=true)
     */
    private $customerAutosend;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_plu_autosend_check", type="datetime", nullable=true)
     */
    private $lastPluAutosendCheck;

    /**
     * @var boolean
     *
     * @ORM\Column(name="plu_autosend_changed", type="boolean", nullable=true)
     */
    private $pluAutosendChanged;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_customer_autosend_check", type="datetime", nullable=true)
     */
    private $lastCustomerAutosendCheck;

    /**
     * @var boolean
     *
     * @ORM\Column(name="customer_autosend_changed", type="boolean", nullable=true)
     */
    private $customerAutosendChanged;

    /**
     * @var integer
     *
     * @ORM\Column(name="last_verify_export_update", type="bigint", nullable=true)
     */
    private $lastVerifyExportUpdate;

    /**
     * @var boolean
     *
     * @ORM\Column(name="enable_transaction_mode", type="boolean", nullable=true)
     */
    private $enableTransactionMode;

    /**
     * @var boolean
     *
     * @ORM\Column(name="customer_by_store", type="boolean", nullable=true)
     */
    private $customerByStore;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_user_import_time", type="datetime", nullable=true)
     */
    private $lastUserImportTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_user_export_time", type="datetime", nullable=true)
     */
    private $lastUserExportTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="last_user_update", type="bigint", nullable=true)
     */
    private $lastUserUpdate;

    /**
     * @var integer
     *
     * @ORM\Column(name="last_user_export_update", type="bigint", nullable=true)
     */
    private $lastUserExportUpdate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_user_update_time", type="datetime", nullable=true)
     */
    private $lastUserUpdateTime;

    /**
     * @var boolean
     *
     * @ORM\Column(name="user_autosend", type="boolean", nullable=true)
     */
    private $userAutosend;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_user_autosend_check", type="datetime", nullable=true)
     */
    private $lastUserAutosendCheck;

    /**
     * @var boolean
     *
     * @ORM\Column(name="user_autosend_changed", type="boolean", nullable=true)
     */
    private $userAutosendChanged;



    /**
     * Get databaseVersion
     *
     * @return integer
     */
    public function getDatabaseVersion()
    {
        return $this->databaseVersion;
    }

    /**
     * Set databaseUpdateTime
     *
     * @param \DateTime $databaseUpdateTime
     *
     * @return Globals
     */
    public function setDatabaseUpdateTime($databaseUpdateTime)
    {
        $this->databaseUpdateTime = $databaseUpdateTime;

        return $this;
    }

    /**
     * Get databaseUpdateTime
     *
     * @return \DateTime
     */
    public function getDatabaseUpdateTime()
    {
        return $this->databaseUpdateTime;
    }

    /**
     * Set emporiumPrefix
     *
     * @param string $emporiumPrefix
     *
     * @return Globals
     */
    public function setEmporiumPrefix($emporiumPrefix)
    {
        $this->emporiumPrefix = $emporiumPrefix;

        return $this;
    }

    /**
     * Get emporiumPrefix
     *
     * @return string
     */
    public function getEmporiumPrefix()
    {
        return $this->emporiumPrefix;
    }

    /**
     * Set lastPluImportTime
     *
     * @param \DateTime $lastPluImportTime
     *
     * @return Globals
     */
    public function setLastPluImportTime($lastPluImportTime)
    {
        $this->lastPluImportTime = $lastPluImportTime;

        return $this;
    }

    /**
     * Get lastPluImportTime
     *
     * @return \DateTime
     */
    public function getLastPluImportTime()
    {
        return $this->lastPluImportTime;
    }

    /**
     * Set lastPluExportTime
     *
     * @param \DateTime $lastPluExportTime
     *
     * @return Globals
     */
    public function setLastPluExportTime($lastPluExportTime)
    {
        $this->lastPluExportTime = $lastPluExportTime;

        return $this;
    }

    /**
     * Get lastPluExportTime
     *
     * @return \DateTime
     */
    public function getLastPluExportTime()
    {
        return $this->lastPluExportTime;
    }

    /**
     * Set lastCustomerImportTime
     *
     * @param \DateTime $lastCustomerImportTime
     *
     * @return Globals
     */
    public function setLastCustomerImportTime($lastCustomerImportTime)
    {
        $this->lastCustomerImportTime = $lastCustomerImportTime;

        return $this;
    }

    /**
     * Get lastCustomerImportTime
     *
     * @return \DateTime
     */
    public function getLastCustomerImportTime()
    {
        return $this->lastCustomerImportTime;
    }

    /**
     * Set lastCustomerExportTime
     *
     * @param \DateTime $lastCustomerExportTime
     *
     * @return Globals
     */
    public function setLastCustomerExportTime($lastCustomerExportTime)
    {
        $this->lastCustomerExportTime = $lastCustomerExportTime;

        return $this;
    }

    /**
     * Get lastCustomerExportTime
     *
     * @return \DateTime
     */
    public function getLastCustomerExportTime()
    {
        return $this->lastCustomerExportTime;
    }

    /**
     * Set lastPluUpdate
     *
     * @param integer $lastPluUpdate
     *
     * @return Globals
     */
    public function setLastPluUpdate($lastPluUpdate)
    {
        $this->lastPluUpdate = $lastPluUpdate;

        return $this;
    }

    /**
     * Get lastPluUpdate
     *
     * @return integer
     */
    public function getLastPluUpdate()
    {
        return $this->lastPluUpdate;
    }

    /**
     * Set lastPluExportUpdate
     *
     * @param integer $lastPluExportUpdate
     *
     * @return Globals
     */
    public function setLastPluExportUpdate($lastPluExportUpdate)
    {
        $this->lastPluExportUpdate = $lastPluExportUpdate;

        return $this;
    }

    /**
     * Get lastPluExportUpdate
     *
     * @return integer
     */
    public function getLastPluExportUpdate()
    {
        return $this->lastPluExportUpdate;
    }

    /**
     * Set lastCustomerUpdate
     *
     * @param integer $lastCustomerUpdate
     *
     * @return Globals
     */
    public function setLastCustomerUpdate($lastCustomerUpdate)
    {
        $this->lastCustomerUpdate = $lastCustomerUpdate;

        return $this;
    }

    /**
     * Get lastCustomerUpdate
     *
     * @return integer
     */
    public function getLastCustomerUpdate()
    {
        return $this->lastCustomerUpdate;
    }

    /**
     * Set lastCustomerExportUpdate
     *
     * @param integer $lastCustomerExportUpdate
     *
     * @return Globals
     */
    public function setLastCustomerExportUpdate($lastCustomerExportUpdate)
    {
        $this->lastCustomerExportUpdate = $lastCustomerExportUpdate;

        return $this;
    }

    /**
     * Get lastCustomerExportUpdate
     *
     * @return integer
     */
    public function getLastCustomerExportUpdate()
    {
        return $this->lastCustomerExportUpdate;
    }

    /**
     * Set lastPluUpdateTime
     *
     * @param \DateTime $lastPluUpdateTime
     *
     * @return Globals
     */
    public function setLastPluUpdateTime($lastPluUpdateTime)
    {
        $this->lastPluUpdateTime = $lastPluUpdateTime;

        return $this;
    }

    /**
     * Get lastPluUpdateTime
     *
     * @return \DateTime
     */
    public function getLastPluUpdateTime()
    {
        return $this->lastPluUpdateTime;
    }

    /**
     * Set lastCustomerUpdateTime
     *
     * @param \DateTime $lastCustomerUpdateTime
     *
     * @return Globals
     */
    public function setLastCustomerUpdateTime($lastCustomerUpdateTime)
    {
        $this->lastCustomerUpdateTime = $lastCustomerUpdateTime;

        return $this;
    }

    /**
     * Get lastCustomerUpdateTime
     *
     * @return \DateTime
     */
    public function getLastCustomerUpdateTime()
    {
        return $this->lastCustomerUpdateTime;
    }

    /**
     * Set systemVersion
     *
     * @param string $systemVersion
     *
     * @return Globals
     */
    public function setSystemVersion($systemVersion)
    {
        $this->systemVersion = $systemVersion;

        return $this;
    }

    /**
     * Get systemVersion
     *
     * @return string
     */
    public function getSystemVersion()
    {
        return $this->systemVersion;
    }

    /**
     * Set pluByStore
     *
     * @param boolean $pluByStore
     *
     * @return Globals
     */
    public function setPluByStore($pluByStore)
    {
        $this->pluByStore = $pluByStore;

        return $this;
    }

    /**
     * Get pluByStore
     *
     * @return boolean
     */
    public function getPluByStore()
    {
        return $this->pluByStore;
    }

    /**
     * Set maxSendSessions
     *
     * @param integer $maxSendSessions
     *
     * @return Globals
     */
    public function setMaxSendSessions($maxSendSessions)
    {
        $this->maxSendSessions = $maxSendSessions;

        return $this;
    }

    /**
     * Get maxSendSessions
     *
     * @return integer
     */
    public function getMaxSendSessions()
    {
        return $this->maxSendSessions;
    }

    /**
     * Set blockTransmitDelay
     *
     * @param integer $blockTransmitDelay
     *
     * @return Globals
     */
    public function setBlockTransmitDelay($blockTransmitDelay)
    {
        $this->blockTransmitDelay = $blockTransmitDelay;

        return $this;
    }

    /**
     * Get blockTransmitDelay
     *
     * @return integer
     */
    public function getBlockTransmitDelay()
    {
        return $this->blockTransmitDelay;
    }

    /**
     * Set blockTransmitBytes
     *
     * @param integer $blockTransmitBytes
     *
     * @return Globals
     */
    public function setBlockTransmitBytes($blockTransmitBytes)
    {
        $this->blockTransmitBytes = $blockTransmitBytes;

        return $this;
    }

    /**
     * Get blockTransmitBytes
     *
     * @return integer
     */
    public function getBlockTransmitBytes()
    {
        return $this->blockTransmitBytes;
    }

    /**
     * Set backoffice
     *
     * @param integer $backoffice
     *
     * @return Globals
     */
    public function setBackoffice($backoffice)
    {
        $this->backoffice = $backoffice;

        return $this;
    }

    /**
     * Get backoffice
     *
     * @return integer
     */
    public function getBackoffice()
    {
        return $this->backoffice;
    }

    /**
     * Set ignoreFiscalDate
     *
     * @param boolean $ignoreFiscalDate
     *
     * @return Globals
     */
    public function setIgnoreFiscalDate($ignoreFiscalDate)
    {
        $this->ignoreFiscalDate = $ignoreFiscalDate;

        return $this;
    }

    /**
     * Get ignoreFiscalDate
     *
     * @return boolean
     */
    public function getIgnoreFiscalDate()
    {
        return $this->ignoreFiscalDate;
    }

    /**
     * Set pluAutosend
     *
     * @param boolean $pluAutosend
     *
     * @return Globals
     */
    public function setPluAutosend($pluAutosend)
    {
        $this->pluAutosend = $pluAutosend;

        return $this;
    }

    /**
     * Get pluAutosend
     *
     * @return boolean
     */
    public function getPluAutosend()
    {
        return $this->pluAutosend;
    }

    /**
     * Set customerAutosend
     *
     * @param boolean $customerAutosend
     *
     * @return Globals
     */
    public function setCustomerAutosend($customerAutosend)
    {
        $this->customerAutosend = $customerAutosend;

        return $this;
    }

    /**
     * Get customerAutosend
     *
     * @return boolean
     */
    public function getCustomerAutosend()
    {
        return $this->customerAutosend;
    }

    /**
     * Set lastPluAutosendCheck
     *
     * @param \DateTime $lastPluAutosendCheck
     *
     * @return Globals
     */
    public function setLastPluAutosendCheck($lastPluAutosendCheck)
    {
        $this->lastPluAutosendCheck = $lastPluAutosendCheck;

        return $this;
    }

    /**
     * Get lastPluAutosendCheck
     *
     * @return \DateTime
     */
    public function getLastPluAutosendCheck()
    {
        return $this->lastPluAutosendCheck;
    }

    /**
     * Set pluAutosendChanged
     *
     * @param boolean $pluAutosendChanged
     *
     * @return Globals
     */
    public function setPluAutosendChanged($pluAutosendChanged)
    {
        $this->pluAutosendChanged = $pluAutosendChanged;

        return $this;
    }

    /**
     * Get pluAutosendChanged
     *
     * @return boolean
     */
    public function getPluAutosendChanged()
    {
        return $this->pluAutosendChanged;
    }

    /**
     * Set lastCustomerAutosendCheck
     *
     * @param \DateTime $lastCustomerAutosendCheck
     *
     * @return Globals
     */
    public function setLastCustomerAutosendCheck($lastCustomerAutosendCheck)
    {
        $this->lastCustomerAutosendCheck = $lastCustomerAutosendCheck;

        return $this;
    }

    /**
     * Get lastCustomerAutosendCheck
     *
     * @return \DateTime
     */
    public function getLastCustomerAutosendCheck()
    {
        return $this->lastCustomerAutosendCheck;
    }

    /**
     * Set customerAutosendChanged
     *
     * @param boolean $customerAutosendChanged
     *
     * @return Globals
     */
    public function setCustomerAutosendChanged($customerAutosendChanged)
    {
        $this->customerAutosendChanged = $customerAutosendChanged;

        return $this;
    }

    /**
     * Get customerAutosendChanged
     *
     * @return boolean
     */
    public function getCustomerAutosendChanged()
    {
        return $this->customerAutosendChanged;
    }

    /**
     * Set lastVerifyExportUpdate
     *
     * @param integer $lastVerifyExportUpdate
     *
     * @return Globals
     */
    public function setLastVerifyExportUpdate($lastVerifyExportUpdate)
    {
        $this->lastVerifyExportUpdate = $lastVerifyExportUpdate;

        return $this;
    }

    /**
     * Get lastVerifyExportUpdate
     *
     * @return integer
     */
    public function getLastVerifyExportUpdate()
    {
        return $this->lastVerifyExportUpdate;
    }

    /**
     * Set enableTransactionMode
     *
     * @param boolean $enableTransactionMode
     *
     * @return Globals
     */
    public function setEnableTransactionMode($enableTransactionMode)
    {
        $this->enableTransactionMode = $enableTransactionMode;

        return $this;
    }

    /**
     * Get enableTransactionMode
     *
     * @return boolean
     */
    public function getEnableTransactionMode()
    {
        return $this->enableTransactionMode;
    }

    /**
     * Set customerByStore
     *
     * @param boolean $customerByStore
     *
     * @return Globals
     */
    public function setCustomerByStore($customerByStore)
    {
        $this->customerByStore = $customerByStore;

        return $this;
    }

    /**
     * Get customerByStore
     *
     * @return boolean
     */
    public function getCustomerByStore()
    {
        return $this->customerByStore;
    }

    /**
     * Set lastUserImportTime
     *
     * @param \DateTime $lastUserImportTime
     *
     * @return Globals
     */
    public function setLastUserImportTime($lastUserImportTime)
    {
        $this->lastUserImportTime = $lastUserImportTime;

        return $this;
    }

    /**
     * Get lastUserImportTime
     *
     * @return \DateTime
     */
    public function getLastUserImportTime()
    {
        return $this->lastUserImportTime;
    }

    /**
     * Set lastUserExportTime
     *
     * @param \DateTime $lastUserExportTime
     *
     * @return Globals
     */
    public function setLastUserExportTime($lastUserExportTime)
    {
        $this->lastUserExportTime = $lastUserExportTime;

        return $this;
    }

    /**
     * Get lastUserExportTime
     *
     * @return \DateTime
     */
    public function getLastUserExportTime()
    {
        return $this->lastUserExportTime;
    }

    /**
     * Set lastUserUpdate
     *
     * @param integer $lastUserUpdate
     *
     * @return Globals
     */
    public function setLastUserUpdate($lastUserUpdate)
    {
        $this->lastUserUpdate = $lastUserUpdate;

        return $this;
    }

    /**
     * Get lastUserUpdate
     *
     * @return integer
     */
    public function getLastUserUpdate()
    {
        return $this->lastUserUpdate;
    }

    /**
     * Set lastUserExportUpdate
     *
     * @param integer $lastUserExportUpdate
     *
     * @return Globals
     */
    public function setLastUserExportUpdate($lastUserExportUpdate)
    {
        $this->lastUserExportUpdate = $lastUserExportUpdate;

        return $this;
    }

    /**
     * Get lastUserExportUpdate
     *
     * @return integer
     */
    public function getLastUserExportUpdate()
    {
        return $this->lastUserExportUpdate;
    }

    /**
     * Set lastUserUpdateTime
     *
     * @param \DateTime $lastUserUpdateTime
     *
     * @return Globals
     */
    public function setLastUserUpdateTime($lastUserUpdateTime)
    {
        $this->lastUserUpdateTime = $lastUserUpdateTime;

        return $this;
    }

    /**
     * Get lastUserUpdateTime
     *
     * @return \DateTime
     */
    public function getLastUserUpdateTime()
    {
        return $this->lastUserUpdateTime;
    }

    /**
     * Set userAutosend
     *
     * @param boolean $userAutosend
     *
     * @return Globals
     */
    public function setUserAutosend($userAutosend)
    {
        $this->userAutosend = $userAutosend;

        return $this;
    }

    /**
     * Get userAutosend
     *
     * @return boolean
     */
    public function getUserAutosend()
    {
        return $this->userAutosend;
    }

    /**
     * Set lastUserAutosendCheck
     *
     * @param \DateTime $lastUserAutosendCheck
     *
     * @return Globals
     */
    public function setLastUserAutosendCheck($lastUserAutosendCheck)
    {
        $this->lastUserAutosendCheck = $lastUserAutosendCheck;

        return $this;
    }

    /**
     * Get lastUserAutosendCheck
     *
     * @return \DateTime
     */
    public function getLastUserAutosendCheck()
    {
        return $this->lastUserAutosendCheck;
    }

    /**
     * Set userAutosendChanged
     *
     * @param boolean $userAutosendChanged
     *
     * @return Globals
     */
    public function setUserAutosendChanged($userAutosendChanged)
    {
        $this->userAutosendChanged = $userAutosendChanged;

        return $this;
    }

    /**
     * Get userAutosendChanged
     *
     * @return boolean
     */
    public function getUserAutosendChanged()
    {
        return $this->userAutosendChanged;
    }
}

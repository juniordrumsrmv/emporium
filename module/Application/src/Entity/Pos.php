<?php

namespace Emporium\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pos
 *
 * @ORM\Table(name="pos")
 * @ORM\Entity
 */
class Pos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="store_key", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $storeKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="pos_number", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $posNumber;

    /**
     * @var boolean
     *
     * @ORM\Column(name="pos_decimals", type="boolean", nullable=false)
     */
    private $posDecimals;

    /**
     * @var string
     *
     * @ORM\Column(name="pos_name", type="string", length=30, nullable=false)
     */
    private $posName;

    /**
     * @var string
     *
     * @ORM\Column(name="pos_serial", type="string", length=20, nullable=false)
     */
    private $posSerial;

    /**
     * @var string
     *
     * @ORM\Column(name="pos_version", type="string", length=20, nullable=false)
     */
    private $posVersion;

    /**
     * @var string
     *
     * @ORM\Column(name="pos_impress", type="string", length=20, nullable=false)
     */
    private $posImpress;

    /**
     * @var string
     *
     * @ORM\Column(name="pos_checkout", type="string", length=20, nullable=false)
     */
    private $posCheckout;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pos_date_inc", type="date", nullable=false)
     */
    private $posDateInc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pos_date_alt", type="date", nullable=false)
     */
    private $posDateAlt;

    /**
     * @var integer
     *
     * @ORM\Column(name="pos_status", type="smallint", nullable=false)
     */
    private $posStatus;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pos_contact", type="datetime", nullable=false)
     */
    private $posContact;

    /**
     * @var string
     *
     * @ORM\Column(name="pos_model", type="string", length=20, nullable=false)
     */
    private $posModel;

    /**
     * @var string
     *
     * @ORM\Column(name="pos_IP", type="string", length=20, nullable=true)
     */
    private $posIp;

    /**
     * @var boolean
     *
     * @ORM\Column(name="pos_system", type="boolean", nullable=true)
     */
    private $posSystem;

    /**
     * @var string
     *
     * @ORM\Column(name="pos_invoice_printer", type="string", length=20, nullable=true)
     */
    private $posInvoicePrinter;

    /**
     * @var integer
     *
     * @ORM\Column(name="pos_last_plu_update", type="bigint", nullable=true)
     */
    private $posLastPluUpdate;

    /**
     * @var integer
     *
     * @ORM\Column(name="pos_last_customer_update", type="bigint", nullable=true)
     */
    private $posLastCustomerUpdate;

    /**
     * @var string
     *
     * @ORM\Column(name="pos_data", type="blob", length=65535, nullable=true)
     */
    private $posData;

    /**
     * @var boolean
     *
     * @ORM\Column(name="pos_transmit_type", type="boolean", nullable=true)
     */
    private $posTransmitType;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pos_last_plu_export_time", type="datetime", nullable=true)
     */
    private $posLastPluExportTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pos_last_plu_update_time", type="datetime", nullable=true)
     */
    private $posLastPluUpdateTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pos_last_customer_export_time", type="datetime", nullable=true)
     */
    private $posLastCustomerExportTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pos_last_customer_update_time", type="datetime", nullable=true)
     */
    private $posLastCustomerUpdateTime;

    /**
     * @var string
     *
     * @ORM\Column(name="pos_internal_ip", type="string", length=20, nullable=true)
     */
    private $posInternalIp;

    /**
     * @var integer
     *
     * @ORM\Column(name="pos_internal_port", type="smallint", nullable=true)
     */
    private $posInternalPort;

    /**
     * @var boolean
     *
     * @ORM\Column(name="pos_automatic_option", type="boolean", nullable=true)
     */
    private $posAutomaticOption;

    /**
     * @var boolean
     *
     * @ORM\Column(name="pos_rec_status", type="boolean", nullable=true)
     */
    private $posRecStatus;

    /**
     * @var integer
     *
     * @ORM\Column(name="pos_type_key", type="smallint", nullable=true)
     */
    private $posTypeKey;

    /**
     * @var boolean
     *
     * @ORM\Column(name="pos_emergency_status", type="boolean", nullable=true)
     */
    private $posEmergencyStatus;

    /**
     * @var integer
     *
     * @ORM\Column(name="pos_plu_type", type="smallint", nullable=true)
     */
    private $posPluType;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="info_time", type="datetime", nullable=true)
     */
    private $infoTime;

    /**
     * @var string
     *
     * @ORM\Column(name="os_name", type="string", length=255, nullable=true)
     */
    private $osName;

    /**
     * @var string
     *
     * @ORM\Column(name="os_version", type="string", length=255, nullable=true)
     */
    private $osVersion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="os_code", type="boolean", nullable=true)
     */
    private $osCode;

    /**
     * @var boolean
     *
     * @ORM\Column(name="cpu_count", type="boolean", nullable=true)
     */
    private $cpuCount;

    /**
     * @var integer
     *
     * @ORM\Column(name="memory_total", type="bigint", nullable=true)
     */
    private $memoryTotal;

    /**
     * @var integer
     *
     * @ORM\Column(name="swap_total", type="bigint", nullable=true)
     */
    private $swapTotal;

    /**
     * @var integer
     *
     * @ORM\Column(name="swap_free", type="bigint", nullable=true)
     */
    private $swapFree;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_user_update_time", type="datetime", nullable=true)
     */
    private $lastUserUpdateTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="last_user_update", type="bigint", nullable=true)
     */
    private $lastUserUpdate;

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
     * @var \DateTime
     *
     * @ORM\Column(name="last_user_autosend_time", type="datetime", nullable=true)
     */
    private $lastUserAutosendTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pos_nfce_time", type="datetime", nullable=true)
     */
    private $posNfceTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="pos_active", type="smallint", nullable=false)
     */
    private $posActive;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="cert_expr_date", type="datetime", nullable=true)
     */
    private $certExprDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pos_sat_time", type="datetime", nullable=true)
     */
    private $posSatTime;



    /**
     * Set storeKey
     *
     * @param integer $storeKey
     *
     * @return Pos
     */
    public function setStoreKey($storeKey)
    {
        $this->storeKey = $storeKey;

        return $this;
    }

    /**
     * Get storeKey
     *
     * @return integer
     */
    public function getStoreKey()
    {
        return $this->storeKey;
    }

    /**
     * Set posNumber
     *
     * @param integer $posNumber
     *
     * @return Pos
     */
    public function setPosNumber($posNumber)
    {
        $this->posNumber = $posNumber;

        return $this;
    }

    /**
     * Get posNumber
     *
     * @return integer
     */
    public function getPosNumber()
    {
        return $this->posNumber;
    }

    /**
     * Set posDecimals
     *
     * @param boolean $posDecimals
     *
     * @return Pos
     */
    public function setPosDecimals($posDecimals)
    {
        $this->posDecimals = $posDecimals;

        return $this;
    }

    /**
     * Get posDecimals
     *
     * @return boolean
     */
    public function getPosDecimals()
    {
        return $this->posDecimals;
    }

    /**
     * Set posName
     *
     * @param string $posName
     *
     * @return Pos
     */
    public function setPosName($posName)
    {
        $this->posName = $posName;

        return $this;
    }

    /**
     * Get posName
     *
     * @return string
     */
    public function getPosName()
    {
        return $this->posName;
    }

    /**
     * Set posSerial
     *
     * @param string $posSerial
     *
     * @return Pos
     */
    public function setPosSerial($posSerial)
    {
        $this->posSerial = $posSerial;

        return $this;
    }

    /**
     * Get posSerial
     *
     * @return string
     */
    public function getPosSerial()
    {
        return $this->posSerial;
    }

    /**
     * Set posVersion
     *
     * @param string $posVersion
     *
     * @return Pos
     */
    public function setPosVersion($posVersion)
    {
        $this->posVersion = $posVersion;

        return $this;
    }

    /**
     * Get posVersion
     *
     * @return string
     */
    public function getPosVersion()
    {
        return $this->posVersion;
    }

    /**
     * Set posImpress
     *
     * @param string $posImpress
     *
     * @return Pos
     */
    public function setPosImpress($posImpress)
    {
        $this->posImpress = $posImpress;

        return $this;
    }

    /**
     * Get posImpress
     *
     * @return string
     */
    public function getPosImpress()
    {
        return $this->posImpress;
    }

    /**
     * Set posCheckout
     *
     * @param string $posCheckout
     *
     * @return Pos
     */
    public function setPosCheckout($posCheckout)
    {
        $this->posCheckout = $posCheckout;

        return $this;
    }

    /**
     * Get posCheckout
     *
     * @return string
     */
    public function getPosCheckout()
    {
        return $this->posCheckout;
    }

    /**
     * Set posDateInc
     *
     * @param \DateTime $posDateInc
     *
     * @return Pos
     */
    public function setPosDateInc($posDateInc)
    {
        $this->posDateInc = $posDateInc;

        return $this;
    }

    /**
     * Get posDateInc
     *
     * @return \DateTime
     */
    public function getPosDateInc()
    {
        return $this->posDateInc;
    }

    /**
     * Set posDateAlt
     *
     * @param \DateTime $posDateAlt
     *
     * @return Pos
     */
    public function setPosDateAlt($posDateAlt)
    {
        $this->posDateAlt = $posDateAlt;

        return $this;
    }

    /**
     * Get posDateAlt
     *
     * @return \DateTime
     */
    public function getPosDateAlt()
    {
        return $this->posDateAlt;
    }

    /**
     * Set posStatus
     *
     * @param integer $posStatus
     *
     * @return Pos
     */
    public function setPosStatus($posStatus)
    {
        $this->posStatus = $posStatus;

        return $this;
    }

    /**
     * Get posStatus
     *
     * @return integer
     */
    public function getPosStatus()
    {
        return $this->posStatus;
    }

    /**
     * Set posContact
     *
     * @param \DateTime $posContact
     *
     * @return Pos
     */
    public function setPosContact($posContact)
    {
        $this->posContact = $posContact;

        return $this;
    }

    /**
     * Get posContact
     *
     * @return \DateTime
     */
    public function getPosContact()
    {
        return $this->posContact;
    }

    /**
     * Set posModel
     *
     * @param string $posModel
     *
     * @return Pos
     */
    public function setPosModel($posModel)
    {
        $this->posModel = $posModel;

        return $this;
    }

    /**
     * Get posModel
     *
     * @return string
     */
    public function getPosModel()
    {
        return $this->posModel;
    }

    /**
     * Set posIp
     *
     * @param string $posIp
     *
     * @return Pos
     */
    public function setPosIp($posIp)
    {
        $this->posIp = $posIp;

        return $this;
    }

    /**
     * Get posIp
     *
     * @return string
     */
    public function getPosIp()
    {
        return $this->posIp;
    }

    /**
     * Set posSystem
     *
     * @param boolean $posSystem
     *
     * @return Pos
     */
    public function setPosSystem($posSystem)
    {
        $this->posSystem = $posSystem;

        return $this;
    }

    /**
     * Get posSystem
     *
     * @return boolean
     */
    public function getPosSystem()
    {
        return $this->posSystem;
    }

    /**
     * Set posInvoicePrinter
     *
     * @param string $posInvoicePrinter
     *
     * @return Pos
     */
    public function setPosInvoicePrinter($posInvoicePrinter)
    {
        $this->posInvoicePrinter = $posInvoicePrinter;

        return $this;
    }

    /**
     * Get posInvoicePrinter
     *
     * @return string
     */
    public function getPosInvoicePrinter()
    {
        return $this->posInvoicePrinter;
    }

    /**
     * Set posLastPluUpdate
     *
     * @param integer $posLastPluUpdate
     *
     * @return Pos
     */
    public function setPosLastPluUpdate($posLastPluUpdate)
    {
        $this->posLastPluUpdate = $posLastPluUpdate;

        return $this;
    }

    /**
     * Get posLastPluUpdate
     *
     * @return integer
     */
    public function getPosLastPluUpdate()
    {
        return $this->posLastPluUpdate;
    }

    /**
     * Set posLastCustomerUpdate
     *
     * @param integer $posLastCustomerUpdate
     *
     * @return Pos
     */
    public function setPosLastCustomerUpdate($posLastCustomerUpdate)
    {
        $this->posLastCustomerUpdate = $posLastCustomerUpdate;

        return $this;
    }

    /**
     * Get posLastCustomerUpdate
     *
     * @return integer
     */
    public function getPosLastCustomerUpdate()
    {
        return $this->posLastCustomerUpdate;
    }

    /**
     * Set posData
     *
     * @param string $posData
     *
     * @return Pos
     */
    public function setPosData($posData)
    {
        $this->posData = $posData;

        return $this;
    }

    /**
     * Get posData
     *
     * @return string
     */
    public function getPosData()
    {
        return $this->posData;
    }

    /**
     * Set posTransmitType
     *
     * @param boolean $posTransmitType
     *
     * @return Pos
     */
    public function setPosTransmitType($posTransmitType)
    {
        $this->posTransmitType = $posTransmitType;

        return $this;
    }

    /**
     * Get posTransmitType
     *
     * @return boolean
     */
    public function getPosTransmitType()
    {
        return $this->posTransmitType;
    }

    /**
     * Set posLastPluExportTime
     *
     * @param \DateTime $posLastPluExportTime
     *
     * @return Pos
     */
    public function setPosLastPluExportTime($posLastPluExportTime)
    {
        $this->posLastPluExportTime = $posLastPluExportTime;

        return $this;
    }

    /**
     * Get posLastPluExportTime
     *
     * @return \DateTime
     */
    public function getPosLastPluExportTime()
    {
        return $this->posLastPluExportTime;
    }

    /**
     * Set posLastPluUpdateTime
     *
     * @param \DateTime $posLastPluUpdateTime
     *
     * @return Pos
     */
    public function setPosLastPluUpdateTime($posLastPluUpdateTime)
    {
        $this->posLastPluUpdateTime = $posLastPluUpdateTime;

        return $this;
    }

    /**
     * Get posLastPluUpdateTime
     *
     * @return \DateTime
     */
    public function getPosLastPluUpdateTime()
    {
        return $this->posLastPluUpdateTime;
    }

    /**
     * Set posLastCustomerExportTime
     *
     * @param \DateTime $posLastCustomerExportTime
     *
     * @return Pos
     */
    public function setPosLastCustomerExportTime($posLastCustomerExportTime)
    {
        $this->posLastCustomerExportTime = $posLastCustomerExportTime;

        return $this;
    }

    /**
     * Get posLastCustomerExportTime
     *
     * @return \DateTime
     */
    public function getPosLastCustomerExportTime()
    {
        return $this->posLastCustomerExportTime;
    }

    /**
     * Set posLastCustomerUpdateTime
     *
     * @param \DateTime $posLastCustomerUpdateTime
     *
     * @return Pos
     */
    public function setPosLastCustomerUpdateTime($posLastCustomerUpdateTime)
    {
        $this->posLastCustomerUpdateTime = $posLastCustomerUpdateTime;

        return $this;
    }

    /**
     * Get posLastCustomerUpdateTime
     *
     * @return \DateTime
     */
    public function getPosLastCustomerUpdateTime()
    {
        return $this->posLastCustomerUpdateTime;
    }

    /**
     * Set posInternalIp
     *
     * @param string $posInternalIp
     *
     * @return Pos
     */
    public function setPosInternalIp($posInternalIp)
    {
        $this->posInternalIp = $posInternalIp;

        return $this;
    }

    /**
     * Get posInternalIp
     *
     * @return string
     */
    public function getPosInternalIp()
    {
        return $this->posInternalIp;
    }

    /**
     * Set posInternalPort
     *
     * @param integer $posInternalPort
     *
     * @return Pos
     */
    public function setPosInternalPort($posInternalPort)
    {
        $this->posInternalPort = $posInternalPort;

        return $this;
    }

    /**
     * Get posInternalPort
     *
     * @return integer
     */
    public function getPosInternalPort()
    {
        return $this->posInternalPort;
    }

    /**
     * Set posAutomaticOption
     *
     * @param boolean $posAutomaticOption
     *
     * @return Pos
     */
    public function setPosAutomaticOption($posAutomaticOption)
    {
        $this->posAutomaticOption = $posAutomaticOption;

        return $this;
    }

    /**
     * Get posAutomaticOption
     *
     * @return boolean
     */
    public function getPosAutomaticOption()
    {
        return $this->posAutomaticOption;
    }

    /**
     * Set posRecStatus
     *
     * @param boolean $posRecStatus
     *
     * @return Pos
     */
    public function setPosRecStatus($posRecStatus)
    {
        $this->posRecStatus = $posRecStatus;

        return $this;
    }

    /**
     * Get posRecStatus
     *
     * @return boolean
     */
    public function getPosRecStatus()
    {
        return $this->posRecStatus;
    }

    /**
     * Set posTypeKey
     *
     * @param integer $posTypeKey
     *
     * @return Pos
     */
    public function setPosTypeKey($posTypeKey)
    {
        $this->posTypeKey = $posTypeKey;

        return $this;
    }

    /**
     * Get posTypeKey
     *
     * @return integer
     */
    public function getPosTypeKey()
    {
        return $this->posTypeKey;
    }

    /**
     * Set posEmergencyStatus
     *
     * @param boolean $posEmergencyStatus
     *
     * @return Pos
     */
    public function setPosEmergencyStatus($posEmergencyStatus)
    {
        $this->posEmergencyStatus = $posEmergencyStatus;

        return $this;
    }

    /**
     * Get posEmergencyStatus
     *
     * @return boolean
     */
    public function getPosEmergencyStatus()
    {
        return $this->posEmergencyStatus;
    }

    /**
     * Set posPluType
     *
     * @param integer $posPluType
     *
     * @return Pos
     */
    public function setPosPluType($posPluType)
    {
        $this->posPluType = $posPluType;

        return $this;
    }

    /**
     * Get posPluType
     *
     * @return integer
     */
    public function getPosPluType()
    {
        return $this->posPluType;
    }

    /**
     * Set infoTime
     *
     * @param \DateTime $infoTime
     *
     * @return Pos
     */
    public function setInfoTime($infoTime)
    {
        $this->infoTime = $infoTime;

        return $this;
    }

    /**
     * Get infoTime
     *
     * @return \DateTime
     */
    public function getInfoTime()
    {
        return $this->infoTime;
    }

    /**
     * Set osName
     *
     * @param string $osName
     *
     * @return Pos
     */
    public function setOsName($osName)
    {
        $this->osName = $osName;

        return $this;
    }

    /**
     * Get osName
     *
     * @return string
     */
    public function getOsName()
    {
        return $this->osName;
    }

    /**
     * Set osVersion
     *
     * @param string $osVersion
     *
     * @return Pos
     */
    public function setOsVersion($osVersion)
    {
        $this->osVersion = $osVersion;

        return $this;
    }

    /**
     * Get osVersion
     *
     * @return string
     */
    public function getOsVersion()
    {
        return $this->osVersion;
    }

    /**
     * Set osCode
     *
     * @param boolean $osCode
     *
     * @return Pos
     */
    public function setOsCode($osCode)
    {
        $this->osCode = $osCode;

        return $this;
    }

    /**
     * Get osCode
     *
     * @return boolean
     */
    public function getOsCode()
    {
        return $this->osCode;
    }

    /**
     * Set cpuCount
     *
     * @param boolean $cpuCount
     *
     * @return Pos
     */
    public function setCpuCount($cpuCount)
    {
        $this->cpuCount = $cpuCount;

        return $this;
    }

    /**
     * Get cpuCount
     *
     * @return boolean
     */
    public function getCpuCount()
    {
        return $this->cpuCount;
    }

    /**
     * Set memoryTotal
     *
     * @param integer $memoryTotal
     *
     * @return Pos
     */
    public function setMemoryTotal($memoryTotal)
    {
        $this->memoryTotal = $memoryTotal;

        return $this;
    }

    /**
     * Get memoryTotal
     *
     * @return integer
     */
    public function getMemoryTotal()
    {
        return $this->memoryTotal;
    }

    /**
     * Set swapTotal
     *
     * @param integer $swapTotal
     *
     * @return Pos
     */
    public function setSwapTotal($swapTotal)
    {
        $this->swapTotal = $swapTotal;

        return $this;
    }

    /**
     * Get swapTotal
     *
     * @return integer
     */
    public function getSwapTotal()
    {
        return $this->swapTotal;
    }

    /**
     * Set swapFree
     *
     * @param integer $swapFree
     *
     * @return Pos
     */
    public function setSwapFree($swapFree)
    {
        $this->swapFree = $swapFree;

        return $this;
    }

    /**
     * Get swapFree
     *
     * @return integer
     */
    public function getSwapFree()
    {
        return $this->swapFree;
    }

    /**
     * Set lastUserUpdateTime
     *
     * @param \DateTime $lastUserUpdateTime
     *
     * @return Pos
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
     * Set lastUserUpdate
     *
     * @param integer $lastUserUpdate
     *
     * @return Pos
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
     * Set userAutosend
     *
     * @param boolean $userAutosend
     *
     * @return Pos
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
     * @return Pos
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
     * @return Pos
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

    /**
     * Set lastUserAutosendTime
     *
     * @param \DateTime $lastUserAutosendTime
     *
     * @return Pos
     */
    public function setLastUserAutosendTime($lastUserAutosendTime)
    {
        $this->lastUserAutosendTime = $lastUserAutosendTime;

        return $this;
    }

    /**
     * Get lastUserAutosendTime
     *
     * @return \DateTime
     */
    public function getLastUserAutosendTime()
    {
        return $this->lastUserAutosendTime;
    }

    /**
     * Set posNfceTime
     *
     * @param \DateTime $posNfceTime
     *
     * @return Pos
     */
    public function setPosNfceTime($posNfceTime)
    {
        $this->posNfceTime = $posNfceTime;

        return $this;
    }

    /**
     * Get posNfceTime
     *
     * @return \DateTime
     */
    public function getPosNfceTime()
    {
        return $this->posNfceTime;
    }

    /**
     * Set posActive
     *
     * @param integer $posActive
     *
     * @return Pos
     */
    public function setPosActive($posActive)
    {
        $this->posActive = $posActive;

        return $this;
    }

    /**
     * Get posActive
     *
     * @return integer
     */
    public function getPosActive()
    {
        return $this->posActive;
    }

    /**
     * Set certExprDate
     *
     * @param \DateTime $certExprDate
     *
     * @return Pos
     */
    public function setCertExprDate($certExprDate)
    {
        $this->certExprDate = $certExprDate;

        return $this;
    }

    /**
     * Get certExprDate
     *
     * @return \DateTime
     */
    public function getCertExprDate()
    {
        return $this->certExprDate;
    }

    /**
     * Set posSatTime
     *
     * @param \DateTime $posSatTime
     *
     * @return Pos
     */
    public function setPosSatTime($posSatTime)
    {
        $this->posSatTime = $posSatTime;

        return $this;
    }

    /**
     * Get posSatTime
     *
     * @return \DateTime
     */
    public function getPosSatTime()
    {
        return $this->posSatTime;
    }
}

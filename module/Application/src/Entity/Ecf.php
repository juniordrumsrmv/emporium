<?php

namespace Emporium\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ecf
 *
 * @ORM\Table(name="ecf")
 * @ORM\Entity
 */
class Ecf
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
     * @ORM\Column(name="ecf_number", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ecfNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="ecf_name", type="string", length=30, nullable=false)
     */
    private $ecfName;

    /**
     * @var string
     *
     * @ORM\Column(name="ecf_serial", type="string", length=30, nullable=false)
     */
    private $ecfSerial;

    /**
     * @var string
     *
     * @ORM\Column(name="ecf_version", type="string", length=20, nullable=false)
     */
    private $ecfVersion;

    /**
     * @var string
     *
     * @ORM\Column(name="ecf_model", type="string", length=40, nullable=false)
     */
    private $ecfModel;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ecf_date_inc", type="date", nullable=false)
     */
    private $ecfDateInc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ecf_date_alt", type="date", nullable=false)
     */
    private $ecfDateAlt;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ecf_status", type="boolean", nullable=true)
     */
    private $ecfStatus;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ecf_emergency_status", type="boolean", nullable=true)
     */
    private $ecfEmergencyStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="ecf_manufacturer", type="string", length=40, nullable=true)
     */
    private $ecfManufacturer;

    /**
     * @var string
     *
     * @ORM\Column(name="ecf_mfd", type="string", length=30, nullable=true)
     */
    private $ecfMfd;

    /**
     * @var string
     *
     * @ORM\Column(name="ecf_aditional_mfd", type="string", length=1, nullable=true)
     */
    private $ecfAditionalMfd;

    /**
     * @var string
     *
     * @ORM\Column(name="ecf_type", type="string", length=10, nullable=true)
     */
    private $ecfType;

    /**
     * @var integer
     *
     * @ORM\Column(name="ecf_ticket_system", type="integer", nullable=true)
     */
    private $ecfTicketSystem;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ecf_system", type="boolean", nullable=true)
     */
    private $ecfSystem;

    /**
     * @var string
     *
     * @ORM\Column(name="ecf_firmware_version", type="string", length=20, nullable=true)
     */
    private $ecfFirmwareVersion;

    /**
     * @var string
     *
     * @ORM\Column(name="ecf_firmware_date", type="string", length=8, nullable=true)
     */
    private $ecfFirmwareDate;

    /**
     * @var string
     *
     * @ORM\Column(name="ecf_firmware_time", type="string", length=6, nullable=true)
     */
    private $ecfFirmwareTime;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ecf_owner_number", type="boolean", nullable=true)
     */
    private $ecfOwnerNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="ecf_owner_id", type="string", length=20, nullable=true)
     */
    private $ecfOwnerId;

    /**
     * @var string
     *
     * @ORM\Column(name="ecf_owner_alt_id", type="string", length=20, nullable=true)
     */
    private $ecfOwnerAltId;

    /**
     * @var string
     *
     * @ORM\Column(name="ecf_owner_name", type="string", length=60, nullable=true)
     */
    private $ecfOwnerName;

    /**
     * @var string
     *
     * @ORM\Column(name="ecf_owner_address", type="string", length=60, nullable=true)
     */
    private $ecfOwnerAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="ecf_owner_insertion_date", type="string", length=8, nullable=true)
     */
    private $ecfOwnerInsertionDate;

    /**
     * @var string
     *
     * @ORM\Column(name="ecf_owner_insertion_time", type="string", length=6, nullable=true)
     */
    private $ecfOwnerInsertionTime;



    /**
     * Set storeKey
     *
     * @param integer $storeKey
     *
     * @return Ecf
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
     * Set ecfNumber
     *
     * @param integer $ecfNumber
     *
     * @return Ecf
     */
    public function setEcfNumber($ecfNumber)
    {
        $this->ecfNumber = $ecfNumber;

        return $this;
    }

    /**
     * Get ecfNumber
     *
     * @return integer
     */
    public function getEcfNumber()
    {
        return $this->ecfNumber;
    }

    /**
     * Set ecfName
     *
     * @param string $ecfName
     *
     * @return Ecf
     */
    public function setEcfName($ecfName)
    {
        $this->ecfName = $ecfName;

        return $this;
    }

    /**
     * Get ecfName
     *
     * @return string
     */
    public function getEcfName()
    {
        return $this->ecfName;
    }

    /**
     * Set ecfSerial
     *
     * @param string $ecfSerial
     *
     * @return Ecf
     */
    public function setEcfSerial($ecfSerial)
    {
        $this->ecfSerial = $ecfSerial;

        return $this;
    }

    /**
     * Get ecfSerial
     *
     * @return string
     */
    public function getEcfSerial()
    {
        return $this->ecfSerial;
    }

    /**
     * Set ecfVersion
     *
     * @param string $ecfVersion
     *
     * @return Ecf
     */
    public function setEcfVersion($ecfVersion)
    {
        $this->ecfVersion = $ecfVersion;

        return $this;
    }

    /**
     * Get ecfVersion
     *
     * @return string
     */
    public function getEcfVersion()
    {
        return $this->ecfVersion;
    }

    /**
     * Set ecfModel
     *
     * @param string $ecfModel
     *
     * @return Ecf
     */
    public function setEcfModel($ecfModel)
    {
        $this->ecfModel = $ecfModel;

        return $this;
    }

    /**
     * Get ecfModel
     *
     * @return string
     */
    public function getEcfModel()
    {
        return $this->ecfModel;
    }

    /**
     * Set ecfDateInc
     *
     * @param \DateTime $ecfDateInc
     *
     * @return Ecf
     */
    public function setEcfDateInc($ecfDateInc)
    {
        $this->ecfDateInc = $ecfDateInc;

        return $this;
    }

    /**
     * Get ecfDateInc
     *
     * @return \DateTime
     */
    public function getEcfDateInc()
    {
        return $this->ecfDateInc;
    }

    /**
     * Set ecfDateAlt
     *
     * @param \DateTime $ecfDateAlt
     *
     * @return Ecf
     */
    public function setEcfDateAlt($ecfDateAlt)
    {
        $this->ecfDateAlt = $ecfDateAlt;

        return $this;
    }

    /**
     * Get ecfDateAlt
     *
     * @return \DateTime
     */
    public function getEcfDateAlt()
    {
        return $this->ecfDateAlt;
    }

    /**
     * Set ecfStatus
     *
     * @param boolean $ecfStatus
     *
     * @return Ecf
     */
    public function setEcfStatus($ecfStatus)
    {
        $this->ecfStatus = $ecfStatus;

        return $this;
    }

    /**
     * Get ecfStatus
     *
     * @return boolean
     */
    public function getEcfStatus()
    {
        return $this->ecfStatus;
    }

    /**
     * Set ecfEmergencyStatus
     *
     * @param boolean $ecfEmergencyStatus
     *
     * @return Ecf
     */
    public function setEcfEmergencyStatus($ecfEmergencyStatus)
    {
        $this->ecfEmergencyStatus = $ecfEmergencyStatus;

        return $this;
    }

    /**
     * Get ecfEmergencyStatus
     *
     * @return boolean
     */
    public function getEcfEmergencyStatus()
    {
        return $this->ecfEmergencyStatus;
    }

    /**
     * Set ecfManufacturer
     *
     * @param string $ecfManufacturer
     *
     * @return Ecf
     */
    public function setEcfManufacturer($ecfManufacturer)
    {
        $this->ecfManufacturer = $ecfManufacturer;

        return $this;
    }

    /**
     * Get ecfManufacturer
     *
     * @return string
     */
    public function getEcfManufacturer()
    {
        return $this->ecfManufacturer;
    }

    /**
     * Set ecfMfd
     *
     * @param string $ecfMfd
     *
     * @return Ecf
     */
    public function setEcfMfd($ecfMfd)
    {
        $this->ecfMfd = $ecfMfd;

        return $this;
    }

    /**
     * Get ecfMfd
     *
     * @return string
     */
    public function getEcfMfd()
    {
        return $this->ecfMfd;
    }

    /**
     * Set ecfAditionalMfd
     *
     * @param string $ecfAditionalMfd
     *
     * @return Ecf
     */
    public function setEcfAditionalMfd($ecfAditionalMfd)
    {
        $this->ecfAditionalMfd = $ecfAditionalMfd;

        return $this;
    }

    /**
     * Get ecfAditionalMfd
     *
     * @return string
     */
    public function getEcfAditionalMfd()
    {
        return $this->ecfAditionalMfd;
    }

    /**
     * Set ecfType
     *
     * @param string $ecfType
     *
     * @return Ecf
     */
    public function setEcfType($ecfType)
    {
        $this->ecfType = $ecfType;

        return $this;
    }

    /**
     * Get ecfType
     *
     * @return string
     */
    public function getEcfType()
    {
        return $this->ecfType;
    }

    /**
     * Set ecfTicketSystem
     *
     * @param integer $ecfTicketSystem
     *
     * @return Ecf
     */
    public function setEcfTicketSystem($ecfTicketSystem)
    {
        $this->ecfTicketSystem = $ecfTicketSystem;

        return $this;
    }

    /**
     * Get ecfTicketSystem
     *
     * @return integer
     */
    public function getEcfTicketSystem()
    {
        return $this->ecfTicketSystem;
    }

    /**
     * Set ecfSystem
     *
     * @param boolean $ecfSystem
     *
     * @return Ecf
     */
    public function setEcfSystem($ecfSystem)
    {
        $this->ecfSystem = $ecfSystem;

        return $this;
    }

    /**
     * Get ecfSystem
     *
     * @return boolean
     */
    public function getEcfSystem()
    {
        return $this->ecfSystem;
    }

    /**
     * Set ecfFirmwareVersion
     *
     * @param string $ecfFirmwareVersion
     *
     * @return Ecf
     */
    public function setEcfFirmwareVersion($ecfFirmwareVersion)
    {
        $this->ecfFirmwareVersion = $ecfFirmwareVersion;

        return $this;
    }

    /**
     * Get ecfFirmwareVersion
     *
     * @return string
     */
    public function getEcfFirmwareVersion()
    {
        return $this->ecfFirmwareVersion;
    }

    /**
     * Set ecfFirmwareDate
     *
     * @param string $ecfFirmwareDate
     *
     * @return Ecf
     */
    public function setEcfFirmwareDate($ecfFirmwareDate)
    {
        $this->ecfFirmwareDate = $ecfFirmwareDate;

        return $this;
    }

    /**
     * Get ecfFirmwareDate
     *
     * @return string
     */
    public function getEcfFirmwareDate()
    {
        return $this->ecfFirmwareDate;
    }

    /**
     * Set ecfFirmwareTime
     *
     * @param string $ecfFirmwareTime
     *
     * @return Ecf
     */
    public function setEcfFirmwareTime($ecfFirmwareTime)
    {
        $this->ecfFirmwareTime = $ecfFirmwareTime;

        return $this;
    }

    /**
     * Get ecfFirmwareTime
     *
     * @return string
     */
    public function getEcfFirmwareTime()
    {
        return $this->ecfFirmwareTime;
    }

    /**
     * Set ecfOwnerNumber
     *
     * @param boolean $ecfOwnerNumber
     *
     * @return Ecf
     */
    public function setEcfOwnerNumber($ecfOwnerNumber)
    {
        $this->ecfOwnerNumber = $ecfOwnerNumber;

        return $this;
    }

    /**
     * Get ecfOwnerNumber
     *
     * @return boolean
     */
    public function getEcfOwnerNumber()
    {
        return $this->ecfOwnerNumber;
    }

    /**
     * Set ecfOwnerId
     *
     * @param string $ecfOwnerId
     *
     * @return Ecf
     */
    public function setEcfOwnerId($ecfOwnerId)
    {
        $this->ecfOwnerId = $ecfOwnerId;

        return $this;
    }

    /**
     * Get ecfOwnerId
     *
     * @return string
     */
    public function getEcfOwnerId()
    {
        return $this->ecfOwnerId;
    }

    /**
     * Set ecfOwnerAltId
     *
     * @param string $ecfOwnerAltId
     *
     * @return Ecf
     */
    public function setEcfOwnerAltId($ecfOwnerAltId)
    {
        $this->ecfOwnerAltId = $ecfOwnerAltId;

        return $this;
    }

    /**
     * Get ecfOwnerAltId
     *
     * @return string
     */
    public function getEcfOwnerAltId()
    {
        return $this->ecfOwnerAltId;
    }

    /**
     * Set ecfOwnerName
     *
     * @param string $ecfOwnerName
     *
     * @return Ecf
     */
    public function setEcfOwnerName($ecfOwnerName)
    {
        $this->ecfOwnerName = $ecfOwnerName;

        return $this;
    }

    /**
     * Get ecfOwnerName
     *
     * @return string
     */
    public function getEcfOwnerName()
    {
        return $this->ecfOwnerName;
    }

    /**
     * Set ecfOwnerAddress
     *
     * @param string $ecfOwnerAddress
     *
     * @return Ecf
     */
    public function setEcfOwnerAddress($ecfOwnerAddress)
    {
        $this->ecfOwnerAddress = $ecfOwnerAddress;

        return $this;
    }

    /**
     * Get ecfOwnerAddress
     *
     * @return string
     */
    public function getEcfOwnerAddress()
    {
        return $this->ecfOwnerAddress;
    }

    /**
     * Set ecfOwnerInsertionDate
     *
     * @param string $ecfOwnerInsertionDate
     *
     * @return Ecf
     */
    public function setEcfOwnerInsertionDate($ecfOwnerInsertionDate)
    {
        $this->ecfOwnerInsertionDate = $ecfOwnerInsertionDate;

        return $this;
    }

    /**
     * Get ecfOwnerInsertionDate
     *
     * @return string
     */
    public function getEcfOwnerInsertionDate()
    {
        return $this->ecfOwnerInsertionDate;
    }

    /**
     * Set ecfOwnerInsertionTime
     *
     * @param string $ecfOwnerInsertionTime
     *
     * @return Ecf
     */
    public function setEcfOwnerInsertionTime($ecfOwnerInsertionTime)
    {
        $this->ecfOwnerInsertionTime = $ecfOwnerInsertionTime;

        return $this;
    }

    /**
     * Get ecfOwnerInsertionTime
     *
     * @return string
     */
    public function getEcfOwnerInsertionTime()
    {
        return $this->ecfOwnerInsertionTime;
    }
}

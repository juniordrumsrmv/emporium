<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pump
 *
 * @ORM\Table(name="pump")
 * @ORM\Entity
 */
class Pump
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
     * @ORM\Column(name="pump_number", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $pumpNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="pump_name", type="string", length=30, nullable=true)
     */
    private $pumpName;

    /**
     * @var string
     *
     * @ORM\Column(name="pump_serial", type="string", length=30, nullable=true)
     */
    private $pumpSerial;

    /**
     * @var string
     *
     * @ORM\Column(name="pump_manufacturer", type="string", length=60, nullable=true)
     */
    private $pumpManufacturer;

    /**
     * @var string
     *
     * @ORM\Column(name="pump_model", type="string", length=40, nullable=true)
     */
    private $pumpModel;

    /**
     * @var string
     *
     * @ORM\Column(name="pump_id_meter", type="string", length=1, nullable=true)
     */
    private $pumpIdMeter;

    /**
     * @var string
     *
     * @ORM\Column(name="pump_num_seal", type="string", length=20, nullable=true)
     */
    private $pumpNumSeal;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pump_date_seal", type="date", nullable=true)
     */
    private $pumpDateSeal;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pump_date_inc", type="datetime", nullable=true)
     */
    private $pumpDateInc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pump_date_alt", type="datetime", nullable=true)
     */
    private $pumpDateAlt;



    /**
     * Set storeKey
     *
     * @param integer $storeKey
     *
     * @return Pump
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
     * Set pumpNumber
     *
     * @param integer $pumpNumber
     *
     * @return Pump
     */
    public function setPumpNumber($pumpNumber)
    {
        $this->pumpNumber = $pumpNumber;

        return $this;
    }

    /**
     * Get pumpNumber
     *
     * @return integer
     */
    public function getPumpNumber()
    {
        return $this->pumpNumber;
    }

    /**
     * Set pumpName
     *
     * @param string $pumpName
     *
     * @return Pump
     */
    public function setPumpName($pumpName)
    {
        $this->pumpName = $pumpName;

        return $this;
    }

    /**
     * Get pumpName
     *
     * @return string
     */
    public function getPumpName()
    {
        return $this->pumpName;
    }

    /**
     * Set pumpSerial
     *
     * @param string $pumpSerial
     *
     * @return Pump
     */
    public function setPumpSerial($pumpSerial)
    {
        $this->pumpSerial = $pumpSerial;

        return $this;
    }

    /**
     * Get pumpSerial
     *
     * @return string
     */
    public function getPumpSerial()
    {
        return $this->pumpSerial;
    }

    /**
     * Set pumpManufacturer
     *
     * @param string $pumpManufacturer
     *
     * @return Pump
     */
    public function setPumpManufacturer($pumpManufacturer)
    {
        $this->pumpManufacturer = $pumpManufacturer;

        return $this;
    }

    /**
     * Get pumpManufacturer
     *
     * @return string
     */
    public function getPumpManufacturer()
    {
        return $this->pumpManufacturer;
    }

    /**
     * Set pumpModel
     *
     * @param string $pumpModel
     *
     * @return Pump
     */
    public function setPumpModel($pumpModel)
    {
        $this->pumpModel = $pumpModel;

        return $this;
    }

    /**
     * Get pumpModel
     *
     * @return string
     */
    public function getPumpModel()
    {
        return $this->pumpModel;
    }

    /**
     * Set pumpIdMeter
     *
     * @param string $pumpIdMeter
     *
     * @return Pump
     */
    public function setPumpIdMeter($pumpIdMeter)
    {
        $this->pumpIdMeter = $pumpIdMeter;

        return $this;
    }

    /**
     * Get pumpIdMeter
     *
     * @return string
     */
    public function getPumpIdMeter()
    {
        return $this->pumpIdMeter;
    }

    /**
     * Set pumpNumSeal
     *
     * @param string $pumpNumSeal
     *
     * @return Pump
     */
    public function setPumpNumSeal($pumpNumSeal)
    {
        $this->pumpNumSeal = $pumpNumSeal;

        return $this;
    }

    /**
     * Get pumpNumSeal
     *
     * @return string
     */
    public function getPumpNumSeal()
    {
        return $this->pumpNumSeal;
    }

    /**
     * Set pumpDateSeal
     *
     * @param \DateTime $pumpDateSeal
     *
     * @return Pump
     */
    public function setPumpDateSeal($pumpDateSeal)
    {
        $this->pumpDateSeal = $pumpDateSeal;

        return $this;
    }

    /**
     * Get pumpDateSeal
     *
     * @return \DateTime
     */
    public function getPumpDateSeal()
    {
        return $this->pumpDateSeal;
    }

    /**
     * Set pumpDateInc
     *
     * @param \DateTime $pumpDateInc
     *
     * @return Pump
     */
    public function setPumpDateInc($pumpDateInc)
    {
        $this->pumpDateInc = $pumpDateInc;

        return $this;
    }

    /**
     * Get pumpDateInc
     *
     * @return \DateTime
     */
    public function getPumpDateInc()
    {
        return $this->pumpDateInc;
    }

    /**
     * Set pumpDateAlt
     *
     * @param \DateTime $pumpDateAlt
     *
     * @return Pump
     */
    public function setPumpDateAlt($pumpDateAlt)
    {
        $this->pumpDateAlt = $pumpDateAlt;

        return $this;
    }

    /**
     * Get pumpDateAlt
     *
     * @return \DateTime
     */
    public function getPumpDateAlt()
    {
        return $this->pumpDateAlt;
    }
}

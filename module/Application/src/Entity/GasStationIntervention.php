<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GasStationIntervention
 *
 * @ORM\Table(name="gas_station_intervention")
 * @ORM\Entity
 */
class GasStationIntervention
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
     * @ORM\Column(name="tank_number", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tankNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="pump_number", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $pumpNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="nozzle_number", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $nozzleNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="plu_key", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $pluKey;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fiscal_date", type="date", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $fiscalDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="intervention_number", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $interventionNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="intervention_reason", type="string", length=64, nullable=true)
     */
    private $interventionReason;

    /**
     * @var string
     *
     * @ORM\Column(name="intervention_name", type="string", length=64, nullable=true)
     */
    private $interventionName;

    /**
     * @var string
     *
     * @ORM\Column(name="intervention_sku_co", type="string", length=20, nullable=true)
     */
    private $interventionSkuCo;

    /**
     * @var string
     *
     * @ORM\Column(name="intervention_sku", type="string", length=20, nullable=true)
     */
    private $interventionSku;

    /**
     * @var string
     *
     * @ORM\Column(name="read_value_initial", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $readValueInitial;

    /**
     * @var string
     *
     * @ORM\Column(name="read_value_final", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $readValueFinal;

    /**
     * @var string
     *
     * @ORM\Column(name="calibration_value", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $calibrationValue;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fiscal_hour", type="time", nullable=true)
     */
    private $fiscalHour;

    /**
     * @var integer
     *
     * @ORM\Column(name="initial_number_seal", type="bigint", nullable=true)
     */
    private $initialNumberSeal;

    /**
     * @var integer
     *
     * @ORM\Column(name="final_number_seal", type="bigint", nullable=true)
     */
    private $finalNumberSeal;



    /**
     * Set storeKey
     *
     * @param integer $storeKey
     *
     * @return GasStationIntervention
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
     * Set tankNumber
     *
     * @param integer $tankNumber
     *
     * @return GasStationIntervention
     */
    public function setTankNumber($tankNumber)
    {
        $this->tankNumber = $tankNumber;

        return $this;
    }

    /**
     * Get tankNumber
     *
     * @return integer
     */
    public function getTankNumber()
    {
        return $this->tankNumber;
    }

    /**
     * Set pumpNumber
     *
     * @param integer $pumpNumber
     *
     * @return GasStationIntervention
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
     * Set nozzleNumber
     *
     * @param integer $nozzleNumber
     *
     * @return GasStationIntervention
     */
    public function setNozzleNumber($nozzleNumber)
    {
        $this->nozzleNumber = $nozzleNumber;

        return $this;
    }

    /**
     * Get nozzleNumber
     *
     * @return integer
     */
    public function getNozzleNumber()
    {
        return $this->nozzleNumber;
    }

    /**
     * Set pluKey
     *
     * @param integer $pluKey
     *
     * @return GasStationIntervention
     */
    public function setPluKey($pluKey)
    {
        $this->pluKey = $pluKey;

        return $this;
    }

    /**
     * Get pluKey
     *
     * @return integer
     */
    public function getPluKey()
    {
        return $this->pluKey;
    }

    /**
     * Set fiscalDate
     *
     * @param \DateTime $fiscalDate
     *
     * @return GasStationIntervention
     */
    public function setFiscalDate($fiscalDate)
    {
        $this->fiscalDate = $fiscalDate;

        return $this;
    }

    /**
     * Get fiscalDate
     *
     * @return \DateTime
     */
    public function getFiscalDate()
    {
        return $this->fiscalDate;
    }

    /**
     * Set interventionNumber
     *
     * @param integer $interventionNumber
     *
     * @return GasStationIntervention
     */
    public function setInterventionNumber($interventionNumber)
    {
        $this->interventionNumber = $interventionNumber;

        return $this;
    }

    /**
     * Get interventionNumber
     *
     * @return integer
     */
    public function getInterventionNumber()
    {
        return $this->interventionNumber;
    }

    /**
     * Set interventionReason
     *
     * @param string $interventionReason
     *
     * @return GasStationIntervention
     */
    public function setInterventionReason($interventionReason)
    {
        $this->interventionReason = $interventionReason;

        return $this;
    }

    /**
     * Get interventionReason
     *
     * @return string
     */
    public function getInterventionReason()
    {
        return $this->interventionReason;
    }

    /**
     * Set interventionName
     *
     * @param string $interventionName
     *
     * @return GasStationIntervention
     */
    public function setInterventionName($interventionName)
    {
        $this->interventionName = $interventionName;

        return $this;
    }

    /**
     * Get interventionName
     *
     * @return string
     */
    public function getInterventionName()
    {
        return $this->interventionName;
    }

    /**
     * Set interventionSkuCo
     *
     * @param string $interventionSkuCo
     *
     * @return GasStationIntervention
     */
    public function setInterventionSkuCo($interventionSkuCo)
    {
        $this->interventionSkuCo = $interventionSkuCo;

        return $this;
    }

    /**
     * Get interventionSkuCo
     *
     * @return string
     */
    public function getInterventionSkuCo()
    {
        return $this->interventionSkuCo;
    }

    /**
     * Set interventionSku
     *
     * @param string $interventionSku
     *
     * @return GasStationIntervention
     */
    public function setInterventionSku($interventionSku)
    {
        $this->interventionSku = $interventionSku;

        return $this;
    }

    /**
     * Get interventionSku
     *
     * @return string
     */
    public function getInterventionSku()
    {
        return $this->interventionSku;
    }

    /**
     * Set readValueInitial
     *
     * @param string $readValueInitial
     *
     * @return GasStationIntervention
     */
    public function setReadValueInitial($readValueInitial)
    {
        $this->readValueInitial = $readValueInitial;

        return $this;
    }

    /**
     * Get readValueInitial
     *
     * @return string
     */
    public function getReadValueInitial()
    {
        return $this->readValueInitial;
    }

    /**
     * Set readValueFinal
     *
     * @param string $readValueFinal
     *
     * @return GasStationIntervention
     */
    public function setReadValueFinal($readValueFinal)
    {
        $this->readValueFinal = $readValueFinal;

        return $this;
    }

    /**
     * Get readValueFinal
     *
     * @return string
     */
    public function getReadValueFinal()
    {
        return $this->readValueFinal;
    }

    /**
     * Set calibrationValue
     *
     * @param string $calibrationValue
     *
     * @return GasStationIntervention
     */
    public function setCalibrationValue($calibrationValue)
    {
        $this->calibrationValue = $calibrationValue;

        return $this;
    }

    /**
     * Get calibrationValue
     *
     * @return string
     */
    public function getCalibrationValue()
    {
        return $this->calibrationValue;
    }

    /**
     * Set fiscalHour
     *
     * @param \DateTime $fiscalHour
     *
     * @return GasStationIntervention
     */
    public function setFiscalHour($fiscalHour)
    {
        $this->fiscalHour = $fiscalHour;

        return $this;
    }

    /**
     * Get fiscalHour
     *
     * @return \DateTime
     */
    public function getFiscalHour()
    {
        return $this->fiscalHour;
    }

    /**
     * Set initialNumberSeal
     *
     * @param integer $initialNumberSeal
     *
     * @return GasStationIntervention
     */
    public function setInitialNumberSeal($initialNumberSeal)
    {
        $this->initialNumberSeal = $initialNumberSeal;

        return $this;
    }

    /**
     * Get initialNumberSeal
     *
     * @return integer
     */
    public function getInitialNumberSeal()
    {
        return $this->initialNumberSeal;
    }

    /**
     * Set finalNumberSeal
     *
     * @param integer $finalNumberSeal
     *
     * @return GasStationIntervention
     */
    public function setFinalNumberSeal($finalNumberSeal)
    {
        $this->finalNumberSeal = $finalNumberSeal;

        return $this;
    }

    /**
     * Get finalNumberSeal
     *
     * @return integer
     */
    public function getFinalNumberSeal()
    {
        return $this->finalNumberSeal;
    }
}

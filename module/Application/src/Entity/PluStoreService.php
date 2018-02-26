<?php

namespace Emporium\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PluStoreService
 *
 * @ORM\Table(name="plu_store_service")
 * @ORM\Entity
 */
class PluStoreService
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
     * @ORM\Column(name="plu_key", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $pluKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="cst_type_key", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $cstTypeKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="service_period", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $servicePeriod;

    /**
     * @var integer
     *
     * @ORM\Column(name="service_type_key", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $serviceTypeKey;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="service_start_time", type="datetime", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $serviceStartTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="service_end_time", type="datetime", nullable=false)
     */
    private $serviceEndTime;

    /**
     * @var string
     *
     * @ORM\Column(name="service_price", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $servicePrice;

    /**
     * @var string
     *
     * @ORM\Column(name="service_cost", type="decimal", precision=15, scale=4, nullable=true)
     */
    private $serviceCost;

    /**
     * @var integer
     *
     * @ORM\Column(name="service_maker_period", type="integer", nullable=true)
     */
    private $serviceMakerPeriod;

    /**
     * @var string
     *
     * @ORM\Column(name="service_code", type="string", length=32, nullable=true)
     */
    private $serviceCode;



    /**
     * Set storeKey
     *
     * @param integer $storeKey
     *
     * @return PluStoreService
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
     * Set pluKey
     *
     * @param integer $pluKey
     *
     * @return PluStoreService
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
     * Set cstTypeKey
     *
     * @param integer $cstTypeKey
     *
     * @return PluStoreService
     */
    public function setCstTypeKey($cstTypeKey)
    {
        $this->cstTypeKey = $cstTypeKey;

        return $this;
    }

    /**
     * Get cstTypeKey
     *
     * @return integer
     */
    public function getCstTypeKey()
    {
        return $this->cstTypeKey;
    }

    /**
     * Set servicePeriod
     *
     * @param integer $servicePeriod
     *
     * @return PluStoreService
     */
    public function setServicePeriod($servicePeriod)
    {
        $this->servicePeriod = $servicePeriod;

        return $this;
    }

    /**
     * Get servicePeriod
     *
     * @return integer
     */
    public function getServicePeriod()
    {
        return $this->servicePeriod;
    }

    /**
     * Set serviceTypeKey
     *
     * @param integer $serviceTypeKey
     *
     * @return PluStoreService
     */
    public function setServiceTypeKey($serviceTypeKey)
    {
        $this->serviceTypeKey = $serviceTypeKey;

        return $this;
    }

    /**
     * Get serviceTypeKey
     *
     * @return integer
     */
    public function getServiceTypeKey()
    {
        return $this->serviceTypeKey;
    }

    /**
     * Set serviceStartTime
     *
     * @param \DateTime $serviceStartTime
     *
     * @return PluStoreService
     */
    public function setServiceStartTime($serviceStartTime)
    {
        $this->serviceStartTime = $serviceStartTime;

        return $this;
    }

    /**
     * Get serviceStartTime
     *
     * @return \DateTime
     */
    public function getServiceStartTime()
    {
        return $this->serviceStartTime;
    }

    /**
     * Set serviceEndTime
     *
     * @param \DateTime $serviceEndTime
     *
     * @return PluStoreService
     */
    public function setServiceEndTime($serviceEndTime)
    {
        $this->serviceEndTime = $serviceEndTime;

        return $this;
    }

    /**
     * Get serviceEndTime
     *
     * @return \DateTime
     */
    public function getServiceEndTime()
    {
        return $this->serviceEndTime;
    }

    /**
     * Set servicePrice
     *
     * @param string $servicePrice
     *
     * @return PluStoreService
     */
    public function setServicePrice($servicePrice)
    {
        $this->servicePrice = $servicePrice;

        return $this;
    }

    /**
     * Get servicePrice
     *
     * @return string
     */
    public function getServicePrice()
    {
        return $this->servicePrice;
    }

    /**
     * Set serviceCost
     *
     * @param string $serviceCost
     *
     * @return PluStoreService
     */
    public function setServiceCost($serviceCost)
    {
        $this->serviceCost = $serviceCost;

        return $this;
    }

    /**
     * Get serviceCost
     *
     * @return string
     */
    public function getServiceCost()
    {
        return $this->serviceCost;
    }

    /**
     * Set serviceMakerPeriod
     *
     * @param integer $serviceMakerPeriod
     *
     * @return PluStoreService
     */
    public function setServiceMakerPeriod($serviceMakerPeriod)
    {
        $this->serviceMakerPeriod = $serviceMakerPeriod;

        return $this;
    }

    /**
     * Get serviceMakerPeriod
     *
     * @return integer
     */
    public function getServiceMakerPeriod()
    {
        return $this->serviceMakerPeriod;
    }

    /**
     * Set serviceCode
     *
     * @param string $serviceCode
     *
     * @return PluStoreService
     */
    public function setServiceCode($serviceCode)
    {
        $this->serviceCode = $serviceCode;

        return $this;
    }

    /**
     * Get serviceCode
     *
     * @return string
     */
    public function getServiceCode()
    {
        return $this->serviceCode;
    }
}

<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DotzFileItem
 *
 * @ORM\Table(name="dotz_file_item")
 * @ORM\Entity
 */
class DotzFileItem
{
    /**
     * @var integer
     *
     * @ORM\Column(name="plu_list_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $pluListId;

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
     * @ORM\Column(name="start_time", type="datetime", nullable=true)
     */
    private $startTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="end_time", type="datetime", nullable=true)
     */
    private $endTime;

    /**
     * @var string
     *
     * @ORM\Column(name="points", type="decimal", precision=6, scale=4, nullable=true)
     */
    private $points;

    /**
     * @var string
     *
     * @ORM\Column(name="conv_factor", type="decimal", precision=6, scale=4, nullable=true)
     */
    private $convFactor;

    /**
     * @var integer
     *
     * @ORM\Column(name="dotz_engine", type="smallint", nullable=true)
     */
    private $dotzEngine;

    /**
     * @var string
     *
     * @ORM\Column(name="provider_code", type="string", length=60, nullable=true)
     */
    private $providerCode;

    /**
     * @var string
     *
     * @ORM\Column(name="provider_cnpj", type="string", length=20, nullable=true)
     */
    private $providerCnpj;

    /**
     * @var string
     *
     * @ORM\Column(name="partner_code", type="string", length=20, nullable=true)
     */
    private $partnerCode;



    /**
     * Set pluListId
     *
     * @param integer $pluListId
     *
     * @return DotzFileItem
     */
    public function setPluListId($pluListId)
    {
        $this->pluListId = $pluListId;

        return $this;
    }

    /**
     * Get pluListId
     *
     * @return integer
     */
    public function getPluListId()
    {
        return $this->pluListId;
    }

    /**
     * Set pluKey
     *
     * @param integer $pluKey
     *
     * @return DotzFileItem
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
     * Set startTime
     *
     * @param \DateTime $startTime
     *
     * @return DotzFileItem
     */
    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;

        return $this;
    }

    /**
     * Get startTime
     *
     * @return \DateTime
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * Set endTime
     *
     * @param \DateTime $endTime
     *
     * @return DotzFileItem
     */
    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;

        return $this;
    }

    /**
     * Get endTime
     *
     * @return \DateTime
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * Set points
     *
     * @param string $points
     *
     * @return DotzFileItem
     */
    public function setPoints($points)
    {
        $this->points = $points;

        return $this;
    }

    /**
     * Get points
     *
     * @return string
     */
    public function getPoints()
    {
        return $this->points;
    }

    /**
     * Set convFactor
     *
     * @param string $convFactor
     *
     * @return DotzFileItem
     */
    public function setConvFactor($convFactor)
    {
        $this->convFactor = $convFactor;

        return $this;
    }

    /**
     * Get convFactor
     *
     * @return string
     */
    public function getConvFactor()
    {
        return $this->convFactor;
    }

    /**
     * Set dotzEngine
     *
     * @param integer $dotzEngine
     *
     * @return DotzFileItem
     */
    public function setDotzEngine($dotzEngine)
    {
        $this->dotzEngine = $dotzEngine;

        return $this;
    }

    /**
     * Get dotzEngine
     *
     * @return integer
     */
    public function getDotzEngine()
    {
        return $this->dotzEngine;
    }

    /**
     * Set providerCode
     *
     * @param string $providerCode
     *
     * @return DotzFileItem
     */
    public function setProviderCode($providerCode)
    {
        $this->providerCode = $providerCode;

        return $this;
    }

    /**
     * Get providerCode
     *
     * @return string
     */
    public function getProviderCode()
    {
        return $this->providerCode;
    }

    /**
     * Set providerCnpj
     *
     * @param string $providerCnpj
     *
     * @return DotzFileItem
     */
    public function setProviderCnpj($providerCnpj)
    {
        $this->providerCnpj = $providerCnpj;

        return $this;
    }

    /**
     * Get providerCnpj
     *
     * @return string
     */
    public function getProviderCnpj()
    {
        return $this->providerCnpj;
    }

    /**
     * Set partnerCode
     *
     * @param string $partnerCode
     *
     * @return DotzFileItem
     */
    public function setPartnerCode($partnerCode)
    {
        $this->partnerCode = $partnerCode;

        return $this;
    }

    /**
     * Get partnerCode
     *
     * @return string
     */
    public function getPartnerCode()
    {
        return $this->partnerCode;
    }
}

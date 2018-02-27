<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LmcSequence
 *
 * @ORM\Table(name="lmc_sequence")
 * @ORM\Entity
 */
class LmcSequence
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
     * @ORM\Column(name="sequence", type="bigint", nullable=true)
     */
    private $sequence;

    /**
     * @var boolean
     *
     * @ORM\Column(name="lmc_type", type="boolean", nullable=true)
     */
    private $lmcType;

    /**
     * @var string
     *
     * @ORM\Column(name="lmc_obs", type="text", length=65535, nullable=true)
     */
    private $lmcObs;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_change_time", type="datetime", nullable=true)
     */
    private $lastChangeTime;



    /**
     * Set storeKey
     *
     * @param integer $storeKey
     *
     * @return LmcSequence
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
     * @return LmcSequence
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
     * @return LmcSequence
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
     * Set sequence
     *
     * @param integer $sequence
     *
     * @return LmcSequence
     */
    public function setSequence($sequence)
    {
        $this->sequence = $sequence;

        return $this;
    }

    /**
     * Get sequence
     *
     * @return integer
     */
    public function getSequence()
    {
        return $this->sequence;
    }

    /**
     * Set lmcType
     *
     * @param boolean $lmcType
     *
     * @return LmcSequence
     */
    public function setLmcType($lmcType)
    {
        $this->lmcType = $lmcType;

        return $this;
    }

    /**
     * Get lmcType
     *
     * @return boolean
     */
    public function getLmcType()
    {
        return $this->lmcType;
    }

    /**
     * Set lmcObs
     *
     * @param string $lmcObs
     *
     * @return LmcSequence
     */
    public function setLmcObs($lmcObs)
    {
        $this->lmcObs = $lmcObs;

        return $this;
    }

    /**
     * Get lmcObs
     *
     * @return string
     */
    public function getLmcObs()
    {
        return $this->lmcObs;
    }

    /**
     * Set lastChangeTime
     *
     * @param \DateTime $lastChangeTime
     *
     * @return LmcSequence
     */
    public function setLastChangeTime($lastChangeTime)
    {
        $this->lastChangeTime = $lastChangeTime;

        return $this;
    }

    /**
     * Get lastChangeTime
     *
     * @return \DateTime
     */
    public function getLastChangeTime()
    {
        return $this->lastChangeTime;
    }
}

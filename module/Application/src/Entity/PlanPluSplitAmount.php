<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlanPluSplitAmount
 *
 * @ORM\Table(name="plan_plu_split_amount", indexes={@ORM\Index(name="ppsa_index_1", columns={"store_key", "plu_key", "ppsa_status", "ppsa_start_time"})})
 * @ORM\Entity
 */
class PlanPluSplitAmount
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ppsa_key", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ppsaKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="store_key", type="bigint", nullable=false)
     */
    private $storeKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="plu_key", type="bigint", nullable=false)
     */
    private $pluKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="cst_type_key", type="smallint", nullable=false)
     */
    private $cstTypeKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="media_id", type="smallint", nullable=false)
     */
    private $mediaId;

    /**
     * @var integer
     *
     * @ORM\Column(name="media_sub_id", type="smallint", nullable=false)
     */
    private $mediaSubId;

    /**
     * @var integer
     *
     * @ORM\Column(name="ppsa_splits", type="smallint", nullable=false)
     */
    private $ppsaSplits;

    /**
     * @var string
     *
     * @ORM\Column(name="ppsa_split_amount", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $ppsaSplitAmount;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ppsa_status", type="boolean", nullable=true)
     */
    private $ppsaStatus;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ppsa_start_time", type="datetime", nullable=true)
     */
    private $ppsaStartTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ppsa_end_time", type="datetime", nullable=true)
     */
    private $ppsaEndTime;

    /**
     * @var string
     *
     * @ORM\Column(name="ppsa_interest_percent", type="decimal", precision=4, scale=2, nullable=true)
     */
    private $ppsaInterestPercent;

    /**
     * @var string
     *
     * @ORM\Column(name="ppsa_delayed_payment_percent", type="decimal", precision=4, scale=2, nullable=true)
     */
    private $ppsaDelayedPaymentPercent;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_change_time", type="datetime", nullable=true)
     */
    private $lastChangeTime;



    /**
     * Get ppsaKey
     *
     * @return integer
     */
    public function getPpsaKey()
    {
        return $this->ppsaKey;
    }

    /**
     * Set storeKey
     *
     * @param integer $storeKey
     *
     * @return PlanPluSplitAmount
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
     * @return PlanPluSplitAmount
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
     * @return PlanPluSplitAmount
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
     * Set mediaId
     *
     * @param integer $mediaId
     *
     * @return PlanPluSplitAmount
     */
    public function setMediaId($mediaId)
    {
        $this->mediaId = $mediaId;

        return $this;
    }

    /**
     * Get mediaId
     *
     * @return integer
     */
    public function getMediaId()
    {
        return $this->mediaId;
    }

    /**
     * Set mediaSubId
     *
     * @param integer $mediaSubId
     *
     * @return PlanPluSplitAmount
     */
    public function setMediaSubId($mediaSubId)
    {
        $this->mediaSubId = $mediaSubId;

        return $this;
    }

    /**
     * Get mediaSubId
     *
     * @return integer
     */
    public function getMediaSubId()
    {
        return $this->mediaSubId;
    }

    /**
     * Set ppsaSplits
     *
     * @param integer $ppsaSplits
     *
     * @return PlanPluSplitAmount
     */
    public function setPpsaSplits($ppsaSplits)
    {
        $this->ppsaSplits = $ppsaSplits;

        return $this;
    }

    /**
     * Get ppsaSplits
     *
     * @return integer
     */
    public function getPpsaSplits()
    {
        return $this->ppsaSplits;
    }

    /**
     * Set ppsaSplitAmount
     *
     * @param string $ppsaSplitAmount
     *
     * @return PlanPluSplitAmount
     */
    public function setPpsaSplitAmount($ppsaSplitAmount)
    {
        $this->ppsaSplitAmount = $ppsaSplitAmount;

        return $this;
    }

    /**
     * Get ppsaSplitAmount
     *
     * @return string
     */
    public function getPpsaSplitAmount()
    {
        return $this->ppsaSplitAmount;
    }

    /**
     * Set ppsaStatus
     *
     * @param boolean $ppsaStatus
     *
     * @return PlanPluSplitAmount
     */
    public function setPpsaStatus($ppsaStatus)
    {
        $this->ppsaStatus = $ppsaStatus;

        return $this;
    }

    /**
     * Get ppsaStatus
     *
     * @return boolean
     */
    public function getPpsaStatus()
    {
        return $this->ppsaStatus;
    }

    /**
     * Set ppsaStartTime
     *
     * @param \DateTime $ppsaStartTime
     *
     * @return PlanPluSplitAmount
     */
    public function setPpsaStartTime($ppsaStartTime)
    {
        $this->ppsaStartTime = $ppsaStartTime;

        return $this;
    }

    /**
     * Get ppsaStartTime
     *
     * @return \DateTime
     */
    public function getPpsaStartTime()
    {
        return $this->ppsaStartTime;
    }

    /**
     * Set ppsaEndTime
     *
     * @param \DateTime $ppsaEndTime
     *
     * @return PlanPluSplitAmount
     */
    public function setPpsaEndTime($ppsaEndTime)
    {
        $this->ppsaEndTime = $ppsaEndTime;

        return $this;
    }

    /**
     * Get ppsaEndTime
     *
     * @return \DateTime
     */
    public function getPpsaEndTime()
    {
        return $this->ppsaEndTime;
    }

    /**
     * Set ppsaInterestPercent
     *
     * @param string $ppsaInterestPercent
     *
     * @return PlanPluSplitAmount
     */
    public function setPpsaInterestPercent($ppsaInterestPercent)
    {
        $this->ppsaInterestPercent = $ppsaInterestPercent;

        return $this;
    }

    /**
     * Get ppsaInterestPercent
     *
     * @return string
     */
    public function getPpsaInterestPercent()
    {
        return $this->ppsaInterestPercent;
    }

    /**
     * Set ppsaDelayedPaymentPercent
     *
     * @param string $ppsaDelayedPaymentPercent
     *
     * @return PlanPluSplitAmount
     */
    public function setPpsaDelayedPaymentPercent($ppsaDelayedPaymentPercent)
    {
        $this->ppsaDelayedPaymentPercent = $ppsaDelayedPaymentPercent;

        return $this;
    }

    /**
     * Get ppsaDelayedPaymentPercent
     *
     * @return string
     */
    public function getPpsaDelayedPaymentPercent()
    {
        return $this->ppsaDelayedPaymentPercent;
    }

    /**
     * Set lastChangeTime
     *
     * @param \DateTime $lastChangeTime
     *
     * @return PlanPluSplitAmount
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

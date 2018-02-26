<?php

namespace Emporium\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlanSplit
 *
 * @ORM\Table(name="plan_split")
 * @ORM\Entity
 */
class PlanSplit
{
    /**
     * @var integer
     *
     * @ORM\Column(name="plan_key", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $planKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="plan_split_splits", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $planSplitSplits;

    /**
     * @var string
     *
     * @ORM\Column(name="plan_split_name", type="string", length=30, nullable=true)
     */
    private $planSplitName;

    /**
     * @var string
     *
     * @ORM\Column(name="plan_split_rate", type="decimal", precision=5, scale=2, nullable=true)
     */
    private $planSplitRate;

    /**
     * @var boolean
     *
     * @ORM\Column(name="plan_split_method", type="boolean", nullable=true)
     */
    private $planSplitMethod;

    /**
     * @var string
     *
     * @ORM\Column(name="plan_split_min_split_amount", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $planSplitMinSplitAmount;

    /**
     * @var boolean
     *
     * @ORM\Column(name="plan_split_status", type="boolean", nullable=true)
     */
    private $planSplitStatus;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_change_time", type="datetime", nullable=true)
     */
    private $lastChangeTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="plan_split_code_key", type="bigint", nullable=true)
     */
    private $planSplitCodeKey = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="plan_split_type_key", type="bigint", nullable=true)
     */
    private $planSplitTypeKey = '0';



    /**
     * Set planKey
     *
     * @param integer $planKey
     *
     * @return PlanSplit
     */
    public function setPlanKey($planKey)
    {
        $this->planKey = $planKey;

        return $this;
    }

    /**
     * Get planKey
     *
     * @return integer
     */
    public function getPlanKey()
    {
        return $this->planKey;
    }

    /**
     * Set planSplitSplits
     *
     * @param integer $planSplitSplits
     *
     * @return PlanSplit
     */
    public function setPlanSplitSplits($planSplitSplits)
    {
        $this->planSplitSplits = $planSplitSplits;

        return $this;
    }

    /**
     * Get planSplitSplits
     *
     * @return integer
     */
    public function getPlanSplitSplits()
    {
        return $this->planSplitSplits;
    }

    /**
     * Set planSplitName
     *
     * @param string $planSplitName
     *
     * @return PlanSplit
     */
    public function setPlanSplitName($planSplitName)
    {
        $this->planSplitName = $planSplitName;

        return $this;
    }

    /**
     * Get planSplitName
     *
     * @return string
     */
    public function getPlanSplitName()
    {
        return $this->planSplitName;
    }

    /**
     * Set planSplitRate
     *
     * @param string $planSplitRate
     *
     * @return PlanSplit
     */
    public function setPlanSplitRate($planSplitRate)
    {
        $this->planSplitRate = $planSplitRate;

        return $this;
    }

    /**
     * Get planSplitRate
     *
     * @return string
     */
    public function getPlanSplitRate()
    {
        return $this->planSplitRate;
    }

    /**
     * Set planSplitMethod
     *
     * @param boolean $planSplitMethod
     *
     * @return PlanSplit
     */
    public function setPlanSplitMethod($planSplitMethod)
    {
        $this->planSplitMethod = $planSplitMethod;

        return $this;
    }

    /**
     * Get planSplitMethod
     *
     * @return boolean
     */
    public function getPlanSplitMethod()
    {
        return $this->planSplitMethod;
    }

    /**
     * Set planSplitMinSplitAmount
     *
     * @param string $planSplitMinSplitAmount
     *
     * @return PlanSplit
     */
    public function setPlanSplitMinSplitAmount($planSplitMinSplitAmount)
    {
        $this->planSplitMinSplitAmount = $planSplitMinSplitAmount;

        return $this;
    }

    /**
     * Get planSplitMinSplitAmount
     *
     * @return string
     */
    public function getPlanSplitMinSplitAmount()
    {
        return $this->planSplitMinSplitAmount;
    }

    /**
     * Set planSplitStatus
     *
     * @param boolean $planSplitStatus
     *
     * @return PlanSplit
     */
    public function setPlanSplitStatus($planSplitStatus)
    {
        $this->planSplitStatus = $planSplitStatus;

        return $this;
    }

    /**
     * Get planSplitStatus
     *
     * @return boolean
     */
    public function getPlanSplitStatus()
    {
        return $this->planSplitStatus;
    }

    /**
     * Set lastChangeTime
     *
     * @param \DateTime $lastChangeTime
     *
     * @return PlanSplit
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

    /**
     * Set planSplitCodeKey
     *
     * @param integer $planSplitCodeKey
     *
     * @return PlanSplit
     */
    public function setPlanSplitCodeKey($planSplitCodeKey)
    {
        $this->planSplitCodeKey = $planSplitCodeKey;

        return $this;
    }

    /**
     * Get planSplitCodeKey
     *
     * @return integer
     */
    public function getPlanSplitCodeKey()
    {
        return $this->planSplitCodeKey;
    }

    /**
     * Set planSplitTypeKey
     *
     * @param integer $planSplitTypeKey
     *
     * @return PlanSplit
     */
    public function setPlanSplitTypeKey($planSplitTypeKey)
    {
        $this->planSplitTypeKey = $planSplitTypeKey;

        return $this;
    }

    /**
     * Get planSplitTypeKey
     *
     * @return integer
     */
    public function getPlanSplitTypeKey()
    {
        return $this->planSplitTypeKey;
    }
}

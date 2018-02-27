<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Plan
 *
 * @ORM\Table(name="plan")
 * @ORM\Entity
 */
class Plan
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
     * @ORM\Column(name="plan_min_payment", type="smallint", nullable=true)
     */
    private $planMinPayment;

    /**
     * @var integer
     *
     * @ORM\Column(name="plan_max_payment", type="smallint", nullable=true)
     */
    private $planMaxPayment;

    /**
     * @var string
     *
     * @ORM\Column(name="plan_rate", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $planRate;

    /**
     * @var string
     *
     * @ORM\Column(name="plan_name", type="string", length=50, nullable=true)
     */
    private $planName;

    /**
     * @var string
     *
     * @ORM\Column(name="plan_min_amount", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $planMinAmount;

    /**
     * @var boolean
     *
     * @ORM\Column(name="plan_status", type="boolean", nullable=true)
     */
    private $planStatus;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="plan_start_time", type="datetime", nullable=true)
     */
    private $planStartTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="plan_end_time", type="datetime", nullable=true)
     */
    private $planEndTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_change_time", type="datetime", nullable=true)
     */
    private $lastChangeTime;

    /**
     * @var string
     *
     * @ORM\Column(name="option_01", type="string", length=250, nullable=true)
     */
    private $option01;

    /**
     * @var string
     *
     * @ORM\Column(name="option_02", type="string", length=250, nullable=true)
     */
    private $option02;

    /**
     * @var string
     *
     * @ORM\Column(name="option_03", type="string", length=250, nullable=true)
     */
    private $option03;

    /**
     * @var string
     *
     * @ORM\Column(name="option_04", type="string", length=250, nullable=true)
     */
    private $option04;

    /**
     * @var string
     *
     * @ORM\Column(name="option_05", type="string", length=250, nullable=true)
     */
    private $option05;

    /**
     * @var string
     *
     * @ORM\Column(name="option_06", type="string", length=250, nullable=true)
     */
    private $option06;

    /**
     * @var string
     *
     * @ORM\Column(name="option_07", type="string", length=250, nullable=true)
     */
    private $option07;

    /**
     * @var string
     *
     * @ORM\Column(name="option_08", type="string", length=250, nullable=true)
     */
    private $option08;

    /**
     * @var string
     *
     * @ORM\Column(name="option_09", type="string", length=250, nullable=true)
     */
    private $option09;

    /**
     * @var string
     *
     * @ORM\Column(name="option_10", type="string", length=250, nullable=true)
     */
    private $option10;



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
     * Set cstTypeKey
     *
     * @param integer $cstTypeKey
     *
     * @return Plan
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
     * @return Plan
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
     * @return Plan
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
     * Set planMinPayment
     *
     * @param integer $planMinPayment
     *
     * @return Plan
     */
    public function setPlanMinPayment($planMinPayment)
    {
        $this->planMinPayment = $planMinPayment;

        return $this;
    }

    /**
     * Get planMinPayment
     *
     * @return integer
     */
    public function getPlanMinPayment()
    {
        return $this->planMinPayment;
    }

    /**
     * Set planMaxPayment
     *
     * @param integer $planMaxPayment
     *
     * @return Plan
     */
    public function setPlanMaxPayment($planMaxPayment)
    {
        $this->planMaxPayment = $planMaxPayment;

        return $this;
    }

    /**
     * Get planMaxPayment
     *
     * @return integer
     */
    public function getPlanMaxPayment()
    {
        return $this->planMaxPayment;
    }

    /**
     * Set planRate
     *
     * @param string $planRate
     *
     * @return Plan
     */
    public function setPlanRate($planRate)
    {
        $this->planRate = $planRate;

        return $this;
    }

    /**
     * Get planRate
     *
     * @return string
     */
    public function getPlanRate()
    {
        return $this->planRate;
    }

    /**
     * Set planName
     *
     * @param string $planName
     *
     * @return Plan
     */
    public function setPlanName($planName)
    {
        $this->planName = $planName;

        return $this;
    }

    /**
     * Get planName
     *
     * @return string
     */
    public function getPlanName()
    {
        return $this->planName;
    }

    /**
     * Set planMinAmount
     *
     * @param string $planMinAmount
     *
     * @return Plan
     */
    public function setPlanMinAmount($planMinAmount)
    {
        $this->planMinAmount = $planMinAmount;

        return $this;
    }

    /**
     * Get planMinAmount
     *
     * @return string
     */
    public function getPlanMinAmount()
    {
        return $this->planMinAmount;
    }

    /**
     * Set planStatus
     *
     * @param boolean $planStatus
     *
     * @return Plan
     */
    public function setPlanStatus($planStatus)
    {
        $this->planStatus = $planStatus;

        return $this;
    }

    /**
     * Get planStatus
     *
     * @return boolean
     */
    public function getPlanStatus()
    {
        return $this->planStatus;
    }

    /**
     * Set planStartTime
     *
     * @param \DateTime $planStartTime
     *
     * @return Plan
     */
    public function setPlanStartTime($planStartTime)
    {
        $this->planStartTime = $planStartTime;

        return $this;
    }

    /**
     * Get planStartTime
     *
     * @return \DateTime
     */
    public function getPlanStartTime()
    {
        return $this->planStartTime;
    }

    /**
     * Set planEndTime
     *
     * @param \DateTime $planEndTime
     *
     * @return Plan
     */
    public function setPlanEndTime($planEndTime)
    {
        $this->planEndTime = $planEndTime;

        return $this;
    }

    /**
     * Get planEndTime
     *
     * @return \DateTime
     */
    public function getPlanEndTime()
    {
        return $this->planEndTime;
    }

    /**
     * Set lastChangeTime
     *
     * @param \DateTime $lastChangeTime
     *
     * @return Plan
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
     * Set option01
     *
     * @param string $option01
     *
     * @return Plan
     */
    public function setOption01($option01)
    {
        $this->option01 = $option01;

        return $this;
    }

    /**
     * Get option01
     *
     * @return string
     */
    public function getOption01()
    {
        return $this->option01;
    }

    /**
     * Set option02
     *
     * @param string $option02
     *
     * @return Plan
     */
    public function setOption02($option02)
    {
        $this->option02 = $option02;

        return $this;
    }

    /**
     * Get option02
     *
     * @return string
     */
    public function getOption02()
    {
        return $this->option02;
    }

    /**
     * Set option03
     *
     * @param string $option03
     *
     * @return Plan
     */
    public function setOption03($option03)
    {
        $this->option03 = $option03;

        return $this;
    }

    /**
     * Get option03
     *
     * @return string
     */
    public function getOption03()
    {
        return $this->option03;
    }

    /**
     * Set option04
     *
     * @param string $option04
     *
     * @return Plan
     */
    public function setOption04($option04)
    {
        $this->option04 = $option04;

        return $this;
    }

    /**
     * Get option04
     *
     * @return string
     */
    public function getOption04()
    {
        return $this->option04;
    }

    /**
     * Set option05
     *
     * @param string $option05
     *
     * @return Plan
     */
    public function setOption05($option05)
    {
        $this->option05 = $option05;

        return $this;
    }

    /**
     * Get option05
     *
     * @return string
     */
    public function getOption05()
    {
        return $this->option05;
    }

    /**
     * Set option06
     *
     * @param string $option06
     *
     * @return Plan
     */
    public function setOption06($option06)
    {
        $this->option06 = $option06;

        return $this;
    }

    /**
     * Get option06
     *
     * @return string
     */
    public function getOption06()
    {
        return $this->option06;
    }

    /**
     * Set option07
     *
     * @param string $option07
     *
     * @return Plan
     */
    public function setOption07($option07)
    {
        $this->option07 = $option07;

        return $this;
    }

    /**
     * Get option07
     *
     * @return string
     */
    public function getOption07()
    {
        return $this->option07;
    }

    /**
     * Set option08
     *
     * @param string $option08
     *
     * @return Plan
     */
    public function setOption08($option08)
    {
        $this->option08 = $option08;

        return $this;
    }

    /**
     * Get option08
     *
     * @return string
     */
    public function getOption08()
    {
        return $this->option08;
    }

    /**
     * Set option09
     *
     * @param string $option09
     *
     * @return Plan
     */
    public function setOption09($option09)
    {
        $this->option09 = $option09;

        return $this;
    }

    /**
     * Get option09
     *
     * @return string
     */
    public function getOption09()
    {
        return $this->option09;
    }

    /**
     * Set option10
     *
     * @param string $option10
     *
     * @return Plan
     */
    public function setOption10($option10)
    {
        $this->option10 = $option10;

        return $this;
    }

    /**
     * Get option10
     *
     * @return string
     */
    public function getOption10()
    {
        return $this->option10;
    }
}

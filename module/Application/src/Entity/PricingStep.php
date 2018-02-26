<?php

namespace Emporium\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PricingStep
 *
 * @ORM\Table(name="pricing_step", indexes={@ORM\Index(name="pricing_step_1", columns={"plu_key", "type_price", "start"})})
 * @ORM\Entity
 */
class PricingStep
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
     * @ORM\Column(name="start", type="datetime", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $start;

    /**
     * @var integer
     *
     * @ORM\Column(name="type_price", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $typePrice;

    /**
     * @var integer
     *
     * @ORM\Column(name="step_number", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $stepNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="action_type", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $actionType;

    /**
     * @var integer
     *
     * @ORM\Column(name="times", type="smallint", nullable=true)
     */
    private $times;

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $price;

    /**
     * @var integer
     *
     * @ORM\Column(name="next_step", type="smallint", nullable=true)
     */
    private $nextStep;



    /**
     * Set storeKey
     *
     * @param integer $storeKey
     *
     * @return PricingStep
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
     * @return PricingStep
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
     * Set start
     *
     * @param \DateTime $start
     *
     * @return PricingStep
     */
    public function setStart($start)
    {
        $this->start = $start;

        return $this;
    }

    /**
     * Get start
     *
     * @return \DateTime
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Set typePrice
     *
     * @param integer $typePrice
     *
     * @return PricingStep
     */
    public function setTypePrice($typePrice)
    {
        $this->typePrice = $typePrice;

        return $this;
    }

    /**
     * Get typePrice
     *
     * @return integer
     */
    public function getTypePrice()
    {
        return $this->typePrice;
    }

    /**
     * Set stepNumber
     *
     * @param integer $stepNumber
     *
     * @return PricingStep
     */
    public function setStepNumber($stepNumber)
    {
        $this->stepNumber = $stepNumber;

        return $this;
    }

    /**
     * Get stepNumber
     *
     * @return integer
     */
    public function getStepNumber()
    {
        return $this->stepNumber;
    }

    /**
     * Set actionType
     *
     * @param integer $actionType
     *
     * @return PricingStep
     */
    public function setActionType($actionType)
    {
        $this->actionType = $actionType;

        return $this;
    }

    /**
     * Get actionType
     *
     * @return integer
     */
    public function getActionType()
    {
        return $this->actionType;
    }

    /**
     * Set times
     *
     * @param integer $times
     *
     * @return PricingStep
     */
    public function setTimes($times)
    {
        $this->times = $times;

        return $this;
    }

    /**
     * Get times
     *
     * @return integer
     */
    public function getTimes()
    {
        return $this->times;
    }

    /**
     * Set price
     *
     * @param string $price
     *
     * @return PricingStep
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set nextStep
     *
     * @param integer $nextStep
     *
     * @return PricingStep
     */
    public function setNextStep($nextStep)
    {
        $this->nextStep = $nextStep;

        return $this;
    }

    /**
     * Get nextStep
     *
     * @return integer
     */
    public function getNextStep()
    {
        return $this->nextStep;
    }
}

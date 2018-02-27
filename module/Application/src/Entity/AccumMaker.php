<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccumMaker
 *
 * @ORM\Table(name="accum_maker")
 * @ORM\Entity
 */
class AccumMaker
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
     * @ORM\Column(name="maker_key", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $makerKey;

    /**
     * @var boolean
     *
     * @ORM\Column(name="hour", type="boolean", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $hour;

    /**
     * @var string
     *
     * @ORM\Column(name="quantity", type="decimal", precision=15, scale=3, nullable=false)
     */
    private $quantity;

    /**
     * @var string
     *
     * @ORM\Column(name="quantity_canc", type="decimal", precision=15, scale=3, nullable=false)
     */
    private $quantityCanc;

    /**
     * @var string
     *
     * @ORM\Column(name="amount", type="decimal", precision=15, scale=3, nullable=false)
     */
    private $amount;

    /**
     * @var string
     *
     * @ORM\Column(name="amount_canc", type="decimal", precision=15, scale=3, nullable=false)
     */
    private $amountCanc;

    /**
     * @var string
     *
     * @ORM\Column(name="cost", type="decimal", precision=15, scale=4, nullable=false)
     */
    private $cost;

    /**
     * @var string
     *
     * @ORM\Column(name="cost_canc", type="decimal", precision=15, scale=4, nullable=false)
     */
    private $costCanc;

    /**
     * @var string
     *
     * @ORM\Column(name="margin", type="decimal", precision=15, scale=3, nullable=false)
     */
    private $margin;

    /**
     * @var string
     *
     * @ORM\Column(name="return_quantity", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $returnQuantity;

    /**
     * @var string
     *
     * @ORM\Column(name="return_amount", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $returnAmount;



    /**
     * Set storeKey
     *
     * @param integer $storeKey
     *
     * @return AccumMaker
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
     * Set fiscalDate
     *
     * @param \DateTime $fiscalDate
     *
     * @return AccumMaker
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
     * Set makerKey
     *
     * @param integer $makerKey
     *
     * @return AccumMaker
     */
    public function setMakerKey($makerKey)
    {
        $this->makerKey = $makerKey;

        return $this;
    }

    /**
     * Get makerKey
     *
     * @return integer
     */
    public function getMakerKey()
    {
        return $this->makerKey;
    }

    /**
     * Set hour
     *
     * @param boolean $hour
     *
     * @return AccumMaker
     */
    public function setHour($hour)
    {
        $this->hour = $hour;

        return $this;
    }

    /**
     * Get hour
     *
     * @return boolean
     */
    public function getHour()
    {
        return $this->hour;
    }

    /**
     * Set quantity
     *
     * @param string $quantity
     *
     * @return AccumMaker
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return string
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set quantityCanc
     *
     * @param string $quantityCanc
     *
     * @return AccumMaker
     */
    public function setQuantityCanc($quantityCanc)
    {
        $this->quantityCanc = $quantityCanc;

        return $this;
    }

    /**
     * Get quantityCanc
     *
     * @return string
     */
    public function getQuantityCanc()
    {
        return $this->quantityCanc;
    }

    /**
     * Set amount
     *
     * @param string $amount
     *
     * @return AccumMaker
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set amountCanc
     *
     * @param string $amountCanc
     *
     * @return AccumMaker
     */
    public function setAmountCanc($amountCanc)
    {
        $this->amountCanc = $amountCanc;

        return $this;
    }

    /**
     * Get amountCanc
     *
     * @return string
     */
    public function getAmountCanc()
    {
        return $this->amountCanc;
    }

    /**
     * Set cost
     *
     * @param string $cost
     *
     * @return AccumMaker
     */
    public function setCost($cost)
    {
        $this->cost = $cost;

        return $this;
    }

    /**
     * Get cost
     *
     * @return string
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * Set costCanc
     *
     * @param string $costCanc
     *
     * @return AccumMaker
     */
    public function setCostCanc($costCanc)
    {
        $this->costCanc = $costCanc;

        return $this;
    }

    /**
     * Get costCanc
     *
     * @return string
     */
    public function getCostCanc()
    {
        return $this->costCanc;
    }

    /**
     * Set margin
     *
     * @param string $margin
     *
     * @return AccumMaker
     */
    public function setMargin($margin)
    {
        $this->margin = $margin;

        return $this;
    }

    /**
     * Get margin
     *
     * @return string
     */
    public function getMargin()
    {
        return $this->margin;
    }

    /**
     * Set returnQuantity
     *
     * @param string $returnQuantity
     *
     * @return AccumMaker
     */
    public function setReturnQuantity($returnQuantity)
    {
        $this->returnQuantity = $returnQuantity;

        return $this;
    }

    /**
     * Get returnQuantity
     *
     * @return string
     */
    public function getReturnQuantity()
    {
        return $this->returnQuantity;
    }

    /**
     * Set returnAmount
     *
     * @param string $returnAmount
     *
     * @return AccumMaker
     */
    public function setReturnAmount($returnAmount)
    {
        $this->returnAmount = $returnAmount;

        return $this;
    }

    /**
     * Get returnAmount
     *
     * @return string
     */
    public function getReturnAmount()
    {
        return $this->returnAmount;
    }
}

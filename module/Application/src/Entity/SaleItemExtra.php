<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SaleItemExtra
 *
 * @ORM\Table(name="sale_item_extra")
 * @ORM\Entity
 */
class SaleItemExtra
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
     * @ORM\Column(name="pos_number", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $posNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="ticket_number", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ticketNumber;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start_time", type="datetime", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $startTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="sequence", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sequence;

    /**
     * @var string
     *
     * @ORM\Column(name="cfop", type="string", length=10, nullable=true)
     */
    private $cfop;

    /**
     * @var string
     *
     * @ORM\Column(name="desc_plu", type="string", length=48, nullable=false)
     */
    private $descPlu;

    /**
     * @var string
     *
     * @ORM\Column(name="quantity", type="decimal", precision=15, scale=3, nullable=false)
     */
    private $quantity;

    /**
     * @var string
     *
     * @ORM\Column(name="unit_price", type="decimal", precision=15, scale=3, nullable=false)
     */
    private $unitPrice;

    /**
     * @var string
     *
     * @ORM\Column(name="amount", type="decimal", precision=15, scale=3, nullable=false)
     */
    private $amount;

    /**
     * @var string
     *
     * @ORM\Column(name="discount", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $discount;

    /**
     * @var string
     *
     * @ORM\Column(name="increase", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $increase;

    /**
     * @var string
     *
     * @ORM\Column(name="pos_id", type="string", length=4, nullable=true)
     */
    private $posId;

    /**
     * @var string
     *
     * @ORM\Column(name="tax_percent", type="decimal", precision=6, scale=3, nullable=true)
     */
    private $taxPercent;

    /**
     * @var boolean
     *
     * @ORM\Column(name="pis_cofins", type="boolean", nullable=true)
     */
    private $pisCofins;

    /**
     * @var string
     *
     * @ORM\Column(name="tax_reduction", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $taxReduction;

    /**
     * @var string
     *
     * @ORM\Column(name="tax_calculation_base", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $taxCalculationBase;

    /**
     * @var string
     *
     * @ORM\Column(name="tax_amount", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $taxAmount;

    /**
     * @var string
     *
     * @ORM\Column(name="tax_extra_percent", type="decimal", precision=6, scale=3, nullable=true)
     */
    private $taxExtraPercent;

    /**
     * @var string
     *
     * @ORM\Column(name="tolerance_max", type="decimal", precision=5, scale=3, nullable=true)
     */
    private $toleranceMax;

    /**
     * @var string
     *
     * @ORM\Column(name="tolerance_min", type="decimal", precision=5, scale=3, nullable=true)
     */
    private $toleranceMin;



    /**
     * Set storeKey
     *
     * @param integer $storeKey
     *
     * @return SaleItemExtra
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
     * Set posNumber
     *
     * @param integer $posNumber
     *
     * @return SaleItemExtra
     */
    public function setPosNumber($posNumber)
    {
        $this->posNumber = $posNumber;

        return $this;
    }

    /**
     * Get posNumber
     *
     * @return integer
     */
    public function getPosNumber()
    {
        return $this->posNumber;
    }

    /**
     * Set ticketNumber
     *
     * @param integer $ticketNumber
     *
     * @return SaleItemExtra
     */
    public function setTicketNumber($ticketNumber)
    {
        $this->ticketNumber = $ticketNumber;

        return $this;
    }

    /**
     * Get ticketNumber
     *
     * @return integer
     */
    public function getTicketNumber()
    {
        return $this->ticketNumber;
    }

    /**
     * Set startTime
     *
     * @param \DateTime $startTime
     *
     * @return SaleItemExtra
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
     * Set sequence
     *
     * @param integer $sequence
     *
     * @return SaleItemExtra
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
     * Set cfop
     *
     * @param string $cfop
     *
     * @return SaleItemExtra
     */
    public function setCfop($cfop)
    {
        $this->cfop = $cfop;

        return $this;
    }

    /**
     * Get cfop
     *
     * @return string
     */
    public function getCfop()
    {
        return $this->cfop;
    }

    /**
     * Set descPlu
     *
     * @param string $descPlu
     *
     * @return SaleItemExtra
     */
    public function setDescPlu($descPlu)
    {
        $this->descPlu = $descPlu;

        return $this;
    }

    /**
     * Get descPlu
     *
     * @return string
     */
    public function getDescPlu()
    {
        return $this->descPlu;
    }

    /**
     * Set quantity
     *
     * @param string $quantity
     *
     * @return SaleItemExtra
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
     * Set unitPrice
     *
     * @param string $unitPrice
     *
     * @return SaleItemExtra
     */
    public function setUnitPrice($unitPrice)
    {
        $this->unitPrice = $unitPrice;

        return $this;
    }

    /**
     * Get unitPrice
     *
     * @return string
     */
    public function getUnitPrice()
    {
        return $this->unitPrice;
    }

    /**
     * Set amount
     *
     * @param string $amount
     *
     * @return SaleItemExtra
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
     * Set discount
     *
     * @param string $discount
     *
     * @return SaleItemExtra
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;

        return $this;
    }

    /**
     * Get discount
     *
     * @return string
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * Set increase
     *
     * @param string $increase
     *
     * @return SaleItemExtra
     */
    public function setIncrease($increase)
    {
        $this->increase = $increase;

        return $this;
    }

    /**
     * Get increase
     *
     * @return string
     */
    public function getIncrease()
    {
        return $this->increase;
    }

    /**
     * Set posId
     *
     * @param string $posId
     *
     * @return SaleItemExtra
     */
    public function setPosId($posId)
    {
        $this->posId = $posId;

        return $this;
    }

    /**
     * Get posId
     *
     * @return string
     */
    public function getPosId()
    {
        return $this->posId;
    }

    /**
     * Set taxPercent
     *
     * @param string $taxPercent
     *
     * @return SaleItemExtra
     */
    public function setTaxPercent($taxPercent)
    {
        $this->taxPercent = $taxPercent;

        return $this;
    }

    /**
     * Get taxPercent
     *
     * @return string
     */
    public function getTaxPercent()
    {
        return $this->taxPercent;
    }

    /**
     * Set pisCofins
     *
     * @param boolean $pisCofins
     *
     * @return SaleItemExtra
     */
    public function setPisCofins($pisCofins)
    {
        $this->pisCofins = $pisCofins;

        return $this;
    }

    /**
     * Get pisCofins
     *
     * @return boolean
     */
    public function getPisCofins()
    {
        return $this->pisCofins;
    }

    /**
     * Set taxReduction
     *
     * @param string $taxReduction
     *
     * @return SaleItemExtra
     */
    public function setTaxReduction($taxReduction)
    {
        $this->taxReduction = $taxReduction;

        return $this;
    }

    /**
     * Get taxReduction
     *
     * @return string
     */
    public function getTaxReduction()
    {
        return $this->taxReduction;
    }

    /**
     * Set taxCalculationBase
     *
     * @param string $taxCalculationBase
     *
     * @return SaleItemExtra
     */
    public function setTaxCalculationBase($taxCalculationBase)
    {
        $this->taxCalculationBase = $taxCalculationBase;

        return $this;
    }

    /**
     * Get taxCalculationBase
     *
     * @return string
     */
    public function getTaxCalculationBase()
    {
        return $this->taxCalculationBase;
    }

    /**
     * Set taxAmount
     *
     * @param string $taxAmount
     *
     * @return SaleItemExtra
     */
    public function setTaxAmount($taxAmount)
    {
        $this->taxAmount = $taxAmount;

        return $this;
    }

    /**
     * Get taxAmount
     *
     * @return string
     */
    public function getTaxAmount()
    {
        return $this->taxAmount;
    }

    /**
     * Set taxExtraPercent
     *
     * @param string $taxExtraPercent
     *
     * @return SaleItemExtra
     */
    public function setTaxExtraPercent($taxExtraPercent)
    {
        $this->taxExtraPercent = $taxExtraPercent;

        return $this;
    }

    /**
     * Get taxExtraPercent
     *
     * @return string
     */
    public function getTaxExtraPercent()
    {
        return $this->taxExtraPercent;
    }

    /**
     * Set toleranceMax
     *
     * @param string $toleranceMax
     *
     * @return SaleItemExtra
     */
    public function setToleranceMax($toleranceMax)
    {
        $this->toleranceMax = $toleranceMax;

        return $this;
    }

    /**
     * Get toleranceMax
     *
     * @return string
     */
    public function getToleranceMax()
    {
        return $this->toleranceMax;
    }

    /**
     * Set toleranceMin
     *
     * @param string $toleranceMin
     *
     * @return SaleItemExtra
     */
    public function setToleranceMin($toleranceMin)
    {
        $this->toleranceMin = $toleranceMin;

        return $this;
    }

    /**
     * Get toleranceMin
     *
     * @return string
     */
    public function getToleranceMin()
    {
        return $this->toleranceMin;
    }
}

<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PluStore
 *
 * @ORM\Table(name="plu_store", indexes={@ORM\Index(name="index_plu_store_1", columns={"store_key", "last_change_time"})})
 * @ORM\Entity
 */
class PluStore
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
     * @var string
     *
     * @ORM\Column(name="desired_margin_percent", type="decimal", precision=4, scale=2, nullable=true)
     */
    private $desiredMarginPercent;

    /**
     * @var string
     *
     * @ORM\Column(name="quantity_in_stock", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $quantityInStock;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="out_of_stock_day", type="date", nullable=true)
     */
    private $outOfStockDay;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_entered_day", type="date", nullable=true)
     */
    private $lastEnteredDay;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_sale_day", type="date", nullable=true)
     */
    private $lastSaleDay;

    /**
     * @var integer
     *
     * @ORM\Column(name="tax_type_key", type="integer", nullable=true)
     */
    private $taxTypeKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="invoice_tax_type", type="integer", nullable=true)
     */
    private $invoiceTaxType;

    /**
     * @var string
     *
     * @ORM\Column(name="minimal_stock", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $minimalStock;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_inventory_day", type="date", nullable=true)
     */
    private $lastInventoryDay;

    /**
     * @var string
     *
     * @ORM\Column(name="quantity_inventory", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $quantityInventory;

    /**
     * @var boolean
     *
     * @ORM\Column(name="not_for_sale", type="boolean", nullable=true)
     */
    private $notForSale;

    /**
     * @var string
     *
     * @ORM\Column(name="split_interest_percent", type="decimal", precision=4, scale=2, nullable=true)
     */
    private $splitInterestPercent;

    /**
     * @var string
     *
     * @ORM\Column(name="delayed_payment_percent", type="decimal", precision=4, scale=2, nullable=true)
     */
    private $delayedPaymentPercent;

    /**
     * @var boolean
     *
     * @ORM\Column(name="min_splits", type="boolean", nullable=true)
     */
    private $minSplits;

    /**
     * @var boolean
     *
     * @ORM\Column(name="max_splits", type="boolean", nullable=true)
     */
    private $maxSplits;

    /**
     * @var integer
     *
     * @ORM\Column(name="order_type", type="smallint", nullable=true)
     */
    private $orderType;

    /**
     * @var integer
     *
     * @ORM\Column(name="operation_type", type="smallint", nullable=true)
     */
    private $operationType;

    /**
     * @var boolean
     *
     * @ORM\Column(name="qty_from_amount", type="boolean", nullable=true)
     */
    private $qtyFromAmount;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_change_time", type="datetime", nullable=true)
     */
    private $lastChangeTime;

    /**
     * @var string
     *
     * @ORM\Column(name="wholesale_quantity", type="decimal", precision=9, scale=3, nullable=true)
     */
    private $wholesaleQuantity;

    /**
     * @var integer
     *
     * @ORM\Column(name="adder", type="bigint", nullable=true)
     */
    private $adder;

    /**
     * @var string
     *
     * @ORM\Column(name="total_tax", type="decimal", precision=7, scale=3, nullable=true)
     */
    private $totalTax;

    /**
     * @var string
     *
     * @ORM\Column(name="total_tax1", type="decimal", precision=7, scale=3, nullable=true)
     */
    private $totalTax1;

    /**
     * @var string
     *
     * @ORM\Column(name="total_tax2", type="decimal", precision=7, scale=3, nullable=true)
     */
    private $totalTax2;

    /**
     * @var integer
     *
     * @ORM\Column(name="base_plu_key", type="bigint", nullable=true)
     */
    private $basePluKey;

    /**
     * @var string
     *
     * @ORM\Column(name="quantity", type="decimal", precision=9, scale=3, nullable=true)
     */
    private $quantity;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_base_plu", type="boolean", nullable=true)
     */
    private $isBasePlu;



    /**
     * Set storeKey
     *
     * @param integer $storeKey
     *
     * @return PluStore
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
     * @return PluStore
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
     * Set desiredMarginPercent
     *
     * @param string $desiredMarginPercent
     *
     * @return PluStore
     */
    public function setDesiredMarginPercent($desiredMarginPercent)
    {
        $this->desiredMarginPercent = $desiredMarginPercent;

        return $this;
    }

    /**
     * Get desiredMarginPercent
     *
     * @return string
     */
    public function getDesiredMarginPercent()
    {
        return $this->desiredMarginPercent;
    }

    /**
     * Set quantityInStock
     *
     * @param string $quantityInStock
     *
     * @return PluStore
     */
    public function setQuantityInStock($quantityInStock)
    {
        $this->quantityInStock = $quantityInStock;

        return $this;
    }

    /**
     * Get quantityInStock
     *
     * @return string
     */
    public function getQuantityInStock()
    {
        return $this->quantityInStock;
    }

    /**
     * Set outOfStockDay
     *
     * @param \DateTime $outOfStockDay
     *
     * @return PluStore
     */
    public function setOutOfStockDay($outOfStockDay)
    {
        $this->outOfStockDay = $outOfStockDay;

        return $this;
    }

    /**
     * Get outOfStockDay
     *
     * @return \DateTime
     */
    public function getOutOfStockDay()
    {
        return $this->outOfStockDay;
    }

    /**
     * Set lastEnteredDay
     *
     * @param \DateTime $lastEnteredDay
     *
     * @return PluStore
     */
    public function setLastEnteredDay($lastEnteredDay)
    {
        $this->lastEnteredDay = $lastEnteredDay;

        return $this;
    }

    /**
     * Get lastEnteredDay
     *
     * @return \DateTime
     */
    public function getLastEnteredDay()
    {
        return $this->lastEnteredDay;
    }

    /**
     * Set lastSaleDay
     *
     * @param \DateTime $lastSaleDay
     *
     * @return PluStore
     */
    public function setLastSaleDay($lastSaleDay)
    {
        $this->lastSaleDay = $lastSaleDay;

        return $this;
    }

    /**
     * Get lastSaleDay
     *
     * @return \DateTime
     */
    public function getLastSaleDay()
    {
        return $this->lastSaleDay;
    }

    /**
     * Set taxTypeKey
     *
     * @param integer $taxTypeKey
     *
     * @return PluStore
     */
    public function setTaxTypeKey($taxTypeKey)
    {
        $this->taxTypeKey = $taxTypeKey;

        return $this;
    }

    /**
     * Get taxTypeKey
     *
     * @return integer
     */
    public function getTaxTypeKey()
    {
        return $this->taxTypeKey;
    }

    /**
     * Set invoiceTaxType
     *
     * @param integer $invoiceTaxType
     *
     * @return PluStore
     */
    public function setInvoiceTaxType($invoiceTaxType)
    {
        $this->invoiceTaxType = $invoiceTaxType;

        return $this;
    }

    /**
     * Get invoiceTaxType
     *
     * @return integer
     */
    public function getInvoiceTaxType()
    {
        return $this->invoiceTaxType;
    }

    /**
     * Set minimalStock
     *
     * @param string $minimalStock
     *
     * @return PluStore
     */
    public function setMinimalStock($minimalStock)
    {
        $this->minimalStock = $minimalStock;

        return $this;
    }

    /**
     * Get minimalStock
     *
     * @return string
     */
    public function getMinimalStock()
    {
        return $this->minimalStock;
    }

    /**
     * Set lastInventoryDay
     *
     * @param \DateTime $lastInventoryDay
     *
     * @return PluStore
     */
    public function setLastInventoryDay($lastInventoryDay)
    {
        $this->lastInventoryDay = $lastInventoryDay;

        return $this;
    }

    /**
     * Get lastInventoryDay
     *
     * @return \DateTime
     */
    public function getLastInventoryDay()
    {
        return $this->lastInventoryDay;
    }

    /**
     * Set quantityInventory
     *
     * @param string $quantityInventory
     *
     * @return PluStore
     */
    public function setQuantityInventory($quantityInventory)
    {
        $this->quantityInventory = $quantityInventory;

        return $this;
    }

    /**
     * Get quantityInventory
     *
     * @return string
     */
    public function getQuantityInventory()
    {
        return $this->quantityInventory;
    }

    /**
     * Set notForSale
     *
     * @param boolean $notForSale
     *
     * @return PluStore
     */
    public function setNotForSale($notForSale)
    {
        $this->notForSale = $notForSale;

        return $this;
    }

    /**
     * Get notForSale
     *
     * @return boolean
     */
    public function getNotForSale()
    {
        return $this->notForSale;
    }

    /**
     * Set splitInterestPercent
     *
     * @param string $splitInterestPercent
     *
     * @return PluStore
     */
    public function setSplitInterestPercent($splitInterestPercent)
    {
        $this->splitInterestPercent = $splitInterestPercent;

        return $this;
    }

    /**
     * Get splitInterestPercent
     *
     * @return string
     */
    public function getSplitInterestPercent()
    {
        return $this->splitInterestPercent;
    }

    /**
     * Set delayedPaymentPercent
     *
     * @param string $delayedPaymentPercent
     *
     * @return PluStore
     */
    public function setDelayedPaymentPercent($delayedPaymentPercent)
    {
        $this->delayedPaymentPercent = $delayedPaymentPercent;

        return $this;
    }

    /**
     * Get delayedPaymentPercent
     *
     * @return string
     */
    public function getDelayedPaymentPercent()
    {
        return $this->delayedPaymentPercent;
    }

    /**
     * Set minSplits
     *
     * @param boolean $minSplits
     *
     * @return PluStore
     */
    public function setMinSplits($minSplits)
    {
        $this->minSplits = $minSplits;

        return $this;
    }

    /**
     * Get minSplits
     *
     * @return boolean
     */
    public function getMinSplits()
    {
        return $this->minSplits;
    }

    /**
     * Set maxSplits
     *
     * @param boolean $maxSplits
     *
     * @return PluStore
     */
    public function setMaxSplits($maxSplits)
    {
        $this->maxSplits = $maxSplits;

        return $this;
    }

    /**
     * Get maxSplits
     *
     * @return boolean
     */
    public function getMaxSplits()
    {
        return $this->maxSplits;
    }

    /**
     * Set orderType
     *
     * @param integer $orderType
     *
     * @return PluStore
     */
    public function setOrderType($orderType)
    {
        $this->orderType = $orderType;

        return $this;
    }

    /**
     * Get orderType
     *
     * @return integer
     */
    public function getOrderType()
    {
        return $this->orderType;
    }

    /**
     * Set operationType
     *
     * @param integer $operationType
     *
     * @return PluStore
     */
    public function setOperationType($operationType)
    {
        $this->operationType = $operationType;

        return $this;
    }

    /**
     * Get operationType
     *
     * @return integer
     */
    public function getOperationType()
    {
        return $this->operationType;
    }

    /**
     * Set qtyFromAmount
     *
     * @param boolean $qtyFromAmount
     *
     * @return PluStore
     */
    public function setQtyFromAmount($qtyFromAmount)
    {
        $this->qtyFromAmount = $qtyFromAmount;

        return $this;
    }

    /**
     * Get qtyFromAmount
     *
     * @return boolean
     */
    public function getQtyFromAmount()
    {
        return $this->qtyFromAmount;
    }

    /**
     * Set lastChangeTime
     *
     * @param \DateTime $lastChangeTime
     *
     * @return PluStore
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
     * Set wholesaleQuantity
     *
     * @param string $wholesaleQuantity
     *
     * @return PluStore
     */
    public function setWholesaleQuantity($wholesaleQuantity)
    {
        $this->wholesaleQuantity = $wholesaleQuantity;

        return $this;
    }

    /**
     * Get wholesaleQuantity
     *
     * @return string
     */
    public function getWholesaleQuantity()
    {
        return $this->wholesaleQuantity;
    }

    /**
     * Set adder
     *
     * @param integer $adder
     *
     * @return PluStore
     */
    public function setAdder($adder)
    {
        $this->adder = $adder;

        return $this;
    }

    /**
     * Get adder
     *
     * @return integer
     */
    public function getAdder()
    {
        return $this->adder;
    }

    /**
     * Set totalTax
     *
     * @param string $totalTax
     *
     * @return PluStore
     */
    public function setTotalTax($totalTax)
    {
        $this->totalTax = $totalTax;

        return $this;
    }

    /**
     * Get totalTax
     *
     * @return string
     */
    public function getTotalTax()
    {
        return $this->totalTax;
    }

    /**
     * Set totalTax1
     *
     * @param string $totalTax1
     *
     * @return PluStore
     */
    public function setTotalTax1($totalTax1)
    {
        $this->totalTax1 = $totalTax1;

        return $this;
    }

    /**
     * Get totalTax1
     *
     * @return string
     */
    public function getTotalTax1()
    {
        return $this->totalTax1;
    }

    /**
     * Set totalTax2
     *
     * @param string $totalTax2
     *
     * @return PluStore
     */
    public function setTotalTax2($totalTax2)
    {
        $this->totalTax2 = $totalTax2;

        return $this;
    }

    /**
     * Get totalTax2
     *
     * @return string
     */
    public function getTotalTax2()
    {
        return $this->totalTax2;
    }

    /**
     * Set basePluKey
     *
     * @param integer $basePluKey
     *
     * @return PluStore
     */
    public function setBasePluKey($basePluKey)
    {
        $this->basePluKey = $basePluKey;

        return $this;
    }

    /**
     * Get basePluKey
     *
     * @return integer
     */
    public function getBasePluKey()
    {
        return $this->basePluKey;
    }

    /**
     * Set quantity
     *
     * @param string $quantity
     *
     * @return PluStore
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
     * Set isBasePlu
     *
     * @param boolean $isBasePlu
     *
     * @return PluStore
     */
    public function setIsBasePlu($isBasePlu)
    {
        $this->isBasePlu = $isBasePlu;

        return $this;
    }

    /**
     * Get isBasePlu
     *
     * @return boolean
     */
    public function getIsBasePlu()
    {
        return $this->isBasePlu;
    }
}

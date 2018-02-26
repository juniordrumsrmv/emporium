<?php

namespace Emporium\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SaleItem
 *
 * @ORM\Table(name="sale_item", indexes={@ORM\Index(name="index_sale_item", columns={"store_key", "pos_number", "start_time", "plu_id"})})
 * @ORM\Entity
 */
class SaleItem
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
     * @var boolean
     *
     * @ORM\Column(name="voided", type="boolean", nullable=true)
     */
    private $voided;

    /**
     * @var integer
     *
     * @ORM\Column(name="plu_id", type="bigint", nullable=false)
     */
    private $pluId;

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
     * @ORM\Column(name="cost", type="decimal", precision=15, scale=4, nullable=false)
     */
    private $cost;

    /**
     * @var integer
     *
     * @ORM\Column(name="clerk_key", type="bigint", nullable=true)
     */
    private $clerkKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="authorizer_key", type="bigint", nullable=true)
     */
    private $authorizerKey;

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
     * @ORM\Column(name="sku_id", type="string", length=14, nullable=true)
     */
    private $skuId;

    /**
     * @var boolean
     *
     * @ORM\Column(name="scanned", type="boolean", nullable=true)
     */
    private $scanned;

    /**
     * @var boolean
     *
     * @ORM\Column(name="query_item", type="boolean", nullable=true)
     */
    private $queryItem;

    /**
     * @var integer
     *
     * @ORM\Column(name="cpu_clock", type="bigint", nullable=true)
     */
    private $cpuClock;

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
     * @var integer
     *
     * @ORM\Column(name="type_price", type="integer", nullable=true)
     */
    private $typePrice;

    /**
     * @var boolean
     *
     * @ORM\Column(name="reason_price", type="boolean", nullable=true)
     */
    private $reasonPrice;

    /**
     * @var integer
     *
     * @ORM\Column(name="transaction", type="smallint", nullable=true)
     */
    private $transaction;



    /**
     * Set storeKey
     *
     * @param integer $storeKey
     *
     * @return SaleItem
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
     * @return SaleItem
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
     * @return SaleItem
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
     * @return SaleItem
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
     * @return SaleItem
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
     * Set voided
     *
     * @param boolean $voided
     *
     * @return SaleItem
     */
    public function setVoided($voided)
    {
        $this->voided = $voided;

        return $this;
    }

    /**
     * Get voided
     *
     * @return boolean
     */
    public function getVoided()
    {
        return $this->voided;
    }

    /**
     * Set pluId
     *
     * @param integer $pluId
     *
     * @return SaleItem
     */
    public function setPluId($pluId)
    {
        $this->pluId = $pluId;

        return $this;
    }

    /**
     * Get pluId
     *
     * @return integer
     */
    public function getPluId()
    {
        return $this->pluId;
    }

    /**
     * Set descPlu
     *
     * @param string $descPlu
     *
     * @return SaleItem
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
     * @return SaleItem
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
     * @return SaleItem
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
     * @return SaleItem
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
     * Set cost
     *
     * @param string $cost
     *
     * @return SaleItem
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
     * Set clerkKey
     *
     * @param integer $clerkKey
     *
     * @return SaleItem
     */
    public function setClerkKey($clerkKey)
    {
        $this->clerkKey = $clerkKey;

        return $this;
    }

    /**
     * Get clerkKey
     *
     * @return integer
     */
    public function getClerkKey()
    {
        return $this->clerkKey;
    }

    /**
     * Set authorizerKey
     *
     * @param integer $authorizerKey
     *
     * @return SaleItem
     */
    public function setAuthorizerKey($authorizerKey)
    {
        $this->authorizerKey = $authorizerKey;

        return $this;
    }

    /**
     * Get authorizerKey
     *
     * @return integer
     */
    public function getAuthorizerKey()
    {
        return $this->authorizerKey;
    }

    /**
     * Set discount
     *
     * @param string $discount
     *
     * @return SaleItem
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
     * @return SaleItem
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
     * Set skuId
     *
     * @param string $skuId
     *
     * @return SaleItem
     */
    public function setSkuId($skuId)
    {
        $this->skuId = $skuId;

        return $this;
    }

    /**
     * Get skuId
     *
     * @return string
     */
    public function getSkuId()
    {
        return $this->skuId;
    }

    /**
     * Set scanned
     *
     * @param boolean $scanned
     *
     * @return SaleItem
     */
    public function setScanned($scanned)
    {
        $this->scanned = $scanned;

        return $this;
    }

    /**
     * Get scanned
     *
     * @return boolean
     */
    public function getScanned()
    {
        return $this->scanned;
    }

    /**
     * Set queryItem
     *
     * @param boolean $queryItem
     *
     * @return SaleItem
     */
    public function setQueryItem($queryItem)
    {
        $this->queryItem = $queryItem;

        return $this;
    }

    /**
     * Get queryItem
     *
     * @return boolean
     */
    public function getQueryItem()
    {
        return $this->queryItem;
    }

    /**
     * Set cpuClock
     *
     * @param integer $cpuClock
     *
     * @return SaleItem
     */
    public function setCpuClock($cpuClock)
    {
        $this->cpuClock = $cpuClock;

        return $this;
    }

    /**
     * Get cpuClock
     *
     * @return integer
     */
    public function getCpuClock()
    {
        return $this->cpuClock;
    }

    /**
     * Set posId
     *
     * @param string $posId
     *
     * @return SaleItem
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
     * @return SaleItem
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
     * @return SaleItem
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
     * Set typePrice
     *
     * @param integer $typePrice
     *
     * @return SaleItem
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
     * Set reasonPrice
     *
     * @param boolean $reasonPrice
     *
     * @return SaleItem
     */
    public function setReasonPrice($reasonPrice)
    {
        $this->reasonPrice = $reasonPrice;

        return $this;
    }

    /**
     * Get reasonPrice
     *
     * @return boolean
     */
    public function getReasonPrice()
    {
        return $this->reasonPrice;
    }

    /**
     * Set transaction
     *
     * @param integer $transaction
     *
     * @return SaleItem
     */
    public function setTransaction($transaction)
    {
        $this->transaction = $transaction;

        return $this;
    }

    /**
     * Get transaction
     *
     * @return integer
     */
    public function getTransaction()
    {
        return $this->transaction;
    }
}

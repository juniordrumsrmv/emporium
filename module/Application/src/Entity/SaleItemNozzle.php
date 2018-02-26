<?php

namespace Emporium\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SaleItemNozzle
 *
 * @ORM\Table(name="sale_item_nozzle", indexes={@ORM\Index(name="index_sale_item", columns={"store_key", "start_time", "plu_id", "pump_number", "nozzle_number"}), @ORM\Index(name="index_sale_tank", columns={"store_key", "start_time", "tank_number", "plu_id"})})
 * @ORM\Entity
 */
class SaleItemNozzle
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
     * @ORM\Column(name="start_time", type="datetime", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $startTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="pump_number", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $pumpNumber = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="nozzle_number", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $nozzleNumber = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="ticket_number", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ticketNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="sequence", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sequence;

    /**
     * @var integer
     *
     * @ORM\Column(name="pos_number", type="smallint", nullable=false)
     */
    private $posNumber;

    /**
     * @var boolean
     *
     * @ORM\Column(name="voided", type="boolean", nullable=true)
     */
    private $voided;

    /**
     * @var integer
     *
     * @ORM\Column(name="tank_number", type="smallint", nullable=true)
     */
    private $tankNumber;

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
     * @ORM\Column(name="unit_price", type="decimal", precision=15, scale=4, nullable=false)
     */
    private $unitPrice;

    /**
     * @var string
     *
     * @ORM\Column(name="cost", type="decimal", precision=15, scale=4, nullable=false)
     */
    private $cost;

    /**
     * @var string
     *
     * @ORM\Column(name="amount", type="decimal", precision=15, scale=3, nullable=false)
     */
    private $amount;

    /**
     * @var string
     *
     * @ORM\Column(name="gt_quantity", type="decimal", precision=15, scale=3, nullable=false)
     */
    private $gtQuantity;

    /**
     * @var string
     *
     * @ORM\Column(name="gt_amount", type="decimal", precision=15, scale=3, nullable=false)
     */
    private $gtAmount;

    /**
     * @var integer
     *
     * @ORM\Column(name="cashier_key", type="bigint", nullable=true)
     */
    private $cashierKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="customer_key", type="bigint", nullable=true)
     */
    private $customerKey;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_id", type="string", length=25, nullable=true)
     */
    private $customerId;

    /**
     * @var integer
     *
     * @ORM\Column(name="cst_type_key", type="smallint", nullable=false)
     */
    private $cstTypeKey;



    /**
     * Set storeKey
     *
     * @param integer $storeKey
     *
     * @return SaleItemNozzle
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
     * Set startTime
     *
     * @param \DateTime $startTime
     *
     * @return SaleItemNozzle
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
     * Set pumpNumber
     *
     * @param integer $pumpNumber
     *
     * @return SaleItemNozzle
     */
    public function setPumpNumber($pumpNumber)
    {
        $this->pumpNumber = $pumpNumber;

        return $this;
    }

    /**
     * Get pumpNumber
     *
     * @return integer
     */
    public function getPumpNumber()
    {
        return $this->pumpNumber;
    }

    /**
     * Set nozzleNumber
     *
     * @param integer $nozzleNumber
     *
     * @return SaleItemNozzle
     */
    public function setNozzleNumber($nozzleNumber)
    {
        $this->nozzleNumber = $nozzleNumber;

        return $this;
    }

    /**
     * Get nozzleNumber
     *
     * @return integer
     */
    public function getNozzleNumber()
    {
        return $this->nozzleNumber;
    }

    /**
     * Set ticketNumber
     *
     * @param integer $ticketNumber
     *
     * @return SaleItemNozzle
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
     * Set sequence
     *
     * @param integer $sequence
     *
     * @return SaleItemNozzle
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
     * Set posNumber
     *
     * @param integer $posNumber
     *
     * @return SaleItemNozzle
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
     * Set voided
     *
     * @param boolean $voided
     *
     * @return SaleItemNozzle
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
     * Set tankNumber
     *
     * @param integer $tankNumber
     *
     * @return SaleItemNozzle
     */
    public function setTankNumber($tankNumber)
    {
        $this->tankNumber = $tankNumber;

        return $this;
    }

    /**
     * Get tankNumber
     *
     * @return integer
     */
    public function getTankNumber()
    {
        return $this->tankNumber;
    }

    /**
     * Set pluId
     *
     * @param integer $pluId
     *
     * @return SaleItemNozzle
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
     * @return SaleItemNozzle
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
     * @return SaleItemNozzle
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
     * @return SaleItemNozzle
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
     * Set cost
     *
     * @param string $cost
     *
     * @return SaleItemNozzle
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
     * Set amount
     *
     * @param string $amount
     *
     * @return SaleItemNozzle
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
     * Set gtQuantity
     *
     * @param string $gtQuantity
     *
     * @return SaleItemNozzle
     */
    public function setGtQuantity($gtQuantity)
    {
        $this->gtQuantity = $gtQuantity;

        return $this;
    }

    /**
     * Get gtQuantity
     *
     * @return string
     */
    public function getGtQuantity()
    {
        return $this->gtQuantity;
    }

    /**
     * Set gtAmount
     *
     * @param string $gtAmount
     *
     * @return SaleItemNozzle
     */
    public function setGtAmount($gtAmount)
    {
        $this->gtAmount = $gtAmount;

        return $this;
    }

    /**
     * Get gtAmount
     *
     * @return string
     */
    public function getGtAmount()
    {
        return $this->gtAmount;
    }

    /**
     * Set cashierKey
     *
     * @param integer $cashierKey
     *
     * @return SaleItemNozzle
     */
    public function setCashierKey($cashierKey)
    {
        $this->cashierKey = $cashierKey;

        return $this;
    }

    /**
     * Get cashierKey
     *
     * @return integer
     */
    public function getCashierKey()
    {
        return $this->cashierKey;
    }

    /**
     * Set customerKey
     *
     * @param integer $customerKey
     *
     * @return SaleItemNozzle
     */
    public function setCustomerKey($customerKey)
    {
        $this->customerKey = $customerKey;

        return $this;
    }

    /**
     * Get customerKey
     *
     * @return integer
     */
    public function getCustomerKey()
    {
        return $this->customerKey;
    }

    /**
     * Set customerId
     *
     * @param string $customerId
     *
     * @return SaleItemNozzle
     */
    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;

        return $this;
    }

    /**
     * Get customerId
     *
     * @return string
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }

    /**
     * Set cstTypeKey
     *
     * @param integer $cstTypeKey
     *
     * @return SaleItemNozzle
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
}

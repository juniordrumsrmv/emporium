<?php

namespace Emporium\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sale
 *
 * @ORM\Table(name="sale", indexes={@ORM\Index(name="index_received_time", columns={"received_time"}), @ORM\Index(name="index_1", columns={"store_key", "start_time", "pos_number", "ticket_number"}), @ORM\Index(name="index_fiscal", columns={"store_key", "pos_number", "fiscal_date"})})
 * @ORM\Entity
 */
class Sale
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
     * @var boolean
     *
     * @ORM\Column(name="voided", type="boolean", nullable=true)
     */
    private $voided;

    /**
     * @var boolean
     *
     * @ORM\Column(name="post_sale_void", type="boolean", nullable=true)
     */
    private $postSaleVoid;

    /**
     * @var integer
     *
     * @ORM\Column(name="sale_type", type="smallint", nullable=true)
     */
    private $saleType;

    /**
     * @var integer
     *
     * @ORM\Column(name="customer_key", type="bigint", nullable=true)
     */
    private $customerKey;

    /**
     * @var string
     *
     * @ORM\Column(name="amount_due", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $amountDue;

    /**
     * @var string
     *
     * @ORM\Column(name="change_amount", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $changeAmount;

    /**
     * @var integer
     *
     * @ORM\Column(name="change_media_id", type="smallint", nullable=true)
     */
    private $changeMediaId;

    /**
     * @var integer
     *
     * @ORM\Column(name="clerk_key", type="bigint", nullable=true)
     */
    private $clerkKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="cashier_key", type="bigint", nullable=true)
     */
    private $cashierKey;

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
     * @ORM\Column(name="interest", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $interest;

    /**
     * @var string
     *
     * @ORM\Column(name="final_GT", type="decimal", precision=19, scale=3, nullable=false)
     */
    private $finalGt;

    /**
     * @var string
     *
     * @ORM\Column(name="void_amount", type="decimal", precision=15, scale=3, nullable=false)
     */
    private $voidAmount;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="received_time", type="datetime", nullable=true)
     */
    private $receivedTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pos_start_time", type="datetime", nullable=true)
     */
    private $posStartTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="void_ticket_number", type="integer", nullable=true)
     */
    private $voidTicketNumber;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fiscal_date", type="date", nullable=false)
     */
    private $fiscalDate;

    /**
     * @var boolean
     *
     * @ORM\Column(name="delivery", type="boolean", nullable=true)
     */
    private $delivery;

    /**
     * @var boolean
     *
     * @ORM\Column(name="promotion", type="boolean", nullable=true)
     */
    private $promotion;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_id", type="string", length=32, nullable=true)
     */
    private $customerId;

    /**
     * @var boolean
     *
     * @ORM\Column(name="customer_id_type", type="boolean", nullable=true)
     */
    private $customerIdType;

    /**
     * @var string
     *
     * @ORM\Column(name="subtotal_discount", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $subtotalDiscount;

    /**
     * @var integer
     *
     * @ORM\Column(name="type_price", type="integer", nullable=true)
     */
    private $typePrice;

    /**
     * @var integer
     *
     * @ORM\Column(name="reference_price", type="integer", nullable=true)
     */
    private $referencePrice;

    /**
     * @var integer
     *
     * @ORM\Column(name="default_price", type="integer", nullable=true)
     */
    private $defaultPrice;

    /**
     * @var integer
     *
     * @ORM\Column(name="cpu_clock_start", type="bigint", nullable=true)
     */
    private $cpuClockStart;

    /**
     * @var integer
     *
     * @ORM\Column(name="cpu_clock_subtotal", type="bigint", nullable=true)
     */
    private $cpuClockSubtotal;

    /**
     * @var integer
     *
     * @ORM\Column(name="cpu_clock_end", type="bigint", nullable=true)
     */
    private $cpuClockEnd;

    /**
     * @var integer
     *
     * @ORM\Column(name="cpu_clock_close_drawer", type="bigint", nullable=true)
     */
    private $cpuClockCloseDrawer;



    /**
     * Set storeKey
     *
     * @param integer $storeKey
     *
     * @return Sale
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
     * @return Sale
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
     * @return Sale
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
     * @return Sale
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
     * Set voided
     *
     * @param boolean $voided
     *
     * @return Sale
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
     * Set postSaleVoid
     *
     * @param boolean $postSaleVoid
     *
     * @return Sale
     */
    public function setPostSaleVoid($postSaleVoid)
    {
        $this->postSaleVoid = $postSaleVoid;

        return $this;
    }

    /**
     * Get postSaleVoid
     *
     * @return boolean
     */
    public function getPostSaleVoid()
    {
        return $this->postSaleVoid;
    }

    /**
     * Set saleType
     *
     * @param integer $saleType
     *
     * @return Sale
     */
    public function setSaleType($saleType)
    {
        $this->saleType = $saleType;

        return $this;
    }

    /**
     * Get saleType
     *
     * @return integer
     */
    public function getSaleType()
    {
        return $this->saleType;
    }

    /**
     * Set customerKey
     *
     * @param integer $customerKey
     *
     * @return Sale
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
     * Set amountDue
     *
     * @param string $amountDue
     *
     * @return Sale
     */
    public function setAmountDue($amountDue)
    {
        $this->amountDue = $amountDue;

        return $this;
    }

    /**
     * Get amountDue
     *
     * @return string
     */
    public function getAmountDue()
    {
        return $this->amountDue;
    }

    /**
     * Set changeAmount
     *
     * @param string $changeAmount
     *
     * @return Sale
     */
    public function setChangeAmount($changeAmount)
    {
        $this->changeAmount = $changeAmount;

        return $this;
    }

    /**
     * Get changeAmount
     *
     * @return string
     */
    public function getChangeAmount()
    {
        return $this->changeAmount;
    }

    /**
     * Set changeMediaId
     *
     * @param integer $changeMediaId
     *
     * @return Sale
     */
    public function setChangeMediaId($changeMediaId)
    {
        $this->changeMediaId = $changeMediaId;

        return $this;
    }

    /**
     * Get changeMediaId
     *
     * @return integer
     */
    public function getChangeMediaId()
    {
        return $this->changeMediaId;
    }

    /**
     * Set clerkKey
     *
     * @param integer $clerkKey
     *
     * @return Sale
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
     * Set cashierKey
     *
     * @param integer $cashierKey
     *
     * @return Sale
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
     * Set authorizerKey
     *
     * @param integer $authorizerKey
     *
     * @return Sale
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
     * @return Sale
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
     * @return Sale
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
     * Set interest
     *
     * @param string $interest
     *
     * @return Sale
     */
    public function setInterest($interest)
    {
        $this->interest = $interest;

        return $this;
    }

    /**
     * Get interest
     *
     * @return string
     */
    public function getInterest()
    {
        return $this->interest;
    }

    /**
     * Set finalGt
     *
     * @param string $finalGt
     *
     * @return Sale
     */
    public function setFinalGt($finalGt)
    {
        $this->finalGt = $finalGt;

        return $this;
    }

    /**
     * Get finalGt
     *
     * @return string
     */
    public function getFinalGt()
    {
        return $this->finalGt;
    }

    /**
     * Set voidAmount
     *
     * @param string $voidAmount
     *
     * @return Sale
     */
    public function setVoidAmount($voidAmount)
    {
        $this->voidAmount = $voidAmount;

        return $this;
    }

    /**
     * Get voidAmount
     *
     * @return string
     */
    public function getVoidAmount()
    {
        return $this->voidAmount;
    }

    /**
     * Set receivedTime
     *
     * @param \DateTime $receivedTime
     *
     * @return Sale
     */
    public function setReceivedTime($receivedTime)
    {
        $this->receivedTime = $receivedTime;

        return $this;
    }

    /**
     * Get receivedTime
     *
     * @return \DateTime
     */
    public function getReceivedTime()
    {
        return $this->receivedTime;
    }

    /**
     * Set posStartTime
     *
     * @param \DateTime $posStartTime
     *
     * @return Sale
     */
    public function setPosStartTime($posStartTime)
    {
        $this->posStartTime = $posStartTime;

        return $this;
    }

    /**
     * Get posStartTime
     *
     * @return \DateTime
     */
    public function getPosStartTime()
    {
        return $this->posStartTime;
    }

    /**
     * Set voidTicketNumber
     *
     * @param integer $voidTicketNumber
     *
     * @return Sale
     */
    public function setVoidTicketNumber($voidTicketNumber)
    {
        $this->voidTicketNumber = $voidTicketNumber;

        return $this;
    }

    /**
     * Get voidTicketNumber
     *
     * @return integer
     */
    public function getVoidTicketNumber()
    {
        return $this->voidTicketNumber;
    }

    /**
     * Set fiscalDate
     *
     * @param \DateTime $fiscalDate
     *
     * @return Sale
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
     * Set delivery
     *
     * @param boolean $delivery
     *
     * @return Sale
     */
    public function setDelivery($delivery)
    {
        $this->delivery = $delivery;

        return $this;
    }

    /**
     * Get delivery
     *
     * @return boolean
     */
    public function getDelivery()
    {
        return $this->delivery;
    }

    /**
     * Set promotion
     *
     * @param boolean $promotion
     *
     * @return Sale
     */
    public function setPromotion($promotion)
    {
        $this->promotion = $promotion;

        return $this;
    }

    /**
     * Get promotion
     *
     * @return boolean
     */
    public function getPromotion()
    {
        return $this->promotion;
    }

    /**
     * Set customerId
     *
     * @param string $customerId
     *
     * @return Sale
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
     * Set customerIdType
     *
     * @param boolean $customerIdType
     *
     * @return Sale
     */
    public function setCustomerIdType($customerIdType)
    {
        $this->customerIdType = $customerIdType;

        return $this;
    }

    /**
     * Get customerIdType
     *
     * @return boolean
     */
    public function getCustomerIdType()
    {
        return $this->customerIdType;
    }

    /**
     * Set subtotalDiscount
     *
     * @param string $subtotalDiscount
     *
     * @return Sale
     */
    public function setSubtotalDiscount($subtotalDiscount)
    {
        $this->subtotalDiscount = $subtotalDiscount;

        return $this;
    }

    /**
     * Get subtotalDiscount
     *
     * @return string
     */
    public function getSubtotalDiscount()
    {
        return $this->subtotalDiscount;
    }

    /**
     * Set typePrice
     *
     * @param integer $typePrice
     *
     * @return Sale
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
     * Set referencePrice
     *
     * @param integer $referencePrice
     *
     * @return Sale
     */
    public function setReferencePrice($referencePrice)
    {
        $this->referencePrice = $referencePrice;

        return $this;
    }

    /**
     * Get referencePrice
     *
     * @return integer
     */
    public function getReferencePrice()
    {
        return $this->referencePrice;
    }

    /**
     * Set defaultPrice
     *
     * @param integer $defaultPrice
     *
     * @return Sale
     */
    public function setDefaultPrice($defaultPrice)
    {
        $this->defaultPrice = $defaultPrice;

        return $this;
    }

    /**
     * Get defaultPrice
     *
     * @return integer
     */
    public function getDefaultPrice()
    {
        return $this->defaultPrice;
    }

    /**
     * Set cpuClockStart
     *
     * @param integer $cpuClockStart
     *
     * @return Sale
     */
    public function setCpuClockStart($cpuClockStart)
    {
        $this->cpuClockStart = $cpuClockStart;

        return $this;
    }

    /**
     * Get cpuClockStart
     *
     * @return integer
     */
    public function getCpuClockStart()
    {
        return $this->cpuClockStart;
    }

    /**
     * Set cpuClockSubtotal
     *
     * @param integer $cpuClockSubtotal
     *
     * @return Sale
     */
    public function setCpuClockSubtotal($cpuClockSubtotal)
    {
        $this->cpuClockSubtotal = $cpuClockSubtotal;

        return $this;
    }

    /**
     * Get cpuClockSubtotal
     *
     * @return integer
     */
    public function getCpuClockSubtotal()
    {
        return $this->cpuClockSubtotal;
    }

    /**
     * Set cpuClockEnd
     *
     * @param integer $cpuClockEnd
     *
     * @return Sale
     */
    public function setCpuClockEnd($cpuClockEnd)
    {
        $this->cpuClockEnd = $cpuClockEnd;

        return $this;
    }

    /**
     * Get cpuClockEnd
     *
     * @return integer
     */
    public function getCpuClockEnd()
    {
        return $this->cpuClockEnd;
    }

    /**
     * Set cpuClockCloseDrawer
     *
     * @param integer $cpuClockCloseDrawer
     *
     * @return Sale
     */
    public function setCpuClockCloseDrawer($cpuClockCloseDrawer)
    {
        $this->cpuClockCloseDrawer = $cpuClockCloseDrawer;

        return $this;
    }

    /**
     * Get cpuClockCloseDrawer
     *
     * @return integer
     */
    public function getCpuClockCloseDrawer()
    {
        return $this->cpuClockCloseDrawer;
    }
}

<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RequestControlItem
 *
 * @ORM\Table(name="request_control_item", indexes={@ORM\Index(name="index_request", columns={"request_store_key", "request_pos_number", "request_trn_number", "request_date"})})
 * @ORM\Entity
 */
class RequestControlItem
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
     * @var integer
     *
     * @ORM\Column(name="plu_id", type="bigint", nullable=true)
     */
    private $pluId;

    /**
     * @var string
     *
     * @ORM\Column(name="quantity", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $quantity;

    /**
     * @var string
     *
     * @ORM\Column(name="unit_price", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $unitPrice;

    /**
     * @var string
     *
     * @ORM\Column(name="amount", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $amount;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fiscal_date", type="date", nullable=true)
     */
    private $fiscalDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="trn_number", type="bigint", nullable=true)
     */
    private $trnNumber;

    /**
     * @var boolean
     *
     * @ORM\Column(name="event_type", type="boolean", nullable=true)
     */
    private $eventType;

    /**
     * @var integer
     *
     * @ORM\Column(name="authorizer_key", type="bigint", nullable=true)
     */
    private $authorizerKey;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="request_date", type="date", nullable=true)
     */
    private $requestDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="request_store_key", type="bigint", nullable=true)
     */
    private $requestStoreKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="request_pos_number", type="smallint", nullable=true)
     */
    private $requestPosNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="request_ticket_number", type="integer", nullable=true)
     */
    private $requestTicketNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="request_trn_number", type="bigint", nullable=true)
     */
    private $requestTrnNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="request_plu_id", type="bigint", nullable=true)
     */
    private $requestPluId;

    /**
     * @var string
     *
     * @ORM\Column(name="request_quantity", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $requestQuantity;

    /**
     * @var string
     *
     * @ORM\Column(name="request_unit_price", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $requestUnitPrice;

    /**
     * @var string
     *
     * @ORM\Column(name="request_amount", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $requestAmount;



    /**
     * Set storeKey
     *
     * @param integer $storeKey
     *
     * @return RequestControlItem
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
     * @return RequestControlItem
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
     * @return RequestControlItem
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
     * @return RequestControlItem
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
     * @return RequestControlItem
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
     * Set pluId
     *
     * @param integer $pluId
     *
     * @return RequestControlItem
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
     * Set quantity
     *
     * @param string $quantity
     *
     * @return RequestControlItem
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
     * @return RequestControlItem
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
     * @return RequestControlItem
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
     * Set fiscalDate
     *
     * @param \DateTime $fiscalDate
     *
     * @return RequestControlItem
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
     * Set trnNumber
     *
     * @param integer $trnNumber
     *
     * @return RequestControlItem
     */
    public function setTrnNumber($trnNumber)
    {
        $this->trnNumber = $trnNumber;

        return $this;
    }

    /**
     * Get trnNumber
     *
     * @return integer
     */
    public function getTrnNumber()
    {
        return $this->trnNumber;
    }

    /**
     * Set eventType
     *
     * @param boolean $eventType
     *
     * @return RequestControlItem
     */
    public function setEventType($eventType)
    {
        $this->eventType = $eventType;

        return $this;
    }

    /**
     * Get eventType
     *
     * @return boolean
     */
    public function getEventType()
    {
        return $this->eventType;
    }

    /**
     * Set authorizerKey
     *
     * @param integer $authorizerKey
     *
     * @return RequestControlItem
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
     * Set requestDate
     *
     * @param \DateTime $requestDate
     *
     * @return RequestControlItem
     */
    public function setRequestDate($requestDate)
    {
        $this->requestDate = $requestDate;

        return $this;
    }

    /**
     * Get requestDate
     *
     * @return \DateTime
     */
    public function getRequestDate()
    {
        return $this->requestDate;
    }

    /**
     * Set requestStoreKey
     *
     * @param integer $requestStoreKey
     *
     * @return RequestControlItem
     */
    public function setRequestStoreKey($requestStoreKey)
    {
        $this->requestStoreKey = $requestStoreKey;

        return $this;
    }

    /**
     * Get requestStoreKey
     *
     * @return integer
     */
    public function getRequestStoreKey()
    {
        return $this->requestStoreKey;
    }

    /**
     * Set requestPosNumber
     *
     * @param integer $requestPosNumber
     *
     * @return RequestControlItem
     */
    public function setRequestPosNumber($requestPosNumber)
    {
        $this->requestPosNumber = $requestPosNumber;

        return $this;
    }

    /**
     * Get requestPosNumber
     *
     * @return integer
     */
    public function getRequestPosNumber()
    {
        return $this->requestPosNumber;
    }

    /**
     * Set requestTicketNumber
     *
     * @param integer $requestTicketNumber
     *
     * @return RequestControlItem
     */
    public function setRequestTicketNumber($requestTicketNumber)
    {
        $this->requestTicketNumber = $requestTicketNumber;

        return $this;
    }

    /**
     * Get requestTicketNumber
     *
     * @return integer
     */
    public function getRequestTicketNumber()
    {
        return $this->requestTicketNumber;
    }

    /**
     * Set requestTrnNumber
     *
     * @param integer $requestTrnNumber
     *
     * @return RequestControlItem
     */
    public function setRequestTrnNumber($requestTrnNumber)
    {
        $this->requestTrnNumber = $requestTrnNumber;

        return $this;
    }

    /**
     * Get requestTrnNumber
     *
     * @return integer
     */
    public function getRequestTrnNumber()
    {
        return $this->requestTrnNumber;
    }

    /**
     * Set requestPluId
     *
     * @param integer $requestPluId
     *
     * @return RequestControlItem
     */
    public function setRequestPluId($requestPluId)
    {
        $this->requestPluId = $requestPluId;

        return $this;
    }

    /**
     * Get requestPluId
     *
     * @return integer
     */
    public function getRequestPluId()
    {
        return $this->requestPluId;
    }

    /**
     * Set requestQuantity
     *
     * @param string $requestQuantity
     *
     * @return RequestControlItem
     */
    public function setRequestQuantity($requestQuantity)
    {
        $this->requestQuantity = $requestQuantity;

        return $this;
    }

    /**
     * Get requestQuantity
     *
     * @return string
     */
    public function getRequestQuantity()
    {
        return $this->requestQuantity;
    }

    /**
     * Set requestUnitPrice
     *
     * @param string $requestUnitPrice
     *
     * @return RequestControlItem
     */
    public function setRequestUnitPrice($requestUnitPrice)
    {
        $this->requestUnitPrice = $requestUnitPrice;

        return $this;
    }

    /**
     * Get requestUnitPrice
     *
     * @return string
     */
    public function getRequestUnitPrice()
    {
        return $this->requestUnitPrice;
    }

    /**
     * Set requestAmount
     *
     * @param string $requestAmount
     *
     * @return RequestControlItem
     */
    public function setRequestAmount($requestAmount)
    {
        $this->requestAmount = $requestAmount;

        return $this;
    }

    /**
     * Get requestAmount
     *
     * @return string
     */
    public function getRequestAmount()
    {
        return $this->requestAmount;
    }
}

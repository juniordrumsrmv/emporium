<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CashierDocument
 *
 * @ORM\Table(name="cashier_document", indexes={@ORM\Index(name="index_cashier_document_1", columns={"agent_key", "store_key", "pos_number", "trn_number", "cpu_clock"})})
 * @ORM\Entity
 */
class CashierDocument
{
    /**
     * @var integer
     *
     * @ORM\Column(name="cashier_document_key", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $cashierDocumentKey;

    /**
     * @var boolean
     *
     * @ORM\Column(name="picked", type="boolean", nullable=true)
     */
    private $picked;

    /**
     * @var boolean
     *
     * @ORM\Column(name="swap_type", type="boolean", nullable=true)
     */
    private $swapType;

    /**
     * @var integer
     *
     * @ORM\Column(name="pickup_ticket_number", type="integer", nullable=true)
     */
    private $pickupTicketNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="ticket_number", type="integer", nullable=true)
     */
    private $ticketNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="cpu_clock", type="bigint", nullable=false)
     */
    private $cpuClock;

    /**
     * @var integer
     *
     * @ORM\Column(name="agent_key", type="bigint", nullable=false)
     */
    private $agentKey;

    /**
     * @var string
     *
     * @ORM\Column(name="agent_id", type="string", length=10, nullable=true)
     */
    private $agentId;

    /**
     * @var integer
     *
     * @ORM\Column(name="media_key", type="smallint", nullable=true)
     */
    private $mediaKey;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_check", type="boolean", nullable=true)
     */
    private $isCheck;

    /**
     * @var boolean
     *
     * @ORM\Column(name="negative", type="boolean", nullable=true)
     */
    private $negative;

    /**
     * @var boolean
     *
     * @ORM\Column(name="undone", type="boolean", nullable=true)
     */
    private $undone;

    /**
     * @var boolean
     *
     * @ORM\Column(name="voided", type="boolean", nullable=true)
     */
    private $voided;

    /**
     * @var string
     *
     * @ORM\Column(name="amount", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $amount;

    /**
     * @var string
     *
     * @ORM\Column(name="amount_entered", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $amountEntered;

    /**
     * @var string
     *
     * @ORM\Column(name="unit_value", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $unitValue;

    /**
     * @var integer
     *
     * @ORM\Column(name="document_type", type="smallint", nullable=true)
     */
    private $documentType;

    /**
     * @var string
     *
     * @ORM\Column(name="approval", type="string", length=16, nullable=true)
     */
    private $approval;

    /**
     * @var string
     *
     * @ORM\Column(name="day", type="string", length=40, nullable=true)
     */
    private $day;

    /**
     * @var string
     *
     * @ORM\Column(name="document_tag", type="string", length=40, nullable=true)
     */
    private $documentTag;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=40, nullable=true)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="extra_media_key", type="smallint", nullable=true)
     */
    private $extraMediaKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="document_status", type="smallint", nullable=true)
     */
    private $documentStatus;

    /**
     * @var integer
     *
     * @ORM\Column(name="transaction_type", type="integer", nullable=false)
     */
    private $transactionType;

    /**
     * @var integer
     *
     * @ORM\Column(name="trn_number", type="bigint", nullable=false)
     */
    private $trnNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="store_key", type="bigint", nullable=false)
     */
    private $storeKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="pos_number", type="smallint", nullable=false)
     */
    private $posNumber;



    /**
     * Get cashierDocumentKey
     *
     * @return integer
     */
    public function getCashierDocumentKey()
    {
        return $this->cashierDocumentKey;
    }

    /**
     * Set picked
     *
     * @param boolean $picked
     *
     * @return CashierDocument
     */
    public function setPicked($picked)
    {
        $this->picked = $picked;

        return $this;
    }

    /**
     * Get picked
     *
     * @return boolean
     */
    public function getPicked()
    {
        return $this->picked;
    }

    /**
     * Set swapType
     *
     * @param boolean $swapType
     *
     * @return CashierDocument
     */
    public function setSwapType($swapType)
    {
        $this->swapType = $swapType;

        return $this;
    }

    /**
     * Get swapType
     *
     * @return boolean
     */
    public function getSwapType()
    {
        return $this->swapType;
    }

    /**
     * Set pickupTicketNumber
     *
     * @param integer $pickupTicketNumber
     *
     * @return CashierDocument
     */
    public function setPickupTicketNumber($pickupTicketNumber)
    {
        $this->pickupTicketNumber = $pickupTicketNumber;

        return $this;
    }

    /**
     * Get pickupTicketNumber
     *
     * @return integer
     */
    public function getPickupTicketNumber()
    {
        return $this->pickupTicketNumber;
    }

    /**
     * Set ticketNumber
     *
     * @param integer $ticketNumber
     *
     * @return CashierDocument
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
     * Set cpuClock
     *
     * @param integer $cpuClock
     *
     * @return CashierDocument
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
     * Set agentKey
     *
     * @param integer $agentKey
     *
     * @return CashierDocument
     */
    public function setAgentKey($agentKey)
    {
        $this->agentKey = $agentKey;

        return $this;
    }

    /**
     * Get agentKey
     *
     * @return integer
     */
    public function getAgentKey()
    {
        return $this->agentKey;
    }

    /**
     * Set agentId
     *
     * @param string $agentId
     *
     * @return CashierDocument
     */
    public function setAgentId($agentId)
    {
        $this->agentId = $agentId;

        return $this;
    }

    /**
     * Get agentId
     *
     * @return string
     */
    public function getAgentId()
    {
        return $this->agentId;
    }

    /**
     * Set mediaKey
     *
     * @param integer $mediaKey
     *
     * @return CashierDocument
     */
    public function setMediaKey($mediaKey)
    {
        $this->mediaKey = $mediaKey;

        return $this;
    }

    /**
     * Get mediaKey
     *
     * @return integer
     */
    public function getMediaKey()
    {
        return $this->mediaKey;
    }

    /**
     * Set isCheck
     *
     * @param boolean $isCheck
     *
     * @return CashierDocument
     */
    public function setIsCheck($isCheck)
    {
        $this->isCheck = $isCheck;

        return $this;
    }

    /**
     * Get isCheck
     *
     * @return boolean
     */
    public function getIsCheck()
    {
        return $this->isCheck;
    }

    /**
     * Set negative
     *
     * @param boolean $negative
     *
     * @return CashierDocument
     */
    public function setNegative($negative)
    {
        $this->negative = $negative;

        return $this;
    }

    /**
     * Get negative
     *
     * @return boolean
     */
    public function getNegative()
    {
        return $this->negative;
    }

    /**
     * Set undone
     *
     * @param boolean $undone
     *
     * @return CashierDocument
     */
    public function setUndone($undone)
    {
        $this->undone = $undone;

        return $this;
    }

    /**
     * Get undone
     *
     * @return boolean
     */
    public function getUndone()
    {
        return $this->undone;
    }

    /**
     * Set voided
     *
     * @param boolean $voided
     *
     * @return CashierDocument
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
     * Set amount
     *
     * @param string $amount
     *
     * @return CashierDocument
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
     * Set amountEntered
     *
     * @param string $amountEntered
     *
     * @return CashierDocument
     */
    public function setAmountEntered($amountEntered)
    {
        $this->amountEntered = $amountEntered;

        return $this;
    }

    /**
     * Get amountEntered
     *
     * @return string
     */
    public function getAmountEntered()
    {
        return $this->amountEntered;
    }

    /**
     * Set unitValue
     *
     * @param string $unitValue
     *
     * @return CashierDocument
     */
    public function setUnitValue($unitValue)
    {
        $this->unitValue = $unitValue;

        return $this;
    }

    /**
     * Get unitValue
     *
     * @return string
     */
    public function getUnitValue()
    {
        return $this->unitValue;
    }

    /**
     * Set documentType
     *
     * @param integer $documentType
     *
     * @return CashierDocument
     */
    public function setDocumentType($documentType)
    {
        $this->documentType = $documentType;

        return $this;
    }

    /**
     * Get documentType
     *
     * @return integer
     */
    public function getDocumentType()
    {
        return $this->documentType;
    }

    /**
     * Set approval
     *
     * @param string $approval
     *
     * @return CashierDocument
     */
    public function setApproval($approval)
    {
        $this->approval = $approval;

        return $this;
    }

    /**
     * Get approval
     *
     * @return string
     */
    public function getApproval()
    {
        return $this->approval;
    }

    /**
     * Set day
     *
     * @param string $day
     *
     * @return CashierDocument
     */
    public function setDay($day)
    {
        $this->day = $day;

        return $this;
    }

    /**
     * Get day
     *
     * @return string
     */
    public function getDay()
    {
        return $this->day;
    }

    /**
     * Set documentTag
     *
     * @param string $documentTag
     *
     * @return CashierDocument
     */
    public function setDocumentTag($documentTag)
    {
        $this->documentTag = $documentTag;

        return $this;
    }

    /**
     * Get documentTag
     *
     * @return string
     */
    public function getDocumentTag()
    {
        return $this->documentTag;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return CashierDocument
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set extraMediaKey
     *
     * @param integer $extraMediaKey
     *
     * @return CashierDocument
     */
    public function setExtraMediaKey($extraMediaKey)
    {
        $this->extraMediaKey = $extraMediaKey;

        return $this;
    }

    /**
     * Get extraMediaKey
     *
     * @return integer
     */
    public function getExtraMediaKey()
    {
        return $this->extraMediaKey;
    }

    /**
     * Set documentStatus
     *
     * @param integer $documentStatus
     *
     * @return CashierDocument
     */
    public function setDocumentStatus($documentStatus)
    {
        $this->documentStatus = $documentStatus;

        return $this;
    }

    /**
     * Get documentStatus
     *
     * @return integer
     */
    public function getDocumentStatus()
    {
        return $this->documentStatus;
    }

    /**
     * Set transactionType
     *
     * @param integer $transactionType
     *
     * @return CashierDocument
     */
    public function setTransactionType($transactionType)
    {
        $this->transactionType = $transactionType;

        return $this;
    }

    /**
     * Get transactionType
     *
     * @return integer
     */
    public function getTransactionType()
    {
        return $this->transactionType;
    }

    /**
     * Set trnNumber
     *
     * @param integer $trnNumber
     *
     * @return CashierDocument
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
     * Set storeKey
     *
     * @param integer $storeKey
     *
     * @return CashierDocument
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
     * @return CashierDocument
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
}

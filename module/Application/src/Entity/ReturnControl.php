<?php

namespace Emporium\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ReturnControl
 *
 * @ORM\Table(name="return_control", uniqueConstraints={@ORM\UniqueConstraint(name="index_return_control_trn", columns={"store_key", "pos_number", "transaction", "start_time"}), @ORM\UniqueConstraint(name="index_return_control_internal", columns={"store_key", "internal_return_number", "start_time"})})
 * @ORM\Entity
 */
class ReturnControl
{
    /**
     * @var integer
     *
     * @ORM\Column(name="return_number", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $returnNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="store_key", type="bigint", nullable=true)
     */
    private $storeKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="pos_number", type="smallint", nullable=true)
     */
    private $posNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="ticket_number", type="integer", nullable=true)
     */
    private $ticketNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="transaction", type="bigint", nullable=true)
     */
    private $transaction;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start_time", type="datetime", nullable=true)
     */
    private $startTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fiscal_date", type="date", nullable=true)
     */
    private $fiscalDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="used_store_key", type="bigint", nullable=true)
     */
    private $usedStoreKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="used_pos_number", type="smallint", nullable=true)
     */
    private $usedPosNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="used_ticket_number", type="integer", nullable=true)
     */
    private $usedTicketNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="used_transaction", type="bigint", nullable=true)
     */
    private $usedTransaction;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="used_start_time", type="datetime", nullable=true)
     */
    private $usedStartTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="used_fiscal_date", type="date", nullable=true)
     */
    private $usedFiscalDate;

    /**
     * @var string
     *
     * @ORM\Column(name="amount", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $amount;

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=true)
     */
    private $status;

    /**
     * @var integer
     *
     * @ORM\Column(name="reason", type="bigint", nullable=true)
     */
    private $reason;

    /**
     * @var integer
     *
     * @ORM\Column(name="internal_return_number", type="bigint", nullable=true)
     */
    private $internalReturnNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="type", type="smallint", nullable=true)
     */
    private $type = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="validity_begin", type="date", nullable=true)
     */
    private $validityBegin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="validity_end", type="date", nullable=true)
     */
    private $validityEnd;



    /**
     * Get returnNumber
     *
     * @return integer
     */
    public function getReturnNumber()
    {
        return $this->returnNumber;
    }

    /**
     * Set storeKey
     *
     * @param integer $storeKey
     *
     * @return ReturnControl
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
     * @return ReturnControl
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
     * @return ReturnControl
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
     * Set transaction
     *
     * @param integer $transaction
     *
     * @return ReturnControl
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

    /**
     * Set startTime
     *
     * @param \DateTime $startTime
     *
     * @return ReturnControl
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
     * Set fiscalDate
     *
     * @param \DateTime $fiscalDate
     *
     * @return ReturnControl
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
     * Set usedStoreKey
     *
     * @param integer $usedStoreKey
     *
     * @return ReturnControl
     */
    public function setUsedStoreKey($usedStoreKey)
    {
        $this->usedStoreKey = $usedStoreKey;

        return $this;
    }

    /**
     * Get usedStoreKey
     *
     * @return integer
     */
    public function getUsedStoreKey()
    {
        return $this->usedStoreKey;
    }

    /**
     * Set usedPosNumber
     *
     * @param integer $usedPosNumber
     *
     * @return ReturnControl
     */
    public function setUsedPosNumber($usedPosNumber)
    {
        $this->usedPosNumber = $usedPosNumber;

        return $this;
    }

    /**
     * Get usedPosNumber
     *
     * @return integer
     */
    public function getUsedPosNumber()
    {
        return $this->usedPosNumber;
    }

    /**
     * Set usedTicketNumber
     *
     * @param integer $usedTicketNumber
     *
     * @return ReturnControl
     */
    public function setUsedTicketNumber($usedTicketNumber)
    {
        $this->usedTicketNumber = $usedTicketNumber;

        return $this;
    }

    /**
     * Get usedTicketNumber
     *
     * @return integer
     */
    public function getUsedTicketNumber()
    {
        return $this->usedTicketNumber;
    }

    /**
     * Set usedTransaction
     *
     * @param integer $usedTransaction
     *
     * @return ReturnControl
     */
    public function setUsedTransaction($usedTransaction)
    {
        $this->usedTransaction = $usedTransaction;

        return $this;
    }

    /**
     * Get usedTransaction
     *
     * @return integer
     */
    public function getUsedTransaction()
    {
        return $this->usedTransaction;
    }

    /**
     * Set usedStartTime
     *
     * @param \DateTime $usedStartTime
     *
     * @return ReturnControl
     */
    public function setUsedStartTime($usedStartTime)
    {
        $this->usedStartTime = $usedStartTime;

        return $this;
    }

    /**
     * Get usedStartTime
     *
     * @return \DateTime
     */
    public function getUsedStartTime()
    {
        return $this->usedStartTime;
    }

    /**
     * Set usedFiscalDate
     *
     * @param \DateTime $usedFiscalDate
     *
     * @return ReturnControl
     */
    public function setUsedFiscalDate($usedFiscalDate)
    {
        $this->usedFiscalDate = $usedFiscalDate;

        return $this;
    }

    /**
     * Get usedFiscalDate
     *
     * @return \DateTime
     */
    public function getUsedFiscalDate()
    {
        return $this->usedFiscalDate;
    }

    /**
     * Set amount
     *
     * @param string $amount
     *
     * @return ReturnControl
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
     * Set status
     *
     * @param boolean $status
     *
     * @return ReturnControl
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return boolean
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set reason
     *
     * @param integer $reason
     *
     * @return ReturnControl
     */
    public function setReason($reason)
    {
        $this->reason = $reason;

        return $this;
    }

    /**
     * Get reason
     *
     * @return integer
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Set internalReturnNumber
     *
     * @param integer $internalReturnNumber
     *
     * @return ReturnControl
     */
    public function setInternalReturnNumber($internalReturnNumber)
    {
        $this->internalReturnNumber = $internalReturnNumber;

        return $this;
    }

    /**
     * Get internalReturnNumber
     *
     * @return integer
     */
    public function getInternalReturnNumber()
    {
        return $this->internalReturnNumber;
    }

    /**
     * Set type
     *
     * @param integer $type
     *
     * @return ReturnControl
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return integer
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set validityBegin
     *
     * @param \DateTime $validityBegin
     *
     * @return ReturnControl
     */
    public function setValidityBegin($validityBegin)
    {
        $this->validityBegin = $validityBegin;

        return $this;
    }

    /**
     * Get validityBegin
     *
     * @return \DateTime
     */
    public function getValidityBegin()
    {
        return $this->validityBegin;
    }

    /**
     * Set validityEnd
     *
     * @param \DateTime $validityEnd
     *
     * @return ReturnControl
     */
    public function setValidityEnd($validityEnd)
    {
        $this->validityEnd = $validityEnd;

        return $this;
    }

    /**
     * Get validityEnd
     *
     * @return \DateTime
     */
    public function getValidityEnd()
    {
        return $this->validityEnd;
    }
}

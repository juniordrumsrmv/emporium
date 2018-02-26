<?php

namespace Emporium\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Banking
 *
 * @ORM\Table(name="banking", indexes={@ORM\Index(name="banking_cashier_key", columns={"store_key", "pos_number", "transaction_type", "start_time", "cashier_key"}), @ORM\Index(name="index_banking_2", columns={"store_key", "transaction_type", "start_time", "pos_number", "ticket_number"}), @ORM\Index(name="index_banking_3", columns={"store_key", "pos_number", "transaction_number", "start_time"})})
 * @ORM\Entity
 */
class Banking
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
     * @ORM\Column(name="transaction_type", type="smallint", nullable=true)
     */
    private $transactionType;

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
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=true)
     */
    private $status;

    /**
     * @var integer
     *
     * @ORM\Column(name="location", type="smallint", nullable=true)
     */
    private $location;

    /**
     * @var boolean
     *
     * @ORM\Column(name="context", type="boolean", nullable=true)
     */
    private $context;

    /**
     * @var integer
     *
     * @ORM\Column(name="transaction_number", type="integer", nullable=false)
     */
    private $transactionNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="ecf_number", type="smallint", nullable=false)
     */
    private $ecfNumber;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fiscal_date", type="date", nullable=false)
     */
    private $fiscalDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="received_time", type="datetime", nullable=true)
     */
    private $receivedTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_change_time", type="datetime", nullable=true)
     */
    private $lastChangeTime;



    /**
     * Set storeKey
     *
     * @param integer $storeKey
     *
     * @return Banking
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
     * @return Banking
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
     * @return Banking
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
     * @return Banking
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
     * Set transactionType
     *
     * @param integer $transactionType
     *
     * @return Banking
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
     * Set cashierKey
     *
     * @param integer $cashierKey
     *
     * @return Banking
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
     * @return Banking
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
     * Set status
     *
     * @param boolean $status
     *
     * @return Banking
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
     * Set location
     *
     * @param integer $location
     *
     * @return Banking
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return integer
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set context
     *
     * @param boolean $context
     *
     * @return Banking
     */
    public function setContext($context)
    {
        $this->context = $context;

        return $this;
    }

    /**
     * Get context
     *
     * @return boolean
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * Set transactionNumber
     *
     * @param integer $transactionNumber
     *
     * @return Banking
     */
    public function setTransactionNumber($transactionNumber)
    {
        $this->transactionNumber = $transactionNumber;

        return $this;
    }

    /**
     * Get transactionNumber
     *
     * @return integer
     */
    public function getTransactionNumber()
    {
        return $this->transactionNumber;
    }

    /**
     * Set ecfNumber
     *
     * @param integer $ecfNumber
     *
     * @return Banking
     */
    public function setEcfNumber($ecfNumber)
    {
        $this->ecfNumber = $ecfNumber;

        return $this;
    }

    /**
     * Get ecfNumber
     *
     * @return integer
     */
    public function getEcfNumber()
    {
        return $this->ecfNumber;
    }

    /**
     * Set fiscalDate
     *
     * @param \DateTime $fiscalDate
     *
     * @return Banking
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
     * Set receivedTime
     *
     * @param \DateTime $receivedTime
     *
     * @return Banking
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
     * Set lastChangeTime
     *
     * @param \DateTime $lastChangeTime
     *
     * @return Banking
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
}

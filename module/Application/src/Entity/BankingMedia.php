<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BankingMedia
 *
 * @ORM\Table(name="banking_media", indexes={@ORM\Index(name="index_banking_media_1", columns={"store_key", "pos_number", "transaction_number", "start_time", "sequence"})})
 * @ORM\Entity
 */
class BankingMedia
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
     * @ORM\Column(name="media_id", type="smallint", nullable=false)
     */
    private $mediaId;

    /**
     * @var string
     *
     * @ORM\Column(name="amount", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $amount;

    /**
     * @var boolean
     *
     * @ORM\Column(name="document_control", type="boolean", nullable=true)
     */
    private $documentControl;

    /**
     * @var integer
     *
     * @ORM\Column(name="transaction_number", type="integer", nullable=false)
     */
    private $transactionNumber;



    /**
     * Set storeKey
     *
     * @param integer $storeKey
     *
     * @return BankingMedia
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
     * @return BankingMedia
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
     * @return BankingMedia
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
     * @return BankingMedia
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
     * @return BankingMedia
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
     * Set mediaId
     *
     * @param integer $mediaId
     *
     * @return BankingMedia
     */
    public function setMediaId($mediaId)
    {
        $this->mediaId = $mediaId;

        return $this;
    }

    /**
     * Get mediaId
     *
     * @return integer
     */
    public function getMediaId()
    {
        return $this->mediaId;
    }

    /**
     * Set amount
     *
     * @param string $amount
     *
     * @return BankingMedia
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
     * Set documentControl
     *
     * @param boolean $documentControl
     *
     * @return BankingMedia
     */
    public function setDocumentControl($documentControl)
    {
        $this->documentControl = $documentControl;

        return $this;
    }

    /**
     * Get documentControl
     *
     * @return boolean
     */
    public function getDocumentControl()
    {
        return $this->documentControl;
    }

    /**
     * Set transactionNumber
     *
     * @param integer $transactionNumber
     *
     * @return BankingMedia
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
}

<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Document
 *
 * @ORM\Table(name="document", indexes={@ORM\Index(name="index_document_1", columns={"store_key", "pos_number", "transaction_number", "start_time"}), @ORM\Index(name="index_document_id", columns={"document_type", "document_id"})})
 * @ORM\Entity
 */
class Document
{
    /**
     * @var integer
     *
     * @ORM\Column(name="document_key", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $documentKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="document_type", type="smallint", nullable=false)
     */
    private $documentType;

    /**
     * @var string
     *
     * @ORM\Column(name="document_id", type="string", length=255, nullable=false)
     */
    private $documentId;

    /**
     * @var integer
     *
     * @ORM\Column(name="store_key", type="bigint", nullable=false)
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
     * @var \DateTime
     *
     * @ORM\Column(name="start_time", type="datetime", nullable=true)
     */
    private $startTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="transaction_number", type="integer", nullable=true)
     */
    private $transactionNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="amount", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $amount;



    /**
     * Get documentKey
     *
     * @return integer
     */
    public function getDocumentKey()
    {
        return $this->documentKey;
    }

    /**
     * Set documentType
     *
     * @param integer $documentType
     *
     * @return Document
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
     * Set documentId
     *
     * @param string $documentId
     *
     * @return Document
     */
    public function setDocumentId($documentId)
    {
        $this->documentId = $documentId;

        return $this;
    }

    /**
     * Get documentId
     *
     * @return string
     */
    public function getDocumentId()
    {
        return $this->documentId;
    }

    /**
     * Set storeKey
     *
     * @param integer $storeKey
     *
     * @return Document
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
     * @return Document
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
     * @return Document
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
     * @return Document
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
     * Set transactionNumber
     *
     * @param integer $transactionNumber
     *
     * @return Document
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
     * Set amount
     *
     * @param string $amount
     *
     * @return Document
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
}

<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CashierZMedia
 *
 * @ORM\Table(name="cashier_z_media", indexes={@ORM\Index(name="index_cashier_z_1", columns={"store_key", "pos_number", "transaction_number", "start_time"})})
 * @ORM\Entity
 */
class CashierZMedia
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
     * @var boolean
     *
     * @ORM\Column(name="document_control", type="boolean", nullable=true)
     */
    private $documentControl;

    /**
     * @var string
     *
     * @ORM\Column(name="amount_entered", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $amountEntered;

    /**
     * @var string
     *
     * @ORM\Column(name="amount_voided", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $amountVoided;

    /**
     * @var string
     *
     * @ORM\Column(name="amount_loan", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $amountLoan;

    /**
     * @var string
     *
     * @ORM\Column(name="amount_pickup", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $amountPickup;

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
     * @return CashierZMedia
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
     * @return CashierZMedia
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
     * @return CashierZMedia
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
     * @return CashierZMedia
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
     * @return CashierZMedia
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
     * @return CashierZMedia
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
     * Set documentControl
     *
     * @param boolean $documentControl
     *
     * @return CashierZMedia
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
     * Set amountEntered
     *
     * @param string $amountEntered
     *
     * @return CashierZMedia
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
     * Set amountVoided
     *
     * @param string $amountVoided
     *
     * @return CashierZMedia
     */
    public function setAmountVoided($amountVoided)
    {
        $this->amountVoided = $amountVoided;

        return $this;
    }

    /**
     * Get amountVoided
     *
     * @return string
     */
    public function getAmountVoided()
    {
        return $this->amountVoided;
    }

    /**
     * Set amountLoan
     *
     * @param string $amountLoan
     *
     * @return CashierZMedia
     */
    public function setAmountLoan($amountLoan)
    {
        $this->amountLoan = $amountLoan;

        return $this;
    }

    /**
     * Get amountLoan
     *
     * @return string
     */
    public function getAmountLoan()
    {
        return $this->amountLoan;
    }

    /**
     * Set amountPickup
     *
     * @param string $amountPickup
     *
     * @return CashierZMedia
     */
    public function setAmountPickup($amountPickup)
    {
        $this->amountPickup = $amountPickup;

        return $this;
    }

    /**
     * Get amountPickup
     *
     * @return string
     */
    public function getAmountPickup()
    {
        return $this->amountPickup;
    }

    /**
     * Set transactionNumber
     *
     * @param integer $transactionNumber
     *
     * @return CashierZMedia
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

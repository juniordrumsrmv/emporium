<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CustomerStatus
 *
 * @ORM\Table(name="customer_status")
 * @ORM\Entity
 */
class CustomerStatus
{
    /**
     * @var integer
     *
     * @ORM\Column(name="customer_key", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $customerKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="customer_status", type="smallint", nullable=true)
     */
    private $customerStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_limit", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $customerLimit;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_amount_left", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $customerAmountLeft;

    /**
     * @var integer
     *
     * @ORM\Column(name="customer_points", type="bigint", nullable=true)
     */
    private $customerPoints;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_comment", type="text", length=65535, nullable=true)
     */
    private $customerComment;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_message", type="text", length=65535, nullable=true)
     */
    private $customerMessage;

    /**
     * @var boolean
     *
     * @ORM\Column(name="customer_flag_message", type="boolean", nullable=true)
     */
    private $customerFlagMessage;

    /**
     * @var boolean
     *
     * @ORM\Column(name="customer_flag_discount", type="boolean", nullable=true)
     */
    private $customerFlagDiscount;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="customer_date_discount", type="date", nullable=true)
     */
    private $customerDateDiscount;

    /**
     * @var integer
     *
     * @ORM\Column(name="customer_qtt_limit", type="smallint", nullable=true)
     */
    private $customerQttLimit;

    /**
     * @var integer
     *
     * @ORM\Column(name="customer_qtt_left", type="smallint", nullable=true)
     */
    private $customerQttLeft;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="customer_qtt_date", type="date", nullable=true)
     */
    private $customerQttDate;

    /**
     * @var boolean
     *
     * @ORM\Column(name="customer_flag_invoice", type="boolean", nullable=true)
     */
    private $customerFlagInvoice;

    /**
     * @var integer
     *
     * @ORM\Column(name="customer_idt_limit", type="smallint", nullable=true)
     */
    private $customerIdtLimit;

    /**
     * @var integer
     *
     * @ORM\Column(name="customer_idt_left", type="smallint", nullable=true)
     */
    private $customerIdtLeft;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="customer_idt_date", type="date", nullable=true)
     */
    private $customerIdtDate;



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
     * Set customerStatus
     *
     * @param integer $customerStatus
     *
     * @return CustomerStatus
     */
    public function setCustomerStatus($customerStatus)
    {
        $this->customerStatus = $customerStatus;

        return $this;
    }

    /**
     * Get customerStatus
     *
     * @return integer
     */
    public function getCustomerStatus()
    {
        return $this->customerStatus;
    }

    /**
     * Set customerLimit
     *
     * @param string $customerLimit
     *
     * @return CustomerStatus
     */
    public function setCustomerLimit($customerLimit)
    {
        $this->customerLimit = $customerLimit;

        return $this;
    }

    /**
     * Get customerLimit
     *
     * @return string
     */
    public function getCustomerLimit()
    {
        return $this->customerLimit;
    }

    /**
     * Set customerAmountLeft
     *
     * @param string $customerAmountLeft
     *
     * @return CustomerStatus
     */
    public function setCustomerAmountLeft($customerAmountLeft)
    {
        $this->customerAmountLeft = $customerAmountLeft;

        return $this;
    }

    /**
     * Get customerAmountLeft
     *
     * @return string
     */
    public function getCustomerAmountLeft()
    {
        return $this->customerAmountLeft;
    }

    /**
     * Set customerPoints
     *
     * @param integer $customerPoints
     *
     * @return CustomerStatus
     */
    public function setCustomerPoints($customerPoints)
    {
        $this->customerPoints = $customerPoints;

        return $this;
    }

    /**
     * Get customerPoints
     *
     * @return integer
     */
    public function getCustomerPoints()
    {
        return $this->customerPoints;
    }

    /**
     * Set customerComment
     *
     * @param string $customerComment
     *
     * @return CustomerStatus
     */
    public function setCustomerComment($customerComment)
    {
        $this->customerComment = $customerComment;

        return $this;
    }

    /**
     * Get customerComment
     *
     * @return string
     */
    public function getCustomerComment()
    {
        return $this->customerComment;
    }

    /**
     * Set customerMessage
     *
     * @param string $customerMessage
     *
     * @return CustomerStatus
     */
    public function setCustomerMessage($customerMessage)
    {
        $this->customerMessage = $customerMessage;

        return $this;
    }

    /**
     * Get customerMessage
     *
     * @return string
     */
    public function getCustomerMessage()
    {
        return $this->customerMessage;
    }

    /**
     * Set customerFlagMessage
     *
     * @param boolean $customerFlagMessage
     *
     * @return CustomerStatus
     */
    public function setCustomerFlagMessage($customerFlagMessage)
    {
        $this->customerFlagMessage = $customerFlagMessage;

        return $this;
    }

    /**
     * Get customerFlagMessage
     *
     * @return boolean
     */
    public function getCustomerFlagMessage()
    {
        return $this->customerFlagMessage;
    }

    /**
     * Set customerFlagDiscount
     *
     * @param boolean $customerFlagDiscount
     *
     * @return CustomerStatus
     */
    public function setCustomerFlagDiscount($customerFlagDiscount)
    {
        $this->customerFlagDiscount = $customerFlagDiscount;

        return $this;
    }

    /**
     * Get customerFlagDiscount
     *
     * @return boolean
     */
    public function getCustomerFlagDiscount()
    {
        return $this->customerFlagDiscount;
    }

    /**
     * Set customerDateDiscount
     *
     * @param \DateTime $customerDateDiscount
     *
     * @return CustomerStatus
     */
    public function setCustomerDateDiscount($customerDateDiscount)
    {
        $this->customerDateDiscount = $customerDateDiscount;

        return $this;
    }

    /**
     * Get customerDateDiscount
     *
     * @return \DateTime
     */
    public function getCustomerDateDiscount()
    {
        return $this->customerDateDiscount;
    }

    /**
     * Set customerQttLimit
     *
     * @param integer $customerQttLimit
     *
     * @return CustomerStatus
     */
    public function setCustomerQttLimit($customerQttLimit)
    {
        $this->customerQttLimit = $customerQttLimit;

        return $this;
    }

    /**
     * Get customerQttLimit
     *
     * @return integer
     */
    public function getCustomerQttLimit()
    {
        return $this->customerQttLimit;
    }

    /**
     * Set customerQttLeft
     *
     * @param integer $customerQttLeft
     *
     * @return CustomerStatus
     */
    public function setCustomerQttLeft($customerQttLeft)
    {
        $this->customerQttLeft = $customerQttLeft;

        return $this;
    }

    /**
     * Get customerQttLeft
     *
     * @return integer
     */
    public function getCustomerQttLeft()
    {
        return $this->customerQttLeft;
    }

    /**
     * Set customerQttDate
     *
     * @param \DateTime $customerQttDate
     *
     * @return CustomerStatus
     */
    public function setCustomerQttDate($customerQttDate)
    {
        $this->customerQttDate = $customerQttDate;

        return $this;
    }

    /**
     * Get customerQttDate
     *
     * @return \DateTime
     */
    public function getCustomerQttDate()
    {
        return $this->customerQttDate;
    }

    /**
     * Set customerFlagInvoice
     *
     * @param boolean $customerFlagInvoice
     *
     * @return CustomerStatus
     */
    public function setCustomerFlagInvoice($customerFlagInvoice)
    {
        $this->customerFlagInvoice = $customerFlagInvoice;

        return $this;
    }

    /**
     * Get customerFlagInvoice
     *
     * @return boolean
     */
    public function getCustomerFlagInvoice()
    {
        return $this->customerFlagInvoice;
    }

    /**
     * Set customerIdtLimit
     *
     * @param integer $customerIdtLimit
     *
     * @return CustomerStatus
     */
    public function setCustomerIdtLimit($customerIdtLimit)
    {
        $this->customerIdtLimit = $customerIdtLimit;

        return $this;
    }

    /**
     * Get customerIdtLimit
     *
     * @return integer
     */
    public function getCustomerIdtLimit()
    {
        return $this->customerIdtLimit;
    }

    /**
     * Set customerIdtLeft
     *
     * @param integer $customerIdtLeft
     *
     * @return CustomerStatus
     */
    public function setCustomerIdtLeft($customerIdtLeft)
    {
        $this->customerIdtLeft = $customerIdtLeft;

        return $this;
    }

    /**
     * Get customerIdtLeft
     *
     * @return integer
     */
    public function getCustomerIdtLeft()
    {
        return $this->customerIdtLeft;
    }

    /**
     * Set customerIdtDate
     *
     * @param \DateTime $customerIdtDate
     *
     * @return CustomerStatus
     */
    public function setCustomerIdtDate($customerIdtDate)
    {
        $this->customerIdtDate = $customerIdtDate;

        return $this;
    }

    /**
     * Get customerIdtDate
     *
     * @return \DateTime
     */
    public function getCustomerIdtDate()
    {
        return $this->customerIdtDate;
    }
}

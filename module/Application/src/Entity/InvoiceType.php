<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InvoiceType
 *
 * @ORM\Table(name="invoice_type")
 * @ORM\Entity
 */
class InvoiceType
{
    /**
     * @var integer
     *
     * @ORM\Column(name="invoice_type_key", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $invoiceTypeKey;

    /**
     * @var string
     *
     * @ORM\Column(name="invoice_name", type="string", length=30, nullable=false)
     */
    private $invoiceName;

    /**
     * @var boolean
     *
     * @ORM\Column(name="invoice_print", type="boolean", nullable=true)
     */
    private $invoicePrint;

    /**
     * @var boolean
     *
     * @ORM\Column(name="invoice_in_out", type="boolean", nullable=true)
     */
    private $invoiceInOut;

    /**
     * @var string
     *
     * @ORM\Column(name="invoice_cfop", type="string", length=10, nullable=true)
     */
    private $invoiceCfop;

    /**
     * @var string
     *
     * @ORM\Column(name="invoice_cfop_inter", type="string", length=10, nullable=true)
     */
    private $invoiceCfopInter;

    /**
     * @var string
     *
     * @ORM\Column(name="invoice_cfop_st", type="string", length=10, nullable=true)
     */
    private $invoiceCfopSt;

    /**
     * @var string
     *
     * @ORM\Column(name="invoice_cfop_st_inter", type="string", length=10, nullable=true)
     */
    private $invoiceCfopStInter;

    /**
     * @var string
     *
     * @ORM\Column(name="invoice_comment", type="text", length=65535, nullable=true)
     */
    private $invoiceComment;

    /**
     * @var string
     *
     * @ORM\Column(name="invoice_message", type="text", length=65535, nullable=true)
     */
    private $invoiceMessage;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="invoice_last_change_time", type="datetime", nullable=true)
     */
    private $invoiceLastChangeTime;

    /**
     * @var boolean
     *
     * @ORM\Column(name="invoice_extra_type", type="boolean", nullable=true)
     */
    private $invoiceExtraType;

    /**
     * @var boolean
     *
     * @ORM\Column(name="invoice_receipt", type="boolean", nullable=true)
     */
    private $invoiceReceipt;



    /**
     * Get invoiceTypeKey
     *
     * @return integer
     */
    public function getInvoiceTypeKey()
    {
        return $this->invoiceTypeKey;
    }

    /**
     * Set invoiceName
     *
     * @param string $invoiceName
     *
     * @return InvoiceType
     */
    public function setInvoiceName($invoiceName)
    {
        $this->invoiceName = $invoiceName;

        return $this;
    }

    /**
     * Get invoiceName
     *
     * @return string
     */
    public function getInvoiceName()
    {
        return $this->invoiceName;
    }

    /**
     * Set invoicePrint
     *
     * @param boolean $invoicePrint
     *
     * @return InvoiceType
     */
    public function setInvoicePrint($invoicePrint)
    {
        $this->invoicePrint = $invoicePrint;

        return $this;
    }

    /**
     * Get invoicePrint
     *
     * @return boolean
     */
    public function getInvoicePrint()
    {
        return $this->invoicePrint;
    }

    /**
     * Set invoiceInOut
     *
     * @param boolean $invoiceInOut
     *
     * @return InvoiceType
     */
    public function setInvoiceInOut($invoiceInOut)
    {
        $this->invoiceInOut = $invoiceInOut;

        return $this;
    }

    /**
     * Get invoiceInOut
     *
     * @return boolean
     */
    public function getInvoiceInOut()
    {
        return $this->invoiceInOut;
    }

    /**
     * Set invoiceCfop
     *
     * @param string $invoiceCfop
     *
     * @return InvoiceType
     */
    public function setInvoiceCfop($invoiceCfop)
    {
        $this->invoiceCfop = $invoiceCfop;

        return $this;
    }

    /**
     * Get invoiceCfop
     *
     * @return string
     */
    public function getInvoiceCfop()
    {
        return $this->invoiceCfop;
    }

    /**
     * Set invoiceCfopInter
     *
     * @param string $invoiceCfopInter
     *
     * @return InvoiceType
     */
    public function setInvoiceCfopInter($invoiceCfopInter)
    {
        $this->invoiceCfopInter = $invoiceCfopInter;

        return $this;
    }

    /**
     * Get invoiceCfopInter
     *
     * @return string
     */
    public function getInvoiceCfopInter()
    {
        return $this->invoiceCfopInter;
    }

    /**
     * Set invoiceCfopSt
     *
     * @param string $invoiceCfopSt
     *
     * @return InvoiceType
     */
    public function setInvoiceCfopSt($invoiceCfopSt)
    {
        $this->invoiceCfopSt = $invoiceCfopSt;

        return $this;
    }

    /**
     * Get invoiceCfopSt
     *
     * @return string
     */
    public function getInvoiceCfopSt()
    {
        return $this->invoiceCfopSt;
    }

    /**
     * Set invoiceCfopStInter
     *
     * @param string $invoiceCfopStInter
     *
     * @return InvoiceType
     */
    public function setInvoiceCfopStInter($invoiceCfopStInter)
    {
        $this->invoiceCfopStInter = $invoiceCfopStInter;

        return $this;
    }

    /**
     * Get invoiceCfopStInter
     *
     * @return string
     */
    public function getInvoiceCfopStInter()
    {
        return $this->invoiceCfopStInter;
    }

    /**
     * Set invoiceComment
     *
     * @param string $invoiceComment
     *
     * @return InvoiceType
     */
    public function setInvoiceComment($invoiceComment)
    {
        $this->invoiceComment = $invoiceComment;

        return $this;
    }

    /**
     * Get invoiceComment
     *
     * @return string
     */
    public function getInvoiceComment()
    {
        return $this->invoiceComment;
    }

    /**
     * Set invoiceMessage
     *
     * @param string $invoiceMessage
     *
     * @return InvoiceType
     */
    public function setInvoiceMessage($invoiceMessage)
    {
        $this->invoiceMessage = $invoiceMessage;

        return $this;
    }

    /**
     * Get invoiceMessage
     *
     * @return string
     */
    public function getInvoiceMessage()
    {
        return $this->invoiceMessage;
    }

    /**
     * Set invoiceLastChangeTime
     *
     * @param \DateTime $invoiceLastChangeTime
     *
     * @return InvoiceType
     */
    public function setInvoiceLastChangeTime($invoiceLastChangeTime)
    {
        $this->invoiceLastChangeTime = $invoiceLastChangeTime;

        return $this;
    }

    /**
     * Get invoiceLastChangeTime
     *
     * @return \DateTime
     */
    public function getInvoiceLastChangeTime()
    {
        return $this->invoiceLastChangeTime;
    }

    /**
     * Set invoiceExtraType
     *
     * @param boolean $invoiceExtraType
     *
     * @return InvoiceType
     */
    public function setInvoiceExtraType($invoiceExtraType)
    {
        $this->invoiceExtraType = $invoiceExtraType;

        return $this;
    }

    /**
     * Get invoiceExtraType
     *
     * @return boolean
     */
    public function getInvoiceExtraType()
    {
        return $this->invoiceExtraType;
    }

    /**
     * Set invoiceReceipt
     *
     * @param boolean $invoiceReceipt
     *
     * @return InvoiceType
     */
    public function setInvoiceReceipt($invoiceReceipt)
    {
        $this->invoiceReceipt = $invoiceReceipt;

        return $this;
    }

    /**
     * Get invoiceReceipt
     *
     * @return boolean
     */
    public function getInvoiceReceipt()
    {
        return $this->invoiceReceipt;
    }
}

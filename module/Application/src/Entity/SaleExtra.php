<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SaleExtra
 *
 * @ORM\Table(name="sale_extra")
 * @ORM\Entity
 */
class SaleExtra
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
     * @ORM\Column(name="invoice_number", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $invoiceNumber = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fiscal_date", type="date", nullable=false)
     */
    private $fiscalDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="sale_type", type="smallint", nullable=true)
     */
    private $saleType;

    /**
     * @var integer
     *
     * @ORM\Column(name="maker_key", type="bigint", nullable=true)
     */
    private $makerKey;

    /**
     * @var string
     *
     * @ORM\Column(name="serial", type="string", length=8, nullable=true)
     */
    private $serial;

    /**
     * @var string
     *
     * @ORM\Column(name="cfop", type="string", length=10, nullable=true)
     */
    private $cfop;

    /**
     * @var string
     *
     * @ORM\Column(name="base_icms", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $baseIcms;

    /**
     * @var string
     *
     * @ORM\Column(name="icms", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $icms;

    /**
     * @var string
     *
     * @ORM\Column(name="base_subst", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $baseSubst;

    /**
     * @var string
     *
     * @ORM\Column(name="icms_subst", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $icmsSubst;

    /**
     * @var string
     *
     * @ORM\Column(name="amo_items", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $amoItems;

    /**
     * @var string
     *
     * @ORM\Column(name="frete", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $frete;

    /**
     * @var string
     *
     * @ORM\Column(name="seguro", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $seguro;

    /**
     * @var string
     *
     * @ORM\Column(name="outras", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $outras;

    /**
     * @var string
     *
     * @ORM\Column(name="ipi", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $ipi;

    /**
     * @var string
     *
     * @ORM\Column(name="amo_invoice", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $amoInvoice;

    /**
     * @var integer
     *
     * @ORM\Column(name="store2_key", type="bigint", nullable=true)
     */
    private $store2Key;

    /**
     * @var integer
     *
     * @ORM\Column(name="invoice_type", type="smallint", nullable=true)
     */
    private $invoiceType;

    /**
     * @var integer
     *
     * @ORM\Column(name="from_key", type="bigint", nullable=true)
     */
    private $fromKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="to_key", type="bigint", nullable=true)
     */
    private $toKey;

    /**
     * @var string
     *
     * @ORM\Column(name="sale_comment", type="text", length=65535, nullable=true)
     */
    private $saleComment;

    /**
     * @var string
     *
     * @ORM\Column(name="request_comment", type="text", length=65535, nullable=true)
     */
    private $requestComment;

    /**
     * @var string
     *
     * @ORM\Column(name="sale_name", type="string", length=22, nullable=true)
     */
    private $saleName;

    /**
     * @var boolean
     *
     * @ORM\Column(name="voided", type="boolean", nullable=true)
     */
    private $voided;

    /**
     * @var integer
     *
     * @ORM\Column(name="delivery_item_id", type="bigint", nullable=true)
     */
    private $deliveryItemId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="emission_date", type="date", nullable=true)
     */
    private $emissionDate;



    /**
     * Set storeKey
     *
     * @param integer $storeKey
     *
     * @return SaleExtra
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
     * @return SaleExtra
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
     * @return SaleExtra
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
     * @return SaleExtra
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
     * Set invoiceNumber
     *
     * @param integer $invoiceNumber
     *
     * @return SaleExtra
     */
    public function setInvoiceNumber($invoiceNumber)
    {
        $this->invoiceNumber = $invoiceNumber;

        return $this;
    }

    /**
     * Get invoiceNumber
     *
     * @return integer
     */
    public function getInvoiceNumber()
    {
        return $this->invoiceNumber;
    }

    /**
     * Set fiscalDate
     *
     * @param \DateTime $fiscalDate
     *
     * @return SaleExtra
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
     * Set saleType
     *
     * @param integer $saleType
     *
     * @return SaleExtra
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
     * Set makerKey
     *
     * @param integer $makerKey
     *
     * @return SaleExtra
     */
    public function setMakerKey($makerKey)
    {
        $this->makerKey = $makerKey;

        return $this;
    }

    /**
     * Get makerKey
     *
     * @return integer
     */
    public function getMakerKey()
    {
        return $this->makerKey;
    }

    /**
     * Set serial
     *
     * @param string $serial
     *
     * @return SaleExtra
     */
    public function setSerial($serial)
    {
        $this->serial = $serial;

        return $this;
    }

    /**
     * Get serial
     *
     * @return string
     */
    public function getSerial()
    {
        return $this->serial;
    }

    /**
     * Set cfop
     *
     * @param string $cfop
     *
     * @return SaleExtra
     */
    public function setCfop($cfop)
    {
        $this->cfop = $cfop;

        return $this;
    }

    /**
     * Get cfop
     *
     * @return string
     */
    public function getCfop()
    {
        return $this->cfop;
    }

    /**
     * Set baseIcms
     *
     * @param string $baseIcms
     *
     * @return SaleExtra
     */
    public function setBaseIcms($baseIcms)
    {
        $this->baseIcms = $baseIcms;

        return $this;
    }

    /**
     * Get baseIcms
     *
     * @return string
     */
    public function getBaseIcms()
    {
        return $this->baseIcms;
    }

    /**
     * Set icms
     *
     * @param string $icms
     *
     * @return SaleExtra
     */
    public function setIcms($icms)
    {
        $this->icms = $icms;

        return $this;
    }

    /**
     * Get icms
     *
     * @return string
     */
    public function getIcms()
    {
        return $this->icms;
    }

    /**
     * Set baseSubst
     *
     * @param string $baseSubst
     *
     * @return SaleExtra
     */
    public function setBaseSubst($baseSubst)
    {
        $this->baseSubst = $baseSubst;

        return $this;
    }

    /**
     * Get baseSubst
     *
     * @return string
     */
    public function getBaseSubst()
    {
        return $this->baseSubst;
    }

    /**
     * Set icmsSubst
     *
     * @param string $icmsSubst
     *
     * @return SaleExtra
     */
    public function setIcmsSubst($icmsSubst)
    {
        $this->icmsSubst = $icmsSubst;

        return $this;
    }

    /**
     * Get icmsSubst
     *
     * @return string
     */
    public function getIcmsSubst()
    {
        return $this->icmsSubst;
    }

    /**
     * Set amoItems
     *
     * @param string $amoItems
     *
     * @return SaleExtra
     */
    public function setAmoItems($amoItems)
    {
        $this->amoItems = $amoItems;

        return $this;
    }

    /**
     * Get amoItems
     *
     * @return string
     */
    public function getAmoItems()
    {
        return $this->amoItems;
    }

    /**
     * Set frete
     *
     * @param string $frete
     *
     * @return SaleExtra
     */
    public function setFrete($frete)
    {
        $this->frete = $frete;

        return $this;
    }

    /**
     * Get frete
     *
     * @return string
     */
    public function getFrete()
    {
        return $this->frete;
    }

    /**
     * Set seguro
     *
     * @param string $seguro
     *
     * @return SaleExtra
     */
    public function setSeguro($seguro)
    {
        $this->seguro = $seguro;

        return $this;
    }

    /**
     * Get seguro
     *
     * @return string
     */
    public function getSeguro()
    {
        return $this->seguro;
    }

    /**
     * Set outras
     *
     * @param string $outras
     *
     * @return SaleExtra
     */
    public function setOutras($outras)
    {
        $this->outras = $outras;

        return $this;
    }

    /**
     * Get outras
     *
     * @return string
     */
    public function getOutras()
    {
        return $this->outras;
    }

    /**
     * Set ipi
     *
     * @param string $ipi
     *
     * @return SaleExtra
     */
    public function setIpi($ipi)
    {
        $this->ipi = $ipi;

        return $this;
    }

    /**
     * Get ipi
     *
     * @return string
     */
    public function getIpi()
    {
        return $this->ipi;
    }

    /**
     * Set amoInvoice
     *
     * @param string $amoInvoice
     *
     * @return SaleExtra
     */
    public function setAmoInvoice($amoInvoice)
    {
        $this->amoInvoice = $amoInvoice;

        return $this;
    }

    /**
     * Get amoInvoice
     *
     * @return string
     */
    public function getAmoInvoice()
    {
        return $this->amoInvoice;
    }

    /**
     * Set store2Key
     *
     * @param integer $store2Key
     *
     * @return SaleExtra
     */
    public function setStore2Key($store2Key)
    {
        $this->store2Key = $store2Key;

        return $this;
    }

    /**
     * Get store2Key
     *
     * @return integer
     */
    public function getStore2Key()
    {
        return $this->store2Key;
    }

    /**
     * Set invoiceType
     *
     * @param integer $invoiceType
     *
     * @return SaleExtra
     */
    public function setInvoiceType($invoiceType)
    {
        $this->invoiceType = $invoiceType;

        return $this;
    }

    /**
     * Get invoiceType
     *
     * @return integer
     */
    public function getInvoiceType()
    {
        return $this->invoiceType;
    }

    /**
     * Set fromKey
     *
     * @param integer $fromKey
     *
     * @return SaleExtra
     */
    public function setFromKey($fromKey)
    {
        $this->fromKey = $fromKey;

        return $this;
    }

    /**
     * Get fromKey
     *
     * @return integer
     */
    public function getFromKey()
    {
        return $this->fromKey;
    }

    /**
     * Set toKey
     *
     * @param integer $toKey
     *
     * @return SaleExtra
     */
    public function setToKey($toKey)
    {
        $this->toKey = $toKey;

        return $this;
    }

    /**
     * Get toKey
     *
     * @return integer
     */
    public function getToKey()
    {
        return $this->toKey;
    }

    /**
     * Set saleComment
     *
     * @param string $saleComment
     *
     * @return SaleExtra
     */
    public function setSaleComment($saleComment)
    {
        $this->saleComment = $saleComment;

        return $this;
    }

    /**
     * Get saleComment
     *
     * @return string
     */
    public function getSaleComment()
    {
        return $this->saleComment;
    }

    /**
     * Set requestComment
     *
     * @param string $requestComment
     *
     * @return SaleExtra
     */
    public function setRequestComment($requestComment)
    {
        $this->requestComment = $requestComment;

        return $this;
    }

    /**
     * Get requestComment
     *
     * @return string
     */
    public function getRequestComment()
    {
        return $this->requestComment;
    }

    /**
     * Set saleName
     *
     * @param string $saleName
     *
     * @return SaleExtra
     */
    public function setSaleName($saleName)
    {
        $this->saleName = $saleName;

        return $this;
    }

    /**
     * Get saleName
     *
     * @return string
     */
    public function getSaleName()
    {
        return $this->saleName;
    }

    /**
     * Set voided
     *
     * @param boolean $voided
     *
     * @return SaleExtra
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
     * Set deliveryItemId
     *
     * @param integer $deliveryItemId
     *
     * @return SaleExtra
     */
    public function setDeliveryItemId($deliveryItemId)
    {
        $this->deliveryItemId = $deliveryItemId;

        return $this;
    }

    /**
     * Get deliveryItemId
     *
     * @return integer
     */
    public function getDeliveryItemId()
    {
        return $this->deliveryItemId;
    }

    /**
     * Set emissionDate
     *
     * @param \DateTime $emissionDate
     *
     * @return SaleExtra
     */
    public function setEmissionDate($emissionDate)
    {
        $this->emissionDate = $emissionDate;

        return $this;
    }

    /**
     * Get emissionDate
     *
     * @return \DateTime
     */
    public function getEmissionDate()
    {
        return $this->emissionDate;
    }
}

<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SaleCfe
 *
 * @ORM\Table(name="sale_cfe", indexes={@ORM\Index(name="index_sale_cfe", columns={"store_key", "pos_number", "ticket_number", "start_time", "sale_type"})})
 * @ORM\Entity
 */
class SaleCfe
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
     * @ORM\Column(name="sale_type", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $saleType = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="nfce_number", type="bigint", nullable=false)
     */
    private $nfceNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="nfce_key", type="string", length=64, nullable=true)
     */
    private $nfceKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="nfce_status", type="smallint", nullable=true)
     */
    private $nfceStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="nfce_protocol", type="string", length=64, nullable=true)
     */
    private $nfceProtocol;

    /**
     * @var integer
     *
     * @ORM\Column(name="sefaz_status", type="smallint", nullable=true)
     */
    private $sefazStatus;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="protocol_date", type="datetime", nullable=true)
     */
    private $protocolDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="emit_date", type="datetime", nullable=true)
     */
    private $emitDate;

    /**
     * @var boolean
     *
     * @ORM\Column(name="voided", type="boolean", nullable=true)
     */
    private $voided;

    /**
     * @var string
     *
     * @ORM\Column(name="amount_due", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $amountDue;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="smallint", nullable=true)
     */
    private $status = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="sefaz_link", type="text", length=65535, nullable=true)
     */
    private $sefazLink;

    /**
     * @var string
     *
     * @ORM\Column(name="file_path", type="string", length=255, nullable=true)
     */
    private $filePath;



    /**
     * Set storeKey
     *
     * @param integer $storeKey
     *
     * @return SaleCfe
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
     * @return SaleCfe
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
     * @return SaleCfe
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
     * @return SaleCfe
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
     * Set saleType
     *
     * @param integer $saleType
     *
     * @return SaleCfe
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
     * Set nfceNumber
     *
     * @param integer $nfceNumber
     *
     * @return SaleCfe
     */
    public function setNfceNumber($nfceNumber)
    {
        $this->nfceNumber = $nfceNumber;

        return $this;
    }

    /**
     * Get nfceNumber
     *
     * @return integer
     */
    public function getNfceNumber()
    {
        return $this->nfceNumber;
    }

    /**
     * Set nfceKey
     *
     * @param string $nfceKey
     *
     * @return SaleCfe
     */
    public function setNfceKey($nfceKey)
    {
        $this->nfceKey = $nfceKey;

        return $this;
    }

    /**
     * Get nfceKey
     *
     * @return string
     */
    public function getNfceKey()
    {
        return $this->nfceKey;
    }

    /**
     * Set nfceStatus
     *
     * @param integer $nfceStatus
     *
     * @return SaleCfe
     */
    public function setNfceStatus($nfceStatus)
    {
        $this->nfceStatus = $nfceStatus;

        return $this;
    }

    /**
     * Get nfceStatus
     *
     * @return integer
     */
    public function getNfceStatus()
    {
        return $this->nfceStatus;
    }

    /**
     * Set nfceProtocol
     *
     * @param string $nfceProtocol
     *
     * @return SaleCfe
     */
    public function setNfceProtocol($nfceProtocol)
    {
        $this->nfceProtocol = $nfceProtocol;

        return $this;
    }

    /**
     * Get nfceProtocol
     *
     * @return string
     */
    public function getNfceProtocol()
    {
        return $this->nfceProtocol;
    }

    /**
     * Set sefazStatus
     *
     * @param integer $sefazStatus
     *
     * @return SaleCfe
     */
    public function setSefazStatus($sefazStatus)
    {
        $this->sefazStatus = $sefazStatus;

        return $this;
    }

    /**
     * Get sefazStatus
     *
     * @return integer
     */
    public function getSefazStatus()
    {
        return $this->sefazStatus;
    }

    /**
     * Set protocolDate
     *
     * @param \DateTime $protocolDate
     *
     * @return SaleCfe
     */
    public function setProtocolDate($protocolDate)
    {
        $this->protocolDate = $protocolDate;

        return $this;
    }

    /**
     * Get protocolDate
     *
     * @return \DateTime
     */
    public function getProtocolDate()
    {
        return $this->protocolDate;
    }

    /**
     * Set emitDate
     *
     * @param \DateTime $emitDate
     *
     * @return SaleCfe
     */
    public function setEmitDate($emitDate)
    {
        $this->emitDate = $emitDate;

        return $this;
    }

    /**
     * Get emitDate
     *
     * @return \DateTime
     */
    public function getEmitDate()
    {
        return $this->emitDate;
    }

    /**
     * Set voided
     *
     * @param boolean $voided
     *
     * @return SaleCfe
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
     * Set amountDue
     *
     * @param string $amountDue
     *
     * @return SaleCfe
     */
    public function setAmountDue($amountDue)
    {
        $this->amountDue = $amountDue;

        return $this;
    }

    /**
     * Get amountDue
     *
     * @return string
     */
    public function getAmountDue()
    {
        return $this->amountDue;
    }

    /**
     * Set status
     *
     * @param integer $status
     *
     * @return SaleCfe
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set sefazLink
     *
     * @param string $sefazLink
     *
     * @return SaleCfe
     */
    public function setSefazLink($sefazLink)
    {
        $this->sefazLink = $sefazLink;

        return $this;
    }

    /**
     * Get sefazLink
     *
     * @return string
     */
    public function getSefazLink()
    {
        return $this->sefazLink;
    }

    /**
     * Set filePath
     *
     * @param string $filePath
     *
     * @return SaleCfe
     */
    public function setFilePath($filePath)
    {
        $this->filePath = $filePath;

        return $this;
    }

    /**
     * Get filePath
     *
     * @return string
     */
    public function getFilePath()
    {
        return $this->filePath;
    }
}

<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SaleNfce
 *
 * @ORM\Table(name="sale_nfce")
 * @ORM\Entity
 */
class SaleNfce
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
     * @ORM\Column(name="nfce_number", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $nfceNumber;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start_time", type="datetime", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $startTime;

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
     * @var integer
     *
     * @ORM\Column(name="sefaz_status", type="smallint", nullable=true)
     */
    private $sefazStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="nfce_protocol", type="string", length=64, nullable=true)
     */
    private $nfceProtocol;

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
     * @var integer
     *
     * @ORM\Column(name="ticket_number", type="integer", nullable=true)
     */
    private $ticketNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="sefaz_link", type="text", length=65535, nullable=true)
     */
    private $sefazLink;



    /**
     * Set storeKey
     *
     * @param integer $storeKey
     *
     * @return SaleNfce
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
     * @return SaleNfce
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
     * Set nfceNumber
     *
     * @param integer $nfceNumber
     *
     * @return SaleNfce
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
     * Set startTime
     *
     * @param \DateTime $startTime
     *
     * @return SaleNfce
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
     * Set nfceKey
     *
     * @param string $nfceKey
     *
     * @return SaleNfce
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
     * @return SaleNfce
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
     * Set sefazStatus
     *
     * @param integer $sefazStatus
     *
     * @return SaleNfce
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
     * Set nfceProtocol
     *
     * @param string $nfceProtocol
     *
     * @return SaleNfce
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
     * Set protocolDate
     *
     * @param \DateTime $protocolDate
     *
     * @return SaleNfce
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
     * @return SaleNfce
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
     * Set ticketNumber
     *
     * @param integer $ticketNumber
     *
     * @return SaleNfce
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
     * Set sefazLink
     *
     * @param string $sefazLink
     *
     * @return SaleNfce
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
}

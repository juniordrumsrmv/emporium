<?php

namespace Emporium\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PafTicket
 *
 * @ORM\Table(name="paf_ticket", indexes={@ORM\Index(name="index_ticket_ecf", columns={"store_key", "ecf_number", "fiscal_date", "ticket_number"})})
 * @ORM\Entity
 */
class PafTicket
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
     * @var string
     *
     * @ORM\Column(name="paf_ticket_type", type="string", length=2, nullable=true)
     */
    private $pafTicketType;

    /**
     * @var integer
     *
     * @ORM\Column(name="ecf_number", type="smallint", nullable=false)
     */
    private $ecfNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="trn_number", type="bigint", nullable=true)
     */
    private $trnNumber;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fiscal_date", type="date", nullable=true)
     */
    private $fiscalDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="GNF", type="integer", nullable=true)
     */
    private $gnf;

    /**
     * @var integer
     *
     * @ORM\Column(name="GRG", type="integer", nullable=true)
     */
    private $grg;

    /**
     * @var integer
     *
     * @ORM\Column(name="CDC", type="integer", nullable=true)
     */
    private $cdc;

    /**
     * @var integer
     *
     * @ORM\Column(name="CCF", type="integer", nullable=true)
     */
    private $ccf;

    /**
     * @var integer
     *
     * @ORM\Column(name="trn_status", type="smallint", nullable=true)
     */
    private $trnStatus;



    /**
     * Set storeKey
     *
     * @param integer $storeKey
     *
     * @return PafTicket
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
     * @return PafTicket
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
     * @return PafTicket
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
     * @return PafTicket
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
     * Set pafTicketType
     *
     * @param string $pafTicketType
     *
     * @return PafTicket
     */
    public function setPafTicketType($pafTicketType)
    {
        $this->pafTicketType = $pafTicketType;

        return $this;
    }

    /**
     * Get pafTicketType
     *
     * @return string
     */
    public function getPafTicketType()
    {
        return $this->pafTicketType;
    }

    /**
     * Set ecfNumber
     *
     * @param integer $ecfNumber
     *
     * @return PafTicket
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
     * Set trnNumber
     *
     * @param integer $trnNumber
     *
     * @return PafTicket
     */
    public function setTrnNumber($trnNumber)
    {
        $this->trnNumber = $trnNumber;

        return $this;
    }

    /**
     * Get trnNumber
     *
     * @return integer
     */
    public function getTrnNumber()
    {
        return $this->trnNumber;
    }

    /**
     * Set fiscalDate
     *
     * @param \DateTime $fiscalDate
     *
     * @return PafTicket
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
     * Set gnf
     *
     * @param integer $gnf
     *
     * @return PafTicket
     */
    public function setGnf($gnf)
    {
        $this->gnf = $gnf;

        return $this;
    }

    /**
     * Get gnf
     *
     * @return integer
     */
    public function getGnf()
    {
        return $this->gnf;
    }

    /**
     * Set grg
     *
     * @param integer $grg
     *
     * @return PafTicket
     */
    public function setGrg($grg)
    {
        $this->grg = $grg;

        return $this;
    }

    /**
     * Get grg
     *
     * @return integer
     */
    public function getGrg()
    {
        return $this->grg;
    }

    /**
     * Set cdc
     *
     * @param integer $cdc
     *
     * @return PafTicket
     */
    public function setCdc($cdc)
    {
        $this->cdc = $cdc;

        return $this;
    }

    /**
     * Get cdc
     *
     * @return integer
     */
    public function getCdc()
    {
        return $this->cdc;
    }

    /**
     * Set ccf
     *
     * @param integer $ccf
     *
     * @return PafTicket
     */
    public function setCcf($ccf)
    {
        $this->ccf = $ccf;

        return $this;
    }

    /**
     * Get ccf
     *
     * @return integer
     */
    public function getCcf()
    {
        return $this->ccf;
    }

    /**
     * Set trnStatus
     *
     * @param integer $trnStatus
     *
     * @return PafTicket
     */
    public function setTrnStatus($trnStatus)
    {
        $this->trnStatus = $trnStatus;

        return $this;
    }

    /**
     * Get trnStatus
     *
     * @return integer
     */
    public function getTrnStatus()
    {
        return $this->trnStatus;
    }
}

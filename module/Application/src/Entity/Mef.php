<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mef
 *
 * @ORM\Table(name="mef")
 * @ORM\Entity
 */
class Mef
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
     * @ORM\Column(name="trn_number", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $trnNumber;

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
     * @ORM\Column(name="ticket_number", type="integer", nullable=false)
     */
    private $ticketNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="ecf_number", type="smallint", nullable=false)
     */
    private $ecfNumber;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fiscal_date", type="date", nullable=true)
     */
    private $fiscalDate;

    /**
     * @var string
     *
     * @ORM\Column(name="mef_text", type="blob", nullable=true)
     */
    private $mefText;



    /**
     * Set storeKey
     *
     * @param integer $storeKey
     *
     * @return Mef
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
     * @return Mef
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
     * Set trnNumber
     *
     * @param integer $trnNumber
     *
     * @return Mef
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
     * Set startTime
     *
     * @param \DateTime $startTime
     *
     * @return Mef
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
     * Set ticketNumber
     *
     * @param integer $ticketNumber
     *
     * @return Mef
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
     * Set ecfNumber
     *
     * @param integer $ecfNumber
     *
     * @return Mef
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
     * @return Mef
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
     * Set mefText
     *
     * @param string $mefText
     *
     * @return Mef
     */
    public function setMefText($mefText)
    {
        $this->mefText = $mefText;

        return $this;
    }

    /**
     * Get mefText
     *
     * @return string
     */
    public function getMefText()
    {
        return $this->mefText;
    }
}

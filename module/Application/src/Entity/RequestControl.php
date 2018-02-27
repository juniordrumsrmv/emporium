<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RequestControl
 *
 * @ORM\Table(name="request_control", indexes={@ORM\Index(name="index_request", columns={"request_store_key", "request_pos_number", "request_trn_number", "request_date"})})
 * @ORM\Entity
 */
class RequestControl
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
     * @ORM\Column(name="request_store_key", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $requestStoreKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="request_pos_number", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $requestPosNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="request_trn_number", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $requestTrnNumber;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="request_date", type="date", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $requestDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fiscal_date", type="date", nullable=true)
     */
    private $fiscalDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="trn_number", type="bigint", nullable=true)
     */
    private $trnNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="request_ticket_number", type="integer", nullable=true)
     */
    private $requestTicketNumber;



    /**
     * Set storeKey
     *
     * @param integer $storeKey
     *
     * @return RequestControl
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
     * @return RequestControl
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
     * @return RequestControl
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
     * @return RequestControl
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
     * Set requestStoreKey
     *
     * @param integer $requestStoreKey
     *
     * @return RequestControl
     */
    public function setRequestStoreKey($requestStoreKey)
    {
        $this->requestStoreKey = $requestStoreKey;

        return $this;
    }

    /**
     * Get requestStoreKey
     *
     * @return integer
     */
    public function getRequestStoreKey()
    {
        return $this->requestStoreKey;
    }

    /**
     * Set requestPosNumber
     *
     * @param integer $requestPosNumber
     *
     * @return RequestControl
     */
    public function setRequestPosNumber($requestPosNumber)
    {
        $this->requestPosNumber = $requestPosNumber;

        return $this;
    }

    /**
     * Get requestPosNumber
     *
     * @return integer
     */
    public function getRequestPosNumber()
    {
        return $this->requestPosNumber;
    }

    /**
     * Set requestTrnNumber
     *
     * @param integer $requestTrnNumber
     *
     * @return RequestControl
     */
    public function setRequestTrnNumber($requestTrnNumber)
    {
        $this->requestTrnNumber = $requestTrnNumber;

        return $this;
    }

    /**
     * Get requestTrnNumber
     *
     * @return integer
     */
    public function getRequestTrnNumber()
    {
        return $this->requestTrnNumber;
    }

    /**
     * Set requestDate
     *
     * @param \DateTime $requestDate
     *
     * @return RequestControl
     */
    public function setRequestDate($requestDate)
    {
        $this->requestDate = $requestDate;

        return $this;
    }

    /**
     * Get requestDate
     *
     * @return \DateTime
     */
    public function getRequestDate()
    {
        return $this->requestDate;
    }

    /**
     * Set fiscalDate
     *
     * @param \DateTime $fiscalDate
     *
     * @return RequestControl
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
     * Set trnNumber
     *
     * @param integer $trnNumber
     *
     * @return RequestControl
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
     * Set requestTicketNumber
     *
     * @param integer $requestTicketNumber
     *
     * @return RequestControl
     */
    public function setRequestTicketNumber($requestTicketNumber)
    {
        $this->requestTicketNumber = $requestTicketNumber;

        return $this;
    }

    /**
     * Get requestTicketNumber
     *
     * @return integer
     */
    public function getRequestTicketNumber()
    {
        return $this->requestTicketNumber;
    }
}

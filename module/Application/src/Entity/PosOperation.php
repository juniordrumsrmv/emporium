<?php

namespace Emporium\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PosOperation
 *
 * @ORM\Table(name="pos_operation")
 * @ORM\Entity
 */
class PosOperation
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
     * @ORM\Column(name="fiscal_date", type="date", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $fiscalDate;

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
     * @ORM\Column(name="cashier_key", type="bigint", nullable=true)
     */
    private $cashierKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="authorizer_key", type="bigint", nullable=true)
     */
    private $authorizerKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="pos_oper_type", type="smallint", nullable=true)
     */
    private $posOperType;

    /**
     * @var string
     *
     * @ORM\Column(name="pos_oper_data1", type="decimal", precision=12, scale=3, nullable=true)
     */
    private $posOperData1;

    /**
     * @var string
     *
     * @ORM\Column(name="pos_oper_data2", type="decimal", precision=12, scale=3, nullable=true)
     */
    private $posOperData2;

    /**
     * @var string
     *
     * @ORM\Column(name="pos_oper_data3", type="string", length=50, nullable=true)
     */
    private $posOperData3;

    /**
     * @var string
     *
     * @ORM\Column(name="pos_oper_data4", type="string", length=50, nullable=true)
     */
    private $posOperData4;



    /**
     * Set storeKey
     *
     * @param integer $storeKey
     *
     * @return PosOperation
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
     * @return PosOperation
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
     * @return PosOperation
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
     * Set fiscalDate
     *
     * @param \DateTime $fiscalDate
     *
     * @return PosOperation
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
     * Set startTime
     *
     * @param \DateTime $startTime
     *
     * @return PosOperation
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
     * Set cashierKey
     *
     * @param integer $cashierKey
     *
     * @return PosOperation
     */
    public function setCashierKey($cashierKey)
    {
        $this->cashierKey = $cashierKey;

        return $this;
    }

    /**
     * Get cashierKey
     *
     * @return integer
     */
    public function getCashierKey()
    {
        return $this->cashierKey;
    }

    /**
     * Set authorizerKey
     *
     * @param integer $authorizerKey
     *
     * @return PosOperation
     */
    public function setAuthorizerKey($authorizerKey)
    {
        $this->authorizerKey = $authorizerKey;

        return $this;
    }

    /**
     * Get authorizerKey
     *
     * @return integer
     */
    public function getAuthorizerKey()
    {
        return $this->authorizerKey;
    }

    /**
     * Set posOperType
     *
     * @param integer $posOperType
     *
     * @return PosOperation
     */
    public function setPosOperType($posOperType)
    {
        $this->posOperType = $posOperType;

        return $this;
    }

    /**
     * Get posOperType
     *
     * @return integer
     */
    public function getPosOperType()
    {
        return $this->posOperType;
    }

    /**
     * Set posOperData1
     *
     * @param string $posOperData1
     *
     * @return PosOperation
     */
    public function setPosOperData1($posOperData1)
    {
        $this->posOperData1 = $posOperData1;

        return $this;
    }

    /**
     * Get posOperData1
     *
     * @return string
     */
    public function getPosOperData1()
    {
        return $this->posOperData1;
    }

    /**
     * Set posOperData2
     *
     * @param string $posOperData2
     *
     * @return PosOperation
     */
    public function setPosOperData2($posOperData2)
    {
        $this->posOperData2 = $posOperData2;

        return $this;
    }

    /**
     * Get posOperData2
     *
     * @return string
     */
    public function getPosOperData2()
    {
        return $this->posOperData2;
    }

    /**
     * Set posOperData3
     *
     * @param string $posOperData3
     *
     * @return PosOperation
     */
    public function setPosOperData3($posOperData3)
    {
        $this->posOperData3 = $posOperData3;

        return $this;
    }

    /**
     * Get posOperData3
     *
     * @return string
     */
    public function getPosOperData3()
    {
        return $this->posOperData3;
    }

    /**
     * Set posOperData4
     *
     * @param string $posOperData4
     *
     * @return PosOperation
     */
    public function setPosOperData4($posOperData4)
    {
        $this->posOperData4 = $posOperData4;

        return $this;
    }

    /**
     * Get posOperData4
     *
     * @return string
     */
    public function getPosOperData4()
    {
        return $this->posOperData4;
    }
}

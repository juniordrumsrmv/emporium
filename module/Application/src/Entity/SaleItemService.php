<?php

namespace Emporium\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SaleItemService
 *
 * @ORM\Table(name="sale_item_service")
 * @ORM\Entity
 */
class SaleItemService
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
     * @ORM\Column(name="item_sequence", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $itemSequence;

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
     * @ORM\Column(name="sis_period", type="integer", nullable=false)
     */
    private $sisPeriod;

    /**
     * @var string
     *
     * @ORM\Column(name="sis_price", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $sisPrice;

    /**
     * @var string
     *
     * @ORM\Column(name="sis_discount", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $sisDiscount;

    /**
     * @var string
     *
     * @ORM\Column(name="sis_increase", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $sisIncrease;

    /**
     * @var string
     *
     * @ORM\Column(name="sis_cost", type="decimal", precision=15, scale=4, nullable=true)
     */
    private $sisCost;

    /**
     * @var integer
     *
     * @ORM\Column(name="sis_type_key", type="integer", nullable=true)
     */
    private $sisTypeKey;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_id", type="string", length=25, nullable=true)
     */
    private $customerId;

    /**
     * @var string
     *
     * @ORM\Column(name="sis_id", type="string", length=32, nullable=true)
     */
    private $sisId;



    /**
     * Set storeKey
     *
     * @param integer $storeKey
     *
     * @return SaleItemService
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
     * @return SaleItemService
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
     * @return SaleItemService
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
     * @return SaleItemService
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
     * Set itemSequence
     *
     * @param integer $itemSequence
     *
     * @return SaleItemService
     */
    public function setItemSequence($itemSequence)
    {
        $this->itemSequence = $itemSequence;

        return $this;
    }

    /**
     * Get itemSequence
     *
     * @return integer
     */
    public function getItemSequence()
    {
        return $this->itemSequence;
    }

    /**
     * Set sequence
     *
     * @param integer $sequence
     *
     * @return SaleItemService
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
     * Set sisPeriod
     *
     * @param integer $sisPeriod
     *
     * @return SaleItemService
     */
    public function setSisPeriod($sisPeriod)
    {
        $this->sisPeriod = $sisPeriod;

        return $this;
    }

    /**
     * Get sisPeriod
     *
     * @return integer
     */
    public function getSisPeriod()
    {
        return $this->sisPeriod;
    }

    /**
     * Set sisPrice
     *
     * @param string $sisPrice
     *
     * @return SaleItemService
     */
    public function setSisPrice($sisPrice)
    {
        $this->sisPrice = $sisPrice;

        return $this;
    }

    /**
     * Get sisPrice
     *
     * @return string
     */
    public function getSisPrice()
    {
        return $this->sisPrice;
    }

    /**
     * Set sisDiscount
     *
     * @param string $sisDiscount
     *
     * @return SaleItemService
     */
    public function setSisDiscount($sisDiscount)
    {
        $this->sisDiscount = $sisDiscount;

        return $this;
    }

    /**
     * Get sisDiscount
     *
     * @return string
     */
    public function getSisDiscount()
    {
        return $this->sisDiscount;
    }

    /**
     * Set sisIncrease
     *
     * @param string $sisIncrease
     *
     * @return SaleItemService
     */
    public function setSisIncrease($sisIncrease)
    {
        $this->sisIncrease = $sisIncrease;

        return $this;
    }

    /**
     * Get sisIncrease
     *
     * @return string
     */
    public function getSisIncrease()
    {
        return $this->sisIncrease;
    }

    /**
     * Set sisCost
     *
     * @param string $sisCost
     *
     * @return SaleItemService
     */
    public function setSisCost($sisCost)
    {
        $this->sisCost = $sisCost;

        return $this;
    }

    /**
     * Get sisCost
     *
     * @return string
     */
    public function getSisCost()
    {
        return $this->sisCost;
    }

    /**
     * Set sisTypeKey
     *
     * @param integer $sisTypeKey
     *
     * @return SaleItemService
     */
    public function setSisTypeKey($sisTypeKey)
    {
        $this->sisTypeKey = $sisTypeKey;

        return $this;
    }

    /**
     * Get sisTypeKey
     *
     * @return integer
     */
    public function getSisTypeKey()
    {
        return $this->sisTypeKey;
    }

    /**
     * Set customerId
     *
     * @param string $customerId
     *
     * @return SaleItemService
     */
    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;

        return $this;
    }

    /**
     * Get customerId
     *
     * @return string
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }

    /**
     * Set sisId
     *
     * @param string $sisId
     *
     * @return SaleItemService
     */
    public function setSisId($sisId)
    {
        $this->sisId = $sisId;

        return $this;
    }

    /**
     * Get sisId
     *
     * @return string
     */
    public function getSisId()
    {
        return $this->sisId;
    }
}

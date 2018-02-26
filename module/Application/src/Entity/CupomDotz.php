<?php

namespace Emporium\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CupomDotz
 *
 * @ORM\Table(name="cupom_dotz", indexes={@ORM\Index(name="index_tkt", columns={"store_key", "start_time", "pos_number", "ticket_number", "crypt_password"})})
 * @ORM\Entity
 */
class CupomDotz
{
    /**
     * @var string
     *
     * @ORM\Column(name="crypt_password", type="string", length=80, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $cryptPassword;

    /**
     * @var string
     *
     * @ORM\Column(name="ticket_amount", type="decimal", precision=11, scale=2, nullable=false)
     */
    private $ticketAmount;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="valid_date", type="date", nullable=false)
     */
    private $validDate;

    /**
     * @var string
     *
     * @ORM\Column(name="allow_change", type="decimal", precision=11, scale=2, nullable=false)
     */
    private $allowChange;

    /**
     * @var string
     *
     * @ORM\Column(name="minimum_sale_amount", type="decimal", precision=11, scale=2, nullable=false)
     */
    private $minimumSaleAmount;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="cupom_dotz_date_inc", type="datetime", nullable=true)
     */
    private $cupomDotzDateInc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="cupom_dotz_date_alt", type="datetime", nullable=true)
     */
    private $cupomDotzDateAlt;

    /**
     * @var integer
     *
     * @ORM\Column(name="store_key", type="bigint", nullable=true)
     */
    private $storeKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="pos_number", type="smallint", nullable=true)
     */
    private $posNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="ticket_number", type="integer", nullable=true)
     */
    private $ticketNumber;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start_time", type="datetime", nullable=true)
     */
    private $startTime;

    /**
     * @var string
     *
     * @ORM\Column(name="amount_due", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $amountDue;

    /**
     * @var integer
     *
     * @ORM\Column(name="plu_key", type="bigint", nullable=true)
     */
    private $pluKey;

    /**
     * @var string
     *
     * @ORM\Column(name="quantity", type="decimal", precision=10, scale=3, nullable=true)
     */
    private $quantity;



    /**
     * Get cryptPassword
     *
     * @return string
     */
    public function getCryptPassword()
    {
        return $this->cryptPassword;
    }

    /**
     * Set ticketAmount
     *
     * @param string $ticketAmount
     *
     * @return CupomDotz
     */
    public function setTicketAmount($ticketAmount)
    {
        $this->ticketAmount = $ticketAmount;

        return $this;
    }

    /**
     * Get ticketAmount
     *
     * @return string
     */
    public function getTicketAmount()
    {
        return $this->ticketAmount;
    }

    /**
     * Set validDate
     *
     * @param \DateTime $validDate
     *
     * @return CupomDotz
     */
    public function setValidDate($validDate)
    {
        $this->validDate = $validDate;

        return $this;
    }

    /**
     * Get validDate
     *
     * @return \DateTime
     */
    public function getValidDate()
    {
        return $this->validDate;
    }

    /**
     * Set allowChange
     *
     * @param string $allowChange
     *
     * @return CupomDotz
     */
    public function setAllowChange($allowChange)
    {
        $this->allowChange = $allowChange;

        return $this;
    }

    /**
     * Get allowChange
     *
     * @return string
     */
    public function getAllowChange()
    {
        return $this->allowChange;
    }

    /**
     * Set minimumSaleAmount
     *
     * @param string $minimumSaleAmount
     *
     * @return CupomDotz
     */
    public function setMinimumSaleAmount($minimumSaleAmount)
    {
        $this->minimumSaleAmount = $minimumSaleAmount;

        return $this;
    }

    /**
     * Get minimumSaleAmount
     *
     * @return string
     */
    public function getMinimumSaleAmount()
    {
        return $this->minimumSaleAmount;
    }

    /**
     * Set cupomDotzDateInc
     *
     * @param \DateTime $cupomDotzDateInc
     *
     * @return CupomDotz
     */
    public function setCupomDotzDateInc($cupomDotzDateInc)
    {
        $this->cupomDotzDateInc = $cupomDotzDateInc;

        return $this;
    }

    /**
     * Get cupomDotzDateInc
     *
     * @return \DateTime
     */
    public function getCupomDotzDateInc()
    {
        return $this->cupomDotzDateInc;
    }

    /**
     * Set cupomDotzDateAlt
     *
     * @param \DateTime $cupomDotzDateAlt
     *
     * @return CupomDotz
     */
    public function setCupomDotzDateAlt($cupomDotzDateAlt)
    {
        $this->cupomDotzDateAlt = $cupomDotzDateAlt;

        return $this;
    }

    /**
     * Get cupomDotzDateAlt
     *
     * @return \DateTime
     */
    public function getCupomDotzDateAlt()
    {
        return $this->cupomDotzDateAlt;
    }

    /**
     * Set storeKey
     *
     * @param integer $storeKey
     *
     * @return CupomDotz
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
     * @return CupomDotz
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
     * @return CupomDotz
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
     * @return CupomDotz
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
     * Set amountDue
     *
     * @param string $amountDue
     *
     * @return CupomDotz
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
     * Set pluKey
     *
     * @param integer $pluKey
     *
     * @return CupomDotz
     */
    public function setPluKey($pluKey)
    {
        $this->pluKey = $pluKey;

        return $this;
    }

    /**
     * Get pluKey
     *
     * @return integer
     */
    public function getPluKey()
    {
        return $this->pluKey;
    }

    /**
     * Set quantity
     *
     * @param string $quantity
     *
     * @return CupomDotz
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return string
     */
    public function getQuantity()
    {
        return $this->quantity;
    }
}

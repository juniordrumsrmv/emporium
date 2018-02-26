<?php

namespace Emporium\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FiscalAccumOper
 *
 * @ORM\Table(name="fiscal_accum_oper")
 * @ORM\Entity
 */
class FiscalAccumOper
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
     * @ORM\Column(name="ecf_number", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ecfNumber;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fiscal_date", type="date", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $fiscalDate;

    /**
     * @var string
     *
     * @ORM\Column(name="alternate_id", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $alternateId;

    /**
     * @var integer
     *
     * @ORM\Column(name="media_id", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $mediaId;

    /**
     * @var string
     *
     * @ORM\Column(name="quantity", type="decimal", precision=8, scale=0, nullable=false)
     */
    private $quantity;

    /**
     * @var string
     *
     * @ORM\Column(name="quantity_canc", type="decimal", precision=8, scale=0, nullable=false)
     */
    private $quantityCanc;

    /**
     * @var string
     *
     * @ORM\Column(name="amount", type="decimal", precision=15, scale=3, nullable=false)
     */
    private $amount;

    /**
     * @var string
     *
     * @ORM\Column(name="amount_canc", type="decimal", precision=15, scale=3, nullable=false)
     */
    private $amountCanc;

    /**
     * @var string
     *
     * @ORM\Column(name="quantity_pickup", type="decimal", precision=8, scale=0, nullable=false)
     */
    private $quantityPickup;

    /**
     * @var string
     *
     * @ORM\Column(name="amount_pickup", type="decimal", precision=15, scale=3, nullable=false)
     */
    private $amountPickup;

    /**
     * @var string
     *
     * @ORM\Column(name="amount_loan", type="decimal", precision=15, scale=3, nullable=false)
     */
    private $amountLoan;



    /**
     * Set storeKey
     *
     * @param integer $storeKey
     *
     * @return FiscalAccumOper
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
     * Set ecfNumber
     *
     * @param integer $ecfNumber
     *
     * @return FiscalAccumOper
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
     * @return FiscalAccumOper
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
     * Set alternateId
     *
     * @param string $alternateId
     *
     * @return FiscalAccumOper
     */
    public function setAlternateId($alternateId)
    {
        $this->alternateId = $alternateId;

        return $this;
    }

    /**
     * Get alternateId
     *
     * @return string
     */
    public function getAlternateId()
    {
        return $this->alternateId;
    }

    /**
     * Set mediaId
     *
     * @param integer $mediaId
     *
     * @return FiscalAccumOper
     */
    public function setMediaId($mediaId)
    {
        $this->mediaId = $mediaId;

        return $this;
    }

    /**
     * Get mediaId
     *
     * @return integer
     */
    public function getMediaId()
    {
        return $this->mediaId;
    }

    /**
     * Set quantity
     *
     * @param string $quantity
     *
     * @return FiscalAccumOper
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

    /**
     * Set quantityCanc
     *
     * @param string $quantityCanc
     *
     * @return FiscalAccumOper
     */
    public function setQuantityCanc($quantityCanc)
    {
        $this->quantityCanc = $quantityCanc;

        return $this;
    }

    /**
     * Get quantityCanc
     *
     * @return string
     */
    public function getQuantityCanc()
    {
        return $this->quantityCanc;
    }

    /**
     * Set amount
     *
     * @param string $amount
     *
     * @return FiscalAccumOper
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set amountCanc
     *
     * @param string $amountCanc
     *
     * @return FiscalAccumOper
     */
    public function setAmountCanc($amountCanc)
    {
        $this->amountCanc = $amountCanc;

        return $this;
    }

    /**
     * Get amountCanc
     *
     * @return string
     */
    public function getAmountCanc()
    {
        return $this->amountCanc;
    }

    /**
     * Set quantityPickup
     *
     * @param string $quantityPickup
     *
     * @return FiscalAccumOper
     */
    public function setQuantityPickup($quantityPickup)
    {
        $this->quantityPickup = $quantityPickup;

        return $this;
    }

    /**
     * Get quantityPickup
     *
     * @return string
     */
    public function getQuantityPickup()
    {
        return $this->quantityPickup;
    }

    /**
     * Set amountPickup
     *
     * @param string $amountPickup
     *
     * @return FiscalAccumOper
     */
    public function setAmountPickup($amountPickup)
    {
        $this->amountPickup = $amountPickup;

        return $this;
    }

    /**
     * Get amountPickup
     *
     * @return string
     */
    public function getAmountPickup()
    {
        return $this->amountPickup;
    }

    /**
     * Set amountLoan
     *
     * @param string $amountLoan
     *
     * @return FiscalAccumOper
     */
    public function setAmountLoan($amountLoan)
    {
        $this->amountLoan = $amountLoan;

        return $this;
    }

    /**
     * Get amountLoan
     *
     * @return string
     */
    public function getAmountLoan()
    {
        return $this->amountLoan;
    }
}

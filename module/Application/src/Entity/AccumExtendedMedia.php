<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccumExtendedMedia
 *
 * @ORM\Table(name="accum_extended_media")
 * @ORM\Entity
 */
class AccumExtendedMedia
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
     * @var \DateTime
     *
     * @ORM\Column(name="fiscal_date", type="date", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $fiscalDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="extended_media_id", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $extendedMediaId;

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
     * @var integer
     *
     * @ORM\Column(name="media_id", type="smallint", nullable=false)
     */
    private $mediaId;



    /**
     * Set storeKey
     *
     * @param integer $storeKey
     *
     * @return AccumExtendedMedia
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
     * @return AccumExtendedMedia
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
     * Set fiscalDate
     *
     * @param \DateTime $fiscalDate
     *
     * @return AccumExtendedMedia
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
     * Set extendedMediaId
     *
     * @param integer $extendedMediaId
     *
     * @return AccumExtendedMedia
     */
    public function setExtendedMediaId($extendedMediaId)
    {
        $this->extendedMediaId = $extendedMediaId;

        return $this;
    }

    /**
     * Get extendedMediaId
     *
     * @return integer
     */
    public function getExtendedMediaId()
    {
        return $this->extendedMediaId;
    }

    /**
     * Set quantity
     *
     * @param string $quantity
     *
     * @return AccumExtendedMedia
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
     * @return AccumExtendedMedia
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
     * @return AccumExtendedMedia
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
     * @return AccumExtendedMedia
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
     * @return AccumExtendedMedia
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
     * @return AccumExtendedMedia
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
     * @return AccumExtendedMedia
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

    /**
     * Set mediaId
     *
     * @param integer $mediaId
     *
     * @return AccumExtendedMedia
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
}

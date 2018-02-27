<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SalePromotionKit
 *
 * @ORM\Table(name="sale_promotion_kit")
 * @ORM\Entity
 */
class SalePromotionKit
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
     * @var integer
     *
     * @ORM\Column(name="promotion_key", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $promotionKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="plu_kit", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $pluKit;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity_min", type="bigint", nullable=true)
     */
    private $quantityMin;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity_max", type="bigint", nullable=true)
     */
    private $quantityMax;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity_lim", type="bigint", nullable=true)
     */
    private $quantityLim;

    /**
     * @var string
     *
     * @ORM\Column(name="discount", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $discount;

    /**
     * @var string
     *
     * @ORM\Column(name="discount_percent", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $discountPercent;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity", type="bigint", nullable=true)
     */
    private $quantity;



    /**
     * Set storeKey
     *
     * @param integer $storeKey
     *
     * @return SalePromotionKit
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
     * @return SalePromotionKit
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
     * @return SalePromotionKit
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
     * @return SalePromotionKit
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
     * Set promotionKey
     *
     * @param integer $promotionKey
     *
     * @return SalePromotionKit
     */
    public function setPromotionKey($promotionKey)
    {
        $this->promotionKey = $promotionKey;

        return $this;
    }

    /**
     * Get promotionKey
     *
     * @return integer
     */
    public function getPromotionKey()
    {
        return $this->promotionKey;
    }

    /**
     * Set pluKit
     *
     * @param integer $pluKit
     *
     * @return SalePromotionKit
     */
    public function setPluKit($pluKit)
    {
        $this->pluKit = $pluKit;

        return $this;
    }

    /**
     * Get pluKit
     *
     * @return integer
     */
    public function getPluKit()
    {
        return $this->pluKit;
    }

    /**
     * Set quantityMin
     *
     * @param integer $quantityMin
     *
     * @return SalePromotionKit
     */
    public function setQuantityMin($quantityMin)
    {
        $this->quantityMin = $quantityMin;

        return $this;
    }

    /**
     * Get quantityMin
     *
     * @return integer
     */
    public function getQuantityMin()
    {
        return $this->quantityMin;
    }

    /**
     * Set quantityMax
     *
     * @param integer $quantityMax
     *
     * @return SalePromotionKit
     */
    public function setQuantityMax($quantityMax)
    {
        $this->quantityMax = $quantityMax;

        return $this;
    }

    /**
     * Get quantityMax
     *
     * @return integer
     */
    public function getQuantityMax()
    {
        return $this->quantityMax;
    }

    /**
     * Set quantityLim
     *
     * @param integer $quantityLim
     *
     * @return SalePromotionKit
     */
    public function setQuantityLim($quantityLim)
    {
        $this->quantityLim = $quantityLim;

        return $this;
    }

    /**
     * Get quantityLim
     *
     * @return integer
     */
    public function getQuantityLim()
    {
        return $this->quantityLim;
    }

    /**
     * Set discount
     *
     * @param string $discount
     *
     * @return SalePromotionKit
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;

        return $this;
    }

    /**
     * Get discount
     *
     * @return string
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * Set discountPercent
     *
     * @param string $discountPercent
     *
     * @return SalePromotionKit
     */
    public function setDiscountPercent($discountPercent)
    {
        $this->discountPercent = $discountPercent;

        return $this;
    }

    /**
     * Get discountPercent
     *
     * @return string
     */
    public function getDiscountPercent()
    {
        return $this->discountPercent;
    }

    /**
     * Set quantity
     *
     * @param integer $quantity
     *
     * @return SalePromotionKit
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer
     */
    public function getQuantity()
    {
        return $this->quantity;
    }
}

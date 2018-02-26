<?php

namespace Emporium\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SalePromotionKitItem
 *
 * @ORM\Table(name="sale_promotion_kit_item")
 * @ORM\Entity
 */
class SalePromotionKitItem
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
     * @ORM\Column(name="plu_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $pluId;

    /**
     * @var string
     *
     * @ORM\Column(name="short_description", type="string", length=48, nullable=true)
     */
    private $shortDescription;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity", type="bigint", nullable=true)
     */
    private $quantity;

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
     * @var string
     *
     * @ORM\Column(name="discount", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $discount;

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $price;

    /**
     * @var string
     *
     * @ORM\Column(name="amount_price", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $amountPrice;

    /**
     * @var string
     *
     * @ORM\Column(name="unit_price_promo", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $unitPricePromo;

    /**
     * @var string
     *
     * @ORM\Column(name="amount_price_promo", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $amountPricePromo;



    /**
     * Set storeKey
     *
     * @param integer $storeKey
     *
     * @return SalePromotionKitItem
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
     * @return SalePromotionKitItem
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
     * @return SalePromotionKitItem
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
     * @return SalePromotionKitItem
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
     * @return SalePromotionKitItem
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
     * @return SalePromotionKitItem
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
     * Set pluId
     *
     * @param integer $pluId
     *
     * @return SalePromotionKitItem
     */
    public function setPluId($pluId)
    {
        $this->pluId = $pluId;

        return $this;
    }

    /**
     * Get pluId
     *
     * @return integer
     */
    public function getPluId()
    {
        return $this->pluId;
    }

    /**
     * Set shortDescription
     *
     * @param string $shortDescription
     *
     * @return SalePromotionKitItem
     */
    public function setShortDescription($shortDescription)
    {
        $this->shortDescription = $shortDescription;

        return $this;
    }

    /**
     * Get shortDescription
     *
     * @return string
     */
    public function getShortDescription()
    {
        return $this->shortDescription;
    }

    /**
     * Set quantity
     *
     * @param integer $quantity
     *
     * @return SalePromotionKitItem
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

    /**
     * Set quantityMin
     *
     * @param integer $quantityMin
     *
     * @return SalePromotionKitItem
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
     * @return SalePromotionKitItem
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
     * Set discount
     *
     * @param string $discount
     *
     * @return SalePromotionKitItem
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
     * Set price
     *
     * @param string $price
     *
     * @return SalePromotionKitItem
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set amountPrice
     *
     * @param string $amountPrice
     *
     * @return SalePromotionKitItem
     */
    public function setAmountPrice($amountPrice)
    {
        $this->amountPrice = $amountPrice;

        return $this;
    }

    /**
     * Get amountPrice
     *
     * @return string
     */
    public function getAmountPrice()
    {
        return $this->amountPrice;
    }

    /**
     * Set unitPricePromo
     *
     * @param string $unitPricePromo
     *
     * @return SalePromotionKitItem
     */
    public function setUnitPricePromo($unitPricePromo)
    {
        $this->unitPricePromo = $unitPricePromo;

        return $this;
    }

    /**
     * Get unitPricePromo
     *
     * @return string
     */
    public function getUnitPricePromo()
    {
        return $this->unitPricePromo;
    }

    /**
     * Set amountPricePromo
     *
     * @param string $amountPricePromo
     *
     * @return SalePromotionKitItem
     */
    public function setAmountPricePromo($amountPricePromo)
    {
        $this->amountPricePromo = $amountPricePromo;

        return $this;
    }

    /**
     * Get amountPricePromo
     *
     * @return string
     */
    public function getAmountPricePromo()
    {
        return $this->amountPricePromo;
    }
}

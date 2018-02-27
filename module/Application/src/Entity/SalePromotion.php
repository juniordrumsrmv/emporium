<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SalePromotion
 *
 * @ORM\Table(name="sale_promotion")
 * @ORM\Entity
 */
class SalePromotion
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="discount", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $discount;

    /**
     * @var integer
     *
     * @ORM\Column(name="promotion_type", type="smallint", nullable=true)
     */
    private $promotionType;

    /**
     * @var integer
     *
     * @ORM\Column(name="promotion_mode", type="smallint", nullable=true)
     */
    private $promotionMode;



    /**
     * Set storeKey
     *
     * @param integer $storeKey
     *
     * @return SalePromotion
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
     * @return SalePromotion
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
     * @return SalePromotion
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
     * @return SalePromotion
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
     * @return SalePromotion
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
     * Set name
     *
     * @param string $name
     *
     * @return SalePromotion
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set discount
     *
     * @param string $discount
     *
     * @return SalePromotion
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
     * Set promotionType
     *
     * @param integer $promotionType
     *
     * @return SalePromotion
     */
    public function setPromotionType($promotionType)
    {
        $this->promotionType = $promotionType;

        return $this;
    }

    /**
     * Get promotionType
     *
     * @return integer
     */
    public function getPromotionType()
    {
        return $this->promotionType;
    }

    /**
     * Set promotionMode
     *
     * @param integer $promotionMode
     *
     * @return SalePromotion
     */
    public function setPromotionMode($promotionMode)
    {
        $this->promotionMode = $promotionMode;

        return $this;
    }

    /**
     * Get promotionMode
     *
     * @return integer
     */
    public function getPromotionMode()
    {
        return $this->promotionMode;
    }
}

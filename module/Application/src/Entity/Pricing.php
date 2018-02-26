<?php

namespace Emporium\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pricing
 *
 * @ORM\Table(name="pricing", indexes={@ORM\Index(name="pricing_1", columns={"plu_key", "type_price", "start"})})
 * @ORM\Entity
 */
class Pricing
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
     * @ORM\Column(name="plu_key", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $pluKey;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start", type="datetime", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $start;

    /**
     * @var integer
     *
     * @ORM\Column(name="type_price", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $typePrice;

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $price;

    /**
     * @var string
     *
     * @ORM\Column(name="quantity", type="decimal", precision=8, scale=3, nullable=true)
     */
    private $quantity;

    /**
     * @var boolean
     *
     * @ORM\Column(name="promotion", type="boolean", nullable=true)
     */
    private $promotion;

    /**
     * @var integer
     *
     * @ORM\Column(name="code_promotion", type="bigint", nullable=true)
     */
    private $codePromotion;

    /**
     * @var string
     *
     * @ORM\Column(name="points", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $points;

    /**
     * @var string
     *
     * @ORM\Column(name="rate", type="decimal", precision=9, scale=3, nullable=true)
     */
    private $rate;

    /**
     * @var boolean
     *
     * @ORM\Column(name="sequence", type="boolean", nullable=true)
     */
    private $sequence;



    /**
     * Set storeKey
     *
     * @param integer $storeKey
     *
     * @return Pricing
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
     * Set pluKey
     *
     * @param integer $pluKey
     *
     * @return Pricing
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
     * Set start
     *
     * @param \DateTime $start
     *
     * @return Pricing
     */
    public function setStart($start)
    {
        $this->start = $start;

        return $this;
    }

    /**
     * Get start
     *
     * @return \DateTime
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Set typePrice
     *
     * @param integer $typePrice
     *
     * @return Pricing
     */
    public function setTypePrice($typePrice)
    {
        $this->typePrice = $typePrice;

        return $this;
    }

    /**
     * Get typePrice
     *
     * @return integer
     */
    public function getTypePrice()
    {
        return $this->typePrice;
    }

    /**
     * Set price
     *
     * @param string $price
     *
     * @return Pricing
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
     * Set quantity
     *
     * @param string $quantity
     *
     * @return Pricing
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
     * Set promotion
     *
     * @param boolean $promotion
     *
     * @return Pricing
     */
    public function setPromotion($promotion)
    {
        $this->promotion = $promotion;

        return $this;
    }

    /**
     * Get promotion
     *
     * @return boolean
     */
    public function getPromotion()
    {
        return $this->promotion;
    }

    /**
     * Set codePromotion
     *
     * @param integer $codePromotion
     *
     * @return Pricing
     */
    public function setCodePromotion($codePromotion)
    {
        $this->codePromotion = $codePromotion;

        return $this;
    }

    /**
     * Get codePromotion
     *
     * @return integer
     */
    public function getCodePromotion()
    {
        return $this->codePromotion;
    }

    /**
     * Set points
     *
     * @param string $points
     *
     * @return Pricing
     */
    public function setPoints($points)
    {
        $this->points = $points;

        return $this;
    }

    /**
     * Get points
     *
     * @return string
     */
    public function getPoints()
    {
        return $this->points;
    }

    /**
     * Set rate
     *
     * @param string $rate
     *
     * @return Pricing
     */
    public function setRate($rate)
    {
        $this->rate = $rate;

        return $this;
    }

    /**
     * Get rate
     *
     * @return string
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * Set sequence
     *
     * @param boolean $sequence
     *
     * @return Pricing
     */
    public function setSequence($sequence)
    {
        $this->sequence = $sequence;

        return $this;
    }

    /**
     * Get sequence
     *
     * @return boolean
     */
    public function getSequence()
    {
        return $this->sequence;
    }
}

<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GiftListItem
 *
 * @ORM\Table(name="gift_list_item", indexes={@ORM\Index(name="index_gift_list_item", columns={"gift_list_key", "long_description"})})
 * @ORM\Entity
 */
class GiftListItem
{
    /**
     * @var integer
     *
     * @ORM\Column(name="gift_list_key", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $giftListKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="long_description", type="string", length=50, nullable=true)
     */
    private $longDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="quantity", type="decimal", precision=9, scale=3, nullable=true)
     */
    private $quantity;

    /**
     * @var string
     *
     * @ORM\Column(name="sale_quantity", type="decimal", precision=9, scale=3, nullable=true)
     */
    private $saleQuantity;



    /**
     * Set giftListKey
     *
     * @param integer $giftListKey
     *
     * @return GiftListItem
     */
    public function setGiftListKey($giftListKey)
    {
        $this->giftListKey = $giftListKey;

        return $this;
    }

    /**
     * Get giftListKey
     *
     * @return integer
     */
    public function getGiftListKey()
    {
        return $this->giftListKey;
    }

    /**
     * Set id
     *
     * @param integer $id
     *
     * @return GiftListItem
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set longDescription
     *
     * @param string $longDescription
     *
     * @return GiftListItem
     */
    public function setLongDescription($longDescription)
    {
        $this->longDescription = $longDescription;

        return $this;
    }

    /**
     * Get longDescription
     *
     * @return string
     */
    public function getLongDescription()
    {
        return $this->longDescription;
    }

    /**
     * Set quantity
     *
     * @param string $quantity
     *
     * @return GiftListItem
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
     * Set saleQuantity
     *
     * @param string $saleQuantity
     *
     * @return GiftListItem
     */
    public function setSaleQuantity($saleQuantity)
    {
        $this->saleQuantity = $saleQuantity;

        return $this;
    }

    /**
     * Get saleQuantity
     *
     * @return string
     */
    public function getSaleQuantity()
    {
        return $this->saleQuantity;
    }
}

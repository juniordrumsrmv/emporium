<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KitList
 *
 * @ORM\Table(name="kit_list")
 * @ORM\Entity
 */
class KitList
{
    /**
     * @var integer
     *
     * @ORM\Column(name="plu_key_main", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $pluKeyMain;

    /**
     * @var integer
     *
     * @ORM\Column(name="plu_key", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $pluKey;

    /**
     * @var string
     *
     * @ORM\Column(name="quantity", type="decimal", precision=6, scale=3, nullable=false)
     */
    private $quantity;

    /**
     * @var integer
     *
     * @ORM\Column(name="price_key", type="integer", nullable=true)
     */
    private $priceKey;



    /**
     * Set pluKeyMain
     *
     * @param integer $pluKeyMain
     *
     * @return KitList
     */
    public function setPluKeyMain($pluKeyMain)
    {
        $this->pluKeyMain = $pluKeyMain;

        return $this;
    }

    /**
     * Get pluKeyMain
     *
     * @return integer
     */
    public function getPluKeyMain()
    {
        return $this->pluKeyMain;
    }

    /**
     * Set pluKey
     *
     * @param integer $pluKey
     *
     * @return KitList
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
     * @return KitList
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
     * Set priceKey
     *
     * @param integer $priceKey
     *
     * @return KitList
     */
    public function setPriceKey($priceKey)
    {
        $this->priceKey = $priceKey;

        return $this;
    }

    /**
     * Get priceKey
     *
     * @return integer
     */
    public function getPriceKey()
    {
        return $this->priceKey;
    }
}

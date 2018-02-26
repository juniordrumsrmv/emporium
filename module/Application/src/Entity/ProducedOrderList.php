<?php

namespace Emporium\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProducedOrderList
 *
 * @ORM\Table(name="produced_order_list")
 * @ORM\Entity
 */
class ProducedOrderList
{
    /**
     * @var integer
     *
     * @ORM\Column(name="order_key", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $orderKey;

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
     * @ORM\Column(name="plu_key_prod", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $pluKeyProd;

    /**
     * @var integer
     *
     * @ORM\Column(name="plu_key_input", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $pluKeyInput;

    /**
     * @var string
     *
     * @ORM\Column(name="base_quantity", type="decimal", precision=8, scale=3, nullable=false)
     */
    private $baseQuantity;



    /**
     * Set orderKey
     *
     * @param integer $orderKey
     *
     * @return ProducedOrderList
     */
    public function setOrderKey($orderKey)
    {
        $this->orderKey = $orderKey;

        return $this;
    }

    /**
     * Get orderKey
     *
     * @return integer
     */
    public function getOrderKey()
    {
        return $this->orderKey;
    }

    /**
     * Set storeKey
     *
     * @param integer $storeKey
     *
     * @return ProducedOrderList
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
     * Set pluKeyProd
     *
     * @param integer $pluKeyProd
     *
     * @return ProducedOrderList
     */
    public function setPluKeyProd($pluKeyProd)
    {
        $this->pluKeyProd = $pluKeyProd;

        return $this;
    }

    /**
     * Get pluKeyProd
     *
     * @return integer
     */
    public function getPluKeyProd()
    {
        return $this->pluKeyProd;
    }

    /**
     * Set pluKeyInput
     *
     * @param integer $pluKeyInput
     *
     * @return ProducedOrderList
     */
    public function setPluKeyInput($pluKeyInput)
    {
        $this->pluKeyInput = $pluKeyInput;

        return $this;
    }

    /**
     * Get pluKeyInput
     *
     * @return integer
     */
    public function getPluKeyInput()
    {
        return $this->pluKeyInput;
    }

    /**
     * Set baseQuantity
     *
     * @param string $baseQuantity
     *
     * @return ProducedOrderList
     */
    public function setBaseQuantity($baseQuantity)
    {
        $this->baseQuantity = $baseQuantity;

        return $this;
    }

    /**
     * Get baseQuantity
     *
     * @return string
     */
    public function getBaseQuantity()
    {
        return $this->baseQuantity;
    }
}

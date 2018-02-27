<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProducedOrder
 *
 * @ORM\Table(name="produced_order", indexes={@ORM\Index(name="index_store_order", columns={"store_key", "plu_key_prod"})})
 * @ORM\Entity
 */
class ProducedOrder
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
     */
    private $storeKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="plu_key_prod", type="bigint", nullable=false)
     */
    private $pluKeyProd;

    /**
     * @var integer
     *
     * @ORM\Column(name="unit_key", type="smallint", nullable=true)
     */
    private $unitKey;

    /**
     * @var string
     *
     * @ORM\Column(name="base_quantity", type="decimal", precision=6, scale=3, nullable=false)
     */
    private $baseQuantity;

    /**
     * @var string
     *
     * @ORM\Column(name="quantity", type="decimal", precision=6, scale=3, nullable=false)
     */
    private $quantity;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="insert_date", type="datetime", nullable=true)
     */
    private $insertDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="update_date", type="datetime", nullable=true)
     */
    private $updateDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="production_date", type="datetime", nullable=true)
     */
    private $productionDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="order_status", type="smallint", nullable=true)
     */
    private $orderStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="cost", type="decimal", precision=6, scale=3, nullable=true)
     */
    private $cost;

    /**
     * @var string
     *
     * @ORM\Column(name="price_suggestion", type="decimal", precision=6, scale=3, nullable=true)
     */
    private $priceSuggestion;



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
     * @return ProducedOrder
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
     * @return ProducedOrder
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
     * Set unitKey
     *
     * @param integer $unitKey
     *
     * @return ProducedOrder
     */
    public function setUnitKey($unitKey)
    {
        $this->unitKey = $unitKey;

        return $this;
    }

    /**
     * Get unitKey
     *
     * @return integer
     */
    public function getUnitKey()
    {
        return $this->unitKey;
    }

    /**
     * Set baseQuantity
     *
     * @param string $baseQuantity
     *
     * @return ProducedOrder
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

    /**
     * Set quantity
     *
     * @param string $quantity
     *
     * @return ProducedOrder
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
     * Set insertDate
     *
     * @param \DateTime $insertDate
     *
     * @return ProducedOrder
     */
    public function setInsertDate($insertDate)
    {
        $this->insertDate = $insertDate;

        return $this;
    }

    /**
     * Get insertDate
     *
     * @return \DateTime
     */
    public function getInsertDate()
    {
        return $this->insertDate;
    }

    /**
     * Set updateDate
     *
     * @param \DateTime $updateDate
     *
     * @return ProducedOrder
     */
    public function setUpdateDate($updateDate)
    {
        $this->updateDate = $updateDate;

        return $this;
    }

    /**
     * Get updateDate
     *
     * @return \DateTime
     */
    public function getUpdateDate()
    {
        return $this->updateDate;
    }

    /**
     * Set productionDate
     *
     * @param \DateTime $productionDate
     *
     * @return ProducedOrder
     */
    public function setProductionDate($productionDate)
    {
        $this->productionDate = $productionDate;

        return $this;
    }

    /**
     * Get productionDate
     *
     * @return \DateTime
     */
    public function getProductionDate()
    {
        return $this->productionDate;
    }

    /**
     * Set orderStatus
     *
     * @param integer $orderStatus
     *
     * @return ProducedOrder
     */
    public function setOrderStatus($orderStatus)
    {
        $this->orderStatus = $orderStatus;

        return $this;
    }

    /**
     * Get orderStatus
     *
     * @return integer
     */
    public function getOrderStatus()
    {
        return $this->orderStatus;
    }

    /**
     * Set cost
     *
     * @param string $cost
     *
     * @return ProducedOrder
     */
    public function setCost($cost)
    {
        $this->cost = $cost;

        return $this;
    }

    /**
     * Get cost
     *
     * @return string
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * Set priceSuggestion
     *
     * @param string $priceSuggestion
     *
     * @return ProducedOrder
     */
    public function setPriceSuggestion($priceSuggestion)
    {
        $this->priceSuggestion = $priceSuggestion;

        return $this;
    }

    /**
     * Get priceSuggestion
     *
     * @return string
     */
    public function getPriceSuggestion()
    {
        return $this->priceSuggestion;
    }
}

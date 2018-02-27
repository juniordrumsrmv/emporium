<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InventoryItem
 *
 * @ORM\Table(name="inventory_item")
 * @ORM\Entity
 */
class InventoryItem
{
    /**
     * @var integer
     *
     * @ORM\Column(name="inventory_number", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $inventoryNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="store_key", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $storeKey;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="inventory_date", type="date", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $inventoryDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="block_number", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $blockNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="count_number", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $countNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="sequence", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sequence;

    /**
     * @var boolean
     *
     * @ORM\Column(name="voided", type="boolean", nullable=true)
     */
    private $voided;

    /**
     * @var integer
     *
     * @ORM\Column(name="plu_id", type="bigint", nullable=false)
     */
    private $pluId;

    /**
     * @var string
     *
     * @ORM\Column(name="desc_plu", type="string", length=48, nullable=false)
     */
    private $descPlu;

    /**
     * @var string
     *
     * @ORM\Column(name="quantity", type="decimal", precision=15, scale=3, nullable=false)
     */
    private $quantity;

    /**
     * @var string
     *
     * @ORM\Column(name="unit_price", type="decimal", precision=15, scale=3, nullable=false)
     */
    private $unitPrice;

    /**
     * @var string
     *
     * @ORM\Column(name="amount", type="decimal", precision=15, scale=3, nullable=false)
     */
    private $amount;

    /**
     * @var string
     *
     * @ORM\Column(name="cost", type="decimal", precision=15, scale=4, nullable=false)
     */
    private $cost;

    /**
     * @var integer
     *
     * @ORM\Column(name="pos_number", type="smallint", nullable=false)
     */
    private $posNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="authorizer_key", type="bigint", nullable=true)
     */
    private $authorizerKey;

    /**
     * @var string
     *
     * @ORM\Column(name="sku_id", type="string", length=14, nullable=true)
     */
    private $skuId;

    /**
     * @var boolean
     *
     * @ORM\Column(name="scanned", type="boolean", nullable=true)
     */
    private $scanned;

    /**
     * @var integer
     *
     * @ORM\Column(name="cpu_clock", type="bigint", nullable=true)
     */
    private $cpuClock;

    /**
     * @var string
     *
     * @ORM\Column(name="pos_id", type="string", length=4, nullable=true)
     */
    private $posId;

    /**
     * @var string
     *
     * @ORM\Column(name="tax_percent", type="decimal", precision=6, scale=3, nullable=true)
     */
    private $taxPercent;



    /**
     * Set inventoryNumber
     *
     * @param integer $inventoryNumber
     *
     * @return InventoryItem
     */
    public function setInventoryNumber($inventoryNumber)
    {
        $this->inventoryNumber = $inventoryNumber;

        return $this;
    }

    /**
     * Get inventoryNumber
     *
     * @return integer
     */
    public function getInventoryNumber()
    {
        return $this->inventoryNumber;
    }

    /**
     * Set storeKey
     *
     * @param integer $storeKey
     *
     * @return InventoryItem
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
     * Set inventoryDate
     *
     * @param \DateTime $inventoryDate
     *
     * @return InventoryItem
     */
    public function setInventoryDate($inventoryDate)
    {
        $this->inventoryDate = $inventoryDate;

        return $this;
    }

    /**
     * Get inventoryDate
     *
     * @return \DateTime
     */
    public function getInventoryDate()
    {
        return $this->inventoryDate;
    }

    /**
     * Set blockNumber
     *
     * @param integer $blockNumber
     *
     * @return InventoryItem
     */
    public function setBlockNumber($blockNumber)
    {
        $this->blockNumber = $blockNumber;

        return $this;
    }

    /**
     * Get blockNumber
     *
     * @return integer
     */
    public function getBlockNumber()
    {
        return $this->blockNumber;
    }

    /**
     * Set countNumber
     *
     * @param integer $countNumber
     *
     * @return InventoryItem
     */
    public function setCountNumber($countNumber)
    {
        $this->countNumber = $countNumber;

        return $this;
    }

    /**
     * Get countNumber
     *
     * @return integer
     */
    public function getCountNumber()
    {
        return $this->countNumber;
    }

    /**
     * Set sequence
     *
     * @param integer $sequence
     *
     * @return InventoryItem
     */
    public function setSequence($sequence)
    {
        $this->sequence = $sequence;

        return $this;
    }

    /**
     * Get sequence
     *
     * @return integer
     */
    public function getSequence()
    {
        return $this->sequence;
    }

    /**
     * Set voided
     *
     * @param boolean $voided
     *
     * @return InventoryItem
     */
    public function setVoided($voided)
    {
        $this->voided = $voided;

        return $this;
    }

    /**
     * Get voided
     *
     * @return boolean
     */
    public function getVoided()
    {
        return $this->voided;
    }

    /**
     * Set pluId
     *
     * @param integer $pluId
     *
     * @return InventoryItem
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
     * Set descPlu
     *
     * @param string $descPlu
     *
     * @return InventoryItem
     */
    public function setDescPlu($descPlu)
    {
        $this->descPlu = $descPlu;

        return $this;
    }

    /**
     * Get descPlu
     *
     * @return string
     */
    public function getDescPlu()
    {
        return $this->descPlu;
    }

    /**
     * Set quantity
     *
     * @param string $quantity
     *
     * @return InventoryItem
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
     * Set unitPrice
     *
     * @param string $unitPrice
     *
     * @return InventoryItem
     */
    public function setUnitPrice($unitPrice)
    {
        $this->unitPrice = $unitPrice;

        return $this;
    }

    /**
     * Get unitPrice
     *
     * @return string
     */
    public function getUnitPrice()
    {
        return $this->unitPrice;
    }

    /**
     * Set amount
     *
     * @param string $amount
     *
     * @return InventoryItem
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
     * Set cost
     *
     * @param string $cost
     *
     * @return InventoryItem
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
     * Set posNumber
     *
     * @param integer $posNumber
     *
     * @return InventoryItem
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
     * Set authorizerKey
     *
     * @param integer $authorizerKey
     *
     * @return InventoryItem
     */
    public function setAuthorizerKey($authorizerKey)
    {
        $this->authorizerKey = $authorizerKey;

        return $this;
    }

    /**
     * Get authorizerKey
     *
     * @return integer
     */
    public function getAuthorizerKey()
    {
        return $this->authorizerKey;
    }

    /**
     * Set skuId
     *
     * @param string $skuId
     *
     * @return InventoryItem
     */
    public function setSkuId($skuId)
    {
        $this->skuId = $skuId;

        return $this;
    }

    /**
     * Get skuId
     *
     * @return string
     */
    public function getSkuId()
    {
        return $this->skuId;
    }

    /**
     * Set scanned
     *
     * @param boolean $scanned
     *
     * @return InventoryItem
     */
    public function setScanned($scanned)
    {
        $this->scanned = $scanned;

        return $this;
    }

    /**
     * Get scanned
     *
     * @return boolean
     */
    public function getScanned()
    {
        return $this->scanned;
    }

    /**
     * Set cpuClock
     *
     * @param integer $cpuClock
     *
     * @return InventoryItem
     */
    public function setCpuClock($cpuClock)
    {
        $this->cpuClock = $cpuClock;

        return $this;
    }

    /**
     * Get cpuClock
     *
     * @return integer
     */
    public function getCpuClock()
    {
        return $this->cpuClock;
    }

    /**
     * Set posId
     *
     * @param string $posId
     *
     * @return InventoryItem
     */
    public function setPosId($posId)
    {
        $this->posId = $posId;

        return $this;
    }

    /**
     * Get posId
     *
     * @return string
     */
    public function getPosId()
    {
        return $this->posId;
    }

    /**
     * Set taxPercent
     *
     * @param string $taxPercent
     *
     * @return InventoryItem
     */
    public function setTaxPercent($taxPercent)
    {
        $this->taxPercent = $taxPercent;

        return $this;
    }

    /**
     * Get taxPercent
     *
     * @return string
     */
    public function getTaxPercent()
    {
        return $this->taxPercent;
    }
}

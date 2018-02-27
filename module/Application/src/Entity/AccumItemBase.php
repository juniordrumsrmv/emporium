<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccumItemBase
 *
 * @ORM\Table(name="accum_item_base", uniqueConstraints={@ORM\UniqueConstraint(name="index_accum_item", columns={"store_key", "fiscal_date", "pos_number", "plu_id", "base_type"}), @ORM\UniqueConstraint(name="index_accum_pos", columns={"store_key", "fiscal_date", "plu_id", "pos_number", "base_type"}), @ORM\UniqueConstraint(name="index_accum_date", columns={"fiscal_date", "store_key", "pos_number", "plu_id", "base_type"})}, indexes={@ORM\Index(name="index_accum_item_dept", columns={"fiscal_date", "store_key", "department_key", "base_type"}), @ORM\Index(name="index_accum_item_maker", columns={"fiscal_date", "store_key", "maker_key", "base_type"})})
 * @ORM\Entity
 */
class AccumItemBase
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
     * @ORM\Column(name="pos_number", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $posNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="plu_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $pluId;

    /**
     * @var boolean
     *
     * @ORM\Column(name="base_type", type="boolean", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $baseType;

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
     * @ORM\Column(name="quantity_canc", type="decimal", precision=15, scale=3, nullable=false)
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
     * @ORM\Column(name="cost", type="decimal", precision=15, scale=4, nullable=false)
     */
    private $cost;

    /**
     * @var string
     *
     * @ORM\Column(name="cost_canc", type="decimal", precision=15, scale=4, nullable=false)
     */
    private $costCanc;

    /**
     * @var string
     *
     * @ORM\Column(name="margin", type="decimal", precision=15, scale=3, nullable=false)
     */
    private $margin;

    /**
     * @var string
     *
     * @ORM\Column(name="return_quantity", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $returnQuantity;

    /**
     * @var string
     *
     * @ORM\Column(name="return_amount", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $returnAmount;

    /**
     * @var integer
     *
     * @ORM\Column(name="department_key", type="smallint", nullable=true)
     */
    private $departmentKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="maker_key", type="bigint", nullable=true)
     */
    private $makerKey;

    /**
     * @var string
     *
     * @ORM\Column(name="received_quantity", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $receivedQuantity;

    /**
     * @var string
     *
     * @ORM\Column(name="received_amount", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $receivedAmount;

    /**
     * @var boolean
     *
     * @ORM\Column(name="pis_cofins", type="boolean", nullable=true)
     */
    private $pisCofins;



    /**
     * Set storeKey
     *
     * @param integer $storeKey
     *
     * @return AccumItemBase
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
     * Set fiscalDate
     *
     * @param \DateTime $fiscalDate
     *
     * @return AccumItemBase
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
     * Set posNumber
     *
     * @param integer $posNumber
     *
     * @return AccumItemBase
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
     * Set pluId
     *
     * @param integer $pluId
     *
     * @return AccumItemBase
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
     * Set baseType
     *
     * @param boolean $baseType
     *
     * @return AccumItemBase
     */
    public function setBaseType($baseType)
    {
        $this->baseType = $baseType;

        return $this;
    }

    /**
     * Get baseType
     *
     * @return boolean
     */
    public function getBaseType()
    {
        return $this->baseType;
    }

    /**
     * Set descPlu
     *
     * @param string $descPlu
     *
     * @return AccumItemBase
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
     * @return AccumItemBase
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
     * @return AccumItemBase
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
     * @return AccumItemBase
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
     * @return AccumItemBase
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
     * Set cost
     *
     * @param string $cost
     *
     * @return AccumItemBase
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
     * Set costCanc
     *
     * @param string $costCanc
     *
     * @return AccumItemBase
     */
    public function setCostCanc($costCanc)
    {
        $this->costCanc = $costCanc;

        return $this;
    }

    /**
     * Get costCanc
     *
     * @return string
     */
    public function getCostCanc()
    {
        return $this->costCanc;
    }

    /**
     * Set margin
     *
     * @param string $margin
     *
     * @return AccumItemBase
     */
    public function setMargin($margin)
    {
        $this->margin = $margin;

        return $this;
    }

    /**
     * Get margin
     *
     * @return string
     */
    public function getMargin()
    {
        return $this->margin;
    }

    /**
     * Set returnQuantity
     *
     * @param string $returnQuantity
     *
     * @return AccumItemBase
     */
    public function setReturnQuantity($returnQuantity)
    {
        $this->returnQuantity = $returnQuantity;

        return $this;
    }

    /**
     * Get returnQuantity
     *
     * @return string
     */
    public function getReturnQuantity()
    {
        return $this->returnQuantity;
    }

    /**
     * Set returnAmount
     *
     * @param string $returnAmount
     *
     * @return AccumItemBase
     */
    public function setReturnAmount($returnAmount)
    {
        $this->returnAmount = $returnAmount;

        return $this;
    }

    /**
     * Get returnAmount
     *
     * @return string
     */
    public function getReturnAmount()
    {
        return $this->returnAmount;
    }

    /**
     * Set departmentKey
     *
     * @param integer $departmentKey
     *
     * @return AccumItemBase
     */
    public function setDepartmentKey($departmentKey)
    {
        $this->departmentKey = $departmentKey;

        return $this;
    }

    /**
     * Get departmentKey
     *
     * @return integer
     */
    public function getDepartmentKey()
    {
        return $this->departmentKey;
    }

    /**
     * Set makerKey
     *
     * @param integer $makerKey
     *
     * @return AccumItemBase
     */
    public function setMakerKey($makerKey)
    {
        $this->makerKey = $makerKey;

        return $this;
    }

    /**
     * Get makerKey
     *
     * @return integer
     */
    public function getMakerKey()
    {
        return $this->makerKey;
    }

    /**
     * Set receivedQuantity
     *
     * @param string $receivedQuantity
     *
     * @return AccumItemBase
     */
    public function setReceivedQuantity($receivedQuantity)
    {
        $this->receivedQuantity = $receivedQuantity;

        return $this;
    }

    /**
     * Get receivedQuantity
     *
     * @return string
     */
    public function getReceivedQuantity()
    {
        return $this->receivedQuantity;
    }

    /**
     * Set receivedAmount
     *
     * @param string $receivedAmount
     *
     * @return AccumItemBase
     */
    public function setReceivedAmount($receivedAmount)
    {
        $this->receivedAmount = $receivedAmount;

        return $this;
    }

    /**
     * Get receivedAmount
     *
     * @return string
     */
    public function getReceivedAmount()
    {
        return $this->receivedAmount;
    }

    /**
     * Set pisCofins
     *
     * @param boolean $pisCofins
     *
     * @return AccumItemBase
     */
    public function setPisCofins($pisCofins)
    {
        $this->pisCofins = $pisCofins;

        return $this;
    }

    /**
     * Get pisCofins
     *
     * @return boolean
     */
    public function getPisCofins()
    {
        return $this->pisCofins;
    }
}

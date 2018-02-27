<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccumRefundItem
 *
 * @ORM\Table(name="accum_refund_item", uniqueConstraints={@ORM\UniqueConstraint(name="index_refund_accum_item", columns={"store_key", "fiscal_date", "pos_number", "plu_id", "transaction"}), @ORM\UniqueConstraint(name="index_refund_accum_pos", columns={"store_key", "fiscal_date", "plu_id", "pos_number", "transaction"}), @ORM\UniqueConstraint(name="index_refund_accum_date", columns={"fiscal_date", "store_key", "pos_number", "plu_id", "transaction"})}, indexes={@ORM\Index(name="index_refund_accum_item_dept", columns={"fiscal_date", "store_key", "department_key", "transaction"}), @ORM\Index(name="index_refund_accum_item_maker", columns={"fiscal_date", "store_key", "maker_key", "transaction"})})
 * @ORM\Entity
 */
class AccumRefundItem
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
     * @var integer
     *
     * @ORM\Column(name="transaction", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $transaction;

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
     * @ORM\Column(name="discount", type="decimal", precision=15, scale=3, nullable=false)
     */
    private $discount;

    /**
     * @var string
     *
     * @ORM\Column(name="discount_canc", type="decimal", precision=15, scale=3, nullable=false)
     */
    private $discountCanc;

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
     * Set storeKey
     *
     * @param integer $storeKey
     *
     * @return AccumRefundItem
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
     * @return AccumRefundItem
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
     * @return AccumRefundItem
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
     * @return AccumRefundItem
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
     * Set transaction
     *
     * @param integer $transaction
     *
     * @return AccumRefundItem
     */
    public function setTransaction($transaction)
    {
        $this->transaction = $transaction;

        return $this;
    }

    /**
     * Get transaction
     *
     * @return integer
     */
    public function getTransaction()
    {
        return $this->transaction;
    }

    /**
     * Set descPlu
     *
     * @param string $descPlu
     *
     * @return AccumRefundItem
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
     * @return AccumRefundItem
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
     * @return AccumRefundItem
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
     * @return AccumRefundItem
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
     * @return AccumRefundItem
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
     * Set discount
     *
     * @param string $discount
     *
     * @return AccumRefundItem
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
     * Set discountCanc
     *
     * @param string $discountCanc
     *
     * @return AccumRefundItem
     */
    public function setDiscountCanc($discountCanc)
    {
        $this->discountCanc = $discountCanc;

        return $this;
    }

    /**
     * Get discountCanc
     *
     * @return string
     */
    public function getDiscountCanc()
    {
        return $this->discountCanc;
    }

    /**
     * Set departmentKey
     *
     * @param integer $departmentKey
     *
     * @return AccumRefundItem
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
     * @return AccumRefundItem
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
}

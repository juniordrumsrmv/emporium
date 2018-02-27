<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccumReturnedItemReason
 *
 * @ORM\Table(name="accum_returned_item_reason")
 * @ORM\Entity
 */
class AccumReturnedItemReason
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
     * @ORM\Column(name="reason", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $reason;

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
     * @ORM\Column(name="amount", type="decimal", precision=15, scale=3, nullable=false)
     */
    private $amount;

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
     * @return AccumReturnedItemReason
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
     * @return AccumReturnedItemReason
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
     * @return AccumReturnedItemReason
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
     * @return AccumReturnedItemReason
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
     * Set reason
     *
     * @param integer $reason
     *
     * @return AccumReturnedItemReason
     */
    public function setReason($reason)
    {
        $this->reason = $reason;

        return $this;
    }

    /**
     * Get reason
     *
     * @return integer
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Set transaction
     *
     * @param integer $transaction
     *
     * @return AccumReturnedItemReason
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
     * @return AccumReturnedItemReason
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
     * @return AccumReturnedItemReason
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
     * Set amount
     *
     * @param string $amount
     *
     * @return AccumReturnedItemReason
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
     * Set departmentKey
     *
     * @param integer $departmentKey
     *
     * @return AccumReturnedItemReason
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
     * @return AccumReturnedItemReason
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

<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * QueryItem
 *
 * @ORM\Table(name="query_item", indexes={@ORM\Index(name="index_query_item", columns={"store_key", "cashier_key", "pos_number", "start_time"})})
 * @ORM\Entity
 */
class QueryItem
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
     * @ORM\Column(name="trn_number", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $trnNumber;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start_time", type="datetime", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $startTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="sequence", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sequence;

    /**
     * @var integer
     *
     * @ORM\Column(name="ticket_number", type="integer", nullable=false)
     */
    private $ticketNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="item_sequence", type="smallint", nullable=false)
     */
    private $itemSequence;

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
     * @var integer
     *
     * @ORM\Column(name="cashier_key", type="bigint", nullable=true)
     */
    private $cashierKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="authorizer_key", type="bigint", nullable=true)
     */
    private $authorizerKey;

    /**
     * @var string
     *
     * @ORM\Column(name="discount", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $discount;

    /**
     * @var string
     *
     * @ORM\Column(name="increase", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $increase;

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
     * @var boolean
     *
     * @ORM\Column(name="context", type="boolean", nullable=true)
     */
    private $context;

    /**
     * @var integer
     *
     * @ORM\Column(name="type_price", type="integer", nullable=true)
     */
    private $typePrice;

    /**
     * @var integer
     *
     * @ORM\Column(name="verifier_number", type="smallint", nullable=true)
     */
    private $verifierNumber;



    /**
     * Set storeKey
     *
     * @param integer $storeKey
     *
     * @return QueryItem
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
     * @return QueryItem
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
     * Set trnNumber
     *
     * @param integer $trnNumber
     *
     * @return QueryItem
     */
    public function setTrnNumber($trnNumber)
    {
        $this->trnNumber = $trnNumber;

        return $this;
    }

    /**
     * Get trnNumber
     *
     * @return integer
     */
    public function getTrnNumber()
    {
        return $this->trnNumber;
    }

    /**
     * Set startTime
     *
     * @param \DateTime $startTime
     *
     * @return QueryItem
     */
    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;

        return $this;
    }

    /**
     * Get startTime
     *
     * @return \DateTime
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * Set sequence
     *
     * @param integer $sequence
     *
     * @return QueryItem
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
     * Set ticketNumber
     *
     * @param integer $ticketNumber
     *
     * @return QueryItem
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
     * Set itemSequence
     *
     * @param integer $itemSequence
     *
     * @return QueryItem
     */
    public function setItemSequence($itemSequence)
    {
        $this->itemSequence = $itemSequence;

        return $this;
    }

    /**
     * Get itemSequence
     *
     * @return integer
     */
    public function getItemSequence()
    {
        return $this->itemSequence;
    }

    /**
     * Set pluId
     *
     * @param integer $pluId
     *
     * @return QueryItem
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
     * @return QueryItem
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
     * @return QueryItem
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
     * @return QueryItem
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
     * @return QueryItem
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
     * Set cashierKey
     *
     * @param integer $cashierKey
     *
     * @return QueryItem
     */
    public function setCashierKey($cashierKey)
    {
        $this->cashierKey = $cashierKey;

        return $this;
    }

    /**
     * Get cashierKey
     *
     * @return integer
     */
    public function getCashierKey()
    {
        return $this->cashierKey;
    }

    /**
     * Set authorizerKey
     *
     * @param integer $authorizerKey
     *
     * @return QueryItem
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
     * Set discount
     *
     * @param string $discount
     *
     * @return QueryItem
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
     * Set increase
     *
     * @param string $increase
     *
     * @return QueryItem
     */
    public function setIncrease($increase)
    {
        $this->increase = $increase;

        return $this;
    }

    /**
     * Get increase
     *
     * @return string
     */
    public function getIncrease()
    {
        return $this->increase;
    }

    /**
     * Set skuId
     *
     * @param string $skuId
     *
     * @return QueryItem
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
     * @return QueryItem
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
     * Set context
     *
     * @param boolean $context
     *
     * @return QueryItem
     */
    public function setContext($context)
    {
        $this->context = $context;

        return $this;
    }

    /**
     * Get context
     *
     * @return boolean
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * Set typePrice
     *
     * @param integer $typePrice
     *
     * @return QueryItem
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
     * Set verifierNumber
     *
     * @param integer $verifierNumber
     *
     * @return QueryItem
     */
    public function setVerifierNumber($verifierNumber)
    {
        $this->verifierNumber = $verifierNumber;

        return $this;
    }

    /**
     * Get verifierNumber
     *
     * @return integer
     */
    public function getVerifierNumber()
    {
        return $this->verifierNumber;
    }
}

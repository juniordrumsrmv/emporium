<?php

namespace Emporium\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CustomerOblataTrnPts
 *
 * @ORM\Table(name="customer_oblata_trn_pts", indexes={@ORM\Index(name="promokey_pts", columns={"promotion_key", "customer_key"}), @ORM\Index(name="custkey_pts", columns={"customer_key", "promotion_key"})})
 * @ORM\Entity
 */
class CustomerOblataTrnPts
{
    /**
     * @var integer
     *
     * @ORM\Column(name="promotion_key", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $promotionKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="customer_key", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $customerKey;

    /**
     * @var string
     *
     * @ORM\Column(name="promotion_points", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $promotionPoints;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_transaction", type="datetime", nullable=true)
     */
    private $dateTransaction;

    /**
     * @var string
     *
     * @ORM\Column(name="agent_id", type="string", length=10, nullable=true)
     */
    private $agentId;

    /**
     * @var string
     *
     * @ORM\Column(name="type_transaction", type="string", length=1, nullable=true)
     */
    private $typeTransaction;

    /**
     * @var integer
     *
     * @ORM\Column(name="reason_type_key", type="integer", nullable=true)
     */
    private $reasonTypeKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="pos_number", type="smallint", nullable=true)
     */
    private $posNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="store_key", type="bigint", nullable=true)
     */
    private $storeKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="ticket_number", type="integer", nullable=true)
     */
    private $ticketNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="trn_number", type="integer", nullable=true)
     */
    private $trnNumber;



    /**
     * Set promotionKey
     *
     * @param integer $promotionKey
     *
     * @return CustomerOblataTrnPts
     */
    public function setPromotionKey($promotionKey)
    {
        $this->promotionKey = $promotionKey;

        return $this;
    }

    /**
     * Get promotionKey
     *
     * @return integer
     */
    public function getPromotionKey()
    {
        return $this->promotionKey;
    }

    /**
     * Set customerKey
     *
     * @param integer $customerKey
     *
     * @return CustomerOblataTrnPts
     */
    public function setCustomerKey($customerKey)
    {
        $this->customerKey = $customerKey;

        return $this;
    }

    /**
     * Get customerKey
     *
     * @return integer
     */
    public function getCustomerKey()
    {
        return $this->customerKey;
    }

    /**
     * Set promotionPoints
     *
     * @param string $promotionPoints
     *
     * @return CustomerOblataTrnPts
     */
    public function setPromotionPoints($promotionPoints)
    {
        $this->promotionPoints = $promotionPoints;

        return $this;
    }

    /**
     * Get promotionPoints
     *
     * @return string
     */
    public function getPromotionPoints()
    {
        return $this->promotionPoints;
    }

    /**
     * Set dateTransaction
     *
     * @param \DateTime $dateTransaction
     *
     * @return CustomerOblataTrnPts
     */
    public function setDateTransaction($dateTransaction)
    {
        $this->dateTransaction = $dateTransaction;

        return $this;
    }

    /**
     * Get dateTransaction
     *
     * @return \DateTime
     */
    public function getDateTransaction()
    {
        return $this->dateTransaction;
    }

    /**
     * Set agentId
     *
     * @param string $agentId
     *
     * @return CustomerOblataTrnPts
     */
    public function setAgentId($agentId)
    {
        $this->agentId = $agentId;

        return $this;
    }

    /**
     * Get agentId
     *
     * @return string
     */
    public function getAgentId()
    {
        return $this->agentId;
    }

    /**
     * Set typeTransaction
     *
     * @param string $typeTransaction
     *
     * @return CustomerOblataTrnPts
     */
    public function setTypeTransaction($typeTransaction)
    {
        $this->typeTransaction = $typeTransaction;

        return $this;
    }

    /**
     * Get typeTransaction
     *
     * @return string
     */
    public function getTypeTransaction()
    {
        return $this->typeTransaction;
    }

    /**
     * Set reasonTypeKey
     *
     * @param integer $reasonTypeKey
     *
     * @return CustomerOblataTrnPts
     */
    public function setReasonTypeKey($reasonTypeKey)
    {
        $this->reasonTypeKey = $reasonTypeKey;

        return $this;
    }

    /**
     * Get reasonTypeKey
     *
     * @return integer
     */
    public function getReasonTypeKey()
    {
        return $this->reasonTypeKey;
    }

    /**
     * Set posNumber
     *
     * @param integer $posNumber
     *
     * @return CustomerOblataTrnPts
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
     * Set storeKey
     *
     * @param integer $storeKey
     *
     * @return CustomerOblataTrnPts
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
     * Set ticketNumber
     *
     * @param integer $ticketNumber
     *
     * @return CustomerOblataTrnPts
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
     * Set trnNumber
     *
     * @param integer $trnNumber
     *
     * @return CustomerOblataTrnPts
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
}

<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SaleHistoryWeight
 *
 * @ORM\Table(name="sale_history_weight")
 * @ORM\Entity
 */
class SaleHistoryWeight
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
     * @ORM\Column(name="ticket_number", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ticketNumber;

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
     * @ORM\Column(name="plu_id", type="bigint", nullable=false)
     */
    private $pluId;

    /**
     * @var integer
     *
     * @ORM\Column(name="authorizer_key", type="bigint", nullable=true)
     */
    private $authorizerKey;

    /**
     * @var string
     *
     * @ORM\Column(name="cad_checkout_weight", type="decimal", precision=7, scale=3, nullable=true)
     */
    private $cadCheckoutWeight;

    /**
     * @var string
     *
     * @ORM\Column(name="self_checkout_weight", type="decimal", precision=7, scale=3, nullable=true)
     */
    private $selfCheckoutWeight;



    /**
     * Set storeKey
     *
     * @param integer $storeKey
     *
     * @return SaleHistoryWeight
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
     * @return SaleHistoryWeight
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
     * Set ticketNumber
     *
     * @param integer $ticketNumber
     *
     * @return SaleHistoryWeight
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
     * Set startTime
     *
     * @param \DateTime $startTime
     *
     * @return SaleHistoryWeight
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
     * @return SaleHistoryWeight
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
     * Set pluId
     *
     * @param integer $pluId
     *
     * @return SaleHistoryWeight
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
     * Set authorizerKey
     *
     * @param integer $authorizerKey
     *
     * @return SaleHistoryWeight
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
     * Set cadCheckoutWeight
     *
     * @param string $cadCheckoutWeight
     *
     * @return SaleHistoryWeight
     */
    public function setCadCheckoutWeight($cadCheckoutWeight)
    {
        $this->cadCheckoutWeight = $cadCheckoutWeight;

        return $this;
    }

    /**
     * Get cadCheckoutWeight
     *
     * @return string
     */
    public function getCadCheckoutWeight()
    {
        return $this->cadCheckoutWeight;
    }

    /**
     * Set selfCheckoutWeight
     *
     * @param string $selfCheckoutWeight
     *
     * @return SaleHistoryWeight
     */
    public function setSelfCheckoutWeight($selfCheckoutWeight)
    {
        $this->selfCheckoutWeight = $selfCheckoutWeight;

        return $this;
    }

    /**
     * Get selfCheckoutWeight
     *
     * @return string
     */
    public function getSelfCheckoutWeight()
    {
        return $this->selfCheckoutWeight;
    }
}

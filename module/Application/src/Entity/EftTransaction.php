<?php

namespace Emporium\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EftTransaction
 *
 * @ORM\Table(name="eft_transaction")
 * @ORM\Entity
 */
class EftTransaction
{
    /**
     * @var integer
     *
     * @ORM\Column(name="eft_trans_key", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $eftTransKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="eft_trans_nsu", type="bigint", nullable=true)
     */
    private $eftTransNsu;

    /**
     * @var string
     *
     * @ORM\Column(name="eft_trans_family", type="string", length=10, nullable=false)
     */
    private $eftTransFamily;

    /**
     * @var integer
     *
     * @ORM\Column(name="eft_trans_store", type="bigint", nullable=false)
     */
    private $eftTransStore;

    /**
     * @var integer
     *
     * @ORM\Column(name="eft_trans_pos", type="smallint", nullable=false)
     */
    private $eftTransPos;

    /**
     * @var integer
     *
     * @ORM\Column(name="eft_trans_type", type="smallint", nullable=true)
     */
    private $eftTransType;

    /**
     * @var integer
     *
     * @ORM\Column(name="eft_trans_status", type="smallint", nullable=false)
     */
    private $eftTransStatus;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="eft_trans_start_time", type="datetime", nullable=true)
     */
    private $eftTransStartTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="eft_trans_finish_time", type="datetime", nullable=true)
     */
    private $eftTransFinishTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="eft_trans_server_nsu", type="bigint", nullable=true)
     */
    private $eftTransServerNsu;

    /**
     * @var integer
     *
     * @ORM\Column(name="eft_trans_host_nsu", type="bigint", nullable=true)
     */
    private $eftTransHostNsu;

    /**
     * @var string
     *
     * @ORM\Column(name="eft_trans_message", type="blob", length=65535, nullable=true)
     */
    private $eftTransMessage;

    /**
     * @var string
     *
     * @ORM\Column(name="eft_trans_server_message", type="blob", length=65535, nullable=true)
     */
    private $eftTransServerMessage;

    /**
     * @var string
     *
     * @ORM\Column(name="eft_trans_ack_message", type="blob", length=65535, nullable=true)
     */
    private $eftTransAckMessage;

    /**
     * @var string
     *
     * @ORM\Column(name="eft_trans_document", type="string", length=255, nullable=true)
     */
    private $eftTransDocument;

    /**
     * @var string
     *
     * @ORM\Column(name="eft_trans_customer_id", type="string", length=255, nullable=true)
     */
    private $eftTransCustomerId;

    /**
     * @var integer
     *
     * @ORM\Column(name="eft_trans_customer_key", type="bigint", nullable=true)
     */
    private $eftTransCustomerKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="eft_trans_media_id", type="smallint", nullable=true)
     */
    private $eftTransMediaId;

    /**
     * @var string
     *
     * @ORM\Column(name="eft_trans_amount", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $eftTransAmount;

    /**
     * @var integer
     *
     * @ORM\Column(name="eft_trans_cashier_key", type="bigint", nullable=true)
     */
    private $eftTransCashierKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="eft_trans_authorizer_key", type="bigint", nullable=true)
     */
    private $eftTransAuthorizerKey;

    /**
     * @var string
     *
     * @ORM\Column(name="eft_trans_extra_ticket", type="string", length=255, nullable=true)
     */
    private $eftTransExtraTicket;



    /**
     * Get eftTransKey
     *
     * @return integer
     */
    public function getEftTransKey()
    {
        return $this->eftTransKey;
    }

    /**
     * Set eftTransNsu
     *
     * @param integer $eftTransNsu
     *
     * @return EftTransaction
     */
    public function setEftTransNsu($eftTransNsu)
    {
        $this->eftTransNsu = $eftTransNsu;

        return $this;
    }

    /**
     * Get eftTransNsu
     *
     * @return integer
     */
    public function getEftTransNsu()
    {
        return $this->eftTransNsu;
    }

    /**
     * Set eftTransFamily
     *
     * @param string $eftTransFamily
     *
     * @return EftTransaction
     */
    public function setEftTransFamily($eftTransFamily)
    {
        $this->eftTransFamily = $eftTransFamily;

        return $this;
    }

    /**
     * Get eftTransFamily
     *
     * @return string
     */
    public function getEftTransFamily()
    {
        return $this->eftTransFamily;
    }

    /**
     * Set eftTransStore
     *
     * @param integer $eftTransStore
     *
     * @return EftTransaction
     */
    public function setEftTransStore($eftTransStore)
    {
        $this->eftTransStore = $eftTransStore;

        return $this;
    }

    /**
     * Get eftTransStore
     *
     * @return integer
     */
    public function getEftTransStore()
    {
        return $this->eftTransStore;
    }

    /**
     * Set eftTransPos
     *
     * @param integer $eftTransPos
     *
     * @return EftTransaction
     */
    public function setEftTransPos($eftTransPos)
    {
        $this->eftTransPos = $eftTransPos;

        return $this;
    }

    /**
     * Get eftTransPos
     *
     * @return integer
     */
    public function getEftTransPos()
    {
        return $this->eftTransPos;
    }

    /**
     * Set eftTransType
     *
     * @param integer $eftTransType
     *
     * @return EftTransaction
     */
    public function setEftTransType($eftTransType)
    {
        $this->eftTransType = $eftTransType;

        return $this;
    }

    /**
     * Get eftTransType
     *
     * @return integer
     */
    public function getEftTransType()
    {
        return $this->eftTransType;
    }

    /**
     * Set eftTransStatus
     *
     * @param integer $eftTransStatus
     *
     * @return EftTransaction
     */
    public function setEftTransStatus($eftTransStatus)
    {
        $this->eftTransStatus = $eftTransStatus;

        return $this;
    }

    /**
     * Get eftTransStatus
     *
     * @return integer
     */
    public function getEftTransStatus()
    {
        return $this->eftTransStatus;
    }

    /**
     * Set eftTransStartTime
     *
     * @param \DateTime $eftTransStartTime
     *
     * @return EftTransaction
     */
    public function setEftTransStartTime($eftTransStartTime)
    {
        $this->eftTransStartTime = $eftTransStartTime;

        return $this;
    }

    /**
     * Get eftTransStartTime
     *
     * @return \DateTime
     */
    public function getEftTransStartTime()
    {
        return $this->eftTransStartTime;
    }

    /**
     * Set eftTransFinishTime
     *
     * @param \DateTime $eftTransFinishTime
     *
     * @return EftTransaction
     */
    public function setEftTransFinishTime($eftTransFinishTime)
    {
        $this->eftTransFinishTime = $eftTransFinishTime;

        return $this;
    }

    /**
     * Get eftTransFinishTime
     *
     * @return \DateTime
     */
    public function getEftTransFinishTime()
    {
        return $this->eftTransFinishTime;
    }

    /**
     * Set eftTransServerNsu
     *
     * @param integer $eftTransServerNsu
     *
     * @return EftTransaction
     */
    public function setEftTransServerNsu($eftTransServerNsu)
    {
        $this->eftTransServerNsu = $eftTransServerNsu;

        return $this;
    }

    /**
     * Get eftTransServerNsu
     *
     * @return integer
     */
    public function getEftTransServerNsu()
    {
        return $this->eftTransServerNsu;
    }

    /**
     * Set eftTransHostNsu
     *
     * @param integer $eftTransHostNsu
     *
     * @return EftTransaction
     */
    public function setEftTransHostNsu($eftTransHostNsu)
    {
        $this->eftTransHostNsu = $eftTransHostNsu;

        return $this;
    }

    /**
     * Get eftTransHostNsu
     *
     * @return integer
     */
    public function getEftTransHostNsu()
    {
        return $this->eftTransHostNsu;
    }

    /**
     * Set eftTransMessage
     *
     * @param string $eftTransMessage
     *
     * @return EftTransaction
     */
    public function setEftTransMessage($eftTransMessage)
    {
        $this->eftTransMessage = $eftTransMessage;

        return $this;
    }

    /**
     * Get eftTransMessage
     *
     * @return string
     */
    public function getEftTransMessage()
    {
        return $this->eftTransMessage;
    }

    /**
     * Set eftTransServerMessage
     *
     * @param string $eftTransServerMessage
     *
     * @return EftTransaction
     */
    public function setEftTransServerMessage($eftTransServerMessage)
    {
        $this->eftTransServerMessage = $eftTransServerMessage;

        return $this;
    }

    /**
     * Get eftTransServerMessage
     *
     * @return string
     */
    public function getEftTransServerMessage()
    {
        return $this->eftTransServerMessage;
    }

    /**
     * Set eftTransAckMessage
     *
     * @param string $eftTransAckMessage
     *
     * @return EftTransaction
     */
    public function setEftTransAckMessage($eftTransAckMessage)
    {
        $this->eftTransAckMessage = $eftTransAckMessage;

        return $this;
    }

    /**
     * Get eftTransAckMessage
     *
     * @return string
     */
    public function getEftTransAckMessage()
    {
        return $this->eftTransAckMessage;
    }

    /**
     * Set eftTransDocument
     *
     * @param string $eftTransDocument
     *
     * @return EftTransaction
     */
    public function setEftTransDocument($eftTransDocument)
    {
        $this->eftTransDocument = $eftTransDocument;

        return $this;
    }

    /**
     * Get eftTransDocument
     *
     * @return string
     */
    public function getEftTransDocument()
    {
        return $this->eftTransDocument;
    }

    /**
     * Set eftTransCustomerId
     *
     * @param string $eftTransCustomerId
     *
     * @return EftTransaction
     */
    public function setEftTransCustomerId($eftTransCustomerId)
    {
        $this->eftTransCustomerId = $eftTransCustomerId;

        return $this;
    }

    /**
     * Get eftTransCustomerId
     *
     * @return string
     */
    public function getEftTransCustomerId()
    {
        return $this->eftTransCustomerId;
    }

    /**
     * Set eftTransCustomerKey
     *
     * @param integer $eftTransCustomerKey
     *
     * @return EftTransaction
     */
    public function setEftTransCustomerKey($eftTransCustomerKey)
    {
        $this->eftTransCustomerKey = $eftTransCustomerKey;

        return $this;
    }

    /**
     * Get eftTransCustomerKey
     *
     * @return integer
     */
    public function getEftTransCustomerKey()
    {
        return $this->eftTransCustomerKey;
    }

    /**
     * Set eftTransMediaId
     *
     * @param integer $eftTransMediaId
     *
     * @return EftTransaction
     */
    public function setEftTransMediaId($eftTransMediaId)
    {
        $this->eftTransMediaId = $eftTransMediaId;

        return $this;
    }

    /**
     * Get eftTransMediaId
     *
     * @return integer
     */
    public function getEftTransMediaId()
    {
        return $this->eftTransMediaId;
    }

    /**
     * Set eftTransAmount
     *
     * @param string $eftTransAmount
     *
     * @return EftTransaction
     */
    public function setEftTransAmount($eftTransAmount)
    {
        $this->eftTransAmount = $eftTransAmount;

        return $this;
    }

    /**
     * Get eftTransAmount
     *
     * @return string
     */
    public function getEftTransAmount()
    {
        return $this->eftTransAmount;
    }

    /**
     * Set eftTransCashierKey
     *
     * @param integer $eftTransCashierKey
     *
     * @return EftTransaction
     */
    public function setEftTransCashierKey($eftTransCashierKey)
    {
        $this->eftTransCashierKey = $eftTransCashierKey;

        return $this;
    }

    /**
     * Get eftTransCashierKey
     *
     * @return integer
     */
    public function getEftTransCashierKey()
    {
        return $this->eftTransCashierKey;
    }

    /**
     * Set eftTransAuthorizerKey
     *
     * @param integer $eftTransAuthorizerKey
     *
     * @return EftTransaction
     */
    public function setEftTransAuthorizerKey($eftTransAuthorizerKey)
    {
        $this->eftTransAuthorizerKey = $eftTransAuthorizerKey;

        return $this;
    }

    /**
     * Get eftTransAuthorizerKey
     *
     * @return integer
     */
    public function getEftTransAuthorizerKey()
    {
        return $this->eftTransAuthorizerKey;
    }

    /**
     * Set eftTransExtraTicket
     *
     * @param string $eftTransExtraTicket
     *
     * @return EftTransaction
     */
    public function setEftTransExtraTicket($eftTransExtraTicket)
    {
        $this->eftTransExtraTicket = $eftTransExtraTicket;

        return $this;
    }

    /**
     * Get eftTransExtraTicket
     *
     * @return string
     */
    public function getEftTransExtraTicket()
    {
        return $this->eftTransExtraTicket;
    }
}

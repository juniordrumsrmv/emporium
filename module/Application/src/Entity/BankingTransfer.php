<?php

namespace Emporium\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BankingTransfer
 *
 * @ORM\Table(name="banking_transfer")
 * @ORM\Entity
 */
class BankingTransfer
{
    /**
     * @var integer
     *
     * @ORM\Column(name="transfer_key", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $transferKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="store_key", type="bigint", nullable=false)
     */
    private $storeKey;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="reference_date", type="date", nullable=false)
     */
    private $referenceDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="from_location_key", type="smallint", nullable=true)
     */
    private $fromLocationKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="to_location_key", type="smallint", nullable=true)
     */
    private $toLocationKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="block_transfer_key", type="bigint", nullable=true)
     */
    private $blockTransferKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="banking_unit_key", type="bigint", nullable=true)
     */
    private $bankingUnitKey;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="creation_time", type="datetime", nullable=true)
     */
    private $creationTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_key", type="bigint", nullable=true)
     */
    private $userKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="authorizer_key", type="bigint", nullable=true)
     */
    private $authorizerKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="media_id", type="smallint", nullable=true)
     */
    private $mediaId;

    /**
     * @var string
     *
     * @ORM\Column(name="amount", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $amount;

    /**
     * @var integer
     *
     * @ORM\Column(name="transaction_type_key", type="smallint", nullable=true)
     */
    private $transactionTypeKey;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="extended_media_id", type="smallint", nullable=true)
     */
    private $extendedMediaId;



    /**
     * Get transferKey
     *
     * @return integer
     */
    public function getTransferKey()
    {
        return $this->transferKey;
    }

    /**
     * Set storeKey
     *
     * @param integer $storeKey
     *
     * @return BankingTransfer
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
     * Set referenceDate
     *
     * @param \DateTime $referenceDate
     *
     * @return BankingTransfer
     */
    public function setReferenceDate($referenceDate)
    {
        $this->referenceDate = $referenceDate;

        return $this;
    }

    /**
     * Get referenceDate
     *
     * @return \DateTime
     */
    public function getReferenceDate()
    {
        return $this->referenceDate;
    }

    /**
     * Set fromLocationKey
     *
     * @param integer $fromLocationKey
     *
     * @return BankingTransfer
     */
    public function setFromLocationKey($fromLocationKey)
    {
        $this->fromLocationKey = $fromLocationKey;

        return $this;
    }

    /**
     * Get fromLocationKey
     *
     * @return integer
     */
    public function getFromLocationKey()
    {
        return $this->fromLocationKey;
    }

    /**
     * Set toLocationKey
     *
     * @param integer $toLocationKey
     *
     * @return BankingTransfer
     */
    public function setToLocationKey($toLocationKey)
    {
        $this->toLocationKey = $toLocationKey;

        return $this;
    }

    /**
     * Get toLocationKey
     *
     * @return integer
     */
    public function getToLocationKey()
    {
        return $this->toLocationKey;
    }

    /**
     * Set blockTransferKey
     *
     * @param integer $blockTransferKey
     *
     * @return BankingTransfer
     */
    public function setBlockTransferKey($blockTransferKey)
    {
        $this->blockTransferKey = $blockTransferKey;

        return $this;
    }

    /**
     * Get blockTransferKey
     *
     * @return integer
     */
    public function getBlockTransferKey()
    {
        return $this->blockTransferKey;
    }

    /**
     * Set bankingUnitKey
     *
     * @param integer $bankingUnitKey
     *
     * @return BankingTransfer
     */
    public function setBankingUnitKey($bankingUnitKey)
    {
        $this->bankingUnitKey = $bankingUnitKey;

        return $this;
    }

    /**
     * Get bankingUnitKey
     *
     * @return integer
     */
    public function getBankingUnitKey()
    {
        return $this->bankingUnitKey;
    }

    /**
     * Set creationTime
     *
     * @param \DateTime $creationTime
     *
     * @return BankingTransfer
     */
    public function setCreationTime($creationTime)
    {
        $this->creationTime = $creationTime;

        return $this;
    }

    /**
     * Get creationTime
     *
     * @return \DateTime
     */
    public function getCreationTime()
    {
        return $this->creationTime;
    }

    /**
     * Set userKey
     *
     * @param integer $userKey
     *
     * @return BankingTransfer
     */
    public function setUserKey($userKey)
    {
        $this->userKey = $userKey;

        return $this;
    }

    /**
     * Get userKey
     *
     * @return integer
     */
    public function getUserKey()
    {
        return $this->userKey;
    }

    /**
     * Set authorizerKey
     *
     * @param integer $authorizerKey
     *
     * @return BankingTransfer
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
     * Set mediaId
     *
     * @param integer $mediaId
     *
     * @return BankingTransfer
     */
    public function setMediaId($mediaId)
    {
        $this->mediaId = $mediaId;

        return $this;
    }

    /**
     * Get mediaId
     *
     * @return integer
     */
    public function getMediaId()
    {
        return $this->mediaId;
    }

    /**
     * Set amount
     *
     * @param string $amount
     *
     * @return BankingTransfer
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
     * Set transactionTypeKey
     *
     * @param integer $transactionTypeKey
     *
     * @return BankingTransfer
     */
    public function setTransactionTypeKey($transactionTypeKey)
    {
        $this->transactionTypeKey = $transactionTypeKey;

        return $this;
    }

    /**
     * Get transactionTypeKey
     *
     * @return integer
     */
    public function getTransactionTypeKey()
    {
        return $this->transactionTypeKey;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return BankingTransfer
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set extendedMediaId
     *
     * @param integer $extendedMediaId
     *
     * @return BankingTransfer
     */
    public function setExtendedMediaId($extendedMediaId)
    {
        $this->extendedMediaId = $extendedMediaId;

        return $this;
    }

    /**
     * Get extendedMediaId
     *
     * @return integer
     */
    public function getExtendedMediaId()
    {
        return $this->extendedMediaId;
    }
}

<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BankingBlockTransfer
 *
 * @ORM\Table(name="banking_block_transfer")
 * @ORM\Entity
 */
class BankingBlockTransfer
{
    /**
     * @var integer
     *
     * @ORM\Column(name="block_transfer_key", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $blockTransferKey;

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
     * @var \DateTime
     *
     * @ORM\Column(name="creation_time", type="datetime", nullable=true)
     */
    private $creationTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="change_time", type="datetime", nullable=true)
     */
    private $changeTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="new_location_key", type="smallint", nullable=true)
     */
    private $newLocationKey;

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
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=true)
     */
    private $status;



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
     * Set storeKey
     *
     * @param integer $storeKey
     *
     * @return BankingBlockTransfer
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
     * @return BankingBlockTransfer
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
     * Set creationTime
     *
     * @param \DateTime $creationTime
     *
     * @return BankingBlockTransfer
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
     * Set changeTime
     *
     * @param \DateTime $changeTime
     *
     * @return BankingBlockTransfer
     */
    public function setChangeTime($changeTime)
    {
        $this->changeTime = $changeTime;

        return $this;
    }

    /**
     * Get changeTime
     *
     * @return \DateTime
     */
    public function getChangeTime()
    {
        return $this->changeTime;
    }

    /**
     * Set newLocationKey
     *
     * @param integer $newLocationKey
     *
     * @return BankingBlockTransfer
     */
    public function setNewLocationKey($newLocationKey)
    {
        $this->newLocationKey = $newLocationKey;

        return $this;
    }

    /**
     * Get newLocationKey
     *
     * @return integer
     */
    public function getNewLocationKey()
    {
        return $this->newLocationKey;
    }

    /**
     * Set userKey
     *
     * @param integer $userKey
     *
     * @return BankingBlockTransfer
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
     * @return BankingBlockTransfer
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
     * Set transactionTypeKey
     *
     * @param integer $transactionTypeKey
     *
     * @return BankingBlockTransfer
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
     * @return BankingBlockTransfer
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
     * Set status
     *
     * @param boolean $status
     *
     * @return BankingBlockTransfer
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return boolean
     */
    public function getStatus()
    {
        return $this->status;
    }
}

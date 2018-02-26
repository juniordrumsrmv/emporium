<?php

namespace Emporium\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BankingUnit
 *
 * @ORM\Table(name="banking_unit", indexes={@ORM\Index(name="index_banking_1", columns={"store_key", "pos_number", "pickup_ticket_number", "status"}), @ORM\Index(name="banking_unit_2", columns={"media_id", "location_key", "amount_verified"}), @ORM\Index(name="banking_unit_3", columns={"extended_media_id", "location_key", "amount_verified"}), @ORM\Index(name="banking_unit_4", columns={"store_key", "pos_number", "pickup_transaction_number", "status"})})
 * @ORM\Entity
 */
class BankingUnit
{
    /**
     * @var integer
     *
     * @ORM\Column(name="banking_unit_key", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $bankingUnitKey;

    /**
     * @var boolean
     *
     * @ORM\Column(name="type", type="boolean", nullable=true)
     */
    private $type;

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=true)
     */
    private $status;

    /**
     * @var integer
     *
     * @ORM\Column(name="location_key", type="smallint", nullable=true)
     */
    private $locationKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="store_key", type="bigint", nullable=true)
     */
    private $storeKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="pos_number", type="smallint", nullable=true)
     */
    private $posNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="ticket_number", type="integer", nullable=true)
     */
    private $ticketNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="pickup_ticket_number", type="integer", nullable=true)
     */
    private $pickupTicketNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="customer_key", type="bigint", nullable=true)
     */
    private $customerKey;

    /**
     * @var string
     *
     * @ORM\Column(name="issuer_id", type="string", length=20, nullable=true)
     */
    private $issuerId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="creation_time", type="datetime", nullable=true)
     */
    private $creationTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="media_id", type="smallint", nullable=true)
     */
    private $mediaId;

    /**
     * @var boolean
     *
     * @ORM\Column(name="left_in_drawer", type="boolean", nullable=true)
     */
    private $leftInDrawer;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_check", type="boolean", nullable=true)
     */
    private $isCheck;

    /**
     * @var string
     *
     * @ORM\Column(name="amount_pos", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $amountPos;

    /**
     * @var string
     *
     * @ORM\Column(name="amount_pos_entered", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $amountPosEntered;

    /**
     * @var string
     *
     * @ORM\Column(name="amount_declared", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $amountDeclared;

    /**
     * @var string
     *
     * @ORM\Column(name="amount_verified", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $amountVerified;

    /**
     * @var string
     *
     * @ORM\Column(name="unit_value", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $unitValue;

    /**
     * @var string
     *
     * @ORM\Column(name="bank", type="string", length=15, nullable=true)
     */
    private $bank;

    /**
     * @var string
     *
     * @ORM\Column(name="branch", type="string", length=15, nullable=true)
     */
    private $branch;

    /**
     * @var string
     *
     * @ORM\Column(name="account", type="string", length=15, nullable=true)
     */
    private $account;

    /**
     * @var string
     *
     * @ORM\Column(name="check_number", type="string", length=15, nullable=true)
     */
    private $checkNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="cmc7", type="string", length=64, nullable=true)
     */
    private $cmc7;

    /**
     * @var string
     *
     * @ORM\Column(name="card_number", type="string", length=32, nullable=true)
     */
    private $cardNumber;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_due", type="date", nullable=true)
     */
    private $dateDue;

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
     * @var integer
     *
     * @ORM\Column(name="verifier_key", type="bigint", nullable=true)
     */
    private $verifierKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="extended_media_id", type="smallint", nullable=true)
     */
    private $extendedMediaId;

    /**
     * @var integer
     *
     * @ORM\Column(name="pickup_transaction_number", type="integer", nullable=true)
     */
    private $pickupTransactionNumber;



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
     * Set type
     *
     * @param boolean $type
     *
     * @return BankingUnit
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return boolean
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set status
     *
     * @param boolean $status
     *
     * @return BankingUnit
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

    /**
     * Set locationKey
     *
     * @param integer $locationKey
     *
     * @return BankingUnit
     */
    public function setLocationKey($locationKey)
    {
        $this->locationKey = $locationKey;

        return $this;
    }

    /**
     * Get locationKey
     *
     * @return integer
     */
    public function getLocationKey()
    {
        return $this->locationKey;
    }

    /**
     * Set storeKey
     *
     * @param integer $storeKey
     *
     * @return BankingUnit
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
     * @return BankingUnit
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
     * @return BankingUnit
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
     * Set pickupTicketNumber
     *
     * @param integer $pickupTicketNumber
     *
     * @return BankingUnit
     */
    public function setPickupTicketNumber($pickupTicketNumber)
    {
        $this->pickupTicketNumber = $pickupTicketNumber;

        return $this;
    }

    /**
     * Get pickupTicketNumber
     *
     * @return integer
     */
    public function getPickupTicketNumber()
    {
        return $this->pickupTicketNumber;
    }

    /**
     * Set customerKey
     *
     * @param integer $customerKey
     *
     * @return BankingUnit
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
     * Set issuerId
     *
     * @param string $issuerId
     *
     * @return BankingUnit
     */
    public function setIssuerId($issuerId)
    {
        $this->issuerId = $issuerId;

        return $this;
    }

    /**
     * Get issuerId
     *
     * @return string
     */
    public function getIssuerId()
    {
        return $this->issuerId;
    }

    /**
     * Set creationTime
     *
     * @param \DateTime $creationTime
     *
     * @return BankingUnit
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
     * Set mediaId
     *
     * @param integer $mediaId
     *
     * @return BankingUnit
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
     * Set leftInDrawer
     *
     * @param boolean $leftInDrawer
     *
     * @return BankingUnit
     */
    public function setLeftInDrawer($leftInDrawer)
    {
        $this->leftInDrawer = $leftInDrawer;

        return $this;
    }

    /**
     * Get leftInDrawer
     *
     * @return boolean
     */
    public function getLeftInDrawer()
    {
        return $this->leftInDrawer;
    }

    /**
     * Set isCheck
     *
     * @param boolean $isCheck
     *
     * @return BankingUnit
     */
    public function setIsCheck($isCheck)
    {
        $this->isCheck = $isCheck;

        return $this;
    }

    /**
     * Get isCheck
     *
     * @return boolean
     */
    public function getIsCheck()
    {
        return $this->isCheck;
    }

    /**
     * Set amountPos
     *
     * @param string $amountPos
     *
     * @return BankingUnit
     */
    public function setAmountPos($amountPos)
    {
        $this->amountPos = $amountPos;

        return $this;
    }

    /**
     * Get amountPos
     *
     * @return string
     */
    public function getAmountPos()
    {
        return $this->amountPos;
    }

    /**
     * Set amountPosEntered
     *
     * @param string $amountPosEntered
     *
     * @return BankingUnit
     */
    public function setAmountPosEntered($amountPosEntered)
    {
        $this->amountPosEntered = $amountPosEntered;

        return $this;
    }

    /**
     * Get amountPosEntered
     *
     * @return string
     */
    public function getAmountPosEntered()
    {
        return $this->amountPosEntered;
    }

    /**
     * Set amountDeclared
     *
     * @param string $amountDeclared
     *
     * @return BankingUnit
     */
    public function setAmountDeclared($amountDeclared)
    {
        $this->amountDeclared = $amountDeclared;

        return $this;
    }

    /**
     * Get amountDeclared
     *
     * @return string
     */
    public function getAmountDeclared()
    {
        return $this->amountDeclared;
    }

    /**
     * Set amountVerified
     *
     * @param string $amountVerified
     *
     * @return BankingUnit
     */
    public function setAmountVerified($amountVerified)
    {
        $this->amountVerified = $amountVerified;

        return $this;
    }

    /**
     * Get amountVerified
     *
     * @return string
     */
    public function getAmountVerified()
    {
        return $this->amountVerified;
    }

    /**
     * Set unitValue
     *
     * @param string $unitValue
     *
     * @return BankingUnit
     */
    public function setUnitValue($unitValue)
    {
        $this->unitValue = $unitValue;

        return $this;
    }

    /**
     * Get unitValue
     *
     * @return string
     */
    public function getUnitValue()
    {
        return $this->unitValue;
    }

    /**
     * Set bank
     *
     * @param string $bank
     *
     * @return BankingUnit
     */
    public function setBank($bank)
    {
        $this->bank = $bank;

        return $this;
    }

    /**
     * Get bank
     *
     * @return string
     */
    public function getBank()
    {
        return $this->bank;
    }

    /**
     * Set branch
     *
     * @param string $branch
     *
     * @return BankingUnit
     */
    public function setBranch($branch)
    {
        $this->branch = $branch;

        return $this;
    }

    /**
     * Get branch
     *
     * @return string
     */
    public function getBranch()
    {
        return $this->branch;
    }

    /**
     * Set account
     *
     * @param string $account
     *
     * @return BankingUnit
     */
    public function setAccount($account)
    {
        $this->account = $account;

        return $this;
    }

    /**
     * Get account
     *
     * @return string
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * Set checkNumber
     *
     * @param string $checkNumber
     *
     * @return BankingUnit
     */
    public function setCheckNumber($checkNumber)
    {
        $this->checkNumber = $checkNumber;

        return $this;
    }

    /**
     * Get checkNumber
     *
     * @return string
     */
    public function getCheckNumber()
    {
        return $this->checkNumber;
    }

    /**
     * Set cmc7
     *
     * @param string $cmc7
     *
     * @return BankingUnit
     */
    public function setCmc7($cmc7)
    {
        $this->cmc7 = $cmc7;

        return $this;
    }

    /**
     * Get cmc7
     *
     * @return string
     */
    public function getCmc7()
    {
        return $this->cmc7;
    }

    /**
     * Set cardNumber
     *
     * @param string $cardNumber
     *
     * @return BankingUnit
     */
    public function setCardNumber($cardNumber)
    {
        $this->cardNumber = $cardNumber;

        return $this;
    }

    /**
     * Get cardNumber
     *
     * @return string
     */
    public function getCardNumber()
    {
        return $this->cardNumber;
    }

    /**
     * Set dateDue
     *
     * @param \DateTime $dateDue
     *
     * @return BankingUnit
     */
    public function setDateDue($dateDue)
    {
        $this->dateDue = $dateDue;

        return $this;
    }

    /**
     * Get dateDue
     *
     * @return \DateTime
     */
    public function getDateDue()
    {
        return $this->dateDue;
    }

    /**
     * Set cashierKey
     *
     * @param integer $cashierKey
     *
     * @return BankingUnit
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
     * @return BankingUnit
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
     * Set verifierKey
     *
     * @param integer $verifierKey
     *
     * @return BankingUnit
     */
    public function setVerifierKey($verifierKey)
    {
        $this->verifierKey = $verifierKey;

        return $this;
    }

    /**
     * Get verifierKey
     *
     * @return integer
     */
    public function getVerifierKey()
    {
        return $this->verifierKey;
    }

    /**
     * Set extendedMediaId
     *
     * @param integer $extendedMediaId
     *
     * @return BankingUnit
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

    /**
     * Set pickupTransactionNumber
     *
     * @param integer $pickupTransactionNumber
     *
     * @return BankingUnit
     */
    public function setPickupTransactionNumber($pickupTransactionNumber)
    {
        $this->pickupTransactionNumber = $pickupTransactionNumber;

        return $this;
    }

    /**
     * Get pickupTransactionNumber
     *
     * @return integer
     */
    public function getPickupTransactionNumber()
    {
        return $this->pickupTransactionNumber;
    }
}

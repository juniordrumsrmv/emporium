<?php

namespace Emporium\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CashierMedia
 *
 * @ORM\Table(name="cashier_media")
 * @ORM\Entity
 */
class CashierMedia
{
    /**
     * @var integer
     *
     * @ORM\Column(name="agent_key", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $agentKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="media_key", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $mediaKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="qty_entered", type="bigint", nullable=false)
     */
    private $qtyEntered;

    /**
     * @var integer
     *
     * @ORM\Column(name="qty_voided", type="bigint", nullable=false)
     */
    private $qtyVoided;

    /**
     * @var integer
     *
     * @ORM\Column(name="qty_loan", type="bigint", nullable=false)
     */
    private $qtyLoan;

    /**
     * @var integer
     *
     * @ORM\Column(name="qty_pickup", type="bigint", nullable=false)
     */
    private $qtyPickup;

    /**
     * @var string
     *
     * @ORM\Column(name="amount_entered", type="decimal", precision=15, scale=3, nullable=false)
     */
    private $amountEntered;

    /**
     * @var string
     *
     * @ORM\Column(name="amount_voided", type="decimal", precision=15, scale=3, nullable=false)
     */
    private $amountVoided;

    /**
     * @var string
     *
     * @ORM\Column(name="amount_loan", type="decimal", precision=15, scale=3, nullable=false)
     */
    private $amountLoan;

    /**
     * @var string
     *
     * @ORM\Column(name="amount_pickup", type="decimal", precision=15, scale=3, nullable=false)
     */
    private $amountPickup;



    /**
     * Set agentKey
     *
     * @param integer $agentKey
     *
     * @return CashierMedia
     */
    public function setAgentKey($agentKey)
    {
        $this->agentKey = $agentKey;

        return $this;
    }

    /**
     * Get agentKey
     *
     * @return integer
     */
    public function getAgentKey()
    {
        return $this->agentKey;
    }

    /**
     * Set mediaKey
     *
     * @param integer $mediaKey
     *
     * @return CashierMedia
     */
    public function setMediaKey($mediaKey)
    {
        $this->mediaKey = $mediaKey;

        return $this;
    }

    /**
     * Get mediaKey
     *
     * @return integer
     */
    public function getMediaKey()
    {
        return $this->mediaKey;
    }

    /**
     * Set qtyEntered
     *
     * @param integer $qtyEntered
     *
     * @return CashierMedia
     */
    public function setQtyEntered($qtyEntered)
    {
        $this->qtyEntered = $qtyEntered;

        return $this;
    }

    /**
     * Get qtyEntered
     *
     * @return integer
     */
    public function getQtyEntered()
    {
        return $this->qtyEntered;
    }

    /**
     * Set qtyVoided
     *
     * @param integer $qtyVoided
     *
     * @return CashierMedia
     */
    public function setQtyVoided($qtyVoided)
    {
        $this->qtyVoided = $qtyVoided;

        return $this;
    }

    /**
     * Get qtyVoided
     *
     * @return integer
     */
    public function getQtyVoided()
    {
        return $this->qtyVoided;
    }

    /**
     * Set qtyLoan
     *
     * @param integer $qtyLoan
     *
     * @return CashierMedia
     */
    public function setQtyLoan($qtyLoan)
    {
        $this->qtyLoan = $qtyLoan;

        return $this;
    }

    /**
     * Get qtyLoan
     *
     * @return integer
     */
    public function getQtyLoan()
    {
        return $this->qtyLoan;
    }

    /**
     * Set qtyPickup
     *
     * @param integer $qtyPickup
     *
     * @return CashierMedia
     */
    public function setQtyPickup($qtyPickup)
    {
        $this->qtyPickup = $qtyPickup;

        return $this;
    }

    /**
     * Get qtyPickup
     *
     * @return integer
     */
    public function getQtyPickup()
    {
        return $this->qtyPickup;
    }

    /**
     * Set amountEntered
     *
     * @param string $amountEntered
     *
     * @return CashierMedia
     */
    public function setAmountEntered($amountEntered)
    {
        $this->amountEntered = $amountEntered;

        return $this;
    }

    /**
     * Get amountEntered
     *
     * @return string
     */
    public function getAmountEntered()
    {
        return $this->amountEntered;
    }

    /**
     * Set amountVoided
     *
     * @param string $amountVoided
     *
     * @return CashierMedia
     */
    public function setAmountVoided($amountVoided)
    {
        $this->amountVoided = $amountVoided;

        return $this;
    }

    /**
     * Get amountVoided
     *
     * @return string
     */
    public function getAmountVoided()
    {
        return $this->amountVoided;
    }

    /**
     * Set amountLoan
     *
     * @param string $amountLoan
     *
     * @return CashierMedia
     */
    public function setAmountLoan($amountLoan)
    {
        $this->amountLoan = $amountLoan;

        return $this;
    }

    /**
     * Get amountLoan
     *
     * @return string
     */
    public function getAmountLoan()
    {
        return $this->amountLoan;
    }

    /**
     * Set amountPickup
     *
     * @param string $amountPickup
     *
     * @return CashierMedia
     */
    public function setAmountPickup($amountPickup)
    {
        $this->amountPickup = $amountPickup;

        return $this;
    }

    /**
     * Get amountPickup
     *
     * @return string
     */
    public function getAmountPickup()
    {
        return $this->amountPickup;
    }
}

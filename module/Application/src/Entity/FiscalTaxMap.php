<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FiscalTaxMap
 *
 * @ORM\Table(name="fiscal_tax_map", uniqueConstraints={@ORM\UniqueConstraint(name="index_ecf_taxmap", columns={"store_key", "fiscal_date", "ecf_number", "ticket_number", "pos_id"})})
 * @ORM\Entity
 */
class FiscalTaxMap
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
     * @ORM\Column(name="ticket_number", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ticketNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="pos_id", type="string", length=4, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $posId;

    /**
     * @var string
     *
     * @ORM\Column(name="amount", type="decimal", precision=15, scale=3, nullable=false)
     */
    private $amount;

    /**
     * @var string
     *
     * @ORM\Column(name="tax_amount", type="decimal", precision=15, scale=3, nullable=false)
     */
    private $taxAmount;

    /**
     * @var string
     *
     * @ORM\Column(name="tax_percent", type="decimal", precision=6, scale=3, nullable=false)
     */
    private $taxPercent;

    /**
     * @var integer
     *
     * @ORM\Column(name="ecf_number", type="smallint", nullable=false)
     */
    private $ecfNumber;



    /**
     * Set storeKey
     *
     * @param integer $storeKey
     *
     * @return FiscalTaxMap
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
     * @return FiscalTaxMap
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
     * @return FiscalTaxMap
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
     * @return FiscalTaxMap
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
     * Set posId
     *
     * @param string $posId
     *
     * @return FiscalTaxMap
     */
    public function setPosId($posId)
    {
        $this->posId = $posId;

        return $this;
    }

    /**
     * Get posId
     *
     * @return string
     */
    public function getPosId()
    {
        return $this->posId;
    }

    /**
     * Set amount
     *
     * @param string $amount
     *
     * @return FiscalTaxMap
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
     * Set taxAmount
     *
     * @param string $taxAmount
     *
     * @return FiscalTaxMap
     */
    public function setTaxAmount($taxAmount)
    {
        $this->taxAmount = $taxAmount;

        return $this;
    }

    /**
     * Get taxAmount
     *
     * @return string
     */
    public function getTaxAmount()
    {
        return $this->taxAmount;
    }

    /**
     * Set taxPercent
     *
     * @param string $taxPercent
     *
     * @return FiscalTaxMap
     */
    public function setTaxPercent($taxPercent)
    {
        $this->taxPercent = $taxPercent;

        return $this;
    }

    /**
     * Get taxPercent
     *
     * @return string
     */
    public function getTaxPercent()
    {
        return $this->taxPercent;
    }

    /**
     * Set ecfNumber
     *
     * @param integer $ecfNumber
     *
     * @return FiscalTaxMap
     */
    public function setEcfNumber($ecfNumber)
    {
        $this->ecfNumber = $ecfNumber;

        return $this;
    }

    /**
     * Get ecfNumber
     *
     * @return integer
     */
    public function getEcfNumber()
    {
        return $this->ecfNumber;
    }
}

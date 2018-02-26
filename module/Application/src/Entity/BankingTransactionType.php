<?php

namespace Emporium\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BankingTransactionType
 *
 * @ORM\Table(name="banking_transaction_type")
 * @ORM\Entity
 */
class BankingTransactionType
{
    /**
     * @var integer
     *
     * @ORM\Column(name="transaction_type_key", type="smallint", nullable=false)
     * @ORM\Id
     */
    private $transactionTypeKey;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=128, nullable=true)
     */
    private $description;

    /**
     * @var boolean
     *
     * @ORM\Column(name="type", type="boolean", nullable=true)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="observation", type="text", length=65535, nullable=true)
     */
    private $observation;



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
     * @return BankingTransactionType
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
     * Set type
     *
     * @param boolean $type
     *
     * @return BankingTransactionType
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
     * Set observation
     *
     * @param string $observation
     *
     * @return BankingTransactionType
     */
    public function setObservation($observation)
    {
        $this->observation = $observation;

        return $this;
    }

    /**
     * Get observation
     *
     * @return string
     */
    public function getObservation()
    {
        return $this->observation;
    }
}

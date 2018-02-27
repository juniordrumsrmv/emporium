<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PluStoreLabel
 *
 * @ORM\Table(name="plu_store_label", uniqueConstraints={@ORM\UniqueConstraint(name="index_label", columns={"store_key", "plu_key", "label_type", "label_address"})})
 * @ORM\Entity
 */
class PluStoreLabel
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
     * @ORM\Column(name="plu_key", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $pluKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="label_type", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $labelType;

    /**
     * @var string
     *
     * @ORM\Column(name="label_address", type="string", length=30, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $labelAddress;

    /**
     * @var integer
     *
     * @ORM\Column(name="label_count", type="integer", nullable=true)
     */
    private $labelCount;



    /**
     * Set storeKey
     *
     * @param integer $storeKey
     *
     * @return PluStoreLabel
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
     * Set pluKey
     *
     * @param integer $pluKey
     *
     * @return PluStoreLabel
     */
    public function setPluKey($pluKey)
    {
        $this->pluKey = $pluKey;

        return $this;
    }

    /**
     * Get pluKey
     *
     * @return integer
     */
    public function getPluKey()
    {
        return $this->pluKey;
    }

    /**
     * Set labelType
     *
     * @param integer $labelType
     *
     * @return PluStoreLabel
     */
    public function setLabelType($labelType)
    {
        $this->labelType = $labelType;

        return $this;
    }

    /**
     * Get labelType
     *
     * @return integer
     */
    public function getLabelType()
    {
        return $this->labelType;
    }

    /**
     * Set labelAddress
     *
     * @param string $labelAddress
     *
     * @return PluStoreLabel
     */
    public function setLabelAddress($labelAddress)
    {
        $this->labelAddress = $labelAddress;

        return $this;
    }

    /**
     * Get labelAddress
     *
     * @return string
     */
    public function getLabelAddress()
    {
        return $this->labelAddress;
    }

    /**
     * Set labelCount
     *
     * @param integer $labelCount
     *
     * @return PluStoreLabel
     */
    public function setLabelCount($labelCount)
    {
        $this->labelCount = $labelCount;

        return $this;
    }

    /**
     * Get labelCount
     *
     * @return integer
     */
    public function getLabelCount()
    {
        return $this->labelCount;
    }
}

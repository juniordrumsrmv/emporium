<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PluExtra
 *
 * @ORM\Table(name="plu_extra")
 * @ORM\Entity
 */
class PluExtra
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
     * @var string
     *
     * @ORM\Column(name="extra_key", type="string", length=12, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $extraKey;

    /**
     * @var string
     *
     * @ORM\Column(name="extra_value", type="string", length=128, nullable=true)
     */
    private $extraValue;



    /**
     * Set storeKey
     *
     * @param integer $storeKey
     *
     * @return PluExtra
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
     * @return PluExtra
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
     * Set extraKey
     *
     * @param string $extraKey
     *
     * @return PluExtra
     */
    public function setExtraKey($extraKey)
    {
        $this->extraKey = $extraKey;

        return $this;
    }

    /**
     * Get extraKey
     *
     * @return string
     */
    public function getExtraKey()
    {
        return $this->extraKey;
    }

    /**
     * Set extraValue
     *
     * @param string $extraValue
     *
     * @return PluExtra
     */
    public function setExtraValue($extraValue)
    {
        $this->extraValue = $extraValue;

        return $this;
    }

    /**
     * Get extraValue
     *
     * @return string
     */
    public function getExtraValue()
    {
        return $this->extraValue;
    }
}

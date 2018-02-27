<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Parameter
 *
 * @ORM\Table(name="parameter")
 * @ORM\Entity
 */
class Parameter
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
     * @var string
     *
     * @ORM\Column(name="prm_id", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $prmId;

    /**
     * @var string
     *
     * @ORM\Column(name="prm_value", type="string", length=255, nullable=true)
     */
    private $prmValue;



    /**
     * Set storeKey
     *
     * @param integer $storeKey
     *
     * @return Parameter
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
     * Set prmId
     *
     * @param string $prmId
     *
     * @return Parameter
     */
    public function setPrmId($prmId)
    {
        $this->prmId = $prmId;

        return $this;
    }

    /**
     * Get prmId
     *
     * @return string
     */
    public function getPrmId()
    {
        return $this->prmId;
    }

    /**
     * Set prmValue
     *
     * @param string $prmValue
     *
     * @return Parameter
     */
    public function setPrmValue($prmValue)
    {
        $this->prmValue = $prmValue;

        return $this;
    }

    /**
     * Get prmValue
     *
     * @return string
     */
    public function getPrmValue()
    {
        return $this->prmValue;
    }
}

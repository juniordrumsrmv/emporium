<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ReasonStore
 *
 * @ORM\Table(name="reason_store")
 * @ORM\Entity
 */
class ReasonStore
{
    /**
     * @var integer
     *
     * @ORM\Column(name="reason_type_key", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $reasonTypeKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="store_key", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $storeKey;



    /**
     * Set reasonTypeKey
     *
     * @param integer $reasonTypeKey
     *
     * @return ReasonStore
     */
    public function setReasonTypeKey($reasonTypeKey)
    {
        $this->reasonTypeKey = $reasonTypeKey;

        return $this;
    }

    /**
     * Get reasonTypeKey
     *
     * @return integer
     */
    public function getReasonTypeKey()
    {
        return $this->reasonTypeKey;
    }

    /**
     * Set storeKey
     *
     * @param integer $storeKey
     *
     * @return ReasonStore
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
}

<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PollStore
 *
 * @ORM\Table(name="poll_store")
 * @ORM\Entity
 */
class PollStore
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
     * @ORM\Column(name="poll_key", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $pollKey;



    /**
     * Set storeKey
     *
     * @param integer $storeKey
     *
     * @return PollStore
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
     * Set pollKey
     *
     * @param integer $pollKey
     *
     * @return PollStore
     */
    public function setPollKey($pollKey)
    {
        $this->pollKey = $pollKey;

        return $this;
    }

    /**
     * Get pollKey
     *
     * @return integer
     */
    public function getPollKey()
    {
        return $this->pollKey;
    }
}

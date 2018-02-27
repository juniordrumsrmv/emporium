<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FarmServerStore
 *
 * @ORM\Table(name="farm_server_store")
 * @ORM\Entity
 */
class FarmServerStore
{
    /**
     * @var integer
     *
     * @ORM\Column(name="farm_server_key", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $farmServerKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="store_key", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $storeKey;



    /**
     * Set farmServerKey
     *
     * @param integer $farmServerKey
     *
     * @return FarmServerStore
     */
    public function setFarmServerKey($farmServerKey)
    {
        $this->farmServerKey = $farmServerKey;

        return $this;
    }

    /**
     * Get farmServerKey
     *
     * @return integer
     */
    public function getFarmServerKey()
    {
        return $this->farmServerKey;
    }

    /**
     * Set storeKey
     *
     * @param integer $storeKey
     *
     * @return FarmServerStore
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

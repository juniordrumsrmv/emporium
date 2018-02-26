<?php

namespace Emporium\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PluPack
 *
 * @ORM\Table(name="plu_pack")
 * @ORM\Entity
 */
class PluPack
{
    /**
     * @var integer
     *
     * @ORM\Column(name="store_key", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $storeKey = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="plu_key_main", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $pluKeyMain;

    /**
     * @var integer
     *
     * @ORM\Column(name="plu_key", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $pluKey;



    /**
     * Set storeKey
     *
     * @param integer $storeKey
     *
     * @return PluPack
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
     * Set pluKeyMain
     *
     * @param integer $pluKeyMain
     *
     * @return PluPack
     */
    public function setPluKeyMain($pluKeyMain)
    {
        $this->pluKeyMain = $pluKeyMain;

        return $this;
    }

    /**
     * Get pluKeyMain
     *
     * @return integer
     */
    public function getPluKeyMain()
    {
        return $this->pluKeyMain;
    }

    /**
     * Set pluKey
     *
     * @param integer $pluKey
     *
     * @return PluPack
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
}

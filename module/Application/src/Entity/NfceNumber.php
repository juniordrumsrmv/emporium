<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NfceNumber
 *
 * @ORM\Table(name="nfce_number")
 * @ORM\Entity
 */
class NfceNumber
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
     * @ORM\Column(name="pos_number", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $posNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="nf_number", type="bigint", nullable=false)
     */
    private $nfNumber;



    /**
     * Set storeKey
     *
     * @param integer $storeKey
     *
     * @return NfceNumber
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
     * Set posNumber
     *
     * @param integer $posNumber
     *
     * @return NfceNumber
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
     * Set nfNumber
     *
     * @param integer $nfNumber
     *
     * @return NfceNumber
     */
    public function setNfNumber($nfNumber)
    {
        $this->nfNumber = $nfNumber;

        return $this;
    }

    /**
     * Get nfNumber
     *
     * @return integer
     */
    public function getNfNumber()
    {
        return $this->nfNumber;
    }
}

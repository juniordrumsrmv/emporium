<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NcmCest
 *
 * @ORM\Table(name="ncm_cest")
 * @ORM\Entity
 */
class NcmCest
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ncm_key", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ncmKey;

    /**
     * @var string
     *
     * @ORM\Column(name="cest_code", type="string", length=12, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $cestCode;



    /**
     * Set ncmKey
     *
     * @param integer $ncmKey
     *
     * @return NcmCest
     */
    public function setNcmKey($ncmKey)
    {
        $this->ncmKey = $ncmKey;

        return $this;
    }

    /**
     * Get ncmKey
     *
     * @return integer
     */
    public function getNcmKey()
    {
        return $this->ncmKey;
    }

    /**
     * Set cestCode
     *
     * @param string $cestCode
     *
     * @return NcmCest
     */
    public function setCestCode($cestCode)
    {
        $this->cestCode = $cestCode;

        return $this;
    }

    /**
     * Get cestCode
     *
     * @return string
     */
    public function getCestCode()
    {
        return $this->cestCode;
    }
}

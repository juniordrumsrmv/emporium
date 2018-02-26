<?php

namespace Emporium\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BinType
 *
 * @ORM\Table(name="bin_type")
 * @ORM\Entity
 */
class BinType
{
    /**
     * @var integer
     *
     * @ORM\Column(name="bin_key", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $binKey;

    /**
     * @var string
     *
     * @ORM\Column(name="bin_name", type="string", length=30, nullable=true)
     */
    private $binName;

    /**
     * @var integer
     *
     * @ORM\Column(name="acquirr_key", type="smallint", nullable=false)
     */
    private $acquirrKey;



    /**
     * Get binKey
     *
     * @return integer
     */
    public function getBinKey()
    {
        return $this->binKey;
    }

    /**
     * Set binName
     *
     * @param string $binName
     *
     * @return BinType
     */
    public function setBinName($binName)
    {
        $this->binName = $binName;

        return $this;
    }

    /**
     * Get binName
     *
     * @return string
     */
    public function getBinName()
    {
        return $this->binName;
    }

    /**
     * Set acquirrKey
     *
     * @param integer $acquirrKey
     *
     * @return BinType
     */
    public function setAcquirrKey($acquirrKey)
    {
        $this->acquirrKey = $acquirrKey;

        return $this;
    }

    /**
     * Get acquirrKey
     *
     * @return integer
     */
    public function getAcquirrKey()
    {
        return $this->acquirrKey;
    }
}

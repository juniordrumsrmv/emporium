<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AcquirrType
 *
 * @ORM\Table(name="acquirr_type")
 * @ORM\Entity
 */
class AcquirrType
{
    /**
     * @var integer
     *
     * @ORM\Column(name="acquirr_key", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $acquirrKey;

    /**
     * @var string
     *
     * @ORM\Column(name="acquirr_name", type="string", length=30, nullable=true)
     */
    private $acquirrName;



    /**
     * Get acquirrKey
     *
     * @return integer
     */
    public function getAcquirrKey()
    {
        return $this->acquirrKey;
    }

    /**
     * Set acquirrName
     *
     * @param string $acquirrName
     *
     * @return AcquirrType
     */
    public function setAcquirrName($acquirrName)
    {
        $this->acquirrName = $acquirrName;

        return $this;
    }

    /**
     * Get acquirrName
     *
     * @return string
     */
    public function getAcquirrName()
    {
        return $this->acquirrName;
    }
}

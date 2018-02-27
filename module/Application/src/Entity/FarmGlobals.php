<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FarmGlobals
 *
 * @ORM\Table(name="farm_globals")
 * @ORM\Entity
 */
class FarmGlobals
{
    /**
     * @var integer
     *
     * @ORM\Column(name="farm_delay", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $farmDelay;



    /**
     * Get farmDelay
     *
     * @return integer
     */
    public function getFarmDelay()
    {
        return $this->farmDelay;
    }
}

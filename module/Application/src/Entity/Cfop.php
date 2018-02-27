<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cfop
 *
 * @ORM\Table(name="cfop")
 * @ORM\Entity
 */
class Cfop
{
    /**
     * @var integer
     *
     * @ORM\Column(name="cfop_from", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $cfopFrom;

    /**
     * @var integer
     *
     * @ORM\Column(name="cfop_to", type="integer", nullable=false)
     */
    private $cfopTo;

    /**
     * @var string
     *
     * @ORM\Column(name="cfop_desc", type="string", length=50, nullable=true)
     */
    private $cfopDesc;



    /**
     * Get cfopFrom
     *
     * @return integer
     */
    public function getCfopFrom()
    {
        return $this->cfopFrom;
    }

    /**
     * Set cfopTo
     *
     * @param integer $cfopTo
     *
     * @return Cfop
     */
    public function setCfopTo($cfopTo)
    {
        $this->cfopTo = $cfopTo;

        return $this;
    }

    /**
     * Get cfopTo
     *
     * @return integer
     */
    public function getCfopTo()
    {
        return $this->cfopTo;
    }

    /**
     * Set cfopDesc
     *
     * @param string $cfopDesc
     *
     * @return Cfop
     */
    public function setCfopDesc($cfopDesc)
    {
        $this->cfopDesc = $cfopDesc;

        return $this;
    }

    /**
     * Get cfopDesc
     *
     * @return string
     */
    public function getCfopDesc()
    {
        return $this->cfopDesc;
    }
}

<?php

namespace Emporium\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EcfMaker
 *
 * @ORM\Table(name="ecf_maker")
 * @ORM\Entity
 */
class EcfMaker
{
    /**
     * @var string
     *
     * @ORM\Column(name="ecf_manufacturer", type="string", length=40, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ecfManufacturer;

    /**
     * @var string
     *
     * @ORM\Column(name="code_ff", type="string", length=4, nullable=false)
     */
    private $codeFf;



    /**
     * Get ecfManufacturer
     *
     * @return string
     */
    public function getEcfManufacturer()
    {
        return $this->ecfManufacturer;
    }

    /**
     * Set codeFf
     *
     * @param string $codeFf
     *
     * @return EcfMaker
     */
    public function setCodeFf($codeFf)
    {
        $this->codeFf = $codeFf;

        return $this;
    }

    /**
     * Get codeFf
     *
     * @return string
     */
    public function getCodeFf()
    {
        return $this->codeFf;
    }
}

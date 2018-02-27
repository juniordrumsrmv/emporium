<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EcfModel
 *
 * @ORM\Table(name="ecf_model", indexes={@ORM\Index(name="index_ecf_model", columns={"ecf_model"})})
 * @ORM\Entity
 */
class EcfModel
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
     * @ORM\Column(name="ecf_model", type="string", length=40, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ecfModel;

    /**
     * @var string
     *
     * @ORM\Column(name="code_m", type="string", length=2, nullable=false)
     */
    private $codeM;



    /**
     * Set ecfManufacturer
     *
     * @param string $ecfManufacturer
     *
     * @return EcfModel
     */
    public function setEcfManufacturer($ecfManufacturer)
    {
        $this->ecfManufacturer = $ecfManufacturer;

        return $this;
    }

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
     * Set ecfModel
     *
     * @param string $ecfModel
     *
     * @return EcfModel
     */
    public function setEcfModel($ecfModel)
    {
        $this->ecfModel = $ecfModel;

        return $this;
    }

    /**
     * Get ecfModel
     *
     * @return string
     */
    public function getEcfModel()
    {
        return $this->ecfModel;
    }

    /**
     * Set codeM
     *
     * @param string $codeM
     *
     * @return EcfModel
     */
    public function setCodeM($codeM)
    {
        $this->codeM = $codeM;

        return $this;
    }

    /**
     * Get codeM
     *
     * @return string
     */
    public function getCodeM()
    {
        return $this->codeM;
    }
}

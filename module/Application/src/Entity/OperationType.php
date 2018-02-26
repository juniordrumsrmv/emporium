<?php

namespace Emporium\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OperationType
 *
 * @ORM\Table(name="operation_type")
 * @ORM\Entity
 */
class OperationType
{
    /**
     * @var integer
     *
     * @ORM\Column(name="operation_type_key", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $operationTypeKey;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=128, nullable=true)
     */
    private $description;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ope_type", type="boolean", nullable=true)
     */
    private $opeType;

    /**
     * @var string
     *
     * @ORM\Column(name="observation", type="text", length=65535, nullable=true)
     */
    private $observation;

    /**
     * @var boolean
     *
     * @ORM\Column(name="op_signal", type="boolean", nullable=true)
     */
    private $opSignal;

    /**
     * @var boolean
     *
     * @ORM\Column(name="op_export", type="boolean", nullable=true)
     */
    private $opExport;



    /**
     * Get operationTypeKey
     *
     * @return integer
     */
    public function getOperationTypeKey()
    {
        return $this->operationTypeKey;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return OperationType
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set opeType
     *
     * @param boolean $opeType
     *
     * @return OperationType
     */
    public function setOpeType($opeType)
    {
        $this->opeType = $opeType;

        return $this;
    }

    /**
     * Get opeType
     *
     * @return boolean
     */
    public function getOpeType()
    {
        return $this->opeType;
    }

    /**
     * Set observation
     *
     * @param string $observation
     *
     * @return OperationType
     */
    public function setObservation($observation)
    {
        $this->observation = $observation;

        return $this;
    }

    /**
     * Get observation
     *
     * @return string
     */
    public function getObservation()
    {
        return $this->observation;
    }

    /**
     * Set opSignal
     *
     * @param boolean $opSignal
     *
     * @return OperationType
     */
    public function setOpSignal($opSignal)
    {
        $this->opSignal = $opSignal;

        return $this;
    }

    /**
     * Get opSignal
     *
     * @return boolean
     */
    public function getOpSignal()
    {
        return $this->opSignal;
    }

    /**
     * Set opExport
     *
     * @param boolean $opExport
     *
     * @return OperationType
     */
    public function setOpExport($opExport)
    {
        $this->opExport = $opExport;

        return $this;
    }

    /**
     * Get opExport
     *
     * @return boolean
     */
    public function getOpExport()
    {
        return $this->opExport;
    }
}

<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comparison
 *
 * @ORM\Table(name="comparison")
 * @ORM\Entity
 */
class Comparison
{
    /**
     * @var integer
     *
     * @ORM\Column(name="type", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=64, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $label;

    /**
     * @var string
     *
     * @ORM\Column(name="f1_data", type="string", length=80, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $f1Data;

    /**
     * @var string
     *
     * @ORM\Column(name="to_data", type="string", length=80, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $toData;

    /**
     * @var string
     *
     * @ORM\Column(name="f2_data", type="string", length=80, nullable=true)
     */
    private $f2Data;

    /**
     * @var string
     *
     * @ORM\Column(name="f3_data", type="string", length=80, nullable=true)
     */
    private $f3Data;

    /**
     * @var string
     *
     * @ORM\Column(name="f4_data", type="string", length=80, nullable=true)
     */
    private $f4Data;

    /**
     * @var string
     *
     * @ORM\Column(name="f5_data", type="string", length=80, nullable=true)
     */
    private $f5Data;



    /**
     * Set type
     *
     * @param integer $type
     *
     * @return Comparison
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return integer
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set label
     *
     * @param string $label
     *
     * @return Comparison
     */
    public function setLabel($label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * Get label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Set f1Data
     *
     * @param string $f1Data
     *
     * @return Comparison
     */
    public function setF1Data($f1Data)
    {
        $this->f1Data = $f1Data;

        return $this;
    }

    /**
     * Get f1Data
     *
     * @return string
     */
    public function getF1Data()
    {
        return $this->f1Data;
    }

    /**
     * Set toData
     *
     * @param string $toData
     *
     * @return Comparison
     */
    public function setToData($toData)
    {
        $this->toData = $toData;

        return $this;
    }

    /**
     * Get toData
     *
     * @return string
     */
    public function getToData()
    {
        return $this->toData;
    }

    /**
     * Set f2Data
     *
     * @param string $f2Data
     *
     * @return Comparison
     */
    public function setF2Data($f2Data)
    {
        $this->f2Data = $f2Data;

        return $this;
    }

    /**
     * Get f2Data
     *
     * @return string
     */
    public function getF2Data()
    {
        return $this->f2Data;
    }

    /**
     * Set f3Data
     *
     * @param string $f3Data
     *
     * @return Comparison
     */
    public function setF3Data($f3Data)
    {
        $this->f3Data = $f3Data;

        return $this;
    }

    /**
     * Get f3Data
     *
     * @return string
     */
    public function getF3Data()
    {
        return $this->f3Data;
    }

    /**
     * Set f4Data
     *
     * @param string $f4Data
     *
     * @return Comparison
     */
    public function setF4Data($f4Data)
    {
        $this->f4Data = $f4Data;

        return $this;
    }

    /**
     * Get f4Data
     *
     * @return string
     */
    public function getF4Data()
    {
        return $this->f4Data;
    }

    /**
     * Set f5Data
     *
     * @param string $f5Data
     *
     * @return Comparison
     */
    public function setF5Data($f5Data)
    {
        $this->f5Data = $f5Data;

        return $this;
    }

    /**
     * Get f5Data
     *
     * @return string
     */
    public function getF5Data()
    {
        return $this->f5Data;
    }
}

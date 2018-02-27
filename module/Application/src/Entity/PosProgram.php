<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PosProgram
 *
 * @ORM\Table(name="pos_program")
 * @ORM\Entity
 */
class PosProgram
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
     * @var string
     *
     * @ORM\Column(name="program_id", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $programId;

    /**
     * @var string
     *
     * @ORM\Column(name="program_version", type="string", length=255, nullable=true)
     */
    private $programVersion;

    /**
     * @var string
     *
     * @ORM\Column(name="program_version_line", type="string", length=255, nullable=true)
     */
    private $programVersionLine;

    /**
     * @var string
     *
     * @ORM\Column(name="program_executable", type="string", length=255, nullable=true)
     */
    private $programExecutable;



    /**
     * Set storeKey
     *
     * @param integer $storeKey
     *
     * @return PosProgram
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
     * @return PosProgram
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
     * Set programId
     *
     * @param string $programId
     *
     * @return PosProgram
     */
    public function setProgramId($programId)
    {
        $this->programId = $programId;

        return $this;
    }

    /**
     * Get programId
     *
     * @return string
     */
    public function getProgramId()
    {
        return $this->programId;
    }

    /**
     * Set programVersion
     *
     * @param string $programVersion
     *
     * @return PosProgram
     */
    public function setProgramVersion($programVersion)
    {
        $this->programVersion = $programVersion;

        return $this;
    }

    /**
     * Get programVersion
     *
     * @return string
     */
    public function getProgramVersion()
    {
        return $this->programVersion;
    }

    /**
     * Set programVersionLine
     *
     * @param string $programVersionLine
     *
     * @return PosProgram
     */
    public function setProgramVersionLine($programVersionLine)
    {
        $this->programVersionLine = $programVersionLine;

        return $this;
    }

    /**
     * Get programVersionLine
     *
     * @return string
     */
    public function getProgramVersionLine()
    {
        return $this->programVersionLine;
    }

    /**
     * Set programExecutable
     *
     * @param string $programExecutable
     *
     * @return PosProgram
     */
    public function setProgramExecutable($programExecutable)
    {
        $this->programExecutable = $programExecutable;

        return $this;
    }

    /**
     * Get programExecutable
     *
     * @return string
     */
    public function getProgramExecutable()
    {
        return $this->programExecutable;
    }
}

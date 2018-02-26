<?php

namespace Emporium\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ReasonType
 *
 * @ORM\Table(name="reason_type")
 * @ORM\Entity
 */
class ReasonType
{
    /**
     * @var integer
     *
     * @ORM\Column(name="reason_type_key", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $reasonTypeKey;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="reason_command", type="bigint", nullable=false)
     */
    private $reasonCommand;

    /**
     * @var integer
     *
     * @ORM\Column(name="store_key", type="bigint", nullable=true)
     */
    private $storeKey;



    /**
     * Get reasonTypeKey
     *
     * @return integer
     */
    public function getReasonTypeKey()
    {
        return $this->reasonTypeKey;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return ReasonType
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
     * Set reasonCommand
     *
     * @param integer $reasonCommand
     *
     * @return ReasonType
     */
    public function setReasonCommand($reasonCommand)
    {
        $this->reasonCommand = $reasonCommand;

        return $this;
    }

    /**
     * Get reasonCommand
     *
     * @return integer
     */
    public function getReasonCommand()
    {
        return $this->reasonCommand;
    }

    /**
     * Set storeKey
     *
     * @param integer $storeKey
     *
     * @return ReasonType
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
}

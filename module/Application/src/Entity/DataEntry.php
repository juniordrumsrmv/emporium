<?php

namespace Emporium\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DataEntry
 *
 * @ORM\Table(name="data_entry")
 * @ORM\Entity
 */
class DataEntry
{
    /**
     * @var integer
     *
     * @ORM\Column(name="data_entry_key", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $dataEntryKey;

    /**
     * @var string
     *
     * @ORM\Column(name="initial_prompt", type="string", length=80, nullable=true)
     */
    private $initialPrompt;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=true)
     */
    private $name;



    /**
     * Get dataEntryKey
     *
     * @return integer
     */
    public function getDataEntryKey()
    {
        return $this->dataEntryKey;
    }

    /**
     * Set initialPrompt
     *
     * @param string $initialPrompt
     *
     * @return DataEntry
     */
    public function setInitialPrompt($initialPrompt)
    {
        $this->initialPrompt = $initialPrompt;

        return $this;
    }

    /**
     * Get initialPrompt
     *
     * @return string
     */
    public function getInitialPrompt()
    {
        return $this->initialPrompt;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return DataEntry
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}

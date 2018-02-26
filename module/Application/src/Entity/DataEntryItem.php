<?php

namespace Emporium\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DataEntryItem
 *
 * @ORM\Table(name="data_entry_item")
 * @ORM\Entity
 */
class DataEntryItem
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
     * @var integer
     *
     * @ORM\Column(name="data_entry_item_key", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $dataEntryItemKey;

    /**
     * @var string
     *
     * @ORM\Column(name="prompt", type="string", length=80, nullable=true)
     */
    private $prompt;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=1, nullable=true)
     */
    private $type;

    /**
     * @var integer
     *
     * @ORM\Column(name="minimum", type="bigint", nullable=true)
     */
    private $minimum;

    /**
     * @var integer
     *
     * @ORM\Column(name="maximum", type="bigint", nullable=true)
     */
    private $maximum;

    /**
     * @var boolean
     *
     * @ORM\Column(name="required", type="boolean", nullable=true)
     */
    private $required;



    /**
     * Set dataEntryKey
     *
     * @param integer $dataEntryKey
     *
     * @return DataEntryItem
     */
    public function setDataEntryKey($dataEntryKey)
    {
        $this->dataEntryKey = $dataEntryKey;

        return $this;
    }

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
     * Set dataEntryItemKey
     *
     * @param integer $dataEntryItemKey
     *
     * @return DataEntryItem
     */
    public function setDataEntryItemKey($dataEntryItemKey)
    {
        $this->dataEntryItemKey = $dataEntryItemKey;

        return $this;
    }

    /**
     * Get dataEntryItemKey
     *
     * @return integer
     */
    public function getDataEntryItemKey()
    {
        return $this->dataEntryItemKey;
    }

    /**
     * Set prompt
     *
     * @param string $prompt
     *
     * @return DataEntryItem
     */
    public function setPrompt($prompt)
    {
        $this->prompt = $prompt;

        return $this;
    }

    /**
     * Get prompt
     *
     * @return string
     */
    public function getPrompt()
    {
        return $this->prompt;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return DataEntryItem
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

    /**
     * Set type
     *
     * @param string $type
     *
     * @return DataEntryItem
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set minimum
     *
     * @param integer $minimum
     *
     * @return DataEntryItem
     */
    public function setMinimum($minimum)
    {
        $this->minimum = $minimum;

        return $this;
    }

    /**
     * Get minimum
     *
     * @return integer
     */
    public function getMinimum()
    {
        return $this->minimum;
    }

    /**
     * Set maximum
     *
     * @param integer $maximum
     *
     * @return DataEntryItem
     */
    public function setMaximum($maximum)
    {
        $this->maximum = $maximum;

        return $this;
    }

    /**
     * Get maximum
     *
     * @return integer
     */
    public function getMaximum()
    {
        return $this->maximum;
    }

    /**
     * Set required
     *
     * @param boolean $required
     *
     * @return DataEntryItem
     */
    public function setRequired($required)
    {
        $this->required = $required;

        return $this;
    }

    /**
     * Get required
     *
     * @return boolean
     */
    public function getRequired()
    {
        return $this->required;
    }
}

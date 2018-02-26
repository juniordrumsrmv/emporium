<?php

namespace Emporium\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AdmSend
 *
 * @ORM\Table(name="adm_send", indexes={@ORM\Index(name="adm_send_index", columns={"table_name", "field"})})
 * @ORM\Entity
 */
class AdmSend
{
    /**
     * @var string
     *
     * @ORM\Column(name="table_name", type="string", length=30, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tableName;

    /**
     * @var string
     *
     * @ORM\Column(name="field", type="string", length=30, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $field;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="tag", type="string", length=30, nullable=true)
     */
    private $tag;

    /**
     * @var boolean
     *
     * @ORM\Column(name="flag_online", type="boolean", nullable=true)
     */
    private $flagOnline = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="flag_send", type="boolean", nullable=true)
     */
    private $flagSend = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_change_time", type="datetime", nullable=true)
     */
    private $lastChangeTime;

    /**
     * @var string
     *
     * @ORM\Column(name="module", type="string", length=30, nullable=false)
     */
    private $module;



    /**
     * Set tableName
     *
     * @param string $tableName
     *
     * @return AdmSend
     */
    public function setTableName($tableName)
    {
        $this->tableName = $tableName;

        return $this;
    }

    /**
     * Get tableName
     *
     * @return string
     */
    public function getTableName()
    {
        return $this->tableName;
    }

    /**
     * Set field
     *
     * @param string $field
     *
     * @return AdmSend
     */
    public function setField($field)
    {
        $this->field = $field;

        return $this;
    }

    /**
     * Get field
     *
     * @return string
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return AdmSend
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
     * Set description
     *
     * @param string $description
     *
     * @return AdmSend
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
     * Set tag
     *
     * @param string $tag
     *
     * @return AdmSend
     */
    public function setTag($tag)
    {
        $this->tag = $tag;

        return $this;
    }

    /**
     * Get tag
     *
     * @return string
     */
    public function getTag()
    {
        return $this->tag;
    }

    /**
     * Set flagOnline
     *
     * @param boolean $flagOnline
     *
     * @return AdmSend
     */
    public function setFlagOnline($flagOnline)
    {
        $this->flagOnline = $flagOnline;

        return $this;
    }

    /**
     * Get flagOnline
     *
     * @return boolean
     */
    public function getFlagOnline()
    {
        return $this->flagOnline;
    }

    /**
     * Set flagSend
     *
     * @param boolean $flagSend
     *
     * @return AdmSend
     */
    public function setFlagSend($flagSend)
    {
        $this->flagSend = $flagSend;

        return $this;
    }

    /**
     * Get flagSend
     *
     * @return boolean
     */
    public function getFlagSend()
    {
        return $this->flagSend;
    }

    /**
     * Set lastChangeTime
     *
     * @param \DateTime $lastChangeTime
     *
     * @return AdmSend
     */
    public function setLastChangeTime($lastChangeTime)
    {
        $this->lastChangeTime = $lastChangeTime;

        return $this;
    }

    /**
     * Get lastChangeTime
     *
     * @return \DateTime
     */
    public function getLastChangeTime()
    {
        return $this->lastChangeTime;
    }

    /**
     * Set module
     *
     * @param string $module
     *
     * @return AdmSend
     */
    public function setModule($module)
    {
        $this->module = $module;

        return $this;
    }

    /**
     * Get module
     *
     * @return string
     */
    public function getModule()
    {
        return $this->module;
    }
}

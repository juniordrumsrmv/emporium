<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DashPanel
 *
 * @ORM\Table(name="dash_panel")
 * @ORM\Entity
 */
class DashPanel
{
    /**
     * @var integer
     *
     * @ORM\Column(name="position", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $position;

    /**
     * @var string
     *
     * @ORM\Column(name="module", type="string", length=30, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $module;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=128, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="config", type="string", length=250, nullable=true)
     */
    private $config;



    /**
     * Set position
     *
     * @param integer $position
     *
     * @return DashPanel
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return integer
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set module
     *
     * @param string $module
     *
     * @return DashPanel
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

    /**
     * Set name
     *
     * @param string $name
     *
     * @return DashPanel
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
     * Set config
     *
     * @param string $config
     *
     * @return DashPanel
     */
    public function setConfig($config)
    {
        $this->config = $config;

        return $this;
    }

    /**
     * Get config
     *
     * @return string
     */
    public function getConfig()
    {
        return $this->config;
    }
}

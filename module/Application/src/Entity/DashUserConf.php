<?php

namespace Emporium;

use Doctrine\ORM\Mapping as ORM;

/**
 * EntityDashUserConf
 *
 * @ORM\Table(name="dash_user_conf")
 * @ORM\Entity
 */
class DashUserConf
{
    /**
     * @var string
     *
     * @ORM\Column(name="id_user", type="string", length=30, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idUser;

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
     * @ORM\Column(name="module", type="string", length=50, nullable=false)
     */
    private $module;

    /**
     * @var string
     *
     * @ORM\Column(name="panel", type="string", length=50, nullable=false)
     */
    private $panel;

    /**
     * @var string
     *
     * @ORM\Column(name="config", type="string", length=250, nullable=false)
     */
    private $config;



    /**
     * Set idUser
     *
     * @param string $idUser
     *
     * @return DashUserConf
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return string
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set position
     *
     * @param integer $position
     *
     * @return DashUserConf
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
     * @return DashUserConf
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
     * Set panel
     *
     * @param string $panel
     *
     * @return DashUserConf
     */
    public function setPanel($panel)
    {
        $this->panel = $panel;

        return $this;
    }

    /**
     * Get panel
     *
     * @return string
     */
    public function getPanel()
    {
        return $this->panel;
    }

    /**
     * Set config
     *
     * @param string $config
     *
     * @return DashUserConf
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

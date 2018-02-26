<?php

namespace Emporium\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ListType
 *
 * @ORM\Table(name="list_type")
 * @ORM\Entity
 */
class ListType
{
    /**
     * @var integer
     *
     * @ORM\Column(name="list_type_key", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $listTypeKey;

    /**
     * @var string
     *
     * @ORM\Column(name="list_type_name", type="string", length=50, nullable=true)
     */
    private $listTypeName;

    /**
     * @var string
     *
     * @ORM\Column(name="bonus_percent", type="decimal", precision=6, scale=3, nullable=true)
     */
    private $bonusPercent = '0.000';

    /**
     * @var boolean
     *
     * @ORM\Column(name="delivery", type="boolean", nullable=true)
     */
    private $delivery = '0';



    /**
     * Get listTypeKey
     *
     * @return integer
     */
    public function getListTypeKey()
    {
        return $this->listTypeKey;
    }

    /**
     * Set listTypeName
     *
     * @param string $listTypeName
     *
     * @return ListType
     */
    public function setListTypeName($listTypeName)
    {
        $this->listTypeName = $listTypeName;

        return $this;
    }

    /**
     * Get listTypeName
     *
     * @return string
     */
    public function getListTypeName()
    {
        return $this->listTypeName;
    }

    /**
     * Set bonusPercent
     *
     * @param string $bonusPercent
     *
     * @return ListType
     */
    public function setBonusPercent($bonusPercent)
    {
        $this->bonusPercent = $bonusPercent;

        return $this;
    }

    /**
     * Get bonusPercent
     *
     * @return string
     */
    public function getBonusPercent()
    {
        return $this->bonusPercent;
    }

    /**
     * Set delivery
     *
     * @param boolean $delivery
     *
     * @return ListType
     */
    public function setDelivery($delivery)
    {
        $this->delivery = $delivery;

        return $this;
    }

    /**
     * Get delivery
     *
     * @return boolean
     */
    public function getDelivery()
    {
        return $this->delivery;
    }
}

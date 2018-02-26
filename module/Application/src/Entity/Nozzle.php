<?php

namespace Emporium\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Nozzle
 *
 * @ORM\Table(name="nozzle")
 * @ORM\Entity
 */
class Nozzle
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
     * @ORM\Column(name="tank_number", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tankNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="nozzle_number", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $nozzleNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="pump_number", type="bigint", nullable=false)
     */
    private $pumpNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="increase_gt_qty", type="bigint", nullable=true)
     */
    private $increaseGtQty = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="increase_gt_amo", type="bigint", nullable=true)
     */
    private $increaseGtAmo = '0';



    /**
     * Set storeKey
     *
     * @param integer $storeKey
     *
     * @return Nozzle
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
     * Set tankNumber
     *
     * @param integer $tankNumber
     *
     * @return Nozzle
     */
    public function setTankNumber($tankNumber)
    {
        $this->tankNumber = $tankNumber;

        return $this;
    }

    /**
     * Get tankNumber
     *
     * @return integer
     */
    public function getTankNumber()
    {
        return $this->tankNumber;
    }

    /**
     * Set nozzleNumber
     *
     * @param integer $nozzleNumber
     *
     * @return Nozzle
     */
    public function setNozzleNumber($nozzleNumber)
    {
        $this->nozzleNumber = $nozzleNumber;

        return $this;
    }

    /**
     * Get nozzleNumber
     *
     * @return integer
     */
    public function getNozzleNumber()
    {
        return $this->nozzleNumber;
    }

    /**
     * Set pumpNumber
     *
     * @param integer $pumpNumber
     *
     * @return Nozzle
     */
    public function setPumpNumber($pumpNumber)
    {
        $this->pumpNumber = $pumpNumber;

        return $this;
    }

    /**
     * Get pumpNumber
     *
     * @return integer
     */
    public function getPumpNumber()
    {
        return $this->pumpNumber;
    }

    /**
     * Set increaseGtQty
     *
     * @param integer $increaseGtQty
     *
     * @return Nozzle
     */
    public function setIncreaseGtQty($increaseGtQty)
    {
        $this->increaseGtQty = $increaseGtQty;

        return $this;
    }

    /**
     * Get increaseGtQty
     *
     * @return integer
     */
    public function getIncreaseGtQty()
    {
        return $this->increaseGtQty;
    }

    /**
     * Set increaseGtAmo
     *
     * @param integer $increaseGtAmo
     *
     * @return Nozzle
     */
    public function setIncreaseGtAmo($increaseGtAmo)
    {
        $this->increaseGtAmo = $increaseGtAmo;

        return $this;
    }

    /**
     * Get increaseGtAmo
     *
     * @return integer
     */
    public function getIncreaseGtAmo()
    {
        return $this->increaseGtAmo;
    }
}

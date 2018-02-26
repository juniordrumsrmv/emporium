<?php

namespace Emporium\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Inventory
 *
 * @ORM\Table(name="inventory")
 * @ORM\Entity
 */
class Inventory
{
    /**
     * @var integer
     *
     * @ORM\Column(name="inventory_number", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $inventoryNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="store_key", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $storeKey;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="inventory_date", type="date", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $inventoryDate;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=30, nullable=false)
     */
    private $name;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="count_date", type="datetime", nullable=true)
     */
    private $countDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="update_date", type="datetime", nullable=true)
     */
    private $updateDate;

    /**
     * @var boolean
     *
     * @ORM\Column(name="count_status", type="boolean", nullable=true)
     */
    private $countStatus;

    /**
     * @var boolean
     *
     * @ORM\Column(name="update_status", type="boolean", nullable=true)
     */
    private $updateStatus;

    /**
     * @var integer
     *
     * @ORM\Column(name="count", type="smallint", nullable=false)
     */
    private $count;



    /**
     * Set inventoryNumber
     *
     * @param integer $inventoryNumber
     *
     * @return Inventory
     */
    public function setInventoryNumber($inventoryNumber)
    {
        $this->inventoryNumber = $inventoryNumber;

        return $this;
    }

    /**
     * Get inventoryNumber
     *
     * @return integer
     */
    public function getInventoryNumber()
    {
        return $this->inventoryNumber;
    }

    /**
     * Set storeKey
     *
     * @param integer $storeKey
     *
     * @return Inventory
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
     * Set inventoryDate
     *
     * @param \DateTime $inventoryDate
     *
     * @return Inventory
     */
    public function setInventoryDate($inventoryDate)
    {
        $this->inventoryDate = $inventoryDate;

        return $this;
    }

    /**
     * Get inventoryDate
     *
     * @return \DateTime
     */
    public function getInventoryDate()
    {
        return $this->inventoryDate;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Inventory
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
     * Set countDate
     *
     * @param \DateTime $countDate
     *
     * @return Inventory
     */
    public function setCountDate($countDate)
    {
        $this->countDate = $countDate;

        return $this;
    }

    /**
     * Get countDate
     *
     * @return \DateTime
     */
    public function getCountDate()
    {
        return $this->countDate;
    }

    /**
     * Set updateDate
     *
     * @param \DateTime $updateDate
     *
     * @return Inventory
     */
    public function setUpdateDate($updateDate)
    {
        $this->updateDate = $updateDate;

        return $this;
    }

    /**
     * Get updateDate
     *
     * @return \DateTime
     */
    public function getUpdateDate()
    {
        return $this->updateDate;
    }

    /**
     * Set countStatus
     *
     * @param boolean $countStatus
     *
     * @return Inventory
     */
    public function setCountStatus($countStatus)
    {
        $this->countStatus = $countStatus;

        return $this;
    }

    /**
     * Get countStatus
     *
     * @return boolean
     */
    public function getCountStatus()
    {
        return $this->countStatus;
    }

    /**
     * Set updateStatus
     *
     * @param boolean $updateStatus
     *
     * @return Inventory
     */
    public function setUpdateStatus($updateStatus)
    {
        $this->updateStatus = $updateStatus;

        return $this;
    }

    /**
     * Get updateStatus
     *
     * @return boolean
     */
    public function getUpdateStatus()
    {
        return $this->updateStatus;
    }

    /**
     * Set count
     *
     * @param integer $count
     *
     * @return Inventory
     */
    public function setCount($count)
    {
        $this->count = $count;

        return $this;
    }

    /**
     * Get count
     *
     * @return integer
     */
    public function getCount()
    {
        return $this->count;
    }
}

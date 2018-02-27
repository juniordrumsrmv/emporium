<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InventoryCountControl
 *
 * @ORM\Table(name="inventory_count_control")
 * @ORM\Entity
 */
class InventoryCountControl
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
     * @var integer
     *
     * @ORM\Column(name="block_number", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $blockNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="count_number", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $countNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="smallint", nullable=false)
     */
    private $status;



    /**
     * Set inventoryNumber
     *
     * @param integer $inventoryNumber
     *
     * @return InventoryCountControl
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
     * @return InventoryCountControl
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
     * @return InventoryCountControl
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
     * Set blockNumber
     *
     * @param integer $blockNumber
     *
     * @return InventoryCountControl
     */
    public function setBlockNumber($blockNumber)
    {
        $this->blockNumber = $blockNumber;

        return $this;
    }

    /**
     * Get blockNumber
     *
     * @return integer
     */
    public function getBlockNumber()
    {
        return $this->blockNumber;
    }

    /**
     * Set countNumber
     *
     * @param integer $countNumber
     *
     * @return InventoryCountControl
     */
    public function setCountNumber($countNumber)
    {
        $this->countNumber = $countNumber;

        return $this;
    }

    /**
     * Get countNumber
     *
     * @return integer
     */
    public function getCountNumber()
    {
        return $this->countNumber;
    }

    /**
     * Set status
     *
     * @param integer $status
     *
     * @return InventoryCountControl
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer
     */
    public function getStatus()
    {
        return $this->status;
    }
}

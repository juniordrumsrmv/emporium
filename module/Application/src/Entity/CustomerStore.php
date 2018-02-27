<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CustomerStore
 *
 * @ORM\Table(name="customer_store")
 * @ORM\Entity
 */
class CustomerStore
{
    /**
     * @var integer
     *
     * @ORM\Column(name="customer_key", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $customerKey;

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
     * @ORM\Column(name="last_sale_time", type="datetime", nullable=true)
     */
    private $lastSaleTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="qty_sale", type="smallint", nullable=true)
     */
    private $qtySale;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_change_time", type="datetime", nullable=false)
     */
    private $lastChangeTime;



    /**
     * Set customerKey
     *
     * @param integer $customerKey
     *
     * @return CustomerStore
     */
    public function setCustomerKey($customerKey)
    {
        $this->customerKey = $customerKey;

        return $this;
    }

    /**
     * Get customerKey
     *
     * @return integer
     */
    public function getCustomerKey()
    {
        return $this->customerKey;
    }

    /**
     * Set storeKey
     *
     * @param integer $storeKey
     *
     * @return CustomerStore
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
     * Set lastSaleTime
     *
     * @param \DateTime $lastSaleTime
     *
     * @return CustomerStore
     */
    public function setLastSaleTime($lastSaleTime)
    {
        $this->lastSaleTime = $lastSaleTime;

        return $this;
    }

    /**
     * Get lastSaleTime
     *
     * @return \DateTime
     */
    public function getLastSaleTime()
    {
        return $this->lastSaleTime;
    }

    /**
     * Set qtySale
     *
     * @param integer $qtySale
     *
     * @return CustomerStore
     */
    public function setQtySale($qtySale)
    {
        $this->qtySale = $qtySale;

        return $this;
    }

    /**
     * Get qtySale
     *
     * @return integer
     */
    public function getQtySale()
    {
        return $this->qtySale;
    }

    /**
     * Set lastChangeTime
     *
     * @param \DateTime $lastChangeTime
     *
     * @return CustomerStore
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
}

<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CustomerPlates
 *
 * @ORM\Table(name="customer_plates")
 * @ORM\Entity
 */
class CustomerPlates
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
     * @ORM\Column(name="dependent_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $dependentId;

    /**
     * @var string
     *
     * @ORM\Column(name="plate_number", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $plateNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="brand", type="string", length=30, nullable=true)
     */
    private $brand;

    /**
     * @var string
     *
     * @ORM\Column(name="model", type="string", length=30, nullable=true)
     */
    private $model;

    /**
     * @var string
     *
     * @ORM\Column(name="km", type="string", length=11, nullable=true)
     */
    private $km;



    /**
     * Set customerKey
     *
     * @param integer $customerKey
     *
     * @return CustomerPlates
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
     * Set dependentId
     *
     * @param integer $dependentId
     *
     * @return CustomerPlates
     */
    public function setDependentId($dependentId)
    {
        $this->dependentId = $dependentId;

        return $this;
    }

    /**
     * Get dependentId
     *
     * @return integer
     */
    public function getDependentId()
    {
        return $this->dependentId;
    }

    /**
     * Set plateNumber
     *
     * @param string $plateNumber
     *
     * @return CustomerPlates
     */
    public function setPlateNumber($plateNumber)
    {
        $this->plateNumber = $plateNumber;

        return $this;
    }

    /**
     * Get plateNumber
     *
     * @return string
     */
    public function getPlateNumber()
    {
        return $this->plateNumber;
    }

    /**
     * Set brand
     *
     * @param string $brand
     *
     * @return CustomerPlates
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * Get brand
     *
     * @return string
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Set model
     *
     * @param string $model
     *
     * @return CustomerPlates
     */
    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Get model
     *
     * @return string
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Set km
     *
     * @param string $km
     *
     * @return CustomerPlates
     */
    public function setKm($km)
    {
        $this->km = $km;

        return $this;
    }

    /**
     * Get km
     *
     * @return string
     */
    public function getKm()
    {
        return $this->km;
    }
}

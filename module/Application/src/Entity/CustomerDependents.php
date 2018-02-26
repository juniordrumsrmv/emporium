<?php

namespace Emporium\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CustomerDependents
 *
 * @ORM\Table(name="customer_dependents")
 * @ORM\Entity
 */
class CustomerDependents
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
     * @ORM\Column(name="dependent_name", type="string", length=60, nullable=true)
     */
    private $dependentName;



    /**
     * Set customerKey
     *
     * @param integer $customerKey
     *
     * @return CustomerDependents
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
     * @return CustomerDependents
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
     * Set dependentName
     *
     * @param string $dependentName
     *
     * @return CustomerDependents
     */
    public function setDependentName($dependentName)
    {
        $this->dependentName = $dependentName;

        return $this;
    }

    /**
     * Get dependentName
     *
     * @return string
     */
    public function getDependentName()
    {
        return $this->dependentName;
    }
}

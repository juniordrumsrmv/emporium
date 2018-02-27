<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CustomerCategory
 *
 * @ORM\Table(name="customer_category")
 * @ORM\Entity
 */
class CustomerCategory
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
     * @ORM\Column(name="cst_type_key", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $cstTypeKey;



    /**
     * Set customerKey
     *
     * @param integer $customerKey
     *
     * @return CustomerCategory
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
     * Set cstTypeKey
     *
     * @param integer $cstTypeKey
     *
     * @return CustomerCategory
     */
    public function setCstTypeKey($cstTypeKey)
    {
        $this->cstTypeKey = $cstTypeKey;

        return $this;
    }

    /**
     * Get cstTypeKey
     *
     * @return integer
     */
    public function getCstTypeKey()
    {
        return $this->cstTypeKey;
    }
}

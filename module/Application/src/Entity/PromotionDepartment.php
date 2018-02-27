<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PromotionDepartment
 *
 * @ORM\Table(name="promotion_department")
 * @ORM\Entity
 */
class PromotionDepartment
{
    /**
     * @var integer
     *
     * @ORM\Column(name="promotion_key", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $promotionKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="department_key", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $departmentKey;



    /**
     * Set promotionKey
     *
     * @param integer $promotionKey
     *
     * @return PromotionDepartment
     */
    public function setPromotionKey($promotionKey)
    {
        $this->promotionKey = $promotionKey;

        return $this;
    }

    /**
     * Get promotionKey
     *
     * @return integer
     */
    public function getPromotionKey()
    {
        return $this->promotionKey;
    }

    /**
     * Set departmentKey
     *
     * @param integer $departmentKey
     *
     * @return PromotionDepartment
     */
    public function setDepartmentKey($departmentKey)
    {
        $this->departmentKey = $departmentKey;

        return $this;
    }

    /**
     * Get departmentKey
     *
     * @return integer
     */
    public function getDepartmentKey()
    {
        return $this->departmentKey;
    }
}

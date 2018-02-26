<?php

namespace Emporium\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CstBlockDepartment
 *
 * @ORM\Table(name="cst_block_department")
 * @ORM\Entity
 */
class CstBlockDepartment
{
    /**
     * @var integer
     *
     * @ORM\Column(name="cst_type_key", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $cstTypeKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="department_key", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $departmentKey;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_change_time", type="datetime", nullable=true)
     */
    private $lastChangeTime;



    /**
     * Set cstTypeKey
     *
     * @param integer $cstTypeKey
     *
     * @return CstBlockDepartment
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

    /**
     * Set departmentKey
     *
     * @param integer $departmentKey
     *
     * @return CstBlockDepartment
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

    /**
     * Set lastChangeTime
     *
     * @param \DateTime $lastChangeTime
     *
     * @return CstBlockDepartment
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

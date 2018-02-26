<?php

namespace Emporium\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PollDepartment
 *
 * @ORM\Table(name="poll_department")
 * @ORM\Entity
 */
class PollDepartment
{
    /**
     * @var integer
     *
     * @ORM\Column(name="department_key", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $departmentKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="poll_key", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $pollKey;



    /**
     * Set departmentKey
     *
     * @param integer $departmentKey
     *
     * @return PollDepartment
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
     * Set pollKey
     *
     * @param integer $pollKey
     *
     * @return PollDepartment
     */
    public function setPollKey($pollKey)
    {
        $this->pollKey = $pollKey;

        return $this;
    }

    /**
     * Get pollKey
     *
     * @return integer
     */
    public function getPollKey()
    {
        return $this->pollKey;
    }
}

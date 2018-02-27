<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Department
 *
 * @ORM\Table(name="department", uniqueConstraints={@ORM\UniqueConstraint(name="index_department_id", columns={"id"})})
 * @ORM\Entity
 */
class Department
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
     * @ORM\Column(name="parent_department_key", type="smallint", nullable=true)
     */
    private $parentDepartmentKey;

    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=12, nullable=false)
     */
    private $id;

    /**
     * @var boolean
     *
     * @ORM\Column(name="allow_plu", type="boolean", nullable=true)
     */
    private $allowPlu;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=true)
     */
    private $name;



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
     * Set parentDepartmentKey
     *
     * @param integer $parentDepartmentKey
     *
     * @return Department
     */
    public function setParentDepartmentKey($parentDepartmentKey)
    {
        $this->parentDepartmentKey = $parentDepartmentKey;

        return $this;
    }

    /**
     * Get parentDepartmentKey
     *
     * @return integer
     */
    public function getParentDepartmentKey()
    {
        return $this->parentDepartmentKey;
    }

    /**
     * Set id
     *
     * @param string $id
     *
     * @return Department
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set allowPlu
     *
     * @param boolean $allowPlu
     *
     * @return Department
     */
    public function setAllowPlu($allowPlu)
    {
        $this->allowPlu = $allowPlu;

        return $this;
    }

    /**
     * Get allowPlu
     *
     * @return boolean
     */
    public function getAllowPlu()
    {
        return $this->allowPlu;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Department
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
}

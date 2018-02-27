<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Grade
 *
 * @ORM\Table(name="grade")
 * @ORM\Entity
 */
class Grade
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
     * @var string
     *
     * @ORM\Column(name="entity_id", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $entityId;

    /**
     * @var string
     *
     * @ORM\Column(name="department_id", type="string", length=12, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $departmentId;

    /**
     * @var string
     *
     * @ORM\Column(name="pos_id", type="string", length=4, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $posId;

    /**
     * @var string
     *
     * @ORM\Column(name="cfop", type="string", length=8, nullable=true)
     */
    private $cfop;



    /**
     * Set cstTypeKey
     *
     * @param integer $cstTypeKey
     *
     * @return Grade
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
     * Set entityId
     *
     * @param string $entityId
     *
     * @return Grade
     */
    public function setEntityId($entityId)
    {
        $this->entityId = $entityId;

        return $this;
    }

    /**
     * Get entityId
     *
     * @return string
     */
    public function getEntityId()
    {
        return $this->entityId;
    }

    /**
     * Set departmentId
     *
     * @param string $departmentId
     *
     * @return Grade
     */
    public function setDepartmentId($departmentId)
    {
        $this->departmentId = $departmentId;

        return $this;
    }

    /**
     * Get departmentId
     *
     * @return string
     */
    public function getDepartmentId()
    {
        return $this->departmentId;
    }

    /**
     * Set posId
     *
     * @param string $posId
     *
     * @return Grade
     */
    public function setPosId($posId)
    {
        $this->posId = $posId;

        return $this;
    }

    /**
     * Get posId
     *
     * @return string
     */
    public function getPosId()
    {
        return $this->posId;
    }

    /**
     * Set cfop
     *
     * @param string $cfop
     *
     * @return Grade
     */
    public function setCfop($cfop)
    {
        $this->cfop = $cfop;

        return $this;
    }

    /**
     * Get cfop
     *
     * @return string
     */
    public function getCfop()
    {
        return $this->cfop;
    }
}

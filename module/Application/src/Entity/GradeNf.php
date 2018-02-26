<?php

namespace Emporium\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GradeNf
 *
 * @ORM\Table(name="grade_nf")
 * @ORM\Entity
 */
class GradeNf
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
     * @ORM\Column(name="invoice_type_key", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $invoiceTypeKey;

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
     * @return GradeNf
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
     * Set invoiceTypeKey
     *
     * @param integer $invoiceTypeKey
     *
     * @return GradeNf
     */
    public function setInvoiceTypeKey($invoiceTypeKey)
    {
        $this->invoiceTypeKey = $invoiceTypeKey;

        return $this;
    }

    /**
     * Get invoiceTypeKey
     *
     * @return integer
     */
    public function getInvoiceTypeKey()
    {
        return $this->invoiceTypeKey;
    }

    /**
     * Set departmentId
     *
     * @param string $departmentId
     *
     * @return GradeNf
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
     * @return GradeNf
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
     * @return GradeNf
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

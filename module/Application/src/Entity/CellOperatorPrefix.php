<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CellOperatorPrefix
 *
 * @ORM\Table(name="cell_operator_prefix", uniqueConstraints={@ORM\UniqueConstraint(name="index_prefix", columns={"operator_key", "operator_ddd", "operator_prefix"})})
 * @ORM\Entity
 */
class CellOperatorPrefix
{
    /**
     * @var integer
     *
     * @ORM\Column(name="operator_key", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $operatorKey;

    /**
     * @var string
     *
     * @ORM\Column(name="operator_ddd", type="string", length=2, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $operatorDdd;

    /**
     * @var string
     *
     * @ORM\Column(name="operator_prefix", type="string", length=4, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $operatorPrefix;



    /**
     * Set operatorKey
     *
     * @param integer $operatorKey
     *
     * @return CellOperatorPrefix
     */
    public function setOperatorKey($operatorKey)
    {
        $this->operatorKey = $operatorKey;

        return $this;
    }

    /**
     * Get operatorKey
     *
     * @return integer
     */
    public function getOperatorKey()
    {
        return $this->operatorKey;
    }

    /**
     * Set operatorDdd
     *
     * @param string $operatorDdd
     *
     * @return CellOperatorPrefix
     */
    public function setOperatorDdd($operatorDdd)
    {
        $this->operatorDdd = $operatorDdd;

        return $this;
    }

    /**
     * Get operatorDdd
     *
     * @return string
     */
    public function getOperatorDdd()
    {
        return $this->operatorDdd;
    }

    /**
     * Set operatorPrefix
     *
     * @param string $operatorPrefix
     *
     * @return CellOperatorPrefix
     */
    public function setOperatorPrefix($operatorPrefix)
    {
        $this->operatorPrefix = $operatorPrefix;

        return $this;
    }

    /**
     * Get operatorPrefix
     *
     * @return string
     */
    public function getOperatorPrefix()
    {
        return $this->operatorPrefix;
    }
}

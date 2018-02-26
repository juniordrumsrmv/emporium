<?php

namespace Emporium\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CellOperator
 *
 * @ORM\Table(name="cell_operator")
 * @ORM\Entity
 */
class CellOperator
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
     * @ORM\Column(name="operator_name", type="string", length=50, nullable=true)
     */
    private $operatorName;



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
     * Set operatorName
     *
     * @param string $operatorName
     *
     * @return CellOperator
     */
    public function setOperatorName($operatorName)
    {
        $this->operatorName = $operatorName;

        return $this;
    }

    /**
     * Get operatorName
     *
     * @return string
     */
    public function getOperatorName()
    {
        return $this->operatorName;
    }
}

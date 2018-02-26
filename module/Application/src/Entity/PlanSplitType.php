<?php

namespace Emporium\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlanSplitType
 *
 * @ORM\Table(name="plan_split_type")
 * @ORM\Entity
 */
class PlanSplitType
{
    /**
     * @var integer
     *
     * @ORM\Column(name="plan_split_type_key", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $planSplitTypeKey;

    /**
     * @var string
     *
     * @ORM\Column(name="plan_split_type_desc", type="string", length=128, nullable=false)
     */
    private $planSplitTypeDesc;



    /**
     * Get planSplitTypeKey
     *
     * @return integer
     */
    public function getPlanSplitTypeKey()
    {
        return $this->planSplitTypeKey;
    }

    /**
     * Set planSplitTypeDesc
     *
     * @param string $planSplitTypeDesc
     *
     * @return PlanSplitType
     */
    public function setPlanSplitTypeDesc($planSplitTypeDesc)
    {
        $this->planSplitTypeDesc = $planSplitTypeDesc;

        return $this;
    }

    /**
     * Get planSplitTypeDesc
     *
     * @return string
     */
    public function getPlanSplitTypeDesc()
    {
        return $this->planSplitTypeDesc;
    }
}

<?php

namespace Emporium\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlanSplitCode
 *
 * @ORM\Table(name="plan_split_code")
 * @ORM\Entity
 */
class PlanSplitCode
{
    /**
     * @var integer
     *
     * @ORM\Column(name="plan_split_code_key", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $planSplitCodeKey;

    /**
     * @var string
     *
     * @ORM\Column(name="plan_split_code_desc", type="string", length=128, nullable=false)
     */
    private $planSplitCodeDesc;



    /**
     * Get planSplitCodeKey
     *
     * @return integer
     */
    public function getPlanSplitCodeKey()
    {
        return $this->planSplitCodeKey;
    }

    /**
     * Set planSplitCodeDesc
     *
     * @param string $planSplitCodeDesc
     *
     * @return PlanSplitCode
     */
    public function setPlanSplitCodeDesc($planSplitCodeDesc)
    {
        $this->planSplitCodeDesc = $planSplitCodeDesc;

        return $this;
    }

    /**
     * Get planSplitCodeDesc
     *
     * @return string
     */
    public function getPlanSplitCodeDesc()
    {
        return $this->planSplitCodeDesc;
    }
}

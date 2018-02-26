<?php

namespace Emporium\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CostCenter
 *
 * @ORM\Table(name="cost_center")
 * @ORM\Entity
 */
class CostCenter
{
    /**
     * @var string
     *
     * @ORM\Column(name="cstc_id", type="string", length=12, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $cstcId;

    /**
     * @var string
     *
     * @ORM\Column(name="cstc_name", type="string", length=50, nullable=true)
     */
    private $cstcName;



    /**
     * Get cstcId
     *
     * @return string
     */
    public function getCstcId()
    {
        return $this->cstcId;
    }

    /**
     * Set cstcName
     *
     * @param string $cstcName
     *
     * @return CostCenter
     */
    public function setCstcName($cstcName)
    {
        $this->cstcName = $cstcName;

        return $this;
    }

    /**
     * Get cstcName
     *
     * @return string
     */
    public function getCstcName()
    {
        return $this->cstcName;
    }
}

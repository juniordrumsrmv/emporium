<?php

namespace Emporium\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PollCstType
 *
 * @ORM\Table(name="poll_cst_type")
 * @ORM\Entity
 */
class PollCstType
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
     * @ORM\Column(name="poll_key", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $pollKey;



    /**
     * Set cstTypeKey
     *
     * @param integer $cstTypeKey
     *
     * @return PollCstType
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
     * Set pollKey
     *
     * @param integer $pollKey
     *
     * @return PollCstType
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

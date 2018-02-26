<?php

namespace Emporium\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GroupType
 *
 * @ORM\Table(name="group_type")
 * @ORM\Entity
 */
class GroupType
{
    /**
     * @var integer
     *
     * @ORM\Column(name="group_type_key", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $groupTypeKey;

    /**
     * @var string
     *
     * @ORM\Column(name="group_type_name", type="string", length=50, nullable=true)
     */
    private $groupTypeName;



    /**
     * Get groupTypeKey
     *
     * @return integer
     */
    public function getGroupTypeKey()
    {
        return $this->groupTypeKey;
    }

    /**
     * Set groupTypeName
     *
     * @param string $groupTypeName
     *
     * @return GroupType
     */
    public function setGroupTypeName($groupTypeName)
    {
        $this->groupTypeName = $groupTypeName;

        return $this;
    }

    /**
     * Get groupTypeName
     *
     * @return string
     */
    public function getGroupTypeName()
    {
        return $this->groupTypeName;
    }
}

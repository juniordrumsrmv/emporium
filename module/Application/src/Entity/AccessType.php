<?php

namespace Emporium\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccessType
 *
 * @ORM\Table(name="access_type")
 * @ORM\Entity
 */
class AccessType
{
    /**
     * @var integer
     *
     * @ORM\Column(name="access_type_key", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $accessTypeKey;

    /**
     * @var string
     *
     * @ORM\Column(name="access_type_name", type="string", length=50, nullable=true)
     */
    private $accessTypeName;



    /**
     * Get accessTypeKey
     *
     * @return integer
     */
    public function getAccessTypeKey()
    {
        return $this->accessTypeKey;
    }

    /**
     * Set accessTypeName
     *
     * @param string $accessTypeName
     *
     * @return AccessType
     */
    public function setAccessTypeName($accessTypeName)
    {
        $this->accessTypeName = $accessTypeName;

        return $this;
    }

    /**
     * Get accessTypeName
     *
     * @return string
     */
    public function getAccessTypeName()
    {
        return $this->accessTypeName;
    }
}

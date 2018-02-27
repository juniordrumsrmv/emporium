<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EntityType
 *
 * @ORM\Table(name="entity_type")
 * @ORM\Entity
 */
class EntityType
{
    /**
     * @var integer
     *
     * @ORM\Column(name="entity_type_key", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $entityTypeKey;

    /**
     * @var string
     *
     * @ORM\Column(name="entity_type_name", type="string", length=50, nullable=true)
     */
    private $entityTypeName;



    /**
     * Get entityTypeKey
     *
     * @return integer
     */
    public function getEntityTypeKey()
    {
        return $this->entityTypeKey;
    }

    /**
     * Set entityTypeName
     *
     * @param string $entityTypeName
     *
     * @return EntityType
     */
    public function setEntityTypeName($entityTypeName)
    {
        $this->entityTypeName = $entityTypeName;

        return $this;
    }

    /**
     * Get entityTypeName
     *
     * @return string
     */
    public function getEntityTypeName()
    {
        return $this->entityTypeName;
    }
}

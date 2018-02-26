<?php

namespace Emporium\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PluScreen
 *
 * @ORM\Table(name="plu_screen")
 * @ORM\Entity
 */
class PluScreen
{
    /**
     * @var integer
     *
     * @ORM\Column(name="group_type", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $groupType = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="plu_key", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $pluKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="group_screen_key", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $groupScreenKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="store_key", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $storeKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="store_group_key", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $storeGroupKey = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="screen_description", type="string", length=80, nullable=true)
     */
    private $screenDescription;

    /**
     * @var integer
     *
     * @ORM\Column(name="screen_position", type="smallint", nullable=true)
     */
    private $screenPosition;

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=true)
     */
    private $status;



    /**
     * Set groupType
     *
     * @param integer $groupType
     *
     * @return PluScreen
     */
    public function setGroupType($groupType)
    {
        $this->groupType = $groupType;

        return $this;
    }

    /**
     * Get groupType
     *
     * @return integer
     */
    public function getGroupType()
    {
        return $this->groupType;
    }

    /**
     * Set pluKey
     *
     * @param integer $pluKey
     *
     * @return PluScreen
     */
    public function setPluKey($pluKey)
    {
        $this->pluKey = $pluKey;

        return $this;
    }

    /**
     * Get pluKey
     *
     * @return integer
     */
    public function getPluKey()
    {
        return $this->pluKey;
    }

    /**
     * Set groupScreenKey
     *
     * @param integer $groupScreenKey
     *
     * @return PluScreen
     */
    public function setGroupScreenKey($groupScreenKey)
    {
        $this->groupScreenKey = $groupScreenKey;

        return $this;
    }

    /**
     * Get groupScreenKey
     *
     * @return integer
     */
    public function getGroupScreenKey()
    {
        return $this->groupScreenKey;
    }

    /**
     * Set storeKey
     *
     * @param integer $storeKey
     *
     * @return PluScreen
     */
    public function setStoreKey($storeKey)
    {
        $this->storeKey = $storeKey;

        return $this;
    }

    /**
     * Get storeKey
     *
     * @return integer
     */
    public function getStoreKey()
    {
        return $this->storeKey;
    }

    /**
     * Set storeGroupKey
     *
     * @param integer $storeGroupKey
     *
     * @return PluScreen
     */
    public function setStoreGroupKey($storeGroupKey)
    {
        $this->storeGroupKey = $storeGroupKey;

        return $this;
    }

    /**
     * Get storeGroupKey
     *
     * @return integer
     */
    public function getStoreGroupKey()
    {
        return $this->storeGroupKey;
    }

    /**
     * Set screenDescription
     *
     * @param string $screenDescription
     *
     * @return PluScreen
     */
    public function setScreenDescription($screenDescription)
    {
        $this->screenDescription = $screenDescription;

        return $this;
    }

    /**
     * Get screenDescription
     *
     * @return string
     */
    public function getScreenDescription()
    {
        return $this->screenDescription;
    }

    /**
     * Set screenPosition
     *
     * @param integer $screenPosition
     *
     * @return PluScreen
     */
    public function setScreenPosition($screenPosition)
    {
        $this->screenPosition = $screenPosition;

        return $this;
    }

    /**
     * Get screenPosition
     *
     * @return integer
     */
    public function getScreenPosition()
    {
        return $this->screenPosition;
    }

    /**
     * Set status
     *
     * @param boolean $status
     *
     * @return PluScreen
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return boolean
     */
    public function getStatus()
    {
        return $this->status;
    }
}

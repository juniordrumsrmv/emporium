<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DotzFile
 *
 * @ORM\Table(name="dotz_file")
 * @ORM\Entity
 */
class DotzFile
{
    /**
     * @var integer
     *
     * @ORM\Column(name="file_key", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $fileKey;

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
     * @ORM\Column(name="plu_key_list_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $pluKeyListId;

    /**
     * @var string
     *
     * @ORM\Column(name="plu_list_description", type="string", length=60, nullable=true)
     */
    private $pluListDescription;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_change_time", type="datetime", nullable=true)
     */
    private $lastChangeTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="file_type", type="smallint", nullable=true)
     */
    private $fileType;



    /**
     * Set fileKey
     *
     * @param integer $fileKey
     *
     * @return DotzFile
     */
    public function setFileKey($fileKey)
    {
        $this->fileKey = $fileKey;

        return $this;
    }

    /**
     * Get fileKey
     *
     * @return integer
     */
    public function getFileKey()
    {
        return $this->fileKey;
    }

    /**
     * Set storeKey
     *
     * @param integer $storeKey
     *
     * @return DotzFile
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
     * Set pluKeyListId
     *
     * @param integer $pluKeyListId
     *
     * @return DotzFile
     */
    public function setPluKeyListId($pluKeyListId)
    {
        $this->pluKeyListId = $pluKeyListId;

        return $this;
    }

    /**
     * Get pluKeyListId
     *
     * @return integer
     */
    public function getPluKeyListId()
    {
        return $this->pluKeyListId;
    }

    /**
     * Set pluListDescription
     *
     * @param string $pluListDescription
     *
     * @return DotzFile
     */
    public function setPluListDescription($pluListDescription)
    {
        $this->pluListDescription = $pluListDescription;

        return $this;
    }

    /**
     * Get pluListDescription
     *
     * @return string
     */
    public function getPluListDescription()
    {
        return $this->pluListDescription;
    }

    /**
     * Set lastChangeTime
     *
     * @param \DateTime $lastChangeTime
     *
     * @return DotzFile
     */
    public function setLastChangeTime($lastChangeTime)
    {
        $this->lastChangeTime = $lastChangeTime;

        return $this;
    }

    /**
     * Get lastChangeTime
     *
     * @return \DateTime
     */
    public function getLastChangeTime()
    {
        return $this->lastChangeTime;
    }

    /**
     * Set fileType
     *
     * @param integer $fileType
     *
     * @return DotzFile
     */
    public function setFileType($fileType)
    {
        $this->fileType = $fileType;

        return $this;
    }

    /**
     * Get fileType
     *
     * @return integer
     */
    public function getFileType()
    {
        return $this->fileType;
    }
}

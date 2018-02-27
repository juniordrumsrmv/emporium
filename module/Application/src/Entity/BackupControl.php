<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BackupControl
 *
 * @ORM\Table(name="backup_control", indexes={@ORM\Index(name="index_backup_control", columns={"backup_type", "creation_time"})})
 * @ORM\Entity
 */
class BackupControl
{
    /**
     * @var integer
     *
     * @ORM\Column(name="backup_key", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $backupKey;

    /**
     * @var boolean
     *
     * @ORM\Column(name="backup_type", type="boolean", nullable=true)
     */
    private $backupType;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="creation_time", type="datetime", nullable=true)
     */
    private $creationTime;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="string", length=255, nullable=true)
     */
    private $comment;

    /**
     * @var boolean
     *
     * @ORM\Column(name="menu_item", type="boolean", nullable=true)
     */
    private $menuItem;

    /**
     * @var boolean
     *
     * @ORM\Column(name="entity", type="boolean", nullable=true)
     */
    private $entity;

    /**
     * @var boolean
     *
     * @ORM\Column(name="access_control", type="boolean", nullable=true)
     */
    private $accessControl;



    /**
     * Get backupKey
     *
     * @return integer
     */
    public function getBackupKey()
    {
        return $this->backupKey;
    }

    /**
     * Set backupType
     *
     * @param boolean $backupType
     *
     * @return BackupControl
     */
    public function setBackupType($backupType)
    {
        $this->backupType = $backupType;

        return $this;
    }

    /**
     * Get backupType
     *
     * @return boolean
     */
    public function getBackupType()
    {
        return $this->backupType;
    }

    /**
     * Set creationTime
     *
     * @param \DateTime $creationTime
     *
     * @return BackupControl
     */
    public function setCreationTime($creationTime)
    {
        $this->creationTime = $creationTime;

        return $this;
    }

    /**
     * Get creationTime
     *
     * @return \DateTime
     */
    public function getCreationTime()
    {
        return $this->creationTime;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return BackupControl
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set menuItem
     *
     * @param boolean $menuItem
     *
     * @return BackupControl
     */
    public function setMenuItem($menuItem)
    {
        $this->menuItem = $menuItem;

        return $this;
    }

    /**
     * Get menuItem
     *
     * @return boolean
     */
    public function getMenuItem()
    {
        return $this->menuItem;
    }

    /**
     * Set entity
     *
     * @param boolean $entity
     *
     * @return BackupControl
     */
    public function setEntity($entity)
    {
        $this->entity = $entity;

        return $this;
    }

    /**
     * Get entity
     *
     * @return boolean
     */
    public function getEntity()
    {
        return $this->entity;
    }

    /**
     * Set accessControl
     *
     * @param boolean $accessControl
     *
     * @return BackupControl
     */
    public function setAccessControl($accessControl)
    {
        $this->accessControl = $accessControl;

        return $this;
    }

    /**
     * Get accessControl
     *
     * @return boolean
     */
    public function getAccessControl()
    {
        return $this->accessControl;
    }
}

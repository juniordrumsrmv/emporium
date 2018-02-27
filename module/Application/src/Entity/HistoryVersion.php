<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HistoryVersion
 *
 * @ORM\Table(name="history_version", uniqueConstraints={@ORM\UniqueConstraint(name="index_version_upd", columns={"database_version", "version_key"})})
 * @ORM\Entity
 */
class HistoryVersion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="version_key", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $versionKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="database_version", type="smallint", nullable=true)
     */
    private $databaseVersion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="database_update_time", type="datetime", nullable=true)
     */
    private $databaseUpdateTime;

    /**
     * @var string
     *
     * @ORM\Column(name="system_version", type="string", length=12, nullable=true)
     */
    private $systemVersion;

    /**
     * @var string
     *
     * @ORM\Column(name="program_upd", type="string", length=40, nullable=true)
     */
    private $programUpd;

    /**
     * @var string
     *
     * @ORM\Column(name="description_upd", type="string", length=255, nullable=true)
     */
    private $descriptionUpd;



    /**
     * Get versionKey
     *
     * @return integer
     */
    public function getVersionKey()
    {
        return $this->versionKey;
    }

    /**
     * Set databaseVersion
     *
     * @param integer $databaseVersion
     *
     * @return HistoryVersion
     */
    public function setDatabaseVersion($databaseVersion)
    {
        $this->databaseVersion = $databaseVersion;

        return $this;
    }

    /**
     * Get databaseVersion
     *
     * @return integer
     */
    public function getDatabaseVersion()
    {
        return $this->databaseVersion;
    }

    /**
     * Set databaseUpdateTime
     *
     * @param \DateTime $databaseUpdateTime
     *
     * @return HistoryVersion
     */
    public function setDatabaseUpdateTime($databaseUpdateTime)
    {
        $this->databaseUpdateTime = $databaseUpdateTime;

        return $this;
    }

    /**
     * Get databaseUpdateTime
     *
     * @return \DateTime
     */
    public function getDatabaseUpdateTime()
    {
        return $this->databaseUpdateTime;
    }

    /**
     * Set systemVersion
     *
     * @param string $systemVersion
     *
     * @return HistoryVersion
     */
    public function setSystemVersion($systemVersion)
    {
        $this->systemVersion = $systemVersion;

        return $this;
    }

    /**
     * Get systemVersion
     *
     * @return string
     */
    public function getSystemVersion()
    {
        return $this->systemVersion;
    }

    /**
     * Set programUpd
     *
     * @param string $programUpd
     *
     * @return HistoryVersion
     */
    public function setProgramUpd($programUpd)
    {
        $this->programUpd = $programUpd;

        return $this;
    }

    /**
     * Get programUpd
     *
     * @return string
     */
    public function getProgramUpd()
    {
        return $this->programUpd;
    }

    /**
     * Set descriptionUpd
     *
     * @param string $descriptionUpd
     *
     * @return HistoryVersion
     */
    public function setDescriptionUpd($descriptionUpd)
    {
        $this->descriptionUpd = $descriptionUpd;

        return $this;
    }

    /**
     * Get descriptionUpd
     *
     * @return string
     */
    public function getDescriptionUpd()
    {
        return $this->descriptionUpd;
    }
}

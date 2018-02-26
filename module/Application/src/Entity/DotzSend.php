<?php

namespace Emporium\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DotzSend
 *
 * @ORM\Table(name="dotz_send")
 * @ORM\Entity
 */
class DotzSend
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
     * @var \DateTime
     *
     * @ORM\Column(name="last_send_time", type="datetime", nullable=false)
     */
    private $lastSendTime;



    /**
     * Set fileKey
     *
     * @param integer $fileKey
     *
     * @return DotzSend
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
     * @return DotzSend
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
     * Set lastSendTime
     *
     * @param \DateTime $lastSendTime
     *
     * @return DotzSend
     */
    public function setLastSendTime($lastSendTime)
    {
        $this->lastSendTime = $lastSendTime;

        return $this;
    }

    /**
     * Get lastSendTime
     *
     * @return \DateTime
     */
    public function getLastSendTime()
    {
        return $this->lastSendTime;
    }
}

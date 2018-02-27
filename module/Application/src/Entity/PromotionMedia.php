<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PromotionMedia
 *
 * @ORM\Table(name="promotion_media")
 * @ORM\Entity
 */
class PromotionMedia
{
    /**
     * @var integer
     *
     * @ORM\Column(name="promotion_key", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $promotionKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="media_id", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $mediaId;

    /**
     * @var integer
     *
     * @ORM\Column(name="sub_media_id", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $subMediaId;

    /**
     * @var string
     *
     * @ORM\Column(name="media_bin", type="string", length=60, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $mediaBin;

    /**
     * @var integer
     *
     * @ORM\Column(name="splits", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $splits;

    /**
     * @var integer
     *
     * @ORM\Column(name="media_type", type="smallint", nullable=true)
     */
    private $mediaType;

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=true)
     */
    private $status;



    /**
     * Set promotionKey
     *
     * @param integer $promotionKey
     *
     * @return PromotionMedia
     */
    public function setPromotionKey($promotionKey)
    {
        $this->promotionKey = $promotionKey;

        return $this;
    }

    /**
     * Get promotionKey
     *
     * @return integer
     */
    public function getPromotionKey()
    {
        return $this->promotionKey;
    }

    /**
     * Set mediaId
     *
     * @param integer $mediaId
     *
     * @return PromotionMedia
     */
    public function setMediaId($mediaId)
    {
        $this->mediaId = $mediaId;

        return $this;
    }

    /**
     * Get mediaId
     *
     * @return integer
     */
    public function getMediaId()
    {
        return $this->mediaId;
    }

    /**
     * Set subMediaId
     *
     * @param integer $subMediaId
     *
     * @return PromotionMedia
     */
    public function setSubMediaId($subMediaId)
    {
        $this->subMediaId = $subMediaId;

        return $this;
    }

    /**
     * Get subMediaId
     *
     * @return integer
     */
    public function getSubMediaId()
    {
        return $this->subMediaId;
    }

    /**
     * Set mediaBin
     *
     * @param string $mediaBin
     *
     * @return PromotionMedia
     */
    public function setMediaBin($mediaBin)
    {
        $this->mediaBin = $mediaBin;

        return $this;
    }

    /**
     * Get mediaBin
     *
     * @return string
     */
    public function getMediaBin()
    {
        return $this->mediaBin;
    }

    /**
     * Set splits
     *
     * @param integer $splits
     *
     * @return PromotionMedia
     */
    public function setSplits($splits)
    {
        $this->splits = $splits;

        return $this;
    }

    /**
     * Get splits
     *
     * @return integer
     */
    public function getSplits()
    {
        return $this->splits;
    }

    /**
     * Set mediaType
     *
     * @param integer $mediaType
     *
     * @return PromotionMedia
     */
    public function setMediaType($mediaType)
    {
        $this->mediaType = $mediaType;

        return $this;
    }

    /**
     * Get mediaType
     *
     * @return integer
     */
    public function getMediaType()
    {
        return $this->mediaType;
    }

    /**
     * Set status
     *
     * @param boolean $status
     *
     * @return PromotionMedia
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

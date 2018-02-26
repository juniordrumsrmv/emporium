<?php

namespace Emporium\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GiftListO
 *
 * @ORM\Table(name="gift_list_o", indexes={@ORM\Index(name="index_type", columns={"gift_list_key"}), @ORM\Index(name="index_name", columns={"groom_name"}), @ORM\Index(name="index_name2", columns={"bride_name"})})
 * @ORM\Entity
 */
class GiftListO
{
    /**
     * @var integer
     *
     * @ORM\Column(name="gift_list_key", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $giftListKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="list_type_key", type="smallint", nullable=false)
     */
    private $listTypeKey;

    /**
     * @var string
     *
     * @ORM\Column(name="gift_list_password", type="string", length=50, nullable=true)
     */
    private $giftListPassword;

    /**
     * @var integer
     *
     * @ORM\Column(name="gift_list_status", type="smallint", nullable=false)
     */
    private $giftListStatus;

    /**
     * @var integer
     *
     * @ORM\Column(name="groom_key", type="bigint", nullable=false)
     */
    private $groomKey;

    /**
     * @var string
     *
     * @ORM\Column(name="groom_name", type="string", length=60, nullable=true)
     */
    private $groomName;

    /**
     * @var string
     *
     * @ORM\Column(name="groom_phone", type="string", length=15, nullable=true)
     */
    private $groomPhone;

    /**
     * @var integer
     *
     * @ORM\Column(name="bride_key", type="bigint", nullable=false)
     */
    private $brideKey;

    /**
     * @var string
     *
     * @ORM\Column(name="bride_name", type="string", length=60, nullable=true)
     */
    private $brideName;

    /**
     * @var string
     *
     * @ORM\Column(name="bride_phone", type="string", length=15, nullable=true)
     */
    private $bridePhone;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="gift_list_date_wedding", type="date", nullable=false)
     */
    private $giftListDateWedding;

    /**
     * @var string
     *
     * @ORM\Column(name="gift_list_location", type="string", length=60, nullable=true)
     */
    private $giftListLocation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="gift_list_date_inc", type="date", nullable=false)
     */
    private $giftListDateInc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="gift_list_date_alt", type="date", nullable=true)
     */
    private $giftListDateAlt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="gift_list_date_ent1", type="date", nullable=true)
     */
    private $giftListDateEnt1;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="gift_list_date_ent2", type="date", nullable=true)
     */
    private $giftListDateEnt2;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="gift_list_date_end", type="date", nullable=false)
     */
    private $giftListDateEnd;

    /**
     * @var string
     *
     * @ORM\Column(name="gift_list_obs", type="string", length=255, nullable=true)
     */
    private $giftListObs;



    /**
     * Get giftListKey
     *
     * @return integer
     */
    public function getGiftListKey()
    {
        return $this->giftListKey;
    }

    /**
     * Set listTypeKey
     *
     * @param integer $listTypeKey
     *
     * @return GiftListO
     */
    public function setListTypeKey($listTypeKey)
    {
        $this->listTypeKey = $listTypeKey;

        return $this;
    }

    /**
     * Get listTypeKey
     *
     * @return integer
     */
    public function getListTypeKey()
    {
        return $this->listTypeKey;
    }

    /**
     * Set giftListPassword
     *
     * @param string $giftListPassword
     *
     * @return GiftListO
     */
    public function setGiftListPassword($giftListPassword)
    {
        $this->giftListPassword = $giftListPassword;

        return $this;
    }

    /**
     * Get giftListPassword
     *
     * @return string
     */
    public function getGiftListPassword()
    {
        return $this->giftListPassword;
    }

    /**
     * Set giftListStatus
     *
     * @param integer $giftListStatus
     *
     * @return GiftListO
     */
    public function setGiftListStatus($giftListStatus)
    {
        $this->giftListStatus = $giftListStatus;

        return $this;
    }

    /**
     * Get giftListStatus
     *
     * @return integer
     */
    public function getGiftListStatus()
    {
        return $this->giftListStatus;
    }

    /**
     * Set groomKey
     *
     * @param integer $groomKey
     *
     * @return GiftListO
     */
    public function setGroomKey($groomKey)
    {
        $this->groomKey = $groomKey;

        return $this;
    }

    /**
     * Get groomKey
     *
     * @return integer
     */
    public function getGroomKey()
    {
        return $this->groomKey;
    }

    /**
     * Set groomName
     *
     * @param string $groomName
     *
     * @return GiftListO
     */
    public function setGroomName($groomName)
    {
        $this->groomName = $groomName;

        return $this;
    }

    /**
     * Get groomName
     *
     * @return string
     */
    public function getGroomName()
    {
        return $this->groomName;
    }

    /**
     * Set groomPhone
     *
     * @param string $groomPhone
     *
     * @return GiftListO
     */
    public function setGroomPhone($groomPhone)
    {
        $this->groomPhone = $groomPhone;

        return $this;
    }

    /**
     * Get groomPhone
     *
     * @return string
     */
    public function getGroomPhone()
    {
        return $this->groomPhone;
    }

    /**
     * Set brideKey
     *
     * @param integer $brideKey
     *
     * @return GiftListO
     */
    public function setBrideKey($brideKey)
    {
        $this->brideKey = $brideKey;

        return $this;
    }

    /**
     * Get brideKey
     *
     * @return integer
     */
    public function getBrideKey()
    {
        return $this->brideKey;
    }

    /**
     * Set brideName
     *
     * @param string $brideName
     *
     * @return GiftListO
     */
    public function setBrideName($brideName)
    {
        $this->brideName = $brideName;

        return $this;
    }

    /**
     * Get brideName
     *
     * @return string
     */
    public function getBrideName()
    {
        return $this->brideName;
    }

    /**
     * Set bridePhone
     *
     * @param string $bridePhone
     *
     * @return GiftListO
     */
    public function setBridePhone($bridePhone)
    {
        $this->bridePhone = $bridePhone;

        return $this;
    }

    /**
     * Get bridePhone
     *
     * @return string
     */
    public function getBridePhone()
    {
        return $this->bridePhone;
    }

    /**
     * Set giftListDateWedding
     *
     * @param \DateTime $giftListDateWedding
     *
     * @return GiftListO
     */
    public function setGiftListDateWedding($giftListDateWedding)
    {
        $this->giftListDateWedding = $giftListDateWedding;

        return $this;
    }

    /**
     * Get giftListDateWedding
     *
     * @return \DateTime
     */
    public function getGiftListDateWedding()
    {
        return $this->giftListDateWedding;
    }

    /**
     * Set giftListLocation
     *
     * @param string $giftListLocation
     *
     * @return GiftListO
     */
    public function setGiftListLocation($giftListLocation)
    {
        $this->giftListLocation = $giftListLocation;

        return $this;
    }

    /**
     * Get giftListLocation
     *
     * @return string
     */
    public function getGiftListLocation()
    {
        return $this->giftListLocation;
    }

    /**
     * Set giftListDateInc
     *
     * @param \DateTime $giftListDateInc
     *
     * @return GiftListO
     */
    public function setGiftListDateInc($giftListDateInc)
    {
        $this->giftListDateInc = $giftListDateInc;

        return $this;
    }

    /**
     * Get giftListDateInc
     *
     * @return \DateTime
     */
    public function getGiftListDateInc()
    {
        return $this->giftListDateInc;
    }

    /**
     * Set giftListDateAlt
     *
     * @param \DateTime $giftListDateAlt
     *
     * @return GiftListO
     */
    public function setGiftListDateAlt($giftListDateAlt)
    {
        $this->giftListDateAlt = $giftListDateAlt;

        return $this;
    }

    /**
     * Get giftListDateAlt
     *
     * @return \DateTime
     */
    public function getGiftListDateAlt()
    {
        return $this->giftListDateAlt;
    }

    /**
     * Set giftListDateEnt1
     *
     * @param \DateTime $giftListDateEnt1
     *
     * @return GiftListO
     */
    public function setGiftListDateEnt1($giftListDateEnt1)
    {
        $this->giftListDateEnt1 = $giftListDateEnt1;

        return $this;
    }

    /**
     * Get giftListDateEnt1
     *
     * @return \DateTime
     */
    public function getGiftListDateEnt1()
    {
        return $this->giftListDateEnt1;
    }

    /**
     * Set giftListDateEnt2
     *
     * @param \DateTime $giftListDateEnt2
     *
     * @return GiftListO
     */
    public function setGiftListDateEnt2($giftListDateEnt2)
    {
        $this->giftListDateEnt2 = $giftListDateEnt2;

        return $this;
    }

    /**
     * Get giftListDateEnt2
     *
     * @return \DateTime
     */
    public function getGiftListDateEnt2()
    {
        return $this->giftListDateEnt2;
    }

    /**
     * Set giftListDateEnd
     *
     * @param \DateTime $giftListDateEnd
     *
     * @return GiftListO
     */
    public function setGiftListDateEnd($giftListDateEnd)
    {
        $this->giftListDateEnd = $giftListDateEnd;

        return $this;
    }

    /**
     * Get giftListDateEnd
     *
     * @return \DateTime
     */
    public function getGiftListDateEnd()
    {
        return $this->giftListDateEnd;
    }

    /**
     * Set giftListObs
     *
     * @param string $giftListObs
     *
     * @return GiftListO
     */
    public function setGiftListObs($giftListObs)
    {
        $this->giftListObs = $giftListObs;

        return $this;
    }

    /**
     * Get giftListObs
     *
     * @return string
     */
    public function getGiftListObs()
    {
        return $this->giftListObs;
    }
}

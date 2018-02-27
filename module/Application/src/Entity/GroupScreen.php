<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GroupScreen
 *
 * @ORM\Table(name="group_screen")
 * @ORM\Entity
 */
class GroupScreen
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
     * @ORM\Column(name="group_screen_key", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $groupScreenKey;

    /**
     * @var string
     *
     * @ORM\Column(name="group_screen_name", type="string", length=50, nullable=true)
     */
    private $groupScreenName;

    /**
     * @var boolean
     *
     * @ORM\Column(name="group_mode", type="boolean", nullable=true)
     */
    private $groupMode;

    /**
     * @var integer
     *
     * @ORM\Column(name="total_rows", type="smallint", nullable=true)
     */
    private $totalRows;

    /**
     * @var integer
     *
     * @ORM\Column(name="total_cols", type="smallint", nullable=true)
     */
    private $totalCols;

    /**
     * @var integer
     *
     * @ORM\Column(name="space_rows", type="smallint", nullable=true)
     */
    private $spaceRows;

    /**
     * @var integer
     *
     * @ORM\Column(name="space_cols", type="smallint", nullable=true)
     */
    private $spaceCols;

    /**
     * @var integer
     *
     * @ORM\Column(name="screen_rows", type="smallint", nullable=true)
     */
    private $screenRows;

    /**
     * @var integer
     *
     * @ORM\Column(name="screen_cols", type="smallint", nullable=true)
     */
    private $screenCols;

    /**
     * @var string
     *
     * @ORM\Column(name="color_back", type="string", length=8, nullable=true)
     */
    private $colorBack;

    /**
     * @var string
     *
     * @ORM\Column(name="color_text", type="string", length=8, nullable=true)
     */
    private $colorText;



    /**
     * Set groupType
     *
     * @param integer $groupType
     *
     * @return GroupScreen
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
     * Set groupScreenKey
     *
     * @param integer $groupScreenKey
     *
     * @return GroupScreen
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
     * Set groupScreenName
     *
     * @param string $groupScreenName
     *
     * @return GroupScreen
     */
    public function setGroupScreenName($groupScreenName)
    {
        $this->groupScreenName = $groupScreenName;

        return $this;
    }

    /**
     * Get groupScreenName
     *
     * @return string
     */
    public function getGroupScreenName()
    {
        return $this->groupScreenName;
    }

    /**
     * Set groupMode
     *
     * @param boolean $groupMode
     *
     * @return GroupScreen
     */
    public function setGroupMode($groupMode)
    {
        $this->groupMode = $groupMode;

        return $this;
    }

    /**
     * Get groupMode
     *
     * @return boolean
     */
    public function getGroupMode()
    {
        return $this->groupMode;
    }

    /**
     * Set totalRows
     *
     * @param integer $totalRows
     *
     * @return GroupScreen
     */
    public function setTotalRows($totalRows)
    {
        $this->totalRows = $totalRows;

        return $this;
    }

    /**
     * Get totalRows
     *
     * @return integer
     */
    public function getTotalRows()
    {
        return $this->totalRows;
    }

    /**
     * Set totalCols
     *
     * @param integer $totalCols
     *
     * @return GroupScreen
     */
    public function setTotalCols($totalCols)
    {
        $this->totalCols = $totalCols;

        return $this;
    }

    /**
     * Get totalCols
     *
     * @return integer
     */
    public function getTotalCols()
    {
        return $this->totalCols;
    }

    /**
     * Set spaceRows
     *
     * @param integer $spaceRows
     *
     * @return GroupScreen
     */
    public function setSpaceRows($spaceRows)
    {
        $this->spaceRows = $spaceRows;

        return $this;
    }

    /**
     * Get spaceRows
     *
     * @return integer
     */
    public function getSpaceRows()
    {
        return $this->spaceRows;
    }

    /**
     * Set spaceCols
     *
     * @param integer $spaceCols
     *
     * @return GroupScreen
     */
    public function setSpaceCols($spaceCols)
    {
        $this->spaceCols = $spaceCols;

        return $this;
    }

    /**
     * Get spaceCols
     *
     * @return integer
     */
    public function getSpaceCols()
    {
        return $this->spaceCols;
    }

    /**
     * Set screenRows
     *
     * @param integer $screenRows
     *
     * @return GroupScreen
     */
    public function setScreenRows($screenRows)
    {
        $this->screenRows = $screenRows;

        return $this;
    }

    /**
     * Get screenRows
     *
     * @return integer
     */
    public function getScreenRows()
    {
        return $this->screenRows;
    }

    /**
     * Set screenCols
     *
     * @param integer $screenCols
     *
     * @return GroupScreen
     */
    public function setScreenCols($screenCols)
    {
        $this->screenCols = $screenCols;

        return $this;
    }

    /**
     * Get screenCols
     *
     * @return integer
     */
    public function getScreenCols()
    {
        return $this->screenCols;
    }

    /**
     * Set colorBack
     *
     * @param string $colorBack
     *
     * @return GroupScreen
     */
    public function setColorBack($colorBack)
    {
        $this->colorBack = $colorBack;

        return $this;
    }

    /**
     * Get colorBack
     *
     * @return string
     */
    public function getColorBack()
    {
        return $this->colorBack;
    }

    /**
     * Set colorText
     *
     * @param string $colorText
     *
     * @return GroupScreen
     */
    public function setColorText($colorText)
    {
        $this->colorText = $colorText;

        return $this;
    }

    /**
     * Get colorText
     *
     * @return string
     */
    public function getColorText()
    {
        return $this->colorText;
    }
}

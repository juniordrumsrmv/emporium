<?php

namespace Emporium\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MenuItem
 *
 * @ORM\Table(name="menu_item", indexes={@ORM\Index(name="index_menu_item_0", columns={"menu_item_module", "menu_item_level", "menu_item_parent_id", "menu_item_seq", "menu_item_lang"})})
 * @ORM\Entity
 */
class MenuItem
{
    /**
     * @var string
     *
     * @ORM\Column(name="menu_item_id", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $menuItemId;

    /**
     * @var string
     *
     * @ORM\Column(name="menu_item_parent_id", type="string", length=20, nullable=true)
     */
    private $menuItemParentId;

    /**
     * @var integer
     *
     * @ORM\Column(name="menu_item_level", type="smallint", nullable=true)
     */
    private $menuItemLevel;

    /**
     * @var string
     *
     * @ORM\Column(name="menu_item_lang", type="string", length=6, nullable=true)
     */
    private $menuItemLang;

    /**
     * @var string
     *
     * @ORM\Column(name="menu_item_module", type="string", length=20, nullable=true)
     */
    private $menuItemModule;

    /**
     * @var integer
     *
     * @ORM\Column(name="menu_item_group", type="smallint", nullable=true)
     */
    private $menuItemGroup;

    /**
     * @var integer
     *
     * @ORM\Column(name="menu_item_seq", type="smallint", nullable=true)
     */
    private $menuItemSeq;

    /**
     * @var string
     *
     * @ORM\Column(name="menu_item_authorization_id", type="string", length=10, nullable=true)
     */
    private $menuItemAuthorizationId;

    /**
     * @var string
     *
     * @ORM\Column(name="menu_item_href", type="string", length=255, nullable=true)
     */
    private $menuItemHref;

    /**
     * @var string
     *
     * @ORM\Column(name="menu_item_title", type="string", length=255, nullable=true)
     */
    private $menuItemTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="menu_item_text", type="string", length=255, nullable=true)
     */
    private $menuItemText;

    /**
     * @var string
     *
     * @ORM\Column(name="menu_item_img_path", type="string", length=255, nullable=true)
     */
    private $menuItemImgPath;

    /**
     * @var string
     *
     * @ORM\Column(name="menu_item_target", type="string", length=255, nullable=true)
     */
    private $menuItemTarget;

    /**
     * @var string
     *
     * @ORM\Column(name="menu_item_dir", type="string", length=255, nullable=true)
     */
    private $menuItemDir;

    /**
     * @var boolean
     *
     * @ORM\Column(name="menu_item_type", type="boolean", nullable=true)
     */
    private $menuItemType;

    /**
     * @var boolean
     *
     * @ORM\Column(name="menu_item_status", type="boolean", nullable=true)
     */
    private $menuItemStatus;



    /**
     * Get menuItemId
     *
     * @return string
     */
    public function getMenuItemId()
    {
        return $this->menuItemId;
    }

    /**
     * Set menuItemParentId
     *
     * @param string $menuItemParentId
     *
     * @return MenuItem
     */
    public function setMenuItemParentId($menuItemParentId)
    {
        $this->menuItemParentId = $menuItemParentId;

        return $this;
    }

    /**
     * Get menuItemParentId
     *
     * @return string
     */
    public function getMenuItemParentId()
    {
        return $this->menuItemParentId;
    }

    /**
     * Set menuItemLevel
     *
     * @param integer $menuItemLevel
     *
     * @return MenuItem
     */
    public function setMenuItemLevel($menuItemLevel)
    {
        $this->menuItemLevel = $menuItemLevel;

        return $this;
    }

    /**
     * Get menuItemLevel
     *
     * @return integer
     */
    public function getMenuItemLevel()
    {
        return $this->menuItemLevel;
    }

    /**
     * Set menuItemLang
     *
     * @param string $menuItemLang
     *
     * @return MenuItem
     */
    public function setMenuItemLang($menuItemLang)
    {
        $this->menuItemLang = $menuItemLang;

        return $this;
    }

    /**
     * Get menuItemLang
     *
     * @return string
     */
    public function getMenuItemLang()
    {
        return $this->menuItemLang;
    }

    /**
     * Set menuItemModule
     *
     * @param string $menuItemModule
     *
     * @return MenuItem
     */
    public function setMenuItemModule($menuItemModule)
    {
        $this->menuItemModule = $menuItemModule;

        return $this;
    }

    /**
     * Get menuItemModule
     *
     * @return string
     */
    public function getMenuItemModule()
    {
        return $this->menuItemModule;
    }

    /**
     * Set menuItemGroup
     *
     * @param integer $menuItemGroup
     *
     * @return MenuItem
     */
    public function setMenuItemGroup($menuItemGroup)
    {
        $this->menuItemGroup = $menuItemGroup;

        return $this;
    }

    /**
     * Get menuItemGroup
     *
     * @return integer
     */
    public function getMenuItemGroup()
    {
        return $this->menuItemGroup;
    }

    /**
     * Set menuItemSeq
     *
     * @param integer $menuItemSeq
     *
     * @return MenuItem
     */
    public function setMenuItemSeq($menuItemSeq)
    {
        $this->menuItemSeq = $menuItemSeq;

        return $this;
    }

    /**
     * Get menuItemSeq
     *
     * @return integer
     */
    public function getMenuItemSeq()
    {
        return $this->menuItemSeq;
    }

    /**
     * Set menuItemAuthorizationId
     *
     * @param string $menuItemAuthorizationId
     *
     * @return MenuItem
     */
    public function setMenuItemAuthorizationId($menuItemAuthorizationId)
    {
        $this->menuItemAuthorizationId = $menuItemAuthorizationId;

        return $this;
    }

    /**
     * Get menuItemAuthorizationId
     *
     * @return string
     */
    public function getMenuItemAuthorizationId()
    {
        return $this->menuItemAuthorizationId;
    }

    /**
     * Set menuItemHref
     *
     * @param string $menuItemHref
     *
     * @return MenuItem
     */
    public function setMenuItemHref($menuItemHref)
    {
        $this->menuItemHref = $menuItemHref;

        return $this;
    }

    /**
     * Get menuItemHref
     *
     * @return string
     */
    public function getMenuItemHref()
    {
        return $this->menuItemHref;
    }

    /**
     * Set menuItemTitle
     *
     * @param string $menuItemTitle
     *
     * @return MenuItem
     */
    public function setMenuItemTitle($menuItemTitle)
    {
        $this->menuItemTitle = $menuItemTitle;

        return $this;
    }

    /**
     * Get menuItemTitle
     *
     * @return string
     */
    public function getMenuItemTitle()
    {
        return $this->menuItemTitle;
    }

    /**
     * Set menuItemText
     *
     * @param string $menuItemText
     *
     * @return MenuItem
     */
    public function setMenuItemText($menuItemText)
    {
        $this->menuItemText = $menuItemText;

        return $this;
    }

    /**
     * Get menuItemText
     *
     * @return string
     */
    public function getMenuItemText()
    {
        return $this->menuItemText;
    }

    /**
     * Set menuItemImgPath
     *
     * @param string $menuItemImgPath
     *
     * @return MenuItem
     */
    public function setMenuItemImgPath($menuItemImgPath)
    {
        $this->menuItemImgPath = $menuItemImgPath;

        return $this;
    }

    /**
     * Get menuItemImgPath
     *
     * @return string
     */
    public function getMenuItemImgPath()
    {
        return $this->menuItemImgPath;
    }

    /**
     * Set menuItemTarget
     *
     * @param string $menuItemTarget
     *
     * @return MenuItem
     */
    public function setMenuItemTarget($menuItemTarget)
    {
        $this->menuItemTarget = $menuItemTarget;

        return $this;
    }

    /**
     * Get menuItemTarget
     *
     * @return string
     */
    public function getMenuItemTarget()
    {
        return $this->menuItemTarget;
    }

    /**
     * Set menuItemDir
     *
     * @param string $menuItemDir
     *
     * @return MenuItem
     */
    public function setMenuItemDir($menuItemDir)
    {
        $this->menuItemDir = $menuItemDir;

        return $this;
    }

    /**
     * Get menuItemDir
     *
     * @return string
     */
    public function getMenuItemDir()
    {
        return $this->menuItemDir;
    }

    /**
     * Set menuItemType
     *
     * @param boolean $menuItemType
     *
     * @return MenuItem
     */
    public function setMenuItemType($menuItemType)
    {
        $this->menuItemType = $menuItemType;

        return $this;
    }

    /**
     * Get menuItemType
     *
     * @return boolean
     */
    public function getMenuItemType()
    {
        return $this->menuItemType;
    }

    /**
     * Set menuItemStatus
     *
     * @param boolean $menuItemStatus
     *
     * @return MenuItem
     */
    public function setMenuItemStatus($menuItemStatus)
    {
        $this->menuItemStatus = $menuItemStatus;

        return $this;
    }

    /**
     * Get menuItemStatus
     *
     * @return boolean
     */
    public function getMenuItemStatus()
    {
        return $this->menuItemStatus;
    }
}

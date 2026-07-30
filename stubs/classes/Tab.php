<?php

/**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 */
/**
 * Class TabCore.
 */
class TabCore extends \ObjectModel
{
    /** @var string|array<int, string> Displayed name */
    public $name;
    /** @var string Class and file name */
    public $class_name;
    /** @var string Route name for Symfony */
    public $route_name;
    public $module;
    /** @var int parent ID */
    public $id_parent;
    /** @var int position */
    public $position;
    /** @var bool active */
    public $active = \true;
    /** @var bool enabled */
    public $enabled = \true;
    /** @var string Icon font */
    public $icon;
    /** @var string|null Wording to use for the display name */
    public $wording;
    /** @var string|null Wording domain to use for the display name */
    public $wording_domain;
    /**
     * @deprecated Since 1.7.7
     */
    public const TAB_MODULE_LIST_URL = '';
    /**
     * @see ObjectModel::$definition
     */
    public static $definition = ['table' => 'tab', 'primary' => 'id_tab', 'multilang' => \true, 'fields' => [
        'id_parent' => ['type' => self::TYPE_INT, 'validate' => 'isInt'],
        'position' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedInt'],
        'module' => ['type' => self::TYPE_STRING, 'validate' => 'isTabName', 'size' => 64],
        'class_name' => ['type' => self::TYPE_STRING, 'required' => \true, 'size' => 64],
        'route_name' => ['type' => self::TYPE_STRING, 'required' => \false, 'size' => 256],
        'active' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool'],
        'enabled' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool'],
        'icon' => ['type' => self::TYPE_STRING, 'size' => 64],
        'wording' => ['type' => self::TYPE_STRING, 'validate' => 'isString', 'allow_null' => \true, 'size' => 255],
        'wording_domain' => ['type' => self::TYPE_STRING, 'validate' => 'isString', 'allow_null' => \true, 'size' => 255],
        /* Lang fields */
        'name' => ['type' => self::TYPE_STRING, 'lang' => \true, 'required' => \true, 'validate' => 'isTabName', 'size' => 64],
    ]];
    protected static $_getIdFromClassName = \null;
    /**
     * Additional treatments for Tab when creating new one:
     * - generate a new position
     * - add access for admin profile.
     *
     * @param bool $autoDate
     * @param bool $nullValues
     *
     * @return bool true if success
     */
    public function add($autoDate = \true, $nullValues = \false)
    {
    }
    /**
     * @param bool $nullValues
     * @param bool $autoDate
     *
     * @return bool
     */
    public function save($nullValues = \false, $autoDate = \true)
    {
    }
    /** When creating a new tab $id_tab, this add default rights to the table access
     *
     * @todo this should not be public static but protected
     *
     * @param int $idTab
     * @param Context $context
     *
     * @return bool true if succeed
     */
    public static function initAccess($idTab, \Context $context = \null)
    {
    }
    public function delete()
    {
    }
    /**
     * reset static cache (eg unit testing purpose).
     */
    public static function resetStaticCache()
    {
    }
    public static function resetTabCache()
    {
    }
    /**
     * Get tab id.
     *
     * @return int tab id
     */
    public static function getCurrentTabId()
    {
    }
    /**
     * Get tab parent id.
     *
     * @return int tab parent id
     */
    public static function getCurrentParentId()
    {
    }
    /**
     * Get tab.
     *
     * @return array tab
     */
    public static function getTab($idLang, $idTab)
    {
    }
    /**
     * Return the list of tab used by a module.
     *
     * @return array
     */
    public static function getModuleTabList()
    {
    }
    /**
     * Get tabs.
     *
     * @return array tabs
     */
    protected static $_cache_tabs = [];
    public static function getTabs($idLang, $idParent = \null)
    {
    }
    /**
     * Get tab id from name.
     *
     * @deprecated since version 1.7.1.0, available now in PrestaShopBundle\Entity\Repository\TabRepository::findOneIdByClassName($className)
     *
     * @param string $className
     *
     * @return int Tab ID
     */
    public static function getIdFromClassName($className)
    {
    }
    /**
     * Get collection from module name.
     *
     * @param string $module Module name
     * @param int|null $idLang integer Language ID
     *
     * @return array|PrestaShopCollection Collection of tabs (or empty array)
     */
    public static function getCollectionFromModule($module, $idLang = \null)
    {
    }
    /**
     * Enabling tabs for module.
     *
     * @param string $module Module Name
     *
     * @return bool Status
     */
    public static function enablingForModule($module)
    {
    }
    /**
     * Disabling tabs for module.
     *
     * @param string $module Module name
     *
     * @return bool Status
     */
    public static function disablingForModule($module)
    {
    }
    /**
     * Get Instance from tab class name.
     *
     * @param string $className Name of tab class
     * @param int|null $idLang id_lang
     *
     * @return Tab Tab object (empty if bad id or class name)
     */
    public static function getInstanceFromClassName($className, $idLang = \null)
    {
    }
    public static function getNbTabs($idParent = \null)
    {
    }
    /**
     * return an available position in subtab for parent $id_parent.
     *
     * @param mixed $idParent
     *
     * @return int
     */
    public static function getNewLastPosition($idParent)
    {
    }
    public function move($direction)
    {
    }
    /**
     * Clean positions.
     *
     * @param int $idParent Parent ID
     *
     * @return bool
     */
    public function cleanPositions($idParent)
    {
    }
    /**
     * Update position.
     *
     * @param bool $way
     * @param int $position
     *
     * @return bool
     */
    public function updatePosition($way, $position)
    {
    }
    /**
     * Check Tab rights.
     *
     * @param int $idTab Tab ID
     *
     * @return bool Current employee has access to tab
     */
    public static function checkTabRights($idTab)
    {
    }
    public static function recursiveTab($idTab, $tabs)
    {
    }
    /**
     * Overrides update to set position to last when changing parent tab.
     *
     * @see ObjectModel::update
     *
     * @param bool $nullValues
     *
     * @return bool
     */
    public function update($nullValues = \false)
    {
    }
    /**
     * Get Tab by Profile ID.
     *
     * @param int $idParent
     * @param int $idProfile
     *
     * @return array|false|mysqli_result|PDOStatement|resource|null
     */
    public static function getTabByIdProfile($idParent, $idProfile)
    {
    }
    /**
     * @since 1.5.0
     */
    public static function getClassNameById($idTab)
    {
    }
    public static function getTabModulesList($idTab)
    {
    }
}

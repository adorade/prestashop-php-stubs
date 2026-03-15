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
 * Class ProfileCore.
 */
class ProfileCore extends \ObjectModel
{
    public const ALLOWED_PROFILE_TYPE_CHECK = ['id_tab', 'class_name'];
    /** @var string|array<int, string> Name */
    public $name;
    /**
     * @see ObjectModel::$definition
     */
    public static $definition = ['table' => 'profile', 'primary' => 'id_profile', 'multilang' => \true, 'fields' => [
        /* Lang fields */
        'name' => ['type' => self::TYPE_STRING, 'lang' => \true, 'validate' => 'isGenericName', 'required' => \true, 'size' => 32],
    ]];
    protected static $_cache_accesses = [];
    /**
     * {@inheritdoc}
     */
    public function __construct($id = \null, $idLang = \null, $idShop = \null, $translator = \null)
    {
    }
    /**
     * @return string|null
     */
    public function getProfileImage(): ?string
    {
    }
    /**
     * Get all available profiles.
     *
     * @return array Profiles
     */
    public static function getProfiles($idLang)
    {
    }
    /**
     * Get the current profile name.
     *
     * @param int $idProfile Profile ID
     * @param int|null $idLang Language ID
     *
     * @return array Profile
     */
    public static function getProfile($idProfile, $idLang = \null)
    {
    }
    public function add($autodate = \true, $null_values = \false)
    {
    }
    public function delete()
    {
    }
    /**
     * Get access profile.
     *
     * @param int $idProfile Profile ID
     * @param int $idTab Tab ID
     *
     * @return array|bool
     */
    public static function getProfileAccess($idProfile, $idTab)
    {
    }
    /**
     * Get access profiles.
     *
     * @param int $idProfile Profile ID
     * @param string $type Type
     *
     * @return array|false
     */
    public static function getProfileAccesses($idProfile, $type = 'id_tab')
    {
    }
    public static function resetStaticCache()
    {
    }
    public static function resetCacheAccesses()
    {
    }
}

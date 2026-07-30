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
 * Class AccessCore.
 */
class AccessCore extends \ObjectModel
{
    /** @var int Profile id which address belongs to */
    public $id_profile = \null;
    /** @var int AuthorizationRole id which address belongs to */
    public $id_authorization_role = \null;
    /**
     * @see ObjectModel::$definition
     */
    public static $definition = ['table' => 'access', 'primary' => 'id_profile', 'fields' => ['id_profile' => ['type' => self::TYPE_INT, 'validate' => 'isNullOrUnsignedId', 'copy_post' => \false], 'id_authorization_role' => ['type' => self::TYPE_INT, 'validate' => 'isNullOrUnsignedId', 'copy_post' => \false]]];
    /**
     * Is access granted to this Role?
     *
     * @param string|array<string> $role Role name ("Superadministrator", "sales", "translator", etc.)
     * @param int $idProfile Profile ID
     *
     * @return bool Whether access is granted
     *
     * @throws Exception
     */
    public static function isGranted($role, $idProfile)
    {
    }
    /**
     * Get all roles for the Profile ID.
     *
     * @param int $idProfile Profile ID
     *
     * @return array Roles
     */
    public static function getRoles($idProfile)
    {
    }
    /**
     * Find Tab ID by slug.
     *
     * @param string $authSlug Slug
     *
     * @return string Tab ID
     * @todo: Find out if we should return an int instead. (breaking change)
     */
    public static function findIdTabByAuthSlug($authSlug)
    {
    }
    /**
     * Find slug by Tab ID.
     *
     * @param int $idTab Tab ID
     *
     * @return string Full module slug
     */
    public static function findSlugByIdTab($idTab)
    {
    }
    /**
     * Find slug by Parent Tab ID.
     *
     * @param int $idParentTab Tab ID
     *
     * @return array<int, array<string, string>> Full module slug
     */
    public static function findSlugByIdParentTab($idParentTab)
    {
    }
    /**
     * Find slug by Module ID.
     *
     * @param int $idModule Module ID
     *
     * @return string Full module slug
     */
    public static function findSlugByIdModule($idModule)
    {
    }
    /**
     * Sluggify tab.
     *
     * @param array $tab Tab class name
     * @param string $authorization 'CREATE'|'READ'|'UPDATE'|'DELETE'
     *
     * @return string Full slug for tab
     */
    public static function sluggifyTab($tab, $authorization = '')
    {
    }
    /**
     * Sluggify module.
     *
     * @param array $module Module name
     * @param string $authorization 'CREATE'|'READ'|'UPDATE'|'DELETE'
     *
     * @return string Full slug for module
     */
    public static function sluggifyModule($module, $authorization = '')
    {
    }
    /**
     * Get legacy authorization.
     *
     * @param string $legacyAuth Legacy authorization
     *
     * @return bool|string|array Authorization
     */
    public static function getAuthorizationFromLegacy($legacyAuth)
    {
    }
    /**
     * Add access.
     *
     * @param int $idProfile Profile ID
     * @param int $idRole Role ID
     *
     * @return string Whether access has been successfully granted ("ok", "error")
     */
    public function addAccess($idProfile, $idRole)
    {
    }
    /**
     * Remove access.
     *
     * @param int $idProfile Profile ID
     * @param int $idRole Role ID
     *
     * @return string Whether access has been successfully removed ("ok", "error")
     */
    public function removeAccess($idProfile, $idRole)
    {
    }
    /**
     * Add module access.
     *
     * @param int $idProfile Profile ID
     * @param int $idRole Role ID
     *
     * @return string Whether module access has been successfully granted ("ok", "error")
     */
    public function addModuleAccess($idProfile, $idRole)
    {
    }
    /**
     * @param int $idProfile
     * @param int $idRole
     *
     * @return string 'ok'|'error'
     */
    public function removeModuleAccess($idProfile, $idRole)
    {
    }
    /**
     * Update legacy access.
     *
     * @param int $idProfile Profile ID
     * @param int $idTab Tab ID
     * @param string $lgcAuth Legacy authorization
     * @param bool $enabled Whether access should be granted
     * @param bool $addFromParent Child from parents
     *
     * @return string Whether legacy access has been successfully updated ("ok", "error")
     *
     * @throws Exception
     */
    public function updateLgcAccess($idProfile, $idTab, $lgcAuth, $enabled, $addFromParent = \true)
    {
    }
    /**
     * Update (legacy) Module access.
     *
     * @param int $idProfile Profile ID
     * @param int $idModule Module ID
     * @param string $lgcAuth Legacy authorization
     * @param bool $enabled Whether module access should be granted
     *
     * @return string Whether module access has been succesfully changed ("ok", "error")
     */
    public function updateLgcModuleAccess($idProfile, $idModule, $lgcAuth, $enabled)
    {
    }
}

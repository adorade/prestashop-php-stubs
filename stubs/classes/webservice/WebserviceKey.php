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
class WebserviceKeyCore extends \ObjectModel
{
    /** @var string Key */
    public $key;
    /** @var bool Webservice Account statuts */
    public $active = \true;
    /** @var string Webservice Account description */
    public $description;
    /**
     * @see ObjectModel::$definition
     */
    public static $definition = ['table' => 'webservice_account', 'primary' => 'id_webservice_account', 'fields' => ['active' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool'], 'key' => ['type' => self::TYPE_STRING, 'required' => \true, 'size' => 32], 'description' => ['type' => self::TYPE_STRING, 'size' => 4194303]]];
    public function add($autodate = \true, $nullValues = \false)
    {
    }
    public static function keyExists($key)
    {
    }
    public function delete()
    {
    }
    public function deleteAssociations()
    {
    }
    /**
     * @param string $auth_key
     */
    public static function getPermissionForAccount($auth_key)
    {
    }
    /**
     * @param string $auth_key
     */
    public static function isKeyActive($auth_key)
    {
    }
    /**
     * @param string $auth_key
     */
    public static function getClassFromKey($auth_key)
    {
    }
    /**
     * @param string $auth_key
     *
     * @return int
     */
    public static function getIdFromKey(string $auth_key)
    {
    }
    /**
     * @param int $id_account
     * @param array $permissions_to_set
     *
     * @return bool
     */
    public static function setPermissionForAccount($id_account, $permissions_to_set)
    {
    }
}

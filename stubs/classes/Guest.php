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
 * Class GuestCore.
 */
class GuestCore extends \ObjectModel
{
    public $id_operating_system;
    public $id_web_browser;
    public $id_customer;
    public $javascript;
    public $screen_resolution_x;
    public $screen_resolution_y;
    public $screen_color;
    public $sun_java;
    public $adobe_flash;
    public $adobe_director;
    public $apple_quicktime;
    public $real_player;
    public $windows_media;
    public $accept_language;
    public $mobile_theme;
    /**
     * @see ObjectModel::$definition
     */
    public static $definition = ['table' => 'guest', 'primary' => 'id_guest', 'fields' => ['id_operating_system' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId'], 'id_web_browser' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId'], 'id_customer' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId'], 'javascript' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool'], 'screen_resolution_x' => ['type' => self::TYPE_INT, 'validate' => 'isInt'], 'screen_resolution_y' => ['type' => self::TYPE_INT, 'validate' => 'isInt'], 'screen_color' => ['type' => self::TYPE_INT, 'validate' => 'isInt'], 'sun_java' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool'], 'adobe_flash' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool'], 'adobe_director' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool'], 'apple_quicktime' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool'], 'real_player' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool'], 'windows_media' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool'], 'accept_language' => ['type' => self::TYPE_STRING, 'validate' => 'isGenericName', 'size' => 8], 'mobile_theme' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool']]];
    protected $webserviceParameters = ['fields' => ['id_customer' => ['xlink_resource' => 'customers']]];
    /**
     * Set user agent.
     */
    public function userAgent()
    {
    }
    /**
     * Get Guest Language.
     *
     * @param string $acceptLanguage
     *
     * @return mixed|string
     */
    protected function getLanguage($acceptLanguage)
    {
    }
    /**
     * Get browser.
     *
     * @param string $userAgent
     */
    protected function getBrowser($userAgent)
    {
    }
    /**
     * Get OS.
     *
     * @param string $userAgent
     */
    protected function getOs($userAgent)
    {
    }
    /**
     * Get Guest ID from Customer ID.
     *
     * @param int $idCustomer Customer ID
     *
     * @return bool|int
     */
    public static function getFromCustomer($idCustomer)
    {
    }
    /**
     * Merge with Customer.
     *
     * @param int $idGuest Guest ID
     * @param int $idCustomer Customer ID
     *
     * @return bool
     */
    public function mergeWithCustomer($idGuest, $idCustomer)
    {
    }
    /**
     * Set new guest.
     *
     * @param CookieCore $cookie
     */
    public static function setNewGuest($cookie)
    {
    }
}

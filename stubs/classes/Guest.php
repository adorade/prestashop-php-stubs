<?php

/**
 * For the full copyright and license information, please view the
 * docs/licenses/LICENSE.txt file that was distributed with this source code.
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
    /**
     * @deprecated since 9.0.0 - This functionality was disabled. Attribute will be completely removed
     * in the next major. There is no replacement, all clients should have the same experience.
     *
     * @var bool Mobile Theme */
    public $mobile_theme = \false;
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

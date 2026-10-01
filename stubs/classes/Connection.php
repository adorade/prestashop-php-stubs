<?php

/**
 * For the full copyright and license information, please view the
 * docs/licenses/LICENSE.txt file that was distributed with this source code.
 */
/**
 * Class ConnectionCore.
 */
class ConnectionCore extends \ObjectModel
{
    /** @var int */
    public $id_guest;
    /** @var int */
    public $id_page;
    /** @var string */
    public $ip_address;
    /** @var string */
    public $http_referer;
    /** @var int */
    public $id_shop;
    /** @var int */
    public $id_shop_group;
    /** @var string */
    public $date_add;
    /**
     * @see ObjectModel::$definition
     */
    public static $definition = ['table' => 'connections', 'primary' => 'id_connections', 'fields' => ['id_guest' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => \true], 'id_page' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => \true], 'ip_address' => ['type' => self::TYPE_INT, 'validate' => 'isInt'], 'http_referer' => ['type' => self::TYPE_STRING, 'validate' => 'isAbsoluteUrl', 'size' => 255], 'id_shop' => ['type' => self::TYPE_INT, 'required' => \true], 'id_shop_group' => ['type' => self::TYPE_INT, 'required' => \true], 'date_add' => ['type' => self::TYPE_DATE, 'validate' => 'isDate']]];
    /**
     * @see ObjectModel::getFields()
     *
     * @return array
     */
    public function getFields()
    {
    }
    /**
     * @param Cookie $cookie
     * @param bool $full
     *
     * @return array
     */
    public static function setPageConnection($cookie, $full = \true)
    {
    }
    /**
     * Check if the current visitor is a bot
     *
     * @return bool
     */
    public static function isBot()
    {
    }
    /**
     * @param Cookie $cookie
     *
     * @return int|bool Connection ID
     *                  `false` if failure
     */
    public static function setNewConnection($cookie)
    {
    }
    /**
     * @param int $idConnections
     * @param int $idPage
     * @param string $timeStart
     * @param int $time
     */
    public static function setPageTime($idConnections, $idPage, $timeStart, $time)
    {
    }
    /**
     * Clean connections page.
     */
    public static function cleanConnectionsPages()
    {
    }
}

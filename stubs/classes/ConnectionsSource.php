<?php

/**
 * For the full copyright and license information, please view the
 * docs/licenses/LICENSE.txt file that was distributed with this source code.
 */
/**
 * Class ConnectionsSourceCore.
 */
class ConnectionsSourceCore extends \ObjectModel
{
    public $id_connections;
    public $http_referer;
    public $request_uri;
    public $keywords;
    public $date_add;
    public static $uri_max_size = 255;
    /**
     * @see ObjectModel::$definition
     */
    public static $definition = ['table' => 'connections_source', 'primary' => 'id_connections_source', 'fields' => ['id_connections' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => \true], 'http_referer' => ['type' => self::TYPE_STRING, 'validate' => 'isAbsoluteUrl', 'size' => 255], 'request_uri' => ['type' => self::TYPE_STRING, 'validate' => 'isUrl', 'size' => 255], 'keywords' => ['type' => self::TYPE_STRING, 'validate' => 'isMessage', 'size' => 255], 'date_add' => ['type' => self::TYPE_DATE, 'validate' => 'isDate', 'required' => \true]]];
    public static function logHttpReferer(?\Cookie $cookie = \null)
    {
    }
    /**
     * Get Order sources.
     *
     * @param int $idOrder Order ID
     *
     * @return array|false|mysqli_result|PDOStatement|resource|null
     */
    public static function getOrderSources($idOrder)
    {
    }
}

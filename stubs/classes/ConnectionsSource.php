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
    public static $definition = ['table' => 'connections_source', 'primary' => 'id_connections_source', 'fields' => ['id_connections' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => \true], 'http_referer' => ['type' => self::TYPE_STRING, 'validate' => 'isAbsoluteUrl'], 'request_uri' => ['type' => self::TYPE_STRING, 'validate' => 'isUrl'], 'keywords' => ['type' => self::TYPE_STRING, 'validate' => 'isMessage'], 'date_add' => ['type' => self::TYPE_DATE, 'validate' => 'isDate', 'required' => \true]]];
    public static function logHttpReferer(\Cookie $cookie = \null)
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

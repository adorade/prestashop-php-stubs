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
    public static $definition = ['table' => 'connections', 'primary' => 'id_connections', 'fields' => ['id_guest' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => \true], 'id_page' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => \true], 'ip_address' => ['type' => self::TYPE_INT, 'validate' => 'isInt'], 'http_referer' => ['type' => self::TYPE_STRING, 'validate' => 'isAbsoluteUrl'], 'id_shop' => ['type' => self::TYPE_INT, 'required' => \true], 'id_shop_group' => ['type' => self::TYPE_INT, 'required' => \true], 'date_add' => ['type' => self::TYPE_DATE, 'validate' => 'isDate']]];
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

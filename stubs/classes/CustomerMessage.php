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
 * Class CustomerMessageCore.
 */
class CustomerMessageCore extends \ObjectModel
{
    public $id;
    /** @var int CustomerThread ID */
    public $id_customer_thread;
    /** @var int */
    public $id_employee;
    /** @var string */
    public $message;
    /** @var string */
    public $file_name;
    /** @var string */
    public $ip_address;
    /** @var string */
    public $user_agent;
    /** @var bool */
    public $private;
    /** @var string */
    public $date_add;
    /** @var string */
    public $date_upd;
    /** @var bool */
    public $read;
    /**
     * @see ObjectModel::$definition
     */
    public static $definition = ['table' => 'customer_message', 'primary' => 'id_customer_message', 'fields' => ['id_employee' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId'], 'id_customer_thread' => ['type' => self::TYPE_INT], 'ip_address' => ['type' => self::TYPE_STRING, 'validate' => 'isIp2Long', 'size' => 15], 'message' => ['type' => self::TYPE_HTML, 'required' => \true, 'size' => 4194303, 'validate' => 'isCleanHtml'], 'file_name' => ['type' => self::TYPE_STRING], 'user_agent' => ['type' => self::TYPE_STRING], 'private' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool'], 'date_add' => ['type' => self::TYPE_DATE, 'validate' => 'isDate'], 'date_upd' => ['type' => self::TYPE_DATE, 'validate' => 'isDate'], 'read' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool']]];
    /** @var array */
    protected $webserviceParameters = ['fields' => ['id_employee' => ['xlink_resource' => 'employees'], 'id_customer_thread' => ['xlink_resource' => 'customer_threads']]];
    /**
     * Get CustomerMessages by Order ID.
     *
     * @param int $idOrder Order ID
     * @param bool $private Private
     *
     * @return array|false|mysqli_result|PDOStatement|resource|null
     */
    public static function getMessagesByOrderId($idOrder, $private = \true)
    {
    }
    /**
     * Get total CustomerMessages.
     *
     * @param string|null $where Additional SQL query
     *
     * @return int Amount of CustomerMessages found
     */
    public static function getTotalCustomerMessages($where = \null)
    {
    }
    /**
     * Deletes current CustomerMessage from the database.
     *
     * @return bool `true` if delete was successful
     *
     * @throws PrestaShopException
     */
    public function delete()
    {
    }
    /**
     * Get the last message for a thread customer.
     *
     * @param int $id_customer_thread Thread customer reference
     *
     * @return string Last message
     */
    public static function getLastMessageForCustomerThread($id_customer_thread)
    {
    }
}

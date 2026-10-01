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
class CustomerThreadCore extends \ObjectModel
{
    public $id;
    public $id_shop;
    public $id_lang;
    public $id_contact;
    public $id_customer;
    public $id_order;
    public $id_product;
    public $status;
    public $email;
    public $token;
    public $date_add;
    public $date_upd;
    /**
     * @see ObjectModel::$definition
     */
    public static $definition = ['table' => 'customer_thread', 'primary' => 'id_customer_thread', 'fields' => ['id_lang' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => \true], 'id_contact' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => \true], 'id_shop' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId'], 'id_customer' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId'], 'id_order' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId'], 'id_product' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId'], 'email' => ['type' => self::TYPE_STRING, 'validate' => 'isEmail', 'size' => 255], 'token' => ['type' => self::TYPE_STRING, 'validate' => 'isGenericName', 'required' => \true], 'status' => ['type' => self::TYPE_STRING], 'date_add' => ['type' => self::TYPE_DATE, 'validate' => 'isDate'], 'date_upd' => ['type' => self::TYPE_DATE, 'validate' => 'isDate']]];
    protected $webserviceParameters = ['fields' => ['id_lang' => ['xlink_resource' => 'languages'], 'id_shop' => ['xlink_resource' => 'shops'], 'id_customer' => ['xlink_resource' => 'customers'], 'id_order' => ['xlink_resource' => 'orders'], 'id_product' => ['xlink_resource' => 'products']], 'associations' => ['customer_messages' => ['resource' => 'customer_message', 'id' => ['required' => \true]]]];
    public function getWsCustomerMessages()
    {
    }
    public function delete()
    {
    }
    public static function getCustomerMessages($id_customer, $read = \null, $id_order = \null)
    {
    }
    public static function getIdCustomerThreadByEmailAndIdOrder($email, $id_order)
    {
    }
    public static function getContacts()
    {
    }
    public static function getTotalCustomerThreads($where = \null)
    {
    }
    public static function getMessageCustomerThreads($id_customer_thread)
    {
    }
    public static function getNextThread($id_customer_thread)
    {
    }
    public static function getCustomerMessagesOrder($id_customer, $id_order)
    {
    }
}

<?php

/**
 * For the full copyright and license information, please view the
 * docs/licenses/LICENSE.txt file that was distributed with this source code.
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
    public static $definition = ['table' => 'customer_thread', 'primary' => 'id_customer_thread', 'fields' => ['id_lang' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => \true], 'id_contact' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => \true], 'id_shop' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId'], 'id_customer' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId'], 'id_order' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId'], 'id_product' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId'], 'email' => ['type' => self::TYPE_STRING, 'validate' => 'isEmail', 'size' => 255], 'token' => ['type' => self::TYPE_STRING, 'validate' => 'isGenericName', 'required' => \true, 'size' => 12], 'status' => ['type' => self::TYPE_STRING], 'date_add' => ['type' => self::TYPE_DATE, 'validate' => 'isDate'], 'date_upd' => ['type' => self::TYPE_DATE, 'validate' => 'isDate']]];
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

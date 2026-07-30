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
 * Class MessageCore.
 */
class MessageCore extends \ObjectModel
{
    public $id;
    /** @var string message content */
    public $message;
    /** @var int Cart ID (if applicable) */
    public $id_cart;
    /** @var int Order ID (if applicable) */
    public $id_order;
    /** @var int Customer ID (if applicable) */
    public $id_customer;
    /** @var int Employee ID (if applicable) */
    public $id_employee;
    /** @var bool Message is not displayed to the customer */
    public $private;
    /** @var string Object creation date */
    public $date_add;
    /**
     * @see ObjectModel::$definition
     */
    public static $definition = ['table' => 'message', 'primary' => 'id_message', 'fields' => ['message' => ['type' => self::TYPE_STRING, 'validate' => 'isCleanHtml', 'required' => \true, 'size' => 4194303], 'id_cart' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId'], 'id_order' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId'], 'id_customer' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId'], 'id_employee' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId'], 'private' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool'], 'date_add' => ['type' => self::TYPE_DATE, 'validate' => 'isDate']]];
    protected $webserviceParameters = ['fields' => ['id_cart' => ['xlink_resource' => 'carts'], 'id_order' => ['xlink_resource' => 'orders'], 'id_customer' => ['xlink_resource' => 'customers'], 'id_employee' => ['xlink_resource' => 'employees']]];
    /**
     * Return the last message from cart.
     *
     * @param int $idCart Cart ID
     *
     * @return array Message
     */
    public static function getMessageByCartId($idCart)
    {
    }
    /**
     * Return messages from Order ID.
     *
     * @param int $idOrder Order ID
     * @param bool $private return WITH private messages
     *
     * @return array Messages
     */
    public static function getMessagesByOrderId($idOrder, $private = \false, \Context $context = \null)
    {
    }
    /**
     * Return messages from Cart ID.
     *
     * @param int $idCart Cart ID
     * @param bool $private return WITH private messages
     * @param Context|null $context
     *
     * @return array Messages
     */
    public static function getMessagesByCartId($idCart, $private = \false, \Context $context = \null)
    {
    }
    /**
     * Registered a message 'readed'.
     *
     * @param int $idMessage Message ID
     * @param int $idEmployee Employee ID
     *
     * @return bool
     */
    public static function markAsReaded($idMessage, $idEmployee)
    {
    }
}

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
class OrderReturnCore extends \ObjectModel
{
    /** @var int */
    public $id;
    /** @var int */
    public $id_customer;
    /** @var int */
    public $id_order;
    /** @var int */
    public $state;
    /** @var string message content */
    public $question;
    /** @var string Object creation date */
    public $date_add;
    /** @var string Object last modification date */
    public $date_upd;
    /**
     * @see ObjectModel::$definition
     */
    public static $definition = ['table' => 'order_return', 'primary' => 'id_order_return', 'fields' => ['id_customer' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => \true], 'id_order' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => \true], 'question' => ['type' => self::TYPE_HTML, 'validate' => 'isCleanHtml', 'size' => 4194303], 'state' => ['type' => self::TYPE_STRING], 'date_add' => ['type' => self::TYPE_DATE, 'validate' => 'isDate'], 'date_upd' => ['type' => self::TYPE_DATE, 'validate' => 'isDate']]];
    public function addReturnDetail($order_detail_list, $product_qty_list, $customization_ids, $customization_qty_input)
    {
    }
    public function checkEnoughProduct($order_detail_list, $product_qty_list, $customization_ids, $customization_qty_input)
    {
    }
    public function countProduct()
    {
    }
    public static function getOrdersReturn($customer_id, $order_id = \false, $no_denied = \false, \Context $context = \null, int $idOrderReturn = \null)
    {
    }
    public static function getOrdersReturnDetail($id_order_return)
    {
    }
    /**
     * @param int $order_return_id
     * @param Order $order
     *
     * @return array
     */
    public static function getOrdersReturnProducts($order_return_id, $order)
    {
    }
    public static function getReturnedCustomizedProducts($id_order)
    {
    }
    public static function deleteOrderReturnDetail($id_order_return, $id_order_detail, $id_customization = 0)
    {
    }
    /**
     * Get return details for one product line.
     *
     * @param int $id_order_detail
     */
    public static function getProductReturnDetail($id_order_detail)
    {
    }
    /**
     * Add returned quantity to products list.
     *
     * @param array $products
     * @param int $id_order
     */
    public static function addReturnedQuantity(&$products, $id_order)
    {
    }
}

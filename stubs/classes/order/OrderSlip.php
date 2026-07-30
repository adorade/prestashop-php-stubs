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
class OrderSlipCore extends \ObjectModel
{
    /** @var int */
    public $id;
    /** @var int */
    public $id_customer;
    /** @var int */
    public $id_order;
    /** @var float */
    public $conversion_rate;
    /** @var float */
    public $total_products_tax_excl;
    /** @var float */
    public $total_products_tax_incl;
    /** @var float */
    public $total_shipping_tax_excl;
    /** @var float */
    public $total_shipping_tax_incl;
    /** @var float */
    public $amount;
    /** @var bool */
    public $shipping_cost;
    /** @var float */
    public $shipping_cost_amount;
    /** @var int */
    public $partial;
    /** @var string Object creation date */
    public $date_add;
    /** @var string Object last modification date */
    public $date_upd;
    /** @var int */
    public $order_slip_type = 0;
    /**
     * @see ObjectModel::$definition
     */
    public static $definition = ['table' => 'order_slip', 'primary' => 'id_order_slip', 'fields' => ['id_customer' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => \true], 'id_order' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => \true], 'conversion_rate' => ['type' => self::TYPE_FLOAT, 'validate' => 'isFloat', 'required' => \true], 'total_products_tax_excl' => ['type' => self::TYPE_FLOAT, 'validate' => 'isFloat', 'required' => \true], 'total_products_tax_incl' => ['type' => self::TYPE_FLOAT, 'validate' => 'isFloat', 'required' => \true], 'total_shipping_tax_excl' => ['type' => self::TYPE_FLOAT, 'validate' => 'isFloat', 'required' => \true], 'total_shipping_tax_incl' => ['type' => self::TYPE_FLOAT, 'validate' => 'isFloat', 'required' => \true], 'amount' => ['type' => self::TYPE_FLOAT, 'validate' => 'isFloat'], 'shipping_cost' => ['type' => self::TYPE_BOOL], 'shipping_cost_amount' => ['type' => self::TYPE_FLOAT, 'validate' => 'isFloat'], 'partial' => ['type' => self::TYPE_INT], 'date_add' => ['type' => self::TYPE_DATE, 'validate' => 'isDate'], 'date_upd' => ['type' => self::TYPE_DATE, 'validate' => 'isDate'], 'order_slip_type' => ['type' => self::TYPE_INT, 'validate' => 'isInt']]];
    protected $webserviceParameters = ['objectNodeName' => 'order_slip', 'objectsNodeName' => 'order_slips', 'fields' => ['id_customer' => ['xlink_resource' => 'customers'], 'id_order' => ['xlink_resource' => 'orders']], 'associations' => ['order_slip_details' => ['resource' => 'order_slip_detail', 'setter' => \false, 'virtual_entity' => \true, 'fields' => ['id' => [], 'id_order_detail' => ['required' => \true], 'product_quantity' => ['required' => \true], 'amount_tax_excl' => ['required' => \true], 'amount_tax_incl' => ['required' => \true]]]]];
    public function addSlipDetail($orderDetailList, $productQtyList)
    {
    }
    public static function getOrdersSlip($customer_id, $order_id = \false)
    {
    }
    public static function getOrdersSlipDetail($id_order_slip = \false, $id_order_detail = \false)
    {
    }
    /**
     * @param int $orderSlipId
     * @param Order $order
     *
     * @return array
     */
    public static function getOrdersSlipProducts($orderSlipId, $order)
    {
    }
    /**
     * Get resume of all refund for one product line.
     *
     * @param int $id_order_detail
     *
     * @deprecated This method should not be used any more because sometimes OrderSlip is not created, you should use the OrderDetail::total_refunded_tax_excl/incl fields instead
     */
    public static function getProductSlipResume($id_order_detail)
    {
    }
    /**
     * Get resume of all shipping refund for one order.
     *
     * @param int $idOrder
     */
    public static function getShippingSlipResume(int $idOrder)
    {
    }
    /**
     * Get refund details for one product line.
     *
     * @param int $id_order_detail
     */
    public static function getProductSlipDetail($id_order_detail)
    {
    }
    public function getProducts()
    {
    }
    public static function getSlipsIdByDate($dateFrom, $dateTo)
    {
    }
    public static function create(\Order $order, $product_list, $shipping_cost = \false, $amount = 0, $amount_choosen = \false, $add_tax = \true)
    {
    }
    protected function addProductOrderSlip($product)
    {
    }
    public static function createPartialOrderSlip($order, $amount, $shipping_cost_amount, $order_detail_list)
    {
    }
    /**
     * @param array<int, array<float|int>> $order_detail_list
     *
     * @throws PrestaShopDatabaseException
     * @throws PrestaShopException
     */
    public function addPartialSlipDetail($order_detail_list)
    {
    }
    public function getEcoTaxTaxesBreakdown()
    {
    }
    public function getWsOrderSlipDetails()
    {
    }
    public function setWsOrderSlipDetails($values)
    {
    }
}

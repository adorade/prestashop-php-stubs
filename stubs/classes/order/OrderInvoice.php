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
class OrderInvoiceCore extends \ObjectModel
{
    public const TAX_EXCL = 0;
    public const TAX_INCL = 1;
    public const DETAIL = 2;
    /** @var int */
    public $id_order;
    /** @var int */
    public $number;
    /** @var int */
    public $delivery_number;
    /** @var string */
    public $delivery_date = '0000-00-00 00:00:00';
    /** @var float */
    public $total_discount_tax_excl;
    /** @var float */
    public $total_discount_tax_incl;
    /** @var float */
    public $total_paid_tax_excl;
    /** @var float */
    public $total_paid_tax_incl;
    /** @var float */
    public $total_products;
    /** @var float */
    public $total_products_wt;
    /** @var float */
    public $total_shipping_tax_excl;
    /** @var float */
    public $total_shipping_tax_incl;
    /** @var int */
    public $shipping_tax_computation_method;
    /** @var float */
    public $total_wrapping_tax_excl;
    /** @var float */
    public $total_wrapping_tax_incl;
    /** @var string shop address */
    public $shop_address;
    /** @var string note */
    public $note;
    /** @var string */
    public $date_add;
    /** @var array Total paid cache */
    protected static $_total_paid_cache = [];
    /**
     * @see ObjectModel::$definition
     */
    public static $definition = ['table' => 'order_invoice', 'primary' => 'id_order_invoice', 'fields' => ['id_order' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => \true], 'number' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => \true], 'delivery_number' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId'], 'delivery_date' => ['type' => self::TYPE_DATE, 'validate' => 'isDateFormat'], 'total_discount_tax_excl' => ['type' => self::TYPE_FLOAT], 'total_discount_tax_incl' => ['type' => self::TYPE_FLOAT], 'total_paid_tax_excl' => ['type' => self::TYPE_FLOAT], 'total_paid_tax_incl' => ['type' => self::TYPE_FLOAT], 'total_products' => ['type' => self::TYPE_FLOAT], 'total_products_wt' => ['type' => self::TYPE_FLOAT], 'total_shipping_tax_excl' => ['type' => self::TYPE_FLOAT], 'total_shipping_tax_incl' => ['type' => self::TYPE_FLOAT], 'shipping_tax_computation_method' => ['type' => self::TYPE_INT], 'total_wrapping_tax_excl' => ['type' => self::TYPE_FLOAT], 'total_wrapping_tax_incl' => ['type' => self::TYPE_FLOAT], 'shop_address' => ['type' => self::TYPE_HTML, 'validate' => 'isCleanHtml', 'size' => 4194303], 'note' => ['type' => self::TYPE_HTML, 'size' => 4194303], 'date_add' => ['type' => self::TYPE_DATE, 'validate' => 'isDate']]];
    public function add($autodate = \true, $null_values = \false)
    {
    }
    public function getProductsDetail()
    {
    }
    /**
     * Returns OrderInvoice for a specific invoice number and order ID.
     * It's highly recommended to also provide an order ID, because you
     * may end up with a different invoice than you wanted.
     *
     * DO NOT CONFUSE the number with id_order_invoice, that's a different,
     * unique identifier of the invoice.
     *
     * @param string|int $invoiceNumber
     * @param int $orderId
     *
     * @return OrderInvoice|false
     */
    public static function getInvoiceByNumber($invoiceNumber, $orderId = \null)
    {
    }
    /**
     * Get order products.
     *
     * @return array Products with price, quantity (with taxe and without)
     */
    public function getProducts($products = \false, $selected_products = \false, $selected_qty = \false)
    {
    }
    protected function setProductCustomizedDatas(&$product, $customized_datas)
    {
    }
    /**
     * This method allow to add stock information on a product detail.
     *
     * @param array $product
     */
    protected function setProductCurrentStock(&$product)
    {
    }
    /**
     * This method allow to add image information on a product detail.
     *
     * @param array $product
     */
    protected function setProductImageInformations(&$product)
    {
    }
    /**
     * This method returns true if at least one order details uses the
     * One After Another tax computation method.
     *
     * @since 1.5
     *
     * @return bool
     */
    public function useOneAfterAnotherTaxComputationMethod()
    {
    }
    public function displayTaxBasesInProductTaxesBreakdown()
    {
    }
    public function getOrder()
    {
    }
    public function getProductTaxesBreakdown($order = \null)
    {
    }
    /**
     * Returns the shipping taxes breakdown.
     *
     * @since 1.5
     *
     * @param Order $order
     *
     * @return array
     */
    public function getShippingTaxesBreakdown($order)
    {
    }
    /**
     * Returns the wrapping taxes breakdown.
     *
     * @return array
     */
    public function getWrappingTaxesBreakdown()
    {
    }
    /**
     * Returns the ecotax taxes breakdown.
     *
     * @since 1.5
     *
     * @return array
     */
    public function getEcoTaxTaxesBreakdown()
    {
    }
    /**
     * Returns all the order invoice that match the date interval.
     *
     * @since 1.5
     *
     * @param string $date_from
     * @param string $date_to
     *
     * @return array collection of OrderInvoice
     */
    public static function getByDateInterval($date_from, $date_to)
    {
    }
    /**
     * @since 1.5.0.3
     *
     * @param int $id_order_state
     *
     * @return array collection of OrderInvoice
     */
    public static function getByStatus($id_order_state)
    {
    }
    /**
     * @since 1.5.0.3
     *
     * @param string $date_from
     * @param string $date_to
     *
     * @return array collection of invoice
     */
    public static function getByDeliveryDateInterval($date_from, $date_to)
    {
    }
    /**
     * @since 1.5
     *
     * @param int $id_order_invoice
     */
    public static function getCarrier($id_order_invoice)
    {
    }
    /**
     * @since 1.5
     *
     * @param int $id_order_invoice
     */
    public static function getCarrierId($id_order_invoice)
    {
    }
    /**
     * @param int $id
     *
     * @return OrderInvoice
     *
     * @throws PrestaShopException
     */
    public static function retrieveOneById($id)
    {
    }
    /**
     * Amounts of payments.
     *
     * @since 1.5.0.2
     *
     * @return float Total paid
     */
    public function getTotalPaid()
    {
    }
    /**
     * Rest Paid.
     *
     * @since 1.5.0.2
     *
     * @return float Rest Paid
     */
    public function getRestPaid()
    {
    }
    /**
     * Return collection of order invoice object linked to the payments of the current order invoice object.
     *
     * @since 1.5.0.14
     *
     * @return PrestaShopCollection|array Collection of OrderInvoice or empty array
     */
    public function getSibling()
    {
    }
    /**
     * Return total to paid of sibling invoices.
     *
     * @param int $mod TAX_EXCL, TAX_INCL, DETAIL
     *
     * @return float|array
     *
     * @since 1.5.0.14
     */
    public function getSiblingTotal($mod = \OrderInvoice::TAX_INCL)
    {
    }
    /**
     * Get global rest to paid
     *    This method will return something different of the method getRestPaid if
     *    there is an other invoice linked to the payments of the current invoice.
     *
     * @since 1.5.0.13
     */
    public function getGlobalRestPaid()
    {
    }
    /**
     * @since 1.5.0.2
     *
     * @return bool Is paid ?
     */
    public function isPaid()
    {
    }
    /**
     * @since 1.5.0.2
     *
     * @return PrestaShopCollection Collection of Order payment
     */
    public function getOrderPaymentCollection()
    {
    }
    /**
     * Get the formatted number of invoice.
     *
     * @since 1.5.0.2
     *
     * @param int $id_lang for invoice_prefix
     *
     * @return string
     */
    public function getInvoiceNumberFormatted($id_lang, $id_shop = \null)
    {
    }
    public function saveCarrierTaxCalculator(array $taxes_amount)
    {
    }
    public function saveWrappingTaxCalculator(array $taxes_amount)
    {
    }
    public static function getCurrentFormattedShopAddress($id_shop = \null)
    {
    }
    /**
     * This method is used to fix shop addresses that cannot be fixed during upgrade process
     * (because uses the whole environnement of PS classes that is not available during upgrade).
     * This method should execute once on an upgraded PrestaShop to fix all OrderInvoices in one shot.
     * This method is triggered once during a (non bulk) creation of a PDF from an OrderInvoice that is not fixed yet.
     *
     * @since 1.6.1.1
     */
    public static function fixAllShopAddresses()
    {
    }
}

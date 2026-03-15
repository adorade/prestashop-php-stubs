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
class OrderDetailCore extends \ObjectModel
{
    /** @var int */
    public $id_order_detail;
    /** @var int */
    public $id_order;
    /** @var int */
    public $id_order_invoice;
    /** @var int */
    public $product_id;
    /** @var int */
    public $id_shop;
    /** @var int */
    public $product_attribute_id;
    /** @var int */
    public $id_customization;
    /** @var string */
    public $product_name;
    /** @var int */
    public $product_quantity;
    /** @var int */
    public $product_quantity_in_stock;
    /** @var int */
    public $product_quantity_return;
    /** @var int */
    public $product_quantity_refunded;
    /** @var int */
    public $product_quantity_reinjected;
    /**
     * @deprecated since 1.5 Use unit_price_tax_excl instead
     *
     * @var float Without taxes, includes ecotax
     */
    public $product_price;
    /** @var float */
    public $original_product_price;
    /** @var float With taxes, includes ecotax */
    public $unit_price_tax_incl;
    /** @var float Without taxes, includes ecotax */
    public $unit_price_tax_excl;
    /** @var float With taxes, includes ecotax */
    public $total_price_tax_incl;
    /** @var float Without taxes, includes ecotax */
    public $total_price_tax_excl;
    /** @var float */
    public $reduction_percent;
    /** @var float */
    public $reduction_amount;
    /** @var float */
    public $reduction_amount_tax_excl;
    /** @var float */
    public $reduction_amount_tax_incl;
    /** @var float */
    public $group_reduction;
    /** @var float */
    public $product_quantity_discount;
    /** @var string */
    public $product_ean13;
    /** @var string */
    public $product_isbn;
    /** @var string */
    public $product_upc;
    /** @var string */
    public $product_mpn;
    /** @var string */
    public $product_reference;
    /** @var string */
    public $product_supplier_reference;
    /** @var float */
    public $product_weight;
    /** @var float */
    public $ecotax;
    /** @var float */
    public $ecotax_tax_rate;
    /** @var int */
    public $discount_quantity_applied;
    /** @var string|null */
    public $download_hash;
    /** @var int */
    public $download_nb;
    /** @var string */
    public $download_deadline;
    /**
     * @var string
     *
     * @deprecated Order Detail Tax is saved in order_detail_tax table now
     */
    public $tax_name;
    /**
     * @var float
     *
     * @deprecated Order Detail Tax is saved in order_detail_tax table now
     */
    public $tax_rate;
    /** @var float */
    public $tax_computation_method;
    /** @var int Id tax rules group */
    public $id_tax_rules_group;
    /** @var int Id warehouse */
    public $id_warehouse;
    /** @var float additional shipping price tax excl */
    public $total_shipping_price_tax_excl;
    /** @var float additional shipping price tax incl */
    public $total_shipping_price_tax_incl;
    /** @var float */
    public $purchase_supplier_price;
    /** @var float */
    public $original_wholesale_price;
    /** @var float */
    public $total_refunded_tax_excl;
    /** @var float */
    public $total_refunded_tax_incl;
    /**
     * @see ObjectModel::$definition
     */
    public static $definition = ['table' => 'order_detail', 'primary' => 'id_order_detail', 'fields' => ['id_order' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => \true], 'id_order_invoice' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId'], 'id_warehouse' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => \true], 'id_shop' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => \true], 'product_id' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId'], 'product_attribute_id' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId'], 'id_customization' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId'], 'product_name' => ['type' => self::TYPE_STRING, 'validate' => 'isGenericName', 'required' => \true, 'size' => 4194303], 'product_quantity' => ['type' => self::TYPE_INT, 'validate' => 'isInt', 'required' => \true], 'product_quantity_in_stock' => ['type' => self::TYPE_INT, 'validate' => 'isInt'], 'product_quantity_return' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedInt'], 'product_quantity_refunded' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedInt'], 'product_quantity_reinjected' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedInt'], 'product_price' => ['type' => self::TYPE_FLOAT, 'validate' => 'isPrice', 'required' => \true], 'reduction_percent' => ['type' => self::TYPE_FLOAT, 'validate' => 'isFloat'], 'reduction_amount' => ['type' => self::TYPE_FLOAT, 'validate' => 'isPrice'], 'reduction_amount_tax_incl' => ['type' => self::TYPE_FLOAT, 'validate' => 'isPrice'], 'reduction_amount_tax_excl' => ['type' => self::TYPE_FLOAT, 'validate' => 'isPrice'], 'group_reduction' => ['type' => self::TYPE_FLOAT, 'validate' => 'isFloat'], 'product_quantity_discount' => ['type' => self::TYPE_FLOAT, 'validate' => 'isFloat'], 'product_ean13' => ['type' => self::TYPE_STRING, 'validate' => 'isEan13'], 'product_isbn' => ['type' => self::TYPE_STRING, 'validate' => 'isIsbn'], 'product_upc' => ['type' => self::TYPE_STRING, 'validate' => 'isUpc'], 'product_mpn' => ['type' => self::TYPE_STRING, 'validate' => 'isMpn'], 'product_reference' => ['type' => self::TYPE_STRING, 'validate' => 'isReference'], 'product_supplier_reference' => ['type' => self::TYPE_STRING, 'validate' => 'isReference'], 'product_weight' => ['type' => self::TYPE_FLOAT, 'validate' => 'isFloat'], 'tax_name' => ['type' => self::TYPE_STRING, 'validate' => 'isGenericName'], 'tax_rate' => ['type' => self::TYPE_FLOAT, 'validate' => 'isFloat'], 'tax_computation_method' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId'], 'id_tax_rules_group' => ['type' => self::TYPE_INT, 'validate' => 'isInt'], 'ecotax' => ['type' => self::TYPE_FLOAT, 'validate' => 'isFloat'], 'ecotax_tax_rate' => ['type' => self::TYPE_FLOAT, 'validate' => 'isFloat'], 'discount_quantity_applied' => ['type' => self::TYPE_INT, 'validate' => 'isInt'], 'download_hash' => ['type' => self::TYPE_STRING, 'validate' => 'isGenericName'], 'download_nb' => ['type' => self::TYPE_INT, 'validate' => 'isInt'], 'download_deadline' => ['type' => self::TYPE_DATE, 'validate' => 'isDateFormat'], 'unit_price_tax_incl' => ['type' => self::TYPE_FLOAT, 'validate' => 'isPrice'], 'unit_price_tax_excl' => ['type' => self::TYPE_FLOAT, 'validate' => 'isPrice'], 'total_price_tax_incl' => ['type' => self::TYPE_FLOAT, 'validate' => 'isPrice'], 'total_price_tax_excl' => ['type' => self::TYPE_FLOAT, 'validate' => 'isPrice'], 'total_shipping_price_tax_excl' => ['type' => self::TYPE_FLOAT, 'validate' => 'isPrice'], 'total_shipping_price_tax_incl' => ['type' => self::TYPE_FLOAT, 'validate' => 'isPrice'], 'purchase_supplier_price' => ['type' => self::TYPE_FLOAT, 'validate' => 'isPrice'], 'original_product_price' => ['type' => self::TYPE_FLOAT, 'validate' => 'isPrice'], 'original_wholesale_price' => ['type' => self::TYPE_FLOAT, 'validate' => 'isPrice'], 'total_refunded_tax_excl' => ['type' => self::TYPE_FLOAT, 'validate' => 'isPrice'], 'total_refunded_tax_incl' => ['type' => self::TYPE_FLOAT, 'validate' => 'isPrice']]];
    protected $webserviceParameters = ['fields' => ['id_order' => ['xlink_resource' => 'orders'], 'product_id' => ['xlink_resource' => 'products'], 'product_attribute_id' => ['xlink_resource' => 'combinations'], 'product_quantity_reinjected' => [], 'group_reduction' => [], 'discount_quantity_applied' => [], 'download_hash' => [], 'download_deadline' => []], 'hidden_fields' => ['tax_rate', 'tax_name'], 'associations' => ['taxes' => ['resource' => 'tax', 'getter' => 'getWsTaxes', 'setter' => \false, 'fields' => ['id' => []]]]];
    /** @var bool */
    protected $outOfStock = \false;
    /** @var TaxCalculator|null object */
    protected $tax_calculator = \null;
    /** @var Address object */
    protected $vat_address = \null;
    /** @var Address|null */
    protected $specificPrice = \null;
    /** @var Customer object */
    protected $customer = \null;
    /** @var Context object */
    protected $context = \null;
    public function __construct($id = \null, $id_lang = \null, $context = \null)
    {
    }
    public function delete()
    {
    }
    protected function setContext($id_shop)
    {
    }
    public static function getDownloadFromHash($hash)
    {
    }
    public static function incrementDownload($id_order_detail, $increment = 1)
    {
    }
    /**
     * Returns the tax calculator associated to this order detail.
     *
     * @since 1.5.0.1
     *
     * @return TaxCalculator
     */
    public function getTaxCalculator()
    {
    }
    /**
     * Return the tax calculator associated to this order_detail.
     *
     * @since 1.5.0.1
     *
     * @param int $id_order_detail
     *
     * @return TaxCalculator
     */
    public static function getTaxCalculatorStatic($id_order_detail)
    {
    }
    /**
     * Save the tax calculator.
     *
     * @since 1.5.0.1
     * @deprecated Functionality moved to Order::updateOrderDetailTax
     *             because we need the full order object to do a good job here.
     *             Will no longer be supported after 1.6.1
     *             (Note: this one is not that deprecated because Order::updateOrderDetailTax
     *             performs no update unless order_detail_tax is filled. So we rely on updateTaxAmount
     *             which correctly builds the TaxCalculator with up to date taxes unlike getTaxCalculatorStatic)
     *
     * @return bool
     */
    public function saveTaxCalculator(\Order $order, $replace = \false)
    {
    }
    public function updateTaxAmount($order)
    {
    }
    /**
     * Get a TaxCalculator adapted for the OrderDetail's product and the specified address
     *
     * @param Address $address
     *
     * @return TaxCalculator
     */
    public function getTaxCalculatorByAddress(\Address $address): \TaxCalculator
    {
    }
    /**
     * Dynamically get the taxRulesGroupId instead of relying one the one saved in database
     *
     * @return int
     */
    public function getTaxRulesGroupId(): int
    {
    }
    /**
     * Get a detailed order list of an id_order.
     *
     * @param int $id_order
     *
     * @return array
     */
    public static function getList($id_order)
    {
    }
    public function getTaxList()
    {
    }
    public static function getTaxListStatic($id_order_detail)
    {
    }
    /**
     * Set virtual product information
     *
     * @param array $product
     */
    protected function setVirtualProductInformation($product)
    {
    }
    /**
     * Updates product quantity in stock, according to order status.
     *
     * @param array $product
     * @param int $orderStateId
     */
    protected function updateProductQuantityInStock($product, $orderStateId): void
    {
    }
    /**
     * Apply tax to the product.
     *
     * @param Order $order
     * @param array $product
     */
    protected function setProductTax(\Order $order, $product)
    {
    }
    /**
     * Set specific price of the product.
     *
     * @param Order $order
     * @param array|null $product
     */
    protected function setSpecificPrice(\Order $order, $product = \null)
    {
    }
    /**
     * Set detailed product price to the order detail.
     *
     * @param Order $order
     * @param Cart $cart
     * @param array<string, int|float> $product
     */
    protected function setDetailProductPrice(\Order $order, \Cart $cart, $product)
    {
    }
    /**
     * Create an order detail liable to an id_order.
     *
     * @param Order $order
     * @param Cart $cart
     * @param array $product
     * @param int $id_order_state
     * @param int $id_order_invoice
     * @param bool $use_taxes set to false if you don't want to use taxes
     * @param int $id_warehouse
     */
    protected function create(\Order $order, \Cart $cart, $product, $id_order_state, $id_order_invoice, $use_taxes = \true, $id_warehouse = 0)
    {
    }
    /**
     * Create a list of order detail for a specified id_order using cart.
     *
     * @param Order $order
     * @param Cart $cart
     * @param int $id_order_state
     * @param array $product_list
     * @param int $id_order_invoice
     * @param bool $use_taxes set to false if you don't want to use taxes
     * @param int $id_warehouse
     */
    public function createList(\Order $order, \Cart $cart, $id_order_state, $product_list, $id_order_invoice = 0, $use_taxes = \true, $id_warehouse = 0)
    {
    }
    /**
     * Get the state of the current stock product.
     *
     * @return bool
     */
    public function getStockState()
    {
    }
    /**
     * Set the additional shipping information.
     *
     * @param Order $order
     * @param array $product
     */
    public function setShippingCost(\Order $order, $product)
    {
    }
    public function getWsTaxes()
    {
    }
    public static function getCrossSells($id_product, $id_lang, $limit = 12)
    {
    }
    public function add($autodate = \true, $null_values = \false)
    {
    }
    //return the product OR product attribute whole sale price
    public function getWholeSalePrice()
    {
    }
}

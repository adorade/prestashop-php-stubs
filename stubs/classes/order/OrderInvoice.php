<?php

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
    public $total_shipping;
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
    /** @var bool|null */
    public $is_delivery;
    /**
     * @see ObjectModel::$definition
     */
    public static $definition = ['table' => 'order_invoice', 'primary' => 'id_order_invoice', 'fields' => ['id_order' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => \true], 'number' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => \true], 'delivery_number' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId'], 'delivery_date' => ['type' => self::TYPE_DATE, 'validate' => 'isDateFormat'], 'total_discount_tax_excl' => ['type' => self::TYPE_FLOAT], 'total_discount_tax_incl' => ['type' => self::TYPE_FLOAT], 'total_paid_tax_excl' => ['type' => self::TYPE_FLOAT], 'total_paid_tax_incl' => ['type' => self::TYPE_FLOAT], 'total_products' => ['type' => self::TYPE_FLOAT], 'total_products_wt' => ['type' => self::TYPE_FLOAT], 'total_shipping_tax_excl' => ['type' => self::TYPE_FLOAT], 'total_shipping_tax_incl' => ['type' => self::TYPE_FLOAT], 'shipping_tax_computation_method' => ['type' => self::TYPE_INT], 'total_wrapping_tax_excl' => ['type' => self::TYPE_FLOAT], 'total_wrapping_tax_incl' => ['type' => self::TYPE_FLOAT], 'shop_address' => ['type' => self::TYPE_HTML, 'validate' => 'isCleanHtml', 'size' => \PrestaShopBundle\Form\Admin\Type\FormattedTextareaType::LIMIT_MEDIUMTEXT_UTF8_MB4], 'note' => ['type' => self::TYPE_HTML, 'size' => \PrestaShopBundle\Form\Admin\Type\FormattedTextareaType::LIMIT_MEDIUMTEXT_UTF8_MB4], 'date_add' => ['type' => self::TYPE_DATE, 'validate' => 'isDate']]];
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
     * @return array
     */
    public function getEcoTaxTaxesBreakdown()
    {
    }
    /**
     * Returns all the order invoice that match the date interval.
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
     * @param int $id_order_state
     *
     * @return array collection of OrderInvoice
     */
    public static function getByStatus($id_order_state)
    {
    }
    /**
     * @param string $date_from
     * @param string $date_to
     *
     * @return array collection of invoice
     */
    public static function getByDeliveryDateInterval($date_from, $date_to)
    {
    }
    /**
     * @param int $id_order_invoice
     */
    public static function getCarrier($id_order_invoice)
    {
    }
    /**
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
     * @return float Total paid
     */
    public function getTotalPaid()
    {
    }
    /**
     * Rest Paid.
     *
     * @return float Rest Paid
     */
    public function getRestPaid()
    {
    }
    /**
     * Return collection of order invoice object linked to the payments of the current order invoice object.
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
     */
    public function getSiblingTotal($mod = \OrderInvoice::TAX_INCL)
    {
    }
    /**
     * Get global rest to paid
     *    This method will return something different of the method getRestPaid if
     *    there is an other invoice linked to the payments of the current invoice.
     */
    public function getGlobalRestPaid()
    {
    }
    /**
     * @return bool Is paid ?
     */
    public function isPaid()
    {
    }
    /**
     * @return PrestaShopCollection Collection of Order payment
     */
    public function getOrderPaymentCollection()
    {
    }
    /**
     * Get the formatted number of invoice.
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
     */
    public static function fixAllShopAddresses()
    {
    }
}

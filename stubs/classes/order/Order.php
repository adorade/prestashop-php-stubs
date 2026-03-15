<?php

class OrderCore extends \ObjectModel
{
    public const ROUND_ITEM = 1;
    public const ROUND_LINE = 2;
    public const ROUND_TOTAL = 3;
    /** @var int Delivery address id */
    public $id_address_delivery;
    /** @var int Invoice address id */
    public $id_address_invoice;
    public $id_shop_group;
    public $id_shop;
    /** @var int Cart id */
    public $id_cart;
    /** @var int Currency id */
    public $id_currency;
    /** @var int Language id */
    public $id_lang;
    /** @var int Customer id */
    public $id_customer;
    // todo: string received instead of int
    /** @var int Carrier id */
    public $id_carrier;
    /** @var int Order Status id */
    public $current_state;
    /** @var string Secure key */
    public $secure_key;
    /** @var string Payment method */
    public $payment;
    /** @var string Payment module */
    public $module;
    /** @var float Currency exchange rate */
    public $conversion_rate;
    /** @var bool Customer is ok for a recyclable package */
    public $recyclable = \true;
    /** @var bool True if the customer wants a gift wrapping */
    public $gift = \false;
    /** @var string Gift message if specified */
    public $gift_message;
    /** @var bool Mobile Theme */
    public $mobile_theme;
    /** @var float Discounts total */
    public $total_discounts;
    public $total_discounts_tax_incl;
    public $total_discounts_tax_excl;
    /** @var float Total to pay */
    public $total_paid;
    /** @var float Total to pay tax included */
    public $total_paid_tax_incl;
    /** @var float Total to pay tax excluded */
    public $total_paid_tax_excl;
    /** @var float Total really paid */
    public $total_paid_real;
    /** @var float Products total */
    public $total_products;
    /** @var float Products total tax included */
    public $total_products_wt;
    /** @var float Shipping total */
    public $total_shipping;
    /** @var float Shipping total tax included */
    public $total_shipping_tax_incl;
    /** @var float Shipping total tax excluded */
    public $total_shipping_tax_excl;
    /** @var float Shipping tax rate */
    public $carrier_tax_rate;
    /** @var float Wrapping total */
    public $total_wrapping;
    /** @var float Wrapping total tax included */
    public $total_wrapping_tax_incl;
    /** @var float Wrapping total tax excluded */
    public $total_wrapping_tax_excl;
    /** @var int Invoice number */
    public $invoice_number;
    /** @var int Delivery number */
    public $delivery_number;
    /** @var string Invoice creation date */
    public $invoice_date;
    /** @var string Delivery creation date */
    public $delivery_date;
    /** @var bool Order validity: current order status is logable (usually paid and not canceled) */
    public $valid;
    /** @var string Object creation date */
    public $date_add;
    /** @var string Object last modification date */
    public $date_upd;
    /**
     * @var string Order reference, this reference is not unique, but unique for a payment
     */
    public $reference;
    /**
     * @var int Round mode method used for this order
     */
    public $round_mode;
    /**
     * @var int Round type method used for this order
     */
    public $round_type;
    /**
     * @var string internal order note, what is only available in BO
     */
    public $note = '';
    /**
     * @see ObjectModel::$definition
     */
    public static $definition = ['table' => 'orders', 'primary' => 'id_order', 'fields' => ['id_address_delivery' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => \true], 'id_address_invoice' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => \true], 'id_cart' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => \true], 'id_currency' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => \true], 'id_shop_group' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId'], 'id_shop' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId'], 'id_lang' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => \true], 'id_customer' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => \true], 'id_carrier' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => \true], 'current_state' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId'], 'secure_key' => ['type' => self::TYPE_STRING, 'validate' => 'isMd5'], 'payment' => ['type' => self::TYPE_STRING, 'validate' => 'isGenericName', 'required' => \true], 'module' => ['type' => self::TYPE_STRING, 'validate' => 'isModuleName', 'required' => \true], 'recyclable' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool'], 'gift' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool'], 'gift_message' => ['type' => self::TYPE_STRING, 'validate' => 'isCleanHtml', 'size' => 4194303], 'mobile_theme' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool'], 'total_discounts' => ['type' => self::TYPE_FLOAT, 'validate' => 'isPrice'], 'total_discounts_tax_incl' => ['type' => self::TYPE_FLOAT, 'validate' => 'isPrice'], 'total_discounts_tax_excl' => ['type' => self::TYPE_FLOAT, 'validate' => 'isPrice'], 'total_paid' => ['type' => self::TYPE_FLOAT, 'validate' => 'isPrice', 'required' => \true], 'total_paid_tax_incl' => ['type' => self::TYPE_FLOAT, 'validate' => 'isPrice'], 'total_paid_tax_excl' => ['type' => self::TYPE_FLOAT, 'validate' => 'isPrice'], 'total_paid_real' => ['type' => self::TYPE_FLOAT, 'validate' => 'isPrice', 'required' => \true], 'total_products' => ['type' => self::TYPE_FLOAT, 'validate' => 'isPrice', 'required' => \true], 'total_products_wt' => ['type' => self::TYPE_FLOAT, 'validate' => 'isPrice', 'required' => \true], 'total_shipping' => ['type' => self::TYPE_FLOAT, 'validate' => 'isPrice'], 'total_shipping_tax_incl' => ['type' => self::TYPE_FLOAT, 'validate' => 'isPrice'], 'total_shipping_tax_excl' => ['type' => self::TYPE_FLOAT, 'validate' => 'isPrice'], 'carrier_tax_rate' => ['type' => self::TYPE_FLOAT, 'validate' => 'isFloat'], 'total_wrapping' => ['type' => self::TYPE_FLOAT, 'validate' => 'isPrice'], 'total_wrapping_tax_incl' => ['type' => self::TYPE_FLOAT, 'validate' => 'isPrice'], 'total_wrapping_tax_excl' => ['type' => self::TYPE_FLOAT, 'validate' => 'isPrice'], 'round_mode' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId'], 'round_type' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId'], 'conversion_rate' => ['type' => self::TYPE_FLOAT, 'validate' => 'isFloat', 'required' => \true], 'invoice_number' => ['type' => self::TYPE_INT], 'delivery_number' => ['type' => self::TYPE_INT], 'invoice_date' => ['type' => self::TYPE_DATE], 'delivery_date' => ['type' => self::TYPE_DATE], 'valid' => ['type' => self::TYPE_BOOL], 'reference' => ['type' => self::TYPE_STRING], 'date_add' => ['type' => self::TYPE_DATE, 'validate' => 'isDate'], 'date_upd' => ['type' => self::TYPE_DATE, 'validate' => 'isDate'], 'note' => ['type' => self::TYPE_HTML, 'size' => 4194303]]];
    protected $webserviceParameters = ['objectMethods' => ['add' => 'addWs'], 'objectNodeName' => 'order', 'objectsNodeName' => 'orders', 'fields' => ['id_address_delivery' => ['xlink_resource' => 'addresses'], 'id_address_invoice' => ['xlink_resource' => 'addresses'], 'id_cart' => ['xlink_resource' => 'carts'], 'id_currency' => ['xlink_resource' => 'currencies'], 'id_lang' => ['xlink_resource' => 'languages'], 'id_customer' => ['xlink_resource' => 'customers'], 'id_carrier' => ['xlink_resource' => 'carriers'], 'current_state' => ['xlink_resource' => 'order_states', 'setter' => 'setWsCurrentState'], 'module' => ['required' => \true], 'invoice_number' => [], 'invoice_date' => [], 'delivery_number' => [], 'delivery_date' => [], 'valid' => [], 'date_add' => [], 'date_upd' => [], 'shipping_number' => ['getter' => 'getWsShippingNumber', 'setter' => 'setWsShippingNumber'], 'note' => []], 'associations' => ['order_rows' => ['resource' => 'order_row', 'setter' => \false, 'virtual_entity' => \true, 'fields' => ['id' => [], 'product_id' => ['required' => \true, 'xlink_resource' => 'products'], 'product_attribute_id' => ['required' => \true], 'product_quantity' => ['required' => \true], 'product_name' => ['setter' => \false], 'product_reference' => ['setter' => \false], 'product_ean13' => ['setter' => \false], 'product_isbn' => ['setter' => \false], 'product_upc' => ['setter' => \false], 'product_price' => ['setter' => \false], 'id_customization' => ['required' => \false, 'xlink_resource' => 'customizations'], 'unit_price_tax_incl' => ['setter' => \false], 'unit_price_tax_excl' => ['setter' => \false]]]]];
    protected $_taxCalculationMethod = \PS_TAX_EXC;
    protected static $_historyCache = [];
    public function __construct($id = \null, $id_lang = \null)
    {
    }
    /**
     * @see ObjectModel::getFields()
     *
     * @return array
     */
    public function getFields()
    {
    }
    public function add($autodate = \true, $null_values = \true)
    {
    }
    public function getTaxCalculationMethod()
    {
    }
    /**
     * Does NOT delete a product but "cancel" it (which means return/refund/delete it depending of the case).
     *
     * @param Order $order
     * @param OrderDetail $order_detail
     * @param int $quantity
     *
     * @return bool
     *
     * @throws PrestaShopException
     */
    public function deleteProduct($order, $order_detail, $quantity)
    {
    }
    /**
     * This function return products of the orders
     * It's similar to Order::getProducts but with similar outputs of Cart::getProducts.
     *
     * @return array
     */
    public function getCartProducts()
    {
    }
    /**
     * DOES delete the product.
     *
     * @param OrderDetail $order_detail
     * @param int $quantity
     *
     * @return bool
     *
     * @throws PrestaShopException
     */
    protected function _deleteProduct($order_detail, $quantity)
    {
    }
    public function deleteCustomization($id_customization, $quantity, $order_detail)
    {
    }
    /**
     * Get order history.
     *
     * @param int $id_lang Language id
     * @param int|bool $id_order_state Filter a specific order status
     * @param int|bool $no_hidden Filter no hidden status
     * @param int $filters Flag to use specific field filter
     *
     * @return array History entries ordered by date DESC
     */
    public function getHistory($id_lang, $id_order_state = \false, $no_hidden = \false, $filters = 0)
    {
    }
    /**
     * Clean static history cache, must be called when an OrderHistory is added as it changes
     * the order history and may change its value for isPaid/isDelivered/... This way calls to
     * getHistory will be up to date.
     */
    public static function cleanHistoryCache()
    {
    }
    public function getProductsDetail()
    {
    }
    public function getFirstMessage()
    {
    }
    /**
     * Marked as deprecated but should not throw any "deprecated" message
     * This function is used in order to keep front office backward compatibility 14 -> 1.5
     * (Order History).
     *
     * @deprecated
     */
    public function setProductPrices(&$row)
    {
    }
    /**
     * Get order products.
     *
     * @param bool|array $products
     * @param bool|array $selected_products
     * @param bool|array $selected_qty
     * @param bool $fullInfos
     *
     * @return array Products with price, quantity (with taxe and without)
     */
    public function getProducts($products = \false, $selected_products = \false, $selected_qty = \false, $fullInfos = \true)
    {
    }
    /**
     * @param array $product
     *
     * @return array
     */
    protected function setProductReduction(array $product): array
    {
    }
    public static function getIdOrderProduct($id_customer, $id_product)
    {
    }
    protected function setProductCustomizedDatas(&$product, $customized_datas)
    {
    }
    /**
     * This method allow to add stock information on a product detail.
     *
     * If advanced stock management is active, get physical stock of this product in the warehouse associated to the ptoduct for the current order
     * Else get the available quantity of the product in fucntion of the shop associated to the order
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
    public function getTaxesAverageUsed()
    {
    }
    /**
     * Count virtual products in order.
     *
     * @return array<int, array<string, int|string|null>> number of virtual products
     */
    public function getVirtualProducts()
    {
    }
    /**
     * Check if order contains (only) virtual products.
     *
     * @param bool $strict If false return true if there are at least one product virtual
     *
     * @return bool true if is a virtual order or false
     */
    public function isVirtual($strict = \true)
    {
    }
    /**
     * @deprecated 1.5.0.1 use Order::getCartRules() instead
     */
    public function getDiscounts($details = \false)
    {
    }
    public function getCartRules()
    {
    }
    /**
     *  Return the list of all order cart rules, even the softy deleted ones
     *
     * @return array|false
     *
     * @throws PrestaShopDatabaseException
     */
    public function getDeletedCartRules()
    {
    }
    public static function getDiscountsCustomer($id_customer, $id_cart_rule)
    {
    }
    /**
     * Get current order status (eg. Awaiting payment, Delivered...).
     *
     * @return int Order status id
     */
    public function getCurrentState()
    {
    }
    /**
     * Get current order status name (eg. Awaiting payment, Delivered...).
     *
     * @return array Order status details
     */
    public function getCurrentStateFull($id_lang)
    {
    }
    public function hasBeenDelivered()
    {
    }
    /**
     * Has products returned by the merchant or by the customer?
     */
    public function hasProductReturned()
    {
    }
    public function hasBeenPaid()
    {
    }
    public function hasBeenShipped()
    {
    }
    public function isInPreparation()
    {
    }
    /**
     * Checks if the current order status is paid and shipped.
     *
     * @return bool
     */
    public function isPaidAndShipped()
    {
    }
    /**
     * Get customer orders.
     *
     * @param int $id_customer Customer id
     * @param bool $show_hidden_status Display or not hidden order statuses
     *
     * @return array Customer orders
     */
    public static function getCustomerOrders($id_customer, $show_hidden_status = \false, \Context $context = \null)
    {
    }
    public static function getOrdersIdByDate($date_from, $date_to, $id_customer = \null, $type = \null)
    {
    }
    public static function getOrdersWithInformations($limit = \null, \Context $context = \null)
    {
    }
    /**
     * @deprecated since 1.5.0.2
     *
     * @param string $date_from
     * @param string $date_to
     * @param int|null $id_customer
     * @param string|null $type
     *
     * @return array
     */
    public static function getOrdersIdInvoiceByDate($date_from, $date_to, $id_customer = \null, $type = \null)
    {
    }
    /**
     * @deprecated 1.5.0.3
     *
     * @param int $id_order_state
     *
     * @return array
     */
    public static function getOrderIdsByStatus($id_order_state)
    {
    }
    /**
     * Get product total without taxes.
     *
     * @return float total without taxes
     */
    public function getTotalProductsWithoutTaxes($products = \false)
    {
    }
    /**
     * Get product total with taxes.
     *
     * @return float total with taxes
     */
    public function getTotalProductsWithTaxes($products = \false)
    {
    }
    /**
     * used to cache order customer.
     */
    protected $cacheCustomer = \null;
    /**
     * Get order customer.
     *
     * @return Customer $customer
     */
    public function getCustomer()
    {
    }
    /**
     * Get customer orders number.
     *
     * @param int $id_customer Customer id
     *
     * @return int Customer orders number
     */
    public static function getCustomerNbOrders($id_customer)
    {
    }
    /**
     * Get an order id by its cart id.
     *
     * @param int $id_cart Cart id
     *
     * @return int Order id
     *
     * @deprecated since 1.7.1.0 Use getIdByCartId() instead
     */
    public static function getOrderByCartId($id_cart)
    {
    }
    /**
     * Get an order object by its cart id.
     *
     * @param int $id_cart Cart id
     *
     * @return OrderCore|null
     */
    public static function getByCartId($id_cart)
    {
    }
    /**
     * Get the order id by its cart id.
     *
     * @param int $id_cart Cart id
     *
     * @return int|bool $id_order
     */
    public static function getIdByCartId($id_cart)
    {
    }
    /**
     * @deprecated 1.5.0.1
     * @see Order::addCartRule()
     *
     * @param int $id_cart_rule
     * @param string $name
     * @param float $value
     *
     * @return bool
     */
    public function addDiscount($id_cart_rule, $name, $value)
    {
    }
    /**
     * @since 1.5.0.1
     *
     * @param int $id_cart_rule
     * @param string $name
     * @param array $values
     * @param int $id_order_invoice
     * @param bool|null $free_shipping
     *
     * @return bool
     */
    public function addCartRule($id_cart_rule, $name, $values, $id_order_invoice = 0, $free_shipping = \null)
    {
    }
    public function getNumberOfDays()
    {
    }
    /**
     * Can this order be returned by the client?
     *
     * @return bool
     */
    public function isReturnable()
    {
    }
    public static function getLastInvoiceNumber()
    {
    }
    public static function setLastInvoiceNumber($order_invoice_id, $id_shop)
    {
    }
    public function getInvoiceNumber($order_invoice_id)
    {
    }
    /**
     * This method allows to generate first invoice of the current order.
     */
    public function setInvoice($use_existing_payment = \false)
    {
    }
    /**
     * This method allows to fulfill the object order_invoice with sales figures.
     */
    protected function setInvoiceDetails($order_invoice)
    {
    }
    /**
     * This method allows to generate first delivery slip of the current order.
     */
    public function setDeliverySlip()
    {
    }
    public function setDeliveryNumber($order_invoice_id, $id_shop)
    {
    }
    public function getDeliveryNumber($order_invoice_id)
    {
    }
    public function setDelivery()
    {
    }
    public static function getByDelivery($id_delivery)
    {
    }
    /**
     * Get a collection of orders using reference.
     *
     * @since 1.5.0.14
     *
     * @param string $reference
     *
     * @return PrestaShopCollection Collection of Order
     */
    public static function getByReference($reference)
    {
    }
    /**
     * The combination (reference, email) should be unique, of multiple entries are found, then we take the first one.
     *
     * @param string $reference Order reference
     * @param string $email customer email address
     *
     * @return Order The first order found
     */
    public static function getByReferenceAndEmail($reference, $email)
    {
    }
    public function getTotalWeight()
    {
    }
    /**
     * @param int $id_invoice
     *
     * @deprecated 1.5.0.1
     */
    public static function getInvoice($id_invoice)
    {
    }
    public function isAssociatedAtGuest($email)
    {
    }
    /**
     * @param int $id_order
     * @param int $id_customer optionnal
     *
     * @return int id_cart
     */
    public static function getCartIdStatic($id_order, $id_customer = 0)
    {
    }
    public function getWsOrderRows()
    {
    }
    /** Set current order status
     * @param int $id_order_state
     * @param int $id_employee (/!\ not optional except for Webservice
     */
    public function setCurrentState($id_order_state, $id_employee = 0)
    {
    }
    public function addWs($autodate = \true, $null_values = \false)
    {
    }
    public function deleteAssociations()
    {
    }
    /**
     * This method return the ID of the previous order.
     *
     * @since 1.5.0.1
     *
     * @return int
     */
    public function getPreviousOrderId()
    {
    }
    /**
     * This method return the ID of the next order.
     *
     * @since 1.5.0.1
     *
     * @return int
     */
    public function getNextOrderId()
    {
    }
    /**
     * Get the an order detail list of the current order.
     *
     * @return array
     */
    public function getOrderDetailList()
    {
    }
    /**
     * Generate a unique reference for orders generated with the same cart id
     * This reference is the primary order identifier for public use.
     *
     * Modules can return their own reference.
     *
     * @return string
     */
    public static function generateReference()
    {
    }
    public function orderContainProduct($id_product)
    {
    }
    /**
     * This method returns true if at least one order details uses the
     * One After Another tax computation method.
     *
     * @since 1.5.0.1
     *
     * @return bool
     */
    public function useOneAfterAnotherTaxComputationMethod()
    {
    }
    /**
     * This method allows to get all Order Payment for the current order.
     *
     * @since 1.5.0.1
     *
     * @return PrestaShopCollection Collection of OrderPayment
     */
    public function getOrderPaymentCollection()
    {
    }
    /**
     * Indicates if order has any associated payments.
     *
     * @return bool
     */
    public function hasPayments(): bool
    {
    }
    /**
     * This method allows to add a payment to the current order.
     *
     * @since 1.5.0.1
     *
     * @param string $amount_paid
     * @param string $payment_method
     * @param string $payment_transaction_id
     * @param Currency $currency
     * @param string $date
     * @param OrderInvoice $order_invoice
     * @param int|null $id_employee
     *
     * @return bool
     */
    public function addOrderPayment($amount_paid, $payment_method = \null, $payment_transaction_id = \null, $currency = \null, $date = \null, $order_invoice = \null, int $id_employee = \null)
    {
    }
    /**
     * Returns the correct product taxes breakdown.
     *
     * Get all documents linked to the current order
     *
     * @since 1.5.0.1
     *
     * @return array
     */
    public function getDocuments()
    {
    }
    public function getReturn()
    {
    }
    /**
     * @return array return all shipping method for the current order
     *               state_name sql var is now deprecated - use order_state_name for the state name and carrier_name for the carrier_name
     */
    public function getShipping()
    {
    }
    /**
     * Get all order_slips for the current order.
     *
     * @since 1.5.0.2
     *
     * @return PrestaShopCollection Collection of OrderSlip
     */
    public function getOrderSlipsCollection()
    {
    }
    /**
     * Get all invoices for the current order.
     *
     * @since 1.5.0.1
     *
     * @return PrestaShopCollection Collection of OrderInvoice
     */
    public function getInvoicesCollection()
    {
    }
    /**
     * Get all delivery slips for the current order.
     *
     * @since 1.5.0.2
     *
     * @return PrestaShopCollection Collection of OrderInvoice
     */
    public function getDeliverySlipsCollection()
    {
    }
    /**
     * Get all not paid invoices for the current order.
     *
     * @since 1.5.0.2
     *
     * @return PrestaShopCollection Collection of Order invoice not paid
     */
    public function getNotPaidInvoicesCollection()
    {
    }
    /**
     * Get total paid.
     *
     * @since 1.5.0.1
     *
     * @param Currency $currency currency used for the total paid of the current order
     *
     * @return float amount in the $currency
     */
    public function getTotalPaid($currency = \null)
    {
    }
    /**
     * Get the sum of total_paid_tax_incl of the orders with similar reference.
     *
     * @since 1.5.0.1
     *
     * @return float
     */
    public function getOrdersTotalPaid()
    {
    }
    /**
     * This method allows to change the shipping cost of the current order.
     *
     * @since 1.5.0.1
     *
     * @param float $amount
     *
     * @return bool
     */
    public function updateShippingCost($amount)
    {
    }
    /**
     * Returns the correct product taxes breakdown.
     *
     * @since 1.5.0.1
     *
     * @return array
     */
    public function getProductTaxesBreakdown()
    {
    }
    /**
     * Returns the shipping taxes breakdown.
     *
     * @since 1.5.0.1
     *
     * @return array
     */
    public function getShippingTaxesBreakdown()
    {
    }
    /**
     * Returns the wrapping taxes breakdown.
     *
     * @todo
     *
     * @since 1.5.0.1
     *
     * @return array
     */
    public function getWrappingTaxesBreakdown()
    {
    }
    /**
     * Returns the ecotax taxes breakdown.
     *
     * @since 1.5.0.1
     *
     * @return array
     */
    public function getEcoTaxTaxesBreakdown()
    {
    }
    /**
     * Has invoice return true if this order has already an invoice.
     *
     * @return bool
     */
    public function hasInvoice()
    {
    }
    /**
     * Has Delivery return true if this order has already a delivery slip.
     *
     * @return bool
     */
    public function hasDelivery()
    {
    }
    /**
     * Get order invoice id if has delivery return id_order_invoice if this order has already a delivery slip.
     *
     * @return int
     */
    public function getOrderInvoiceIdIfHasDelivery()
    {
    }
    /**
     * Get warehouse associated to the order.
     *
     * return array List of warehouse
     */
    public function getWarehouseList()
    {
    }
    /**
     * @since 1.5.0.4
     *
     * @return OrderState|null null if Order haven't a state
     */
    public function getCurrentOrderState()
    {
    }
    /**
     * @see ObjectModel::getWebserviceObjectList()
     */
    public function getWebserviceObjectList($sql_join, $sql_filter, $sql_sort, $sql_limit)
    {
    }
    /**
     * Get all other orders with the same reference.
     *
     * @since 1.5.0.13
     */
    public function getBrother()
    {
    }
    /**
     * Get a collection of order payments.
     *
     * @since 1.5.0.13
     */
    public function getOrderPayments()
    {
    }
    /**
     * Return a unique reference like : GWJTHMZUN#2.
     *
     * With multishipping, order reference are the same for all orders made with the same cart
     * in this case this method suffix the order reference by a # and the order number
     *
     * @since 1.5.0.14
     */
    public function getUniqReference()
    {
    }
    /**
     * Return a unique reference like : GWJTHMZUN#2.
     *
     * With multishipping, order reference are the same for all orders made with the same cart
     * in this case this method suffix the order reference by a # and the order number
     *
     * @since 1.5.0.14
     */
    public static function getUniqReferenceOf($id_order)
    {
    }
    /**
     * Return id of carrier.
     *
     * Get id of the carrier used in order
     *
     * @since 1.5.5.0
     */
    public function getIdOrderCarrier()
    {
    }
    public static function sortDocuments($a, $b)
    {
    }
    public function getWsShippingNumber()
    {
    }
    public function getShippingNumber(): ?string
    {
    }
    public function setWsShippingNumber($shipping_number)
    {
    }
    /**
     * @deprecated since 1.6.1
     */
    public function getWsCurrentState()
    {
    }
    public function setWsCurrentState($state)
    {
    }
    /**
     * By default this function was made for invoice, to compute tax amounts and balance delta (because of computation made on round values).
     * If you provide $limitToOrderDetails, only these item will be taken into account. This option is useful for order slip for example,
     * where only sublist of the order is refunded.
     *
     * @param bool|array $limitToOrderDetails Optional array of OrderDetails to take into account. False by default to take all OrderDetails from the current Order.
     *
     * @return array a list of tax rows applied to the given OrderDetails (or all OrderDetails linked to the current Order)
     */
    public function getProductTaxesDetails($limitToOrderDetails = \false)
    {
    }
    /**
     * The primary purpose of this method is to be
     * called at the end of the generation of each order
     * in PaymentModule::validateOrder, to fill in
     * the order_detail_tax table with taxes
     * that will add up in such a way that
     * the sum of the tax amounts in the product tax breakdown
     * is equal to the difference between products with tax and
     * products without tax.
     */
    public function updateOrderDetailTax()
    {
    }
    public function getOrderDetailTaxes()
    {
    }
    /**
     * @param int $productId
     * @param int $productAttributeId
     *
     * @return int|null
     */
    public function getProductSpecificPriceId(int $productId, int $productAttributeId): ?int
    {
    }
    /**
     * Re calculate shipping cost.
     *
     * @return bool|object $order
     */
    public function refreshShippingCost()
    {
    }
}

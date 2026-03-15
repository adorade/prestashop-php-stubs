<?php

class CartCore extends \ObjectModel
{
    /** @var int|null */
    public $id;
    public $id_shop_group;
    public $id_shop;
    /** @var int|null Customer delivery address ID */
    public $id_address_delivery;
    /** @var int|null Customer invoicing address ID */
    public $id_address_invoice;
    /** @var int Customer currency ID */
    public $id_currency;
    /** @var int Customer ID */
    public $id_customer;
    /** @var int Guest ID */
    public $id_guest;
    /** @var int Language ID */
    public $id_lang;
    /** @var bool True if the customer wants a recycled package */
    public $recyclable = \false;
    /** @var bool True if the customer wants a gift wrapping */
    public $gift = \false;
    /** @var string Gift message if specified */
    public $gift_message;
    /** @var bool Mobile Theme */
    public $mobile_theme;
    /** @var string Object creation date */
    public $date_add;
    /** @var string secure_key */
    public $secure_key;
    /** @var int Carrier ID */
    public $id_carrier = 0;
    /** @var string Object last modification date */
    public $date_upd;
    public $checkedTos = \false;
    public $pictures;
    public $textFields;
    public $delivery_option;
    /** @var bool Allow to seperate order in multiple package in order to recieve as soon as possible the available products */
    public $allow_seperated_package = \false;
    protected static $_nbProducts = [];
    protected static $_isVirtualCart = [];
    protected $_products = \null;
    protected static $_totalWeight = [];
    protected $_taxCalculationMethod = \PS_TAX_EXC;
    protected static $_carriers = \null;
    protected static $_taxes_rate = \null;
    protected static $_attributesLists = [];
    /** @var Customer|null */
    protected static $_customer = \null;
    protected static $cacheDeliveryOption = [];
    protected static $cacheNbPackages = [];
    protected static $cachePackageList = [];
    protected static $cacheDeliveryOptionList = [];
    protected static $cacheMultiAddressDelivery = [];
    /**
     * @see ObjectModel::$definition
     */
    public static $definition = ['table' => 'cart', 'primary' => 'id_cart', 'fields' => ['id_shop_group' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId'], 'id_shop' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId'], 'id_address_delivery' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId'], 'id_address_invoice' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId'], 'id_carrier' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId'], 'id_currency' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => \true], 'id_customer' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId'], 'id_guest' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId'], 'id_lang' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => \true], 'recyclable' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool'], 'gift' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool'], 'gift_message' => ['type' => self::TYPE_STRING, 'validate' => 'isCleanHtml', 'size' => 4194303], 'mobile_theme' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool'], 'delivery_option' => ['type' => self::TYPE_STRING, 'size' => 4194303], 'secure_key' => ['type' => self::TYPE_STRING, 'size' => 32], 'allow_seperated_package' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool'], 'date_add' => ['type' => self::TYPE_DATE, 'validate' => 'isDate'], 'date_upd' => ['type' => self::TYPE_DATE, 'validate' => 'isDate']]];
    /** @var array Web service parameters */
    protected $webserviceParameters = ['fields' => ['id_address_delivery' => ['xlink_resource' => 'addresses'], 'id_address_invoice' => ['xlink_resource' => 'addresses'], 'id_currency' => ['xlink_resource' => 'currencies'], 'id_customer' => ['xlink_resource' => 'customers'], 'id_guest' => ['xlink_resource' => 'guests'], 'id_lang' => ['xlink_resource' => 'languages']], 'associations' => ['cart_rows' => ['resource' => 'cart_row', 'virtual_entity' => \true, 'fields' => ['id_product' => ['required' => \true, 'xlink_resource' => 'products'], 'id_product_attribute' => ['required' => \true, 'xlink_resource' => 'combinations'], 'id_address_delivery' => ['required' => \true, 'xlink_resource' => 'addresses'], 'id_customization' => ['required' => \false, 'xlink_resource' => 'customizations'], 'quantity' => ['required' => \true]]]]];
    protected $configuration;
    protected $addressFactory;
    protected $shouldSplitGiftProductsQuantity = \false;
    protected $shouldExcludeGiftsDiscount = \false;
    public const ONLY_PRODUCTS = 1;
    public const ONLY_DISCOUNTS = 2;
    public const BOTH = 3;
    public const BOTH_WITHOUT_SHIPPING = 4;
    public const ONLY_SHIPPING = 5;
    public const ONLY_WRAPPING = 6;
    /** @deprecated since 1.7 **/
    public const ONLY_PRODUCTS_WITHOUT_SHIPPING = 7;
    public const ONLY_PHYSICAL_PRODUCTS_WITHOUT_SHIPPING = 8;
    /**
     * CartCore constructor.
     *
     * @param int|null $id Cart ID
     *                     null = new Cart
     * @param int|null $idLang Language ID
     *                         null = Language ID of current Context
     */
    public function __construct($id = \null, $idLang = \null)
    {
    }
    public static function resetStaticCache()
    {
    }
    /**
     * Set Tax calculation method.
     */
    public function setTaxCalculationMethod()
    {
    }
    /**
     * Adds current Cart as a new Object to the database.
     *
     * @param bool $autoDate Automatically set `date_upd` and `date_add` columns
     * @param bool $nullValues Whether we want to use NULL values instead of empty quotes values
     *
     * @return bool Whether the Cart has been successfully added
     *
     * @throws PrestaShopDatabaseException
     * @throws PrestaShopException
     */
    public function add($autoDate = \true, $nullValues = \false)
    {
    }
    /**
     * Updates the current object in the database.
     *
     * @param bool $nullValues Whether we want to use NULL values instead of empty quotes values
     *
     * @return bool Whether the Cart has been successfully updated
     *
     * @throws PrestaShopDatabaseException
     * @throws PrestaShopException
     */
    public function update($nullValues = \false)
    {
    }
    /**
     * Update the Address ID of the Cart.
     *
     * @param int $id_address Current Address ID to change
     * @param int $id_address_new New Address ID
     */
    public function updateAddressId($id_address, $id_address_new)
    {
    }
    /**
     * Update the Delivery Address ID of the Cart.
     *
     * @param int $currentAddressId Current Address ID to change
     * @param int $newAddressId New Address ID
     */
    public function updateDeliveryAddressId(int $currentAddressId, int $newAddressId)
    {
    }
    /**
     * Deletes current Cart from the database.
     *
     * @return bool True if delete was successful
     *
     * @throws PrestaShopException
     */
    public function delete()
    {
    }
    /**
     * Returns the average Tax rate for all products in the cart, as a multiplier.
     *
     * The arguments are optional and only serve as return values in case caller needs the details.
     *
     * @param float|null $cartAmountTaxExcluded If the reference is given, it will be updated with the
     *                                          total amount in the Cart excluding Taxes
     * @param float|null $cartAmountTaxIncluded If the reference is given, it will be updated with the
     *                                          total amount in the Cart including Taxes
     *
     * @return float Average Tax Rate on Products (eg. 0.2 for 20% average rate)
     */
    public function getAverageProductsTaxRate(&$cartAmountTaxExcluded = \null, &$cartAmountTaxIncluded = \null)
    {
    }
    /**
     * Get Cart Rules.
     *
     * @param int $filter Filter enum:
     *                    - FILTER_ACTION_ALL
     *                    - FILTER_ACTION_SHIPPING
     *                    - FILTER_ACTION_REDUCTION
     *                    - FILTER_ACTION_GIFT
     *                    - FILTER_ACTION_ALL_NOCAP
     * @param bool $autoAdd automaticaly adds cart ruls without code to cart
     * @param bool $useOrderPrices
     *
     * @return array|false|mysqli_result|PDOStatement|resource|null Database result
     */
    public function getCartRules($filter = \CartRule::FILTER_ACTION_ALL, $autoAdd = \true, $useOrderPrices = \false)
    {
    }
    /**
     * Get cart discounts.
     */
    public function getDiscounts()
    {
    }
    /**
     * Return the CartRule IDs in the Cart.
     *
     * @param int $filter Filter enum:
     *                    - FILTER_ACTION_ALL
     *                    - FILTER_ACTION_SHIPPING
     *                    - FILTER_ACTION_REDUCTION
     *                    - FILTER_ACTION_GIFT
     *                    - FILTER_ACTION_ALL_NOCAP
     *
     * @return array
     *
     * @throws PrestaShopDatabaseException
     */
    public function getOrderedCartRulesIds($filter = \CartRule::FILTER_ACTION_ALL)
    {
    }
    /**
     * Get amount of Customer Discounts.
     *
     * @param int $id_cart_rule CartRule ID
     *
     * @return int Amount of Customer Discounts
     * @todo: What are customer discounts? Isn't this just a PriceRule and shouldn't this method be renamed instead?
     */
    public function getDiscountsCustomer($id_cart_rule)
    {
    }
    /**
     * Get last Product in Cart.
     *
     * @return bool|mixed Database result
     */
    public function getLastProduct()
    {
    }
    /**
     * Return cart products.
     *
     * @param bool $refresh
     * @param bool|int $id_product
     * @param int|null $id_country
     * @param bool $fullInfos
     * @param bool $keepOrderPrices When true use the Order saved prices instead of the most recent ones from catalog (if Order exists)
     *
     * @return array Products
     */
    public function getProducts($refresh = \false, $id_product = \false, $id_country = \null, $fullInfos = \true, bool $keepOrderPrices = \false)
    {
    }
    /**
     * @param array $row
     * @param Context $shopContext
     * @param int|null $productQuantity
     * @param bool $keepOrderPrices When true use the Order saved prices instead of the most recent ones from catalog (if Order exists)
     *
     * @return mixed
     */
    protected function applyProductCalculations($row, $shopContext, $productQuantity = \null, bool $keepOrderPrices = \false)
    {
    }
    public static function cacheSomeAttributesLists($ipa_list, $id_lang)
    {
    }
    /**
     * Check if Addresses in the Cart are still valid and update with the next valid Address ID found.
     *
     * @return bool Whether the Addresses have been succesfully checked and upated
     */
    public function checkAndUpdateAddresses()
    {
    }
    /**
     * Return cart products quantity.
     *
     * @result integer Products quantity
     */
    public function nbProducts()
    {
    }
    /**
     * Get number of products in cart
     * This is the total amount of products, not just the types.
     *
     * @param int $id Cart ID
     *
     * @return mixed
     */
    public static function getNbProducts($id)
    {
    }
    /**
     * Add a CartRule to the Cart.
     *
     * @param int $id_cart_rule CartRule ID
     * @param bool $useOrderPrices
     *
     * @return bool Whether the CartRule has been successfully added
     */
    public function addCartRule($id_cart_rule, bool $useOrderPrices = \false)
    {
    }
    /**
     * Check if the Cart contains the given Product (Attribute).
     *
     * @param int $idProduct Product ID
     * @param int $idProductAttribute ProductAttribute ID
     * @param int|bool $idCustomization Customization ID
     * @param int $idAddressDelivery Delivery Address ID
     *
     * @return array quantity index     : number of product in cart without counting those of pack in cart
     *               deep_quantity index: number of product in cart counting those of pack in cart
     */
    public function getProductQuantity($idProduct, $idProductAttribute = 0, $idCustomization = 0, $idAddressDelivery = 0)
    {
    }
    /**
     * Check if the Cart contains the given Product (Attribute).
     *
     * @deprecated 1.7.3.1
     * @see Cart::getProductQuantity()
     *
     * @param int $id_product Product ID
     * @param int $id_product_attribute ProductAttribute ID
     * @param int $id_customization Customization ID
     * @param int $id_address_delivery Delivery Address ID
     *
     * @return array|bool Whether the Cart contains the Product
     *                    Result comes directly from the database
     */
    public function containsProduct($id_product, $id_product_attribute = 0, $id_customization = 0, $id_address_delivery = 0)
    {
    }
    /**
     * Update Product quantity.
     *
     * @param int $quantity Quantity to add (or substract)
     * @param int $id_product Product ID
     * @param int|null $id_product_attribute Attribute ID if needed
     * @param int|false $id_customization Customization ID
     * @param string $operator Indicate if quantity must be increased or decreased
     * @param int $id_address_delivery Delivery Address ID
     * @param Shop|null $shop
     * @param bool $auto_add_cart_rule
     * @param bool $skipAvailabilityCheckOutOfStock
     * @param bool $preserveGiftRemoval
     * @param bool $useOrderPrices
     *
     * @return bool|int Whether the quantity has been successfully updated
     */
    public function updateQty($quantity, $id_product, $id_product_attribute = \null, $id_customization = \false, $operator = 'up', $id_address_delivery = 0, \Shop $shop = \null, $auto_add_cart_rule = \true, $skipAvailabilityCheckOutOfStock = \false, bool $preserveGiftRemoval = \true, bool $useOrderPrices = \false)
    {
    }
    /**
     * Customization management.
     *
     * @param int $quantity Quantity value to add or subtract
     * @param int $id_customization Customization ID
     * @param int $id_product Product ID
     * @param int $id_product_attribute ProductAttribute ID
     * @param int $id_address_delivery Delivery Address ID
     * @param string $operator Indicate if quantity must be increased (up) or decreased (down)
     *
     * @return bool
     */
    protected function _updateCustomizationQuantity($quantity, $id_customization, $id_product, $id_product_attribute, $id_address_delivery, $operator = 'up')
    {
    }
    /**
     * Add customization item to database.
     *
     * @param int $id_product Product ID
     * @param int $id_product_attribute ProductAttribute ID
     * @param int $index Customization field identifier as id_customization_field in table customization_field
     * @param int $type Customization type can be Product::CUSTOMIZE_FILE or Product::CUSTOMIZE_TEXTFIELD
     * @param string $value Customization value
     * @param int $quantity Quantity value
     * @param bool $returnId if true - returns the customization record id
     *
     * @return bool|int
     */
    public function _addCustomization($id_product, $id_product_attribute, $index, $type, $value, $quantity, $returnId = \false)
    {
    }
    /**
     * Check if order has already been placed.
     *
     * @return bool Indicates if the Order exists
     */
    public function orderExists()
    {
    }
    /**
     * Remove the CartRule from the Cart.
     *
     * @param int $id_cart_rule CartRule ID
     * @param bool $useOrderPrices
     *
     * @return bool Whether the Cart rule has been successfully removed
     */
    public function removeCartRule($id_cart_rule, bool $useOrderPrices = \false)
    {
    }
    /**
     * Delete a product from the cart.
     *
     * @param int $id_product Product ID
     * @param int|null $id_product_attribute Attribute ID if needed
     * @param int $id_customization Customization id
     * @param int $id_address_delivery Delivery Address id
     * @param bool $preserveGiftsRemoval If true gift are not removed so product is still in cart
     * @param bool $useOrderPrices If true, will use order prices to re-calculate cartRules after the product is deleted
     *
     * @return bool Whether the product has been successfully deleted
     */
    public function deleteProduct($id_product, $id_product_attribute = 0, $id_customization = 0, $id_address_delivery = 0, bool $preserveGiftsRemoval = \true, bool $useOrderPrices = \false)
    {
    }
    /**
     * @param int $id_product
     * @param int $id_product_attribute
     *
     * @return array
     */
    protected function getProductsGifts($id_product, $id_product_attribute)
    {
    }
    /**
     * Delete a Customization from the Cart. If the Customization is a Picture,
     * then the Image is also deleted.
     *
     * @param int $id_customization Customization Id
     * @param int|null $id_product Unused
     * @param int|null $id_product_attribute Unused
     * @param int|null $id_address_delivery Unused
     *
     * @return bool Indicates if the Customization was successfully deleted
     * @todo: Remove unused parameters
     */
    protected function _deleteCustomization($id_customization, $id_product, $id_product_attribute, $id_address_delivery = 0)
    {
    }
    /**
     * Get formatted total amount in Cart.
     *
     * @param int $id_cart Cart ID
     * @param bool $use_tax_display Whether the tax should be displayed
     * @param int $type Type enum:
     *                  - ONLY_PRODUCTS
     *                  - ONLY_DISCOUNTS
     *                  - BOTH
     *                  - BOTH_WITHOUT_SHIPPING
     *                  - ONLY_SHIPPING
     *                  - ONLY_WRAPPING
     *
     * @return string Formatted amount in Cart
     */
    public static function getTotalCart($id_cart, $use_tax_display = \false, $type = \Cart::BOTH)
    {
    }
    /**
     * Get total in Cart using a tax calculation method.
     *
     * @param int $id_cart Cart ID
     *
     * @return string Formatted total amount in Cart
     * @todo: What is this?
     */
    public static function getOrderTotalUsingTaxCalculationMethod($id_cart)
    {
    }
    /**
     * This function returns the total cart amount.
     *
     * @param bool $withTaxes With or without taxes
     * @param int $type Total type enum
     *                  - Cart::ONLY_PRODUCTS
     *                  - Cart::ONLY_DISCOUNTS
     *                  - Cart::BOTH
     *                  - Cart::BOTH_WITHOUT_SHIPPING
     *                  - Cart::ONLY_SHIPPING
     *                  - Cart::ONLY_WRAPPING
     *                  - Cart::ONLY_PRODUCTS_WITHOUT_SHIPPING
     *                  - Cart::ONLY_PHYSICAL_PRODUCTS_WITHOUT_SHIPPING
     * @param array $products
     * @param int $id_carrier
     * @param bool $use_cache @deprecated
     * @param bool $keepOrderPrices When true use the Order saved prices instead of the most recent ones from catalog (if Order exists)
     *
     * @return float Order total
     *
     * @throws \Exception
     */
    public function getOrderTotal($withTaxes = \true, $type = \Cart::BOTH, $products = \null, $id_carrier = \null, $use_cache = \false, bool $keepOrderPrices = \false)
    {
    }
    /**
     * get the populated cart calculator.
     *
     * @param array $products list of products to calculate on
     * @param array $cartRules list of cart rules to apply
     * @param int $id_carrier carrier id (fees calculation)
     * @param int|null $computePrecision
     * @param bool $keepOrderPrices When true use the Order saved prices instead of the most recent ones from catalog (if Order exists)
     *
     * @return \PrestaShop\PrestaShop\Core\Cart\Calculator
     */
    public function newCalculator($products, $cartRules, $id_carrier, $computePrecision = \null, bool $keepOrderPrices = \false)
    {
    }
    /**
     * @return float
     */
    public function getDiscountSubtotalWithoutGifts($withTaxes = \true)
    {
    }
    /**
     * @param array $products
     *
     * @return array
     */
    protected function countProductLines($products)
    {
    }
    /**
     * @param array $products
     *
     * @return int
     */
    protected function getDeliveryAddressId($products)
    {
    }
    /**
     * @param int $type
     * @param bool $withShipping
     *
     * @return array
     */
    protected function getTotalCalculationCartRules($type, $withShipping)
    {
    }
    /**
     * @param bool $withTaxes
     * @param array $product
     * @param Context|null $virtualContext
     *
     * @return int
     */
    protected function findTaxRulesGroupId($withTaxes, $product, $virtualContext)
    {
    }
    /**
     * @param array $product
     *
     * @return int|null
     */
    public function getProductAddressId($product)
    {
    }
    /**
     * Returns the tax address id according to the shop's configuration
     *
     * @return int
     */
    public function getTaxAddressId()
    {
    }
    /**
     * @param bool $withTaxes
     * @param int $type
     *
     * @return float|int
     */
    protected function calculateWrappingFees($withTaxes, $type)
    {
    }
    /**
     * Get the gift wrapping price.
     *
     * @param bool $with_taxes With or without taxes
     *
     * @return float wrapping price
     */
    public function getGiftWrappingPrice($with_taxes = \true, $id_address = \null)
    {
    }
    /**
     * Get the number of packages.
     *
     * @return int number of packages
     */
    public function getNbOfPackages()
    {
    }
    /**
     * Get products grouped by package and by addresses to be sent individualy (one package = one shipping cost).
     * This method tries to separate products to as small number of packages as possible. Ideally one.
     *
     * If there is a carrier that sends all products, it will use it.
     * If not, it will separate it to multiple packages.
     *
     * What can also happen is that it will return one package, but with no carrier available.
     * It can also return more packages, but some of the packages may not have any carrier to send it.
     * ("carrier_list" => [0 => 0])
     * The core needs to handle these cases later in the process.
     *
     * @return array array(
     *               0 => array( // First address
     *               0 => array(  // First package
     *               'product_list' => array(...),
     *               'carrier_list' => array(...),
     *               'id_warehouse' => array(...),
     *               ),
     *               ),
     *               );
     *
     * @todo Add avaibility check
     */
    public function getPackageList($flush = \false)
    {
    }
    public function getPackageIdWarehouse($package, $id_carrier = \null)
    {
    }
    /**
     * Get all deliveries options available for the current cart.
     *
     * @param Country $default_country
     * @param bool $flush Force flushing cache
     *
     * @return array array(
     *               0 => array( // First address
     *               '12,' => array(  // First delivery option available for this address
     *               carrier_list => array(
     *               12 => array( // First carrier for this option
     *               'instance' => Carrier Object,
     *               'logo' => <url to the carriers logo>,
     *               'price_with_tax' => 12.4,
     *               'price_without_tax' => 12.4,
     *               'package_list' => array(
     *               1,
     *               3,
     *               ),
     *               ),
     *               ),
     *               is_best_grade => true, // Does this option have the biggest grade (quick shipping) for this shipping address
     *               is_best_price => true, // Does this option have the lower price for this shipping address
     *               unique_carrier => true, // Does this option use a unique carrier
     *               total_price_with_tax => 12.5,
     *               total_price_without_tax => 12.5,
     *               position => 5, // Average of the carrier position
     *               ),
     *               ),
     *               );
     *               If there are no carriers available for an address, return an empty  array
     */
    public function getDeliveryOptionList(\Country $default_country = \null, $flush = \false)
    {
    }
    /**
     * Sort list of option delivery by parameters define in the BO.
     *
     * @param array $option1
     * @param array $option2
     *
     * @return int -1 if $option 1 must be placed before and 1 if the $option1 must be placed after the $option2
     */
    public static function sortDeliveryOptionList($option1, $option2)
    {
    }
    /**
     * Is the Carrier selected.
     *
     * @param int $id_carrier Carrier ID
     * @param int $id_address Address ID
     *
     * @return bool Indicated if the carrier is selected
     */
    public function carrierIsSelected($id_carrier, $id_address)
    {
    }
    /**
     * Get all deliveries options available for the current cart formatted like Carriers::getCarriersForOrder
     * This method was wrote for retrocompatibility with 1.4 theme
     * New theme need to use Cart::getDeliveryOptionList() to generate carriers option in the checkout process.
     *
     * @since 1.5.0
     * @deprecated 1.7.0
     *
     * @param Country $default_country Default Country
     * @param bool $flush Force flushing cache
     *
     * @return array
     */
    public function simulateCarriersOutput(\Country $default_country = \null, $flush = \false)
    {
    }
    /**
     * Simulate output of selected Carrier.
     *
     * @param bool $use_cache Use cache
     *
     * @return int Intified Cart output
     */
    public function simulateCarrierSelectedOutput($use_cache = \true)
    {
    }
    /**
     * Translate a string option_delivery identifier ('24,3,') in a int (3240002000).
     *
     * The  option_delivery identifier is a list of integers separated by a ','.
     * This method replace the delimiter by a sequence of '0'.
     * The size of this sequence is fixed by the first digit of the return
     *
     * @return string Intified value
     */
    public static function intifier($string, $delimiter = ',')
    {
    }
    /**
     * Translate an int option_delivery identifier (3240002000) in a string ('24,3,').
     */
    public static function desintifier($int, $delimiter = ',')
    {
    }
    /**
     * Does the Cart use multiple Addresses?
     *
     * @return bool Indicates if the Cart uses multiple Addresses
     */
    public function isMultiAddressDelivery()
    {
    }
    /**
     * Get all delivery Addresses object for the current Cart.
     */
    public function getAddressCollection()
    {
    }
    /**
     * Set the delivery option and Carrier ID, if there is only one Carrier.
     *
     * @param array $delivery_option Delivery option array
     */
    public function setDeliveryOption($delivery_option = \null)
    {
    }
    /**
     * Get Carrier ID from Delivery Option.
     *
     * @param array $delivery_option Delivery options array
     *
     * @return int|mixed Carrier ID
     */
    protected function getIdCarrierFromDeliveryOption($delivery_option)
    {
    }
    /**
     * Get the delivery option selected, or if no delivery option was selected,
     * the cheapest option for each address.
     *
     * @param Country|null $default_country Default country
     * @param bool $dontAutoSelectOptions Do not auto select delivery option
     * @param bool $use_cache Use cache
     *
     * @return array|false Delivery option
     */
    public function getDeliveryOption($default_country = \null, $dontAutoSelectOptions = \false, $use_cache = \true)
    {
    }
    /**
     * Return shipping total for the cart.
     *
     * @param array|null $delivery_option Array of the delivery option for each address
     * @param bool $use_tax Use taxes
     * @param Country|null $default_country Default Country
     *
     * @return float Shipping total
     */
    public function getTotalShippingCost($delivery_option = \null, $use_tax = \true, \Country $default_country = \null)
    {
    }
    /**
     * Return shipping total of a specific carriers for the cart.
     *
     * @param int $id_carrier Carrier ID
     * @param array $delivery_option Array of the delivery option for each address
     * @param bool $useTax Use Taxes
     * @param Country|null $default_country Default Country
     * @param array|null $delivery_option Delivery options array
     *
     * @return float Shipping total
     */
    public function getCarrierCost($id_carrier, $useTax = \true, \Country $default_country = \null, $delivery_option = \null)
    {
    }
    /**
     * Return package shipping cost.
     *
     * @param int $id_carrier Carrier ID (default : current carrier)
     * @param bool $use_tax
     * @param Country|null $default_country
     * @param array|null $product_list list of product concerned by the shipping.
     *                                 If null, all the product of the cart are used to calculate the shipping cost
     * @param int|null $id_zone Zone ID
     * @param bool $keepOrderPrices When true use the Order saved prices instead of the most recent ones from catalog (if Order exists)
     *
     * @return float|bool Shipping total, false if not possible to ship with the given carrier
     */
    public function getPackageShippingCost($id_carrier = \null, $use_tax = \true, \Country $default_country = \null, $product_list = \null, $id_zone = \null, bool $keepOrderPrices = \false)
    {
    }
    /**
     * Ask the module the package shipping cost.
     *
     * If a carrier has been linked to a carrier module, we call it order to review the shipping costs.
     *
     * @param Carrier $carrier The concerned carrier (Your module may have several carriers)
     * @param float $shipping_cost The calculated shipping cost from the core, regarding package dimension and cart total
     * @param array $products The list of products
     *
     * @return bool|float The package price for the module (0 if free, false is disabled)
     */
    protected function getPackageShippingCostFromModule(\Carrier $carrier, $shipping_cost, $products)
    {
    }
    /**
     * Return total Cart weight.
     *
     * @return float Total Cart weight
     */
    public function getTotalWeight($products = \null)
    {
    }
    /**
     * @param int $productId
     */
    protected function updateProductWeight($productId)
    {
    }
    /**
     * Return useful information about the cart for display purpose.
     * Products are splitted between paid ones and gift
     * Gift price and shipping (if shipping is free) are removed from Discounts
     * Any cart data modification for display purpose is made here.
     *
     * @return array Cart details
     */
    public function getSummaryDetails($id_lang = \null, $refresh = \false)
    {
    }
    /**
     * Returns useful raw information about the cart.
     * Products, Discounts, Prices ... are returned in an array without any modification.
     *
     * @param int $id_lang
     * @param bool $refresh
     *
     * @return array Cart details
     *
     * @throws PrestaShopException
     * @throws LocalizationException
     */
    public function getRawSummaryDetails(int $id_lang, bool $refresh = \false): array
    {
    }
    /**
     * Check if product quantities in Cart are available.
     *
     * @param bool $returnProductOnFailure Return the first found product with not enough quantity
     *
     * @return bool|array If all products are in stock: true; if not: either false or an array
     *                    containing the first found product which is not in stock in the
     *                    requested amount
     */
    public function checkQuantities($returnProductOnFailure = \false)
    {
    }
    /**
     * Check if the product can be accessed by the Customer.
     *
     * @return bool Indicates if the Customer in the current Cart has access
     */
    public function checkProductsAccess()
    {
    }
    /**
     * Last abandoned Cart.
     *
     * @param int $id_customer Customer ID
     *
     * @return bool|int Last abandoned Cart ID
     *                  false if not found
     */
    public static function lastNoneOrderedCart($id_customer)
    {
    }
    /**
     * Check if cart contains only virtual products.
     *
     * @return bool true if is a virtual cart or false
     */
    public function isVirtualCart()
    {
    }
    /**
     * Check if there's a product in the cart.
     *
     * @return bool
     */
    public function hasProducts()
    {
    }
    /**
     * Return true if the current cart contains a real product.
     *
     * @return bool
     */
    public function hasRealProducts()
    {
    }
    /**
     * Build cart object from provided id_order.
     *
     * @param int $id_order
     *
     * @return Cart|bool
     */
    public static function getCartByOrderId($id_order)
    {
    }
    /**
     * Get Cart ID by Order ID.
     *
     * @param int $id_order Order ID
     *
     * @return int|bool Cart ID, false if not found
     */
    public static function getCartIdByOrderId($id_order)
    {
    }
    /**
     * Add customer's text.
     *
     * @param int $id_product Product ID
     * @param int $index Customization field identifier as id_customization_field in table customization_field
     * @param int $type Customization type can be Product::CUSTOMIZE_FILE or Product::CUSTOMIZE_TEXTFIELD
     * @param string $text_value
     * @param bool $returnCustomizationId if true - returns the customizationId
     *
     * @return bool Always true
     */
    public function addTextFieldToProduct($id_product, $index, $type, $text_value, $returnCustomizationId = \false)
    {
    }
    /**
     * Add customer's pictures.
     *
     * @param int $id_product Product ID
     * @param int $index Customization field identifier as id_customization_field in table customization_field
     * @param int $type Customization type can be Product::CUSTOMIZE_FILE or Product::CUSTOMIZE_TEXTFIELD
     * @param string $file Filename
     * @param bool $returnCustomizationId if true - returns the customizationId
     *
     * @return bool Always true
     */
    public function addPictureToProduct($id_product, $index, $type, $file, $returnCustomizationId = \false)
    {
    }
    /**
     * Remove a customer's customization.
     *
     * @param int $id_product Product ID
     * @param int $index Customization field identifier as id_customization_field in table customization_field
     *
     * @return bool
     */
    public function deleteCustomizationToProduct($id_product, $index)
    {
    }
    /**
     * Return custom pictures in this cart for a specified product.
     *
     * @param int $id_product Product ID
     * @param int|null $type Only return customization of this type, can be Product::CUSTOMIZE_FILE or Product::CUSTOMIZE_TEXTFIELD
     * @param bool $not_in_cart Only return customizations that are not in the cart already
     *
     * @return array Result from DB
     */
    public function getProductCustomization($id_product, $type = \null, $not_in_cart = \false)
    {
    }
    /**
     * Get Carts by Customer ID.
     *
     * @param int $id_customer Customer ID
     * @param bool $with_order Only return Carts that have been converted into an Order
     *
     * @return array|false|mysqli_result|PDOStatement|resource|null DB result
     */
    public static function getCustomerCarts($id_customer, $with_order = \true)
    {
    }
    /**
     * Duplicate this Cart in the database.
     *
     * @return array|bool Duplicated cart, with success bool
     */
    public function duplicate()
    {
    }
    /**
     * Get Cart rows from DB for the webservice.
     *
     * @return array|false|mysqli_result|PDOStatement|resource|null DB result
     */
    public function getWsCartRows()
    {
    }
    /**
     * Insert cart rows from webservice.
     *
     * @param array $values Values from webservice
     *
     * @return bool Whether the values have been successfully inserted
     * @todo: This function always returns true, make it depend on actual result of DB query
     */
    public function setWsCartRows($values)
    {
    }
    /**
     * Set delivery Address of a Product in the Cart.
     *
     * @param int $id_product Product ID
     * @param int $id_product_attribute Product Attribute ID
     * @param int $old_id_address_delivery Old delivery Address ID
     * @param int $new_id_address_delivery New delivery Address ID
     *
     * @return bool Whether the delivery Address of the product in the Cart has been successfully updated
     */
    public function setProductAddressDelivery($id_product, $id_product_attribute, $old_id_address_delivery, $new_id_address_delivery)
    {
    }
    /**
     * Set customized data of a product.
     *
     * @param Product $product Referenced Product object
     * @param array $customized_datas Customized data
     */
    public function setProductCustomizedDatas(&$product, $customized_datas)
    {
    }
    /**
     * Duplicate Product.
     *
     * @param int $id_product Product ID
     * @param int $id_product_attribute Product Attribute ID
     * @param int $id_address_delivery Delivery Address ID
     * @param int $new_id_address_delivery New Delivery Address ID
     * @param int $quantity Quantity value
     * @param bool $keep_quantity Keep the quantity, do not reset if true
     *
     * @return bool Whether the product has been successfully duplicated
     */
    public function duplicateProduct($id_product, $id_product_attribute, $id_address_delivery, $new_id_address_delivery, $quantity = 1, $keep_quantity = \false)
    {
    }
    /**
     * Update products cart address delivery with the address delivery of the cart.
     */
    public function setNoMultishipping()
    {
    }
    /**
     * Set an address to all products on the cart without address delivery.
     */
    public function autosetProductAddress()
    {
    }
    public function deleteAssociations()
    {
    }
    /**
     * isCarrierInRange.
     *
     * Check if the specified carrier is in range
     *
     * @id_carrier int
     * @id_zone int
     */
    public function isCarrierInRange($id_carrier, $id_zone)
    {
    }
    /**
     * Is the Cart from a guest?
     *
     * @param int $id_cart Cart ID
     *
     * @return bool True if the Cart has been made by a guest Customer
     */
    public static function isGuestCartByCartId($id_cart)
    {
    }
    /**
     * Checks if all products of the cart are still available in the current state. They might have been converted to another
     * type of product since then, ordering disabled or deactivated.
     *
     * @return bool false if one of the product not publicly orderable anymore
     */
    public function checkAllProductsAreStillAvailableInThisState()
    {
    }
    /**
     * Are all products of the Cart in stock?
     *
     * @param bool $ignoreVirtual Ignore virtual products
     * @param bool $exclusive (DEPRECATED) If true, the validation is exclusive : it must be present product in stock and out of stock
     *
     * @since 1.5.0
     *
     * @return bool False if not all products in the cart are in stock
     */
    public function isAllProductsInStock($ignoreVirtual = \false, $exclusive = \false)
    {
    }
    /**
     * Checks that all products in cart have minimal required quantities
     *
     * @return bool
     */
    public function checkAllProductsHaveMinimalQuantities()
    {
    }
    /**
     * Get all the IDs of the delivery Addresses without Carriers.
     *
     * @param bool $return_collection Returns sa collection
     * @param array $error Contains an error message if an error occurs
     *
     * @return array Array of address id or of address object
     */
    public function getDeliveryAddressesWithoutCarriers($return_collection = \false, &$error = [])
    {
    }
    /**
     * Set flag to split lines of products given away and also manually added to cart.
     */
    protected function splitGiftsProductsQuantity()
    {
    }
    /**
     * Set flag to merge lines of products given away and also manually added to cart.
     */
    protected function mergeGiftsProductsQuantity()
    {
    }
    protected function excludeGiftsDiscountFromTotal()
    {
    }
    protected function includeGiftsDiscountInTotal()
    {
    }
    /**
     * Get products with gifts and manually added occurrences separated.
     *
     * @return array|null
     */
    public function getProductsWithSeparatedGifts()
    {
    }
    /**
     * @return Country
     *
     * @throws \PrestaShopDatabaseException
     * @throws \PrestaShopException
     */
    public function getTaxCountry(): \Country
    {
    }
    /**
     * @return float
     */
    public function getCartTotalPrice()
    {
    }
}

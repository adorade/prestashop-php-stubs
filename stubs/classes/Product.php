<?php

class ProductCore extends \ObjectModel
{
    /**
     * @var string Tax name
     *
     * @deprecated Since 1.4
     */
    public $tax_name;
    /** @var float Tax rate */
    public $tax_rate;
    /** @var int Manufacturer identifier */
    public $id_manufacturer;
    /** @var int Supplier identifier */
    public $id_supplier;
    /** @var int default Category identifier */
    public $id_category_default;
    /** @var int default Shop identifier */
    public $id_shop_default;
    /** @var string Manufacturer name */
    public $manufacturer_name;
    /** @var string Supplier name */
    public $supplier_name;
    /** @var string|array Name or array of names by id_lang */
    public $name;
    /** @var string|array Long description or array of long description by id_lang */
    public $description;
    /** @var string|array Short description or array of short description by id_lang */
    public $description_short;
    /**
     * @deprecated since 1.7.8
     * @see StockAvailable::$quantity instead
     *
     * @var int Quantity available
     */
    public $quantity = 0;
    /** @var int Minimal quantity for add to cart */
    public $minimal_quantity = 1;
    /** @var int|null Low stock for mail alert */
    public $low_stock_threshold = \null;
    /** @var bool Low stock mail alert activated */
    public $low_stock_alert = \false;
    /** @var string|array Text when in stock or array of text by id_lang */
    public $available_now;
    /** @var string|array Text when not in stock but available to order or array of text by id_lang */
    public $available_later;
    /** @var float|null Price */
    public $price = 0;
    /** @var array|int|null Will be filled by reference by priceCalculation() */
    public $specificPrice = 0;
    /** @var float Additional shipping cost */
    public $additional_shipping_cost = 0;
    /** @var float Wholesale Price in euros */
    public $wholesale_price = 0;
    /** @var bool on_sale */
    public $on_sale = \false;
    /** @var bool online_only */
    public $online_only = \false;
    /** @var string unity */
    public $unity = \null;
    /** @var float|null price for product's unity */
    public $unit_price = 0;
    /** @var float price for product's unity ratio */
    public $unit_price_ratio = 0;
    /** @var float|null Ecotax */
    public $ecotax = 0;
    /** @var string Reference */
    public $reference;
    /**
     * @var string Supplier Reference
     *
     * @deprecated since 1.7.7.0
     */
    public $supplier_reference;
    /**
     * @deprecated since 1.7.8
     * @see StockAvailable::$location instead
     *
     * @var string Location
     */
    public $location = '';
    /** @var string|float Width in default width unit */
    public $width = 0;
    /** @var string|float Height in default height unit */
    public $height = 0;
    /** @var string|float Depth in default depth unit */
    public $depth = 0;
    /** @var string|float Weight in default weight unit */
    public $weight = 0;
    /** @var string Ean-13 barcode */
    public $ean13;
    /** @var string ISBN */
    public $isbn;
    /** @var string Upc barcode */
    public $upc;
    /** @var string MPN */
    public $mpn;
    /** @var string|string[] Friendly URL or array of friendly URL by id_lang */
    public $link_rewrite;
    /** @var string|array Meta description or array of meta description by id_lang */
    public $meta_description;
    /**
     * @deprecated
     */
    public $meta_keywords;
    /** @var string|array Meta title or array of meta title by id_lang */
    public $meta_title;
    /**
     * @var mixed
     *
     * @deprecated Unused
     */
    public $quantity_discount = 0;
    /** @var bool|int Product customization */
    public $customizable;
    /** @var bool|null Product is new */
    public $new = \null;
    /** @var int Number of uploadable files (concerning customizable products) */
    public $uploadable_files;
    /** @var int Number of text fields */
    public $text_fields;
    /** @var bool Product status */
    public $active = \true;
    /**
     * @var string Redirection type
     *
     * @see RedirectType
     */
    public $redirect_type = \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\RedirectType::TYPE_DEFAULT;
    /**
     * @var int Product identifier or Category identifier depends on redirect_type
     */
    public $id_type_redirected = 0;
    /** @var bool Product available for order */
    public $available_for_order = \true;
    /** @var string Available for order date in mysql format Y-m-d */
    public $available_date = \PrestaShop\PrestaShop\Core\Util\DateTime\DateTime::NULL_DATE;
    /** @var bool Will the condition select should be visible for this product ? */
    public $show_condition = \false;
    /** @var string Enumerated (enum) product condition (new, used, refurbished) */
    public $condition;
    /** @var bool Show price of Product */
    public $show_price = \true;
    /** @var bool is the product indexed in the search index? */
    public $indexed = \false;
    /** @var string ENUM('both', 'catalog', 'search', 'none') front office visibility */
    public $visibility;
    /** @var string Object creation date in mysql format Y-m-d H:i:s */
    public $date_add;
    /** @var string Object last modification date in mysql format Y-m-d H:i:s */
    public $date_upd;
    /** @var array Tags data */
    public $tags;
    /** @var int temporary or saved object */
    public $state = self::STATE_SAVED;
    /**
     * @var float Base price of the product
     *
     * @deprecated 1.6.0.13
     */
    public $base_price;
    /**
     * @var int|null TaxRulesGroup identifier
     */
    public $id_tax_rules_group;
    /**
     * @var int
     *          We keep this variable for retrocompatibility for themes
     *
     * @deprecated 1.5.0
     */
    public $id_color_default = 0;
    /**
     * @deprecated since 1.7.8
     * The advanced stock management feature is not maintained anymore
     *
     * @var bool Tells if the product uses the advanced stock management
     */
    public $advanced_stock_management = \false;
    /**
     * @deprecated since 1.7.8
     * @see StockAvailable::$out_of_stock instead
     *
     * @var int
     *          - O Deny orders
     *          - 1 Allow orders
     *          - 2 Use global setting
     */
    public $out_of_stock = \PrestaShop\PrestaShop\Core\Domain\Product\Stock\ValueObject\OutOfStockType::OUT_OF_STOCK_DEFAULT;
    /**
     * @deprecated since 1.7.8
     * This property was only relevant to advanced stock management and that feature is not maintained anymore
     *
     * @var bool|null
     */
    public $depends_on_stock;
    /**
     * @var bool
     */
    public $isFullyLoaded = \false;
    /**
     * @var bool
     */
    public $cache_is_pack;
    /**
     * @var bool
     */
    public $cache_has_attachments;
    /**
     * @var bool
     */
    public $is_virtual;
    /**
     * @var int
     */
    public $id_pack_product_attribute;
    /**
     * @var int
     */
    public $cache_default_attribute;
    /**
     * @var string|string[] If product is populated, this property contain the rewrite link of the default category
     */
    public $category;
    /**
     * @var int tell the type of stock management to apply on the pack
     */
    public $pack_stock_type = \PrestaShop\PrestaShop\Core\Domain\Product\Pack\ValueObject\PackStockType::STOCK_TYPE_DEFAULT;
    /**
     * Type of delivery time.
     *
     * Choose which parameters use for give information delivery.
     * 0 - none
     * 1 - use default information
     * 2 - use product information
     *
     * @var int
     */
    public $additional_delivery_times = 1;
    /**
     * Delivery in-stock information.
     *
     * Long description for delivery in-stock product information.
     *
     * @var string[]
     */
    public $delivery_in_stock;
    /**
     * Delivery out-stock information.
     *
     * Long description for delivery out-stock product information.
     *
     * @var string[]
     */
    public $delivery_out_stock;
    /**
     * For now default value remains undefined, to keep compatibility with page v1 and former products.
     * But once the v2 is merged the default value should be ProductType::TYPE_STANDARD
     *
     * @var string
     */
    public $product_type = \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductType::TYPE_UNDEFINED;
    /**
     * @var int|null
     */
    public static $_taxCalculationMethod = \null;
    /** @var array Price cache */
    protected static $_prices = [];
    /** @var array */
    protected static $_pricesLevel2 = [];
    /** @var array */
    protected static $_incat = [];
    /** @var array */
    protected static $_combinations = [];
    /**
     * Associations between the ids of base combinations and their duplicates.
     * Used for duplicating specific prices when duplicating a product.
     *
     * @var array
     */
    protected static $_combination_associations = [];
    /**
     * @deprecated Since 1.5.6.1
     *
     * @var array
     */
    protected static $_cart_quantity = [];
    /**
     * @deprecated Since 1.5.0.9
     *
     * @var array
     */
    protected static $_tax_rules_group = [];
    /** @var array */
    protected static $_cacheFeatures = [];
    /** @var array */
    protected static $_frontFeaturesCache = [];
    /** @var array */
    protected static $productPropertiesCache = [];
    /**
     * @deprecated Since 1.5.0.1 Unused
     *
     * @var array cache stock data in getStock() method
     */
    protected static $cacheStock = [];
    /** @var int|null */
    protected static $psEcotaxTaxRulesGroupId = \null;
    /**
     * Product can be temporary saved in database
     */
    public const STATE_TEMP = 0;
    public const STATE_SAVED = 1;
    /**
     * @var array Contains object definition
     *
     * @see ObjectModel::$definition
     */
    public static $definition = ['table' => 'product', 'primary' => 'id_product', 'multilang' => \true, 'multilang_shop' => \true, 'fields' => [
        /* Classic fields */
        'id_shop_default' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId'],
        'id_manufacturer' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId'],
        'id_supplier' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId'],
        'reference' => ['type' => self::TYPE_STRING, 'validate' => 'isReference', 'size' => \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\Reference::MAX_LENGTH],
        'supplier_reference' => ['type' => self::TYPE_STRING, 'validate' => 'isReference', 'size' => 64],
        'location' => ['type' => self::TYPE_STRING, 'validate' => 'isString', 'size' => 255],
        'width' => ['type' => self::TYPE_FLOAT, 'validate' => 'isUnsignedFloat'],
        'height' => ['type' => self::TYPE_FLOAT, 'validate' => 'isUnsignedFloat'],
        'depth' => ['type' => self::TYPE_FLOAT, 'validate' => 'isUnsignedFloat'],
        'weight' => ['type' => self::TYPE_FLOAT, 'validate' => 'isUnsignedFloat'],
        'quantity_discount' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool'],
        'ean13' => ['type' => self::TYPE_STRING, 'validate' => 'isEan13', 'size' => \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\Ean13::MAX_LENGTH],
        'isbn' => ['type' => self::TYPE_STRING, 'validate' => 'isIsbn', 'size' => \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\Isbn::MAX_LENGTH],
        'upc' => ['type' => self::TYPE_STRING, 'validate' => 'isUpc', 'size' => \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\Upc::MAX_LENGTH],
        'mpn' => ['type' => self::TYPE_STRING, 'validate' => 'isMpn', 'size' => \PrestaShop\PrestaShop\Core\Domain\Product\ProductSettings::MAX_MPN_LENGTH],
        'cache_is_pack' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool'],
        'cache_has_attachments' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool'],
        'is_virtual' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool'],
        'state' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId'],
        'additional_delivery_times' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId'],
        'delivery_in_stock' => ['type' => self::TYPE_STRING, 'lang' => \true, 'validate' => 'isGenericName', 'size' => 255],
        'delivery_out_stock' => ['type' => self::TYPE_STRING, 'lang' => \true, 'validate' => 'isGenericName', 'size' => 255],
        'product_type' => [
            'type' => self::TYPE_STRING,
            'validate' => 'isGenericName',
            // For now undefined value is still allowed, in 179 we should use ProductType::AVAILABLE_TYPES here
            'values' => [\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductType::TYPE_STANDARD, \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductType::TYPE_PACK, \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductType::TYPE_VIRTUAL, \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductType::TYPE_COMBINATIONS, \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductType::TYPE_UNDEFINED],
            // This default value should be replaced with ProductType::TYPE_STANDARD in 179 when the v2 page is fully migrated
            'default' => \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductType::TYPE_UNDEFINED,
        ],
        /* Shop fields */
        'id_category_default' => ['type' => self::TYPE_INT, 'shop' => \true, 'validate' => 'isUnsignedId'],
        'id_tax_rules_group' => ['type' => self::TYPE_INT, 'shop' => \true, 'validate' => 'isUnsignedId'],
        'on_sale' => ['type' => self::TYPE_BOOL, 'shop' => \true, 'validate' => 'isBool'],
        'online_only' => ['type' => self::TYPE_BOOL, 'shop' => \true, 'validate' => 'isBool'],
        'ecotax' => ['type' => self::TYPE_FLOAT, 'shop' => \true, 'validate' => 'isPrice'],
        'minimal_quantity' => ['type' => self::TYPE_INT, 'shop' => \true, 'validate' => 'isPositiveInt'],
        'low_stock_threshold' => ['type' => self::TYPE_INT, 'shop' => \true, 'allow_null' => \true, 'validate' => 'isInt'],
        'low_stock_alert' => ['type' => self::TYPE_BOOL, 'shop' => \true, 'validate' => 'isBool'],
        'price' => ['type' => self::TYPE_FLOAT, 'shop' => \true, 'validate' => 'isPrice', 'required' => \true],
        'wholesale_price' => ['type' => self::TYPE_FLOAT, 'shop' => \true, 'validate' => 'isPrice'],
        'unity' => ['type' => self::TYPE_STRING, 'shop' => \true, 'validate' => 'isString'],
        'unit_price' => ['type' => self::TYPE_FLOAT, 'shop' => \true, 'validate' => 'isPrice'],
        /*
         * Only the DB field is deprecated because unit_price is the new reference, we need to keep the class field though
         * @deprecated in 8.0 this DB column will be removed in a future version
         */
        'unit_price_ratio' => ['type' => self::TYPE_FLOAT, 'shop' => \true],
        'additional_shipping_cost' => ['type' => self::TYPE_FLOAT, 'shop' => \true, 'validate' => 'isPrice'],
        'customizable' => ['type' => self::TYPE_INT, 'shop' => \true, 'validate' => 'isUnsignedInt'],
        'text_fields' => ['type' => self::TYPE_INT, 'shop' => \true, 'validate' => 'isUnsignedInt'],
        'uploadable_files' => ['type' => self::TYPE_INT, 'shop' => \true, 'validate' => 'isUnsignedInt'],
        'active' => ['type' => self::TYPE_BOOL, 'shop' => \true, 'validate' => 'isBool'],
        'redirect_type' => ['type' => self::TYPE_STRING, 'shop' => \true, 'validate' => 'isString'],
        'id_type_redirected' => ['type' => self::TYPE_INT, 'shop' => \true, 'validate' => 'isUnsignedId'],
        'available_for_order' => ['type' => self::TYPE_BOOL, 'shop' => \true, 'validate' => 'isBool'],
        'available_date' => ['type' => self::TYPE_DATE, 'shop' => \true, 'validate' => 'isDateFormat'],
        'show_condition' => ['type' => self::TYPE_BOOL, 'shop' => \true, 'validate' => 'isBool'],
        'condition' => ['type' => self::TYPE_STRING, 'shop' => \true, 'validate' => 'isGenericName', 'values' => ['new', 'used', 'refurbished'], 'default' => 'new'],
        'show_price' => ['type' => self::TYPE_BOOL, 'shop' => \true, 'validate' => 'isBool'],
        'indexed' => ['type' => self::TYPE_BOOL, 'shop' => \true, 'validate' => 'isBool'],
        'visibility' => ['type' => self::TYPE_STRING, 'shop' => \true, 'validate' => 'isProductVisibility', 'values' => ['both', 'catalog', 'search', 'none'], 'default' => 'both'],
        'cache_default_attribute' => ['type' => self::TYPE_INT, 'shop' => \true],
        'advanced_stock_management' => ['type' => self::TYPE_BOOL, 'shop' => \true, 'validate' => 'isBool'],
        'date_add' => ['type' => self::TYPE_DATE, 'shop' => \true, 'validate' => 'isDate'],
        'date_upd' => ['type' => self::TYPE_DATE, 'shop' => \true, 'validate' => 'isDate'],
        'pack_stock_type' => ['type' => self::TYPE_INT, 'shop' => \true, 'validate' => 'isUnsignedInt'],
        /* Lang fields */
        'meta_description' => ['type' => self::TYPE_STRING, 'lang' => \true, 'validate' => 'isGenericName', 'size' => 512],
        'meta_keywords' => ['type' => self::TYPE_STRING, 'lang' => \true, 'validate' => 'isGenericName', 'size' => 255],
        'meta_title' => ['type' => self::TYPE_STRING, 'lang' => \true, 'validate' => 'isGenericName', 'size' => 255],
        'link_rewrite' => ['type' => self::TYPE_STRING, 'lang' => \true, 'validate' => 'isLinkRewrite', 'required' => \false, 'size' => 128, 'ws_modifier' => ['http_method' => \WebserviceRequest::HTTP_POST, 'modifier' => 'modifierWsLinkRewrite']],
        'name' => ['type' => self::TYPE_STRING, 'lang' => \true, 'validate' => 'isCatalogName', 'required' => \false, 'size' => \PrestaShop\PrestaShop\Core\Domain\Product\ProductSettings::MAX_NAME_LENGTH],
        'description' => ['type' => self::TYPE_HTML, 'lang' => \true, 'validate' => 'isCleanHtml', 'size' => 4194303],
        'description_short' => ['type' => self::TYPE_HTML, 'lang' => \true, 'validate' => 'isCleanHtml', 'size' => 4194303],
        'available_now' => ['type' => self::TYPE_STRING, 'lang' => \true, 'validate' => 'isGenericName', 'size' => \PrestaShop\PrestaShop\Core\Domain\Product\ProductSettings::MAX_AVAILABLE_NOW_LABEL_LENGTH],
        'available_later' => ['type' => self::TYPE_STRING, 'lang' => \true, 'validate' => 'IsGenericName', 'size' => \PrestaShop\PrestaShop\Core\Domain\Product\ProductSettings::MAX_AVAILABLE_LATER_LABEL_LENGTH],
    ], 'associations' => ['manufacturer' => ['type' => self::HAS_ONE], 'supplier' => ['type' => self::HAS_ONE], 'default_category' => ['type' => self::HAS_ONE, 'field' => 'id_category_default', 'object' => 'Category'], 'tax_rules_group' => ['type' => self::HAS_ONE], 'categories' => ['type' => self::HAS_MANY, 'field' => 'id_category', 'object' => 'Category', 'association' => 'category_product'], 'stock_availables' => ['type' => self::HAS_MANY, 'field' => 'id_stock_available', 'object' => 'StockAvailable', 'association' => 'stock_availables'], 'attachments' => ['type' => self::HAS_MANY, 'field' => 'id_attachment', 'object' => 'Attachment', 'association' => 'product_attachment']]];
    /** @var array */
    protected $webserviceParameters = ['objectMethods' => ['add' => 'addWs', 'update' => 'updateWs'], 'objectNodeNames' => 'products', 'fields' => ['id_manufacturer' => ['xlink_resource' => 'manufacturers'], 'id_supplier' => ['xlink_resource' => 'suppliers'], 'id_category_default' => ['xlink_resource' => 'categories'], 'new' => [], 'cache_default_attribute' => [], 'id_default_image' => ['getter' => 'getCoverWs', 'setter' => 'setCoverWs', 'xlink_resource' => ['resourceName' => 'images', 'subResourceName' => 'products']], 'id_default_combination' => ['getter' => 'getWsDefaultCombination', 'setter' => 'setWsDefaultCombination', 'xlink_resource' => ['resourceName' => 'combinations']], 'id_tax_rules_group' => ['xlink_resource' => ['resourceName' => 'tax_rule_groups']], 'position_in_category' => ['getter' => 'getWsPositionInCategory', 'setter' => 'setWsPositionInCategory'], 'manufacturer_name' => ['getter' => 'getWsManufacturerName', 'setter' => \false], 'quantity' => ['getter' => \false, 'setter' => \false], 'type' => ['getter' => 'getWsType', 'setter' => 'setWsType']], 'associations' => ['categories' => ['resource' => 'category', 'fields' => ['id' => ['required' => \true]]], 'images' => ['resource' => 'image', 'fields' => ['id' => []]], 'combinations' => ['resource' => 'combination', 'fields' => ['id' => ['required' => \true]]], 'product_option_values' => ['resource' => 'product_option_value', 'fields' => ['id' => ['required' => \true]]], 'product_features' => ['resource' => 'product_feature', 'fields' => ['id' => ['required' => \true], 'id_feature_value' => ['required' => \true, 'xlink_resource' => 'product_feature_values']]], 'tags' => ['resource' => 'tag', 'fields' => ['id' => ['required' => \true]]], 'stock_availables' => ['resource' => 'stock_available', 'fields' => ['id' => ['required' => \true], 'id_product_attribute' => ['required' => \true]], 'setter' => \false], 'attachments' => ['resource' => 'attachment', 'api' => 'attachments', 'fields' => ['id' => ['required' => \true]]], 'accessories' => ['resource' => 'product', 'api' => 'products', 'fields' => ['id' => ['required' => \true, 'xlink_resource' => 'products']]], 'product_bundle' => ['resource' => 'product', 'api' => 'products', 'fields' => ['id' => ['required' => \true], 'id_product_attribute' => [], 'quantity' => []]]]];
    public const CUSTOMIZE_FILE = 0;
    public const CUSTOMIZE_TEXTFIELD = 1;
    /**
     * Note:  prefix is "PTYPE" because TYPE_ is used in ObjectModel (definition).
     */
    public const PTYPE_SIMPLE = 0;
    public const PTYPE_PACK = 1;
    public const PTYPE_VIRTUAL = 2;
    /**
     * @param int|null $id_product Product identifier
     * @param bool $full Load with price, tax rate, manufacturer name, supplier name, tags, stocks...
     * @param int|null $id_lang Language identifier
     * @param int|null $id_shop Shop identifier
     * @param Context|null $context Context to use for retrieve cart
     */
    public function __construct($id_product = \null, $full = \false, $id_lang = \null, $id_shop = \null, \Context $context = \null)
    {
    }
    /**
     * @see ObjectModel::getFieldsShop()
     *
     * @return array
     */
    public function getFieldsShop()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function add($autodate = \true, $null_values = \false)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function update($null_values = \false)
    {
    }
    /**
     * Unit price ratio is not edited anymore, the reference is handled via the unit_price field which is now saved
     * in the DB we kept unit_price_ratio in the DB for backward compatibility but shouldn't be written anymore so
     * it is automatically updated when product is saved
     */
    protected function updateUnitRatio(): void
    {
    }
    /**
     * Unit price ratio is not edited anymore, the reference is handled via the unit_price field which is now saved
     * in the DB we kept unit_price_ratio in the DB for backward compatibility but but the DB value should not be used
     * any more since it is deprecated so the object field is computed automatically.
     */
    protected function fillUnitRatio(bool $ecotaxEnabled): void
    {
    }
    /**
     * Init computation of price display method (i.e. price should be including tax or not) for a customer.
     * If customer Id passed as null then this compute price display method with according of current group.
     * Otherwise a price display method will compute with according of a customer address (i.e. country).
     *
     * @see Group::getPriceDisplayMethod()
     *
     * @param int|null $id_customer Customer identifier
     */
    public static function initPricesComputation($id_customer = \null)
    {
    }
    /**
     * Returns price display method for a customer (i.e. price should be including tax or not).
     *
     * @see initPricesComputation()
     *
     * @param int|null $id_customer Customer identifier
     *
     * @return int Returns 0 (PS_TAX_INC) if tax should be included, otherwise 1 (PS_TAX_EXC) - tax should be excluded
     */
    public static function getTaxCalculationMethod($id_customer = \null)
    {
    }
    /**
     * Move a product inside its category.
     *
     * @param bool $way Up (1) or Down (0)
     * @param int $position
     *
     * @return bool Update result
     */
    public function updatePosition($way, $position)
    {
    }
    /**
     * Reorder product position in category $id_category.
     * Call it after deleting a product from a category.
     *
     * @param int $id_category Category identifier
     * @param int $position
     *
     * @return bool
     */
    public static function cleanPositions($id_category, $position = 0)
    {
    }
    /**
     * Get the default attribute for a product.
     *
     * @param int $id_product Product ID
     * @param int $minimum_quantity Minimal quantity there should be in stock of the combination
     * @param bool $reset Force reload new values and not use cache
     *
     * @return int Attributes list
     */
    public static function getDefaultAttribute($id_product, $minimum_quantity = 0, $reset = \false)
    {
    }
    /**
     * @param string $available_date Date in mysql format Y-m-d
     *
     * @return bool
     */
    public function setAvailableDate($available_date = '0000-00-00')
    {
    }
    /**
     * For a given id_product and id_product_attribute, return available date.
     *
     * @param int $id_product Product identifier
     * @param int|null $id_product_attribute Attribute identifier
     *
     * @return string|null
     */
    public static function getAvailableDate($id_product, $id_product_attribute = \null)
    {
    }
    /**
     * @param int $id_product Product identifier
     * @param bool $is_virtual
     */
    public static function updateIsVirtual($id_product, $is_virtual = \true)
    {
    }
    /**
     * @see ObjectModel::resetStaticCache()
     *
     * reset static cache (eg unit testing purpose).
     */
    public static function resetStaticCache()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function validateField($field, $value, $id_lang = \null, $skip = [], $human_errors = \false)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function delete()
    {
    }
    /**
     * @param array $products Product identifiers
     *
     * @return bool|int
     */
    public function deleteSelection($products)
    {
    }
    /**
     * @return bool
     */
    public function deleteFromCartRules()
    {
    }
    /**
     * @return bool
     */
    public function deleteFromSupplier()
    {
    }
    /**
     * addToCategories add this product to the category/ies if not exists.
     *
     * @param int|int[] $categories id_category or array of id_category
     *
     * @return bool true if succeed
     */
    public function addToCategories($categories = [])
    {
    }
    /**
     * Update categories to index product into.
     *
     * @param int[] $categories Categories list to index product into
     * @param bool $keeping_current_pos (deprecated, no more used)
     *
     * @return bool Update/insertion result
     */
    public function updateCategories($categories, $keeping_current_pos = \false)
    {
    }
    /**
     * deleteCategory delete this product from the category $id_category.
     *
     * @param int $id_category Category identifier
     * @param bool $clean_positions
     *
     * @return bool
     */
    public function deleteCategory($id_category, $clean_positions = \true)
    {
    }
    /**
     * Delete all association to category where product is indexed.
     *
     * @param bool $clean_positions clean category positions after deletion
     *
     * @return bool Deletion result
     */
    public function deleteCategories($clean_positions = \false)
    {
    }
    /**
     * Delete products tags entries.
     *
     * @return bool Deletion result
     */
    public function deleteTags()
    {
    }
    /**
     * Delete product from cart.
     *
     * @return bool Deletion result
     */
    public function deleteCartProducts()
    {
    }
    /**
     * Delete product images from database.
     *
     * @return bool success
     */
    public function deleteImages()
    {
    }
    /**
     * Get all available products.
     *
     * @param int $id_lang Language identifier
     * @param int $start Start number
     * @param int $limit Number of products to return
     * @param string $order_by Field for ordering
     * @param string $order_way Way for ordering (ASC or DESC)
     * @param int|false $id_category Category identifier
     * @param bool $only_active
     * @param Context|null $context
     *
     * @return array Products details
     */
    public static function getProducts($id_lang, $start, $limit, $order_by, $order_way, $id_category = \false, $only_active = \false, \Context $context = \null)
    {
    }
    /**
     * @param int $id_lang Language identifier
     * @param Context|null $context
     *
     * @return array
     */
    public static function getSimpleProducts($id_lang, \Context $context = \null)
    {
    }
    /**
     * @return bool
     */
    public function isNew()
    {
    }
    /**
     * @param int[] $attributes_list Attribute identifier(s)
     * @param int|false $current_product_attribute Attribute identifier
     * @param Context|null $context
     * @param bool $all_shops
     * @param bool $return_id
     *
     * @return bool|int|string Attribute exist or Attribute identifier if return_id = true
     */
    public function productAttributeExists($attributes_list, $current_product_attribute = \false, \Context $context = \null, $all_shops = \false, $return_id = \false)
    {
    }
    /**
     * addProductAttribute is deprecated.
     *
     * The quantity params now set StockAvailable for the current shop with the specified quantity
     * The supplier_reference params now set the supplier reference of the default supplier of the product if possible
     *
     * @deprecated since 1.5.0
     * @see StockManager if you want to manage real stock
     * @see StockAvailable if you want to manage available quantities for sale on your shop(s)
     * @see ProductSupplier for manage supplier reference(s)
     *
     * @param float $price Additional price
     * @param float $weight Additional weight
     * @param float $unit_impact
     * @param float $ecotax Additional ecotax
     * @param int $quantity
     * @param int[] $id_images Image ids
     * @param string $reference Reference
     * @param int $id_supplier Supplier identifier
     * @param string $ean13
     * @param bool $default Is default attribute for product
     * @param string $location
     * @param string $upc
     * @param int $minimal_quantity
     * @param string $isbn
     * @param int|null $low_stock_threshold Low stock for mail alert
     * @param bool $low_stock_alert Low stock mail alert activated
     * @param string|null $mpn
     *
     * @return int|false Attribute identifier if success, false if it fail
     */
    public function addProductAttribute($price, $weight, $unit_impact, $ecotax, $quantity, $id_images, $reference, $id_supplier, $ean13, $default, $location, $upc, $minimal_quantity, $isbn, $low_stock_threshold = \null, $low_stock_alert = \false, $mpn = \null)
    {
    }
    /**
     * @param array $combinations
     * @param array $attributes
     * @param bool $resetExistingCombination
     *
     * @return bool
     */
    public function generateMultipleCombinations($combinations, $attributes, $resetExistingCombination = \true)
    {
    }
    /**
     * @param array<int> $combinations
     * @param int $langId
     *
     * @return array
     */
    public function sortCombinationByAttributePosition($combinations, $langId)
    {
    }
    /**
     * @param float $wholesale_price
     * @param float $price Additional price
     * @param float $weight Additional weight
     * @param float $unit_impact
     * @param float $ecotax Additional ecotax
     * @param int $quantity deprecated
     * @param int[] $id_images Image ids
     * @param string $reference Reference
     * @param int $id_supplier Supplier identifier
     * @param string $ean13
     * @param bool $default Is default attribute for product
     * @param string|null $location
     * @param string|null $upc
     * @param int $minimal_quantity
     * @param array $id_shop_list
     * @param string|null $available_date Date in mysql format Y-m-d
     * @param string $isbn
     * @param int|null $low_stock_threshold Low stock for mail alert
     * @param bool $low_stock_alert Low stock mail alert activated
     * @param string|null $mpn
     * @param string[]|string $available_now Combination available now labels
     * @param string[]|string $available_later Combination available later labels
     *
     * @return int|false Attribute identifier if success, false if it fail
     */
    public function addCombinationEntity($wholesale_price, $price, $weight, $unit_impact, $ecotax, $quantity, $id_images, $reference, $id_supplier, $ean13, $default, $location = \null, $upc = \null, $minimal_quantity = 1, array $id_shop_list = [], $available_date = \null, $isbn = '', $low_stock_threshold = \null, $low_stock_alert = \false, $mpn = \null, $available_now = [], $available_later = [])
    {
    }
    /**
     * Delete all default attributes for product.
     *
     * @return bool
     */
    public function deleteDefaultAttributes()
    {
    }
    /**
     * @param int $id_product_attribute Attribute identifier
     *
     * @return bool
     */
    public function setDefaultAttribute($id_product_attribute)
    {
    }
    /**
     * @param int $id_product Product identifier
     *
     * @return int|false Default Attribute identifier if success, false if it false
     */
    public static function updateDefaultAttribute($id_product)
    {
    }
    /**
     * Update a product attribute.
     *
     * @deprecated since 1.5
     * @see updateAttribute() to use instead
     * @see ProductSupplier for manage supplier reference(s)
     *
     * @param int $id_product_attribute Attribute identifier
     * @param float $wholesale_price
     * @param float $price Additional price
     * @param float $weight Additional weight
     * @param float $unit
     * @param float $ecotax Additional ecotax
     * @param int[] $id_images Image ids
     * @param string $reference
     * @param int $id_supplier Supplier identifier
     * @param string $ean13
     * @param bool $default Is default attribute for product
     * @param string $location
     * @param string $upc
     * @param int $minimal_quantity
     * @param string $available_date Date in mysql format Y-m-d
     * @param string $isbn
     * @param int|null $low_stock_threshold Low stock for mail alert
     * @param bool $low_stock_alert Low stock mail alert activated
     * @param string|null $mpn
     * @param string[]|string|null $available_now Combination available now labels
     * @param string[]|string|null $available_later Combination available later labels
     *
     * @return bool
     */
    public function updateProductAttribute($id_product_attribute, $wholesale_price, $price, $weight, $unit, $ecotax, $id_images, $reference, $id_supplier, $ean13, $default, $location, $upc, $minimal_quantity, $available_date, $isbn = '', $low_stock_threshold = \null, $low_stock_alert = \false, $mpn = \null, $available_now = \null, $available_later = \null)
    {
    }
    /**
     * Sets or updates Supplier Reference.
     *
     * @param int $id_supplier Supplier identifier
     * @param int $id_product_attribute Attribute identifier
     * @param string|null $supplier_reference
     * @param float|null $price
     * @param int|null $id_currency Currency identifier
     */
    public function addSupplierReference($id_supplier, $id_product_attribute, $supplier_reference = \null, $price = \null, $id_currency = \null)
    {
    }
    /**
     * Update a product attribute.
     *
     * @param int $id_product_attribute Product attribute id
     * @param float $wholesale_price Wholesale price
     * @param float $price Additional price
     * @param float $weight Additional weight
     * @param float $unit Additional unit price
     * @param float $ecotax Additional ecotax
     * @param int[] $id_images Image identifiers
     * @param string $reference Reference
     * @param string $ean13 Ean-13 barcode
     * @param bool $default Is default attribute for product
     * @param string|null $location
     * @param string $upc Upc barcode
     * @param int|null $minimal_quantity Minimal quantity
     * @param string|null $available_date Date in mysql format Y-m-d
     * @param bool $update_all_fields
     * @param int[] $id_shop_list
     * @param string $isbn ISBN reference
     * @param int|null $low_stock_threshold Low stock for mail alert
     * @param bool $low_stock_alert Low stock mail alert activated
     * @param string $mpn MPN
     * @param string[]|string|null $available_now Combination available now labels
     * @param string[]|string|null $available_later Combination available later labels
     *
     * @return bool Update result
     */
    public function updateAttribute($id_product_attribute, $wholesale_price, $price, $weight, $unit, $ecotax, $id_images, $reference, $ean13, $default, $location = \null, $upc = \null, $minimal_quantity = \null, $available_date = \null, $update_all_fields = \true, array $id_shop_list = [], $isbn = '', $low_stock_threshold = \null, $low_stock_alert = \false, $mpn = \null, $available_now = \null, $available_later = \null)
    {
    }
    /**
     * Add a product attribute.
     *
     * @since 1.5.0.1
     *
     * @param float $price Additional price
     * @param float $weight Additional weight
     * @param float $unit_impact Additional unit price
     * @param float $ecotax Additional ecotax
     * @param int[] $id_images Image ids
     * @param string $reference Reference
     * @param string $ean13 Ean-13 barcode
     * @param bool $default Is default attribute for product
     * @param string $location Location
     * @param string|null $upc
     * @param int $minimal_quantity Minimal quantity to add to cart
     * @param int[] $id_shop_list
     * @param string|null $available_date Date in mysql format Y-m-d
     * @param int $quantity
     * @param string $isbn ISBN reference
     * @param int|null $low_stock_threshold Low stock for mail alert
     * @param bool $low_stock_alert Low stock mail alert activated
     * @param string|null $mpn
     * @param string[]|string $available_now Combination available now labels
     * @param string[]|string $available_later Combination available later labels
     *
     * @return int|false|void Attribute identifier if success, false if failed to add Combination, void if Product identifier not set
     */
    public function addAttribute($price, $weight, $unit_impact, $ecotax, $id_images, $reference, $ean13, $default, $location = \null, $upc = \null, $minimal_quantity = 1, array $id_shop_list = [], $available_date = \null, $quantity = 0, $isbn = '', $low_stock_threshold = \null, $low_stock_alert = \false, $mpn = \null, $available_now = [], $available_later = [])
    {
    }
    /**
     * @deprecated since 1.5.0
     *
     * @return bool
     */
    public function updateQuantityProductWithAttributeQuantity()
    {
    }
    /**
     * Delete product attributes.
     *
     * @return bool Deletion result
     */
    public function deleteProductAttributes()
    {
    }
    /**
     * Delete product features.
     *
     * @return bool Deletion result
     */
    public function deleteProductFeatures()
    {
    }
    /**
     * @param int $id_product Product identifier
     *
     * @return bool
     */
    public static function updateCacheAttachment($id_product)
    {
    }
    /**
     * Delete product attachments.
     *
     * @param bool $update_attachment_cache If set to true attachment cache will be updated
     *
     * @return bool Deletion result
     */
    public function deleteAttachments($update_attachment_cache = \true)
    {
    }
    /**
     * Delete product customizations.
     *
     * @return bool Deletion result
     */
    public function deleteCustomization()
    {
    }
    /**
     * Delete product pack details.
     *
     * @return bool Deletion result
     */
    public function deletePack()
    {
    }
    /**
     * Delete product sales.
     *
     * @return bool Deletion result
     */
    public function deleteProductSale()
    {
    }
    /**
     * Delete product indexed words.
     *
     * @return bool Deletion result
     */
    public function deleteSearchIndexes()
    {
    }
    /**
     * Delete a product attributes combination.
     *
     * @param int $id_product_attribute Attribute identifier
     *
     * @return bool Deletion result
     */
    public function deleteAttributeCombination($id_product_attribute)
    {
    }
    /**
     * Delete features.
     *
     * @return bool
     */
    public function deleteFeatures()
    {
    }
    /**
     * Get all available product attributes resume.
     *
     * @param int $id_lang Language identifier
     * @param string $attribute_value_separator
     * @param string $attribute_separator
     *
     * @return bool|array Product attributes combinations
     */
    public function getAttributesResume($id_lang, $attribute_value_separator = ' - ', $attribute_separator = ', ')
    {
    }
    /**
     * Get all available product attributes combinations.
     *
     * @param int|null $id_lang Language identifier
     * @param bool $groupByIdAttributeGroup
     *
     * @return array Product attributes combinations
     */
    public function getAttributeCombinations($id_lang = \null, $groupByIdAttributeGroup = \true)
    {
    }
    /**
     * Get product attribute combination by id_product_attribute.
     *
     * @param int $id_product_attribute Attribute identifier
     * @param int $id_lang Language identifier
     * @param bool $groupByIdAttributeGroup
     *
     * @return array Product attribute combination by id_product_attribute
     */
    public function getAttributeCombinationsById($id_product_attribute, $id_lang, $groupByIdAttributeGroup = \true)
    {
    }
    /**
     * @param int $id_lang Language identifier
     *
     * @return array|false
     */
    public function getCombinationImages($id_lang)
    {
    }
    /**
     * @param int $id_product_attribute Attribute identifier
     * @param int $id_lang Language identifier
     *
     * @return array|false
     */
    public static function getCombinationImageById($id_product_attribute, $id_lang)
    {
    }
    /**
     * Check if product has attributes combinations.
     *
     * @return int Attributes combinations number
     */
    public function hasAttributes()
    {
    }
    /**
     * Get new products.
     *
     * @param int $id_lang Language identifier
     * @param int $page_number Start from
     * @param int $nb_products Number of products to return
     * @param bool $count
     * @param string|null $order_by
     * @param string|null $order_way
     * @param Context|null $context
     *
     * @return array|int|false New products, total of product if $count is true, false if it fail
     */
    public static function getNewProducts($id_lang, $page_number = 0, $nb_products = 10, $count = \false, $order_by = \null, $order_way = \null, \Context $context = \null)
    {
    }
    /**
     * @param string $beginning Date in mysql format Y-m-d
     * @param string $ending Date in mysql format Y-m-d
     * @param Context|null $context
     * @param bool $with_combination
     *
     * @return array
     */
    protected static function _getProductIdByDate($beginning, $ending, \Context $context = \null, $with_combination = \false)
    {
    }
    /**
     * Get a random special.
     *
     * @param int $id_lang Language identifier
     * @param string|false $beginning Date in mysql format Y-m-d
     * @param string|false $ending Date in mysql format Y-m-d
     * @param Context|null $context
     *
     * @return array|false Special
     */
    public static function getRandomSpecial($id_lang, $beginning = \false, $ending = \false, \Context $context = \null)
    {
    }
    /**
     * Get prices drop.
     *
     * @param int $id_lang Language identifier
     * @param int $page_number Start from
     * @param int $nb_products Number of products to return
     * @param bool $count Only in order to get total number
     * @param string|null $order_by
     * @param string|null $order_way
     * @param string|false $beginning Date in mysql format Y-m-d
     * @param string|false $ending Date in mysql format Y-m-d
     * @param Context|null $context
     *
     * @return array|int|false
     */
    public static function getPricesDrop($id_lang, $page_number = 0, $nb_products = 10, $count = \false, $order_by = \null, $order_way = \null, $beginning = \false, $ending = \false, \Context $context = \null)
    {
    }
    /**
     * getProductCategories return an array of categories which this product belongs to.
     *
     * @param int|string $id_product Product identifier
     *
     * @return array Category identifiers
     */
    public static function getProductCategories($id_product = '')
    {
    }
    /**
     * @param int|string $id_product Product identifier
     * @param int|null $id_lang Language identifier
     *
     * @return array
     */
    public static function getProductCategoriesFull($id_product = '', $id_lang = \null)
    {
    }
    /**
     * getCategories return an array of categories which this product belongs to.
     *
     * @return array of categories
     */
    public function getCategories()
    {
    }
    /**
     * Gets carriers assigned to the product.
     *
     * @return array
     */
    public function getCarriers()
    {
    }
    /**
     * Sets carriers assigned to the product.
     *
     * @param int[] $carrier_list
     */
    public function setCarriers($carrier_list)
    {
    }
    /**
     * Get product images and legends.
     *
     * @param int $id_lang Language identifier
     * @param Context|null $context
     *
     * @return array Product images and legends
     */
    public function getImages($id_lang, \Context $context = \null)
    {
    }
    /**
     * Get product cover image.
     *
     * @param int $id_product Product identifier
     * @param Context|null $context
     *
     * @return array Product cover image
     */
    public static function getCover($id_product, \Context $context = \null)
    {
    }
    /**
     * Returns product price.
     *
     * @param int $id_product Product identifier
     * @param bool $usetax With taxes or not (optional)
     * @param int|null $id_product_attribute Attribute identifier (optional).
     *                                       If set to false, do not apply the combination price impact.
     *                                       NULL does apply the default combination price impact
     * @param int $decimals Number of decimals (optional)
     * @param int|null $divisor Useful when paying many time without fees (optional)
     * @param bool $only_reduc Returns only the reduction amount
     * @param bool $usereduc Set if the returned amount will include reduction
     * @param int $quantity Required for quantity discount application (default value: 1)
     * @param bool $force_associated_tax DEPRECATED - NOT USED Force to apply the associated tax.
     *                                   Only works when the parameter $usetax is true
     * @param int|null $id_customer Customer identifier (for customer group reduction)
     * @param int|null $id_cart Cart identifier Required when the cookie is not accessible
     *                          (e.g., inside a payment module, a cron task...)
     * @param int|null $id_address Address identifier of Customer. Required for price (tax included)
     *                             calculation regarding the guest localization
     * @param array|null $specific_price_output If a specific price applies regarding the previous parameters,
     *                                          this variable is filled with the corresponding SpecificPrice data
     * @param bool $with_ecotax insert ecotax in price output
     * @param bool $use_group_reduction
     * @param Context $context
     * @param bool $use_customer_price
     * @param int|null $id_customization Customization identifier
     *
     * @return float|null Product price
     */
    public static function getPriceStatic($id_product, $usetax = \true, $id_product_attribute = \null, $decimals = 6, $divisor = \null, $only_reduc = \false, $usereduc = \true, $quantity = 1, $force_associated_tax = \false, $id_customer = \null, $id_cart = \null, $id_address = \null, &$specific_price_output = \null, $with_ecotax = \true, $use_group_reduction = \true, \Context $context = \null, $use_customer_price = \true, $id_customization = \null)
    {
    }
    /**
     * Price calculation / Get product price.
     *
     * @param int $id_shop Shop identifier
     * @param int $id_product Product identifier
     * @param int|null $id_product_attribute Attribute identifier
     * @param int $id_country Country identifier
     * @param int $id_state State identifier
     * @param string $zipcode
     * @param int $id_currency Currency identifier
     * @param int $id_group Group identifier
     * @param int $quantity Quantity Required for Specific prices : quantity discount application
     * @param bool $use_tax with (1) or without (0) tax
     * @param int $decimals Number of decimals returned
     * @param bool $only_reduc Returns only the reduction amount
     * @param bool $use_reduc Set if the returned amount will include reduction
     * @param bool $with_ecotax insert ecotax in price output
     * @param array|null $specific_price If a specific price applies regarding the previous parameters,
     *                                   this variable is filled with the corresponding SpecificPrice data
     * @param bool $use_group_reduction
     * @param int $id_customer Customer identifier
     * @param bool $use_customer_price
     * @param int $id_cart Cart identifier
     * @param int $real_quantity
     * @param int $id_customization Customization identifier
     *
     * @return float|null Product price, void if not found in cache $_pricesLevel2
     */
    public static function priceCalculation($id_shop, $id_product, $id_product_attribute, $id_country, $id_state, $zipcode, $id_currency, $id_group, $quantity, $use_tax, $decimals, $only_reduc, $use_reduc, $with_ecotax, &$specific_price, $use_group_reduction, $id_customer = 0, $use_customer_price = \true, $id_cart = 0, $real_quantity = 0, $id_customization = 0)
    {
    }
    /**
     * @param int $orderId
     * @param int $productId
     * @param int $combinationId
     * @param bool $withTaxes
     * @param bool $useReduction
     * @param bool $withEcoTax
     *
     * @return float|null
     *
     * @throws PrestaShopDatabaseException
     */
    public static function getPriceFromOrder(int $orderId, int $productId, int $combinationId, bool $withTaxes, bool $useReduction, bool $withEcoTax, int $customizationId = 0): ?float
    {
    }
    /**
     * @param float $price
     * @param Currency|false $currency
     * @param Context|null $context
     *
     * @return string
     */
    public static function convertAndFormatPrice($price, $currency = \false, \Context $context = \null)
    {
    }
    /**
     * @param int $id_product Product identifier
     * @param int $quantity
     * @param Context|null $context
     *
     * @return bool
     */
    public static function isDiscounted($id_product, $quantity = 1, \Context $context = \null)
    {
    }
    /**
     * Get product price
     * Same as static function getPriceStatic, no need to specify product id.
     *
     * @param bool $tax With taxes or not (optional)
     * @param int|null $id_product_attribute Attribute identifier
     * @param int $decimals Number of decimals
     * @param int|null $divisor Util when paying many time without fees
     * @param bool $only_reduc
     * @param bool $usereduc
     * @param int $quantity
     *
     * @return float Product price in euros
     */
    public function getPrice($tax = \true, $id_product_attribute = \null, $decimals = 6, $divisor = \null, $only_reduc = \false, $usereduc = \true, $quantity = 1)
    {
    }
    /**
     * @param bool $tax With taxes or not (optional)
     * @param int|null $id_product_attribute Attribute identifier
     * @param int $decimals Number of decimals
     * @param null $divisor Util when paying many time without fees
     * @param bool $only_reduc
     * @param bool $usereduc
     * @param int $quantity
     *
     * @return float
     */
    public function getPublicPrice($tax = \true, $id_product_attribute = \null, $decimals = 6, $divisor = \null, $only_reduc = \false, $usereduc = \true, $quantity = 1)
    {
    }
    /**
     * @return int
     */
    public function getIdProductAttributeMostExpensive()
    {
    }
    /**
     * @return int
     */
    public function getDefaultIdProductAttribute()
    {
    }
    /**
     * @param bool $notax With taxes or not (optional)
     * @param int|null $id_product_attribute Attribute identifier
     * @param int $decimals Number of decimals
     *
     * @return float
     */
    public function getPriceWithoutReduct($notax = \false, $id_product_attribute = \null, $decimals = 6)
    {
    }
    /**
     * Display price with right format and currency.
     *
     * @param array $params Params
     * @param object $smarty Smarty object (DEPRECATED)
     *
     * @return string Price with right format and currency
     */
    public static function convertPrice($params, &$smarty)
    {
    }
    /**
     * Convert price with currency.
     *
     * @param array $params
     * @param object $smarty Smarty object (DEPRECATED)
     *
     * @return string Ambigous <string, mixed, Ambigous <number, string>>
     */
    public static function convertPriceWithCurrency($params, &$smarty)
    {
    }
    /**
     * @param array $params
     * @param object $smarty Smarty object (DEPRECATED)
     *
     * @return string
     */
    public static function displayWtPrice($params, &$smarty)
    {
    }
    /**
     * Display WT price with currency.
     *
     * @param array $params
     * @param object $smarty Smarty object (DEPRECATED)
     *
     * @return string Ambigous <string, mixed, Ambigous <number, string>>
     */
    public static function displayWtPriceWithCurrency($params, &$smarty)
    {
    }
    /**
     * Gets available product quantity.
     *
     * Method will automatically determine all special conditions and return correct
     * quantity for packs, if needed.
     *
     * By default, it returns the TRUE quantity in stock. If you want to, you can pass a $cart parameter
     * and the quantity in stock will be reduced by the quantity there is in the cart.
     *
     * @param int $idProduct Product identifier
     * @param int|null $idProductAttribute Product attribute id (optional)
     * @param bool|null $cacheIsPack (unused, you can pass null)
     * @param CartCore|null $cart Pass if you want to reduce the quantity by amount in cart
     * @param int|bool|null $idCustomization Product customization id (optional)
     *
     * @return int Available quantities
     */
    public static function getQuantity($idProduct, $idProductAttribute = \null, $cacheIsPack = \null, \CartCore $cart = \null, $idCustomization = \null)
    {
    }
    /**
     * Create JOIN query with 'stock_available' table.
     *
     * @param string $product_alias Alias of product table
     * @param string|int|null $product_attribute If string : alias of PA table ; if int : value of PA ; if null : nothing about PA
     * @param bool $inner_join LEFT JOIN or INNER JOIN
     * @param Shop|null $shop
     *
     * @return string
     */
    public static function sqlStock($product_alias, $product_attribute = \null, $inner_join = \false, \Shop $shop = \null)
    {
    }
    /**
     * @param int $out_of_stock
     *                          - O Deny orders
     *                          - 1 Allow orders
     *                          - 2 Use global setting
     *
     * @return bool|int Returns false is Stock Management is disabled, or the (int) configuration if it's enabled
     */
    public static function isAvailableWhenOutOfStock($out_of_stock)
    {
    }
    /**
     * Check product availability.
     *
     * @param int $qty Quantity desired
     *
     * @return bool True if product is available with this quantity, false otherwise
     */
    public function checkQty($qty)
    {
    }
    /**
     * Check if there is no default attribute and create it if not.
     *
     * @return bool
     */
    public function checkDefaultAttributes()
    {
    }
    /**
     * @param array $products
     * @param bool $have_stock DEPRECATED
     *
     * @return array|false
     */
    public static function getAttributesColorList(array $products, $have_stock = \true)
    {
    }
    /**
     * Get all available attribute groups.
     *
     * @param int $id_lang Language identifier
     * @param int $id_product_attribute Combination id to get the groups for
     *
     * @return array Attribute groups
     */
    public function getAttributesGroups($id_lang, $id_product_attribute = \null)
    {
    }
    /**
     * Delete product accessories.
     * Wrapper to static method deleteAccessories($product_id).
     *
     * @return bool Deletion result
     */
    public function deleteAccessories()
    {
    }
    /**
     * Delete product carrier restriction.
     *
     * @return bool Deletion result
     */
    public function deleteCarrierRestrictions()
    {
    }
    /**
     * Delete product from other products accessories.
     *
     * @return bool Deletion result
     */
    public function deleteFromAccessories()
    {
    }
    /**
     * Get product accessories (only names).
     *
     * @param int $id_lang Language identifier
     * @param int $id_product Product identifier
     *
     * @return array Product accessories
     */
    public static function getAccessoriesLight($id_lang, $id_product)
    {
    }
    /**
     * Get product accessories.
     *
     * @param int $id_lang Language identifier
     * @param bool $active
     *
     * @return array Product accessories
     */
    public function getAccessories($id_lang, $active = \true)
    {
    }
    /**
     * @param int $accessory_id Product identifier
     *
     * @return array
     */
    public static function getAccessoryById($accessory_id)
    {
    }
    /**
     * Link accessories with product
     * Wrapper to static method changeAccessories($accessories_id, $product_id).
     *
     * @param array $accessories_id Accessories ids
     */
    public function changeAccessories($accessories_id)
    {
    }
    /**
     * Link accessories with product. No need to inflate a full Product (better performances).
     *
     * @param array<int> $accessories_id Accessories ids
     * @param int $product_id Product identifier
     *
     * @return void
     */
    public static function changeAccessoriesForProduct($accessories_id, $product_id)
    {
    }
    /**
     * Add new feature to product.
     *
     * @param int $id_value Feature identifier
     * @param int $lang Language identifier
     * @param string $cust Text of custom value
     *
     * @return bool
     */
    public function addFeaturesCustomToDB($id_value, $lang, $cust)
    {
    }
    /**
     * @param int $id_feature Feature identifier
     * @param int $id_value FeatureValue identifier
     * @param int $cust 1 = use a custom value, 0 = use $id_value
     *
     * @return int|string|void FeatureValue identifier or void if it fail
     */
    public function addFeaturesToDB($id_feature, $id_value, $cust = 0)
    {
    }
    /**
     * @param int $id_product Product identifier
     * @param int $id_feature Feature identifier
     * @param int $id_feature_value FeatureValue identifier
     *
     * @return bool
     */
    public static function addFeatureProductImport($id_product, $id_feature, $id_feature_value)
    {
    }
    /**
     * Select all features for the object.
     *
     * @return array Array with feature product's data
     */
    public function getFeatures()
    {
    }
    /**
     * @param int $id_product Product identifier
     *
     * @return array
     */
    public static function getFeaturesStatic($id_product)
    {
    }
    /**
     * @param int[] $product_ids
     */
    public static function cacheProductsFeatures($product_ids)
    {
    }
    /**
     * @param int[] $product_ids Product identifier(s)
     * @param int $id_lang Language identifier
     */
    public static function cacheFrontFeatures($product_ids, $id_lang)
    {
    }
    /**
     * Admin panel product search.
     *
     * @param int $id_lang Language identifier
     * @param string $query Search query
     * @param Context|null $context Deprecated, obsolete parameter not used anymore
     * @param int|null $limit
     *
     * @return array|false Matching products
     */
    public static function searchByName($id_lang, $query, \Context $context = \null, $limit = \null)
    {
    }
    /**
     * Duplicate attributes when duplicating a product.
     *
     * @param int $id_product_old Old Product identifier
     * @param int $id_product_new New Product identifier
     *
     * @return array|false
     */
    public static function duplicateAttributes($id_product_old, $id_product_new)
    {
    }
    /**
     * Get product attribute image associations.
     *
     * @param int $id_product_attribute Attribute identifier
     *
     * @return array
     */
    public static function _getAttributeImageAssociations($id_product_attribute)
    {
    }
    /**
     * @param int $id_product_old Old Product identifier
     * @param int $id_product_new New Product identifier
     *
     * @return bool|int
     */
    public static function duplicateAccessories($id_product_old, $id_product_new)
    {
    }
    /**
     * @param int $id_product_old Old Product identifier
     * @param int $id_product_new New Product identifier
     *
     * @return bool
     */
    public static function duplicateTags($id_product_old, $id_product_new)
    {
    }
    /**
     * @param int $id_product_old Old Product identifier
     * @param int $id_product_new New Product identifier
     *
     * @return bool
     */
    public static function duplicateTaxes($id_product_old, $id_product_new)
    {
    }
    /**
     * Duplicate prices when duplicating a product.
     *
     * @param int $id_product_old Old Product identifier
     * @param int $id_product_new New Product identifier
     *
     * @return bool
     */
    public static function duplicatePrices($id_product_old, $id_product_new)
    {
    }
    /**
     * @param int $id_product_old Old Product identifier
     * @param int $id_product_new New Product identifier
     *
     * @return bool
     */
    public static function duplicateDownload($id_product_old, $id_product_new)
    {
    }
    /**
     * @param int $id_product_old Old Product identifier
     * @param int $id_product_new New Product identifier
     *
     * @return bool
     */
    public static function duplicateAttachments($id_product_old, $id_product_new)
    {
    }
    /**
     * Duplicate features when duplicating a product.
     *
     * @param int $id_product_old Old Product identifier
     * @param int $id_product_new New Product identifier
     *
     * @return bool
     */
    public static function duplicateFeatures($id_product_old, $id_product_new)
    {
    }
    /**
     * @param int $product_id Product identifier
     * @param int|null $id_shop Shop identifier
     *
     * @return array|false
     */
    protected static function _getCustomizationFieldsNLabels($product_id, $id_shop = \null)
    {
    }
    /**
     * @param int $old_product_id Old Product identifier
     * @param int $product_id New Product identifier
     *
     * @return bool
     */
    public static function duplicateSpecificPrices($old_product_id, $product_id)
    {
    }
    /**
     * @param int $old_product_id Old Product identifier
     * @param int $product_id New Product identifier
     *
     * @return bool
     */
    public static function duplicateCustomizationFields($old_product_id, $product_id)
    {
    }
    /**
     * Adds suppliers from old product onto a newly duplicated product.
     *
     * @param int $id_product_old Old Product identifier
     * @param int $id_product_new New Product identifier
     *
     * @return bool
     */
    public static function duplicateSuppliers($id_product_old, $id_product_new)
    {
    }
    /**
     * Adds carriers from old product onto a newly duplicated product.
     *
     * @param int $oldProductId Old Product identifier
     * @param int $newProductId New Product identifier
     *
     * @return bool
     */
    public static function duplicateCarriers(int $oldProductId, int $newProductId): bool
    {
    }
    /**
     * Associates attachments from old product onto a newly duplicated product.
     *
     * @param int $oldProductId Old Product identifier
     * @param int $newProductId New Product identifier
     *
     * @return bool
     */
    public static function duplicateAttachmentAssociation(int $oldProductId, int $newProductId): bool
    {
    }
    /**
     * Get the link of the product page of this product.
     *
     * @param Context|null $context
     *
     * @return string
     */
    public function getLink(\Context $context = \null)
    {
    }
    /**
     * @param int $id_lang Language identifier
     *
     * @return string
     */
    public function getTags($id_lang)
    {
    }
    /**
     * @param array $row
     * @param int $id_lang Language identifier
     *
     * @return string
     */
    public static function defineProductImage($row, $id_lang)
    {
    }
    /**
     * @param int $id_lang Language identifier
     * @param array $row
     * @param Context|null $context
     *
     * @return array|false
     */
    public static function getProductProperties($id_lang, $row, \Context $context = \null)
    {
    }
    /**
     * @param array $row
     * @param Context|null $context
     *
     * @return array
     */
    public static function getTaxesInformations($row, \Context $context = \null)
    {
    }
    /**
     * @param int $id_lang Language identifier
     * @param array $query_result
     *
     * @return array
     */
    public static function getProductsProperties($id_lang, $query_result)
    {
    }
    /**
     * Select all features for a given language
     *
     * @param int $id_lang Language identifier
     * @param int $id_product Product identifier
     *
     * @return array Array with feature's data
     */
    public static function getFrontFeaturesStatic($id_lang, $id_product)
    {
    }
    /**
     * @param int $id_lang Language identifier
     *
     * @return array
     */
    public function getFrontFeatures($id_lang)
    {
    }
    /**
     * @param int $id_lang Language identifier
     * @param int $id_product Product identifier
     *
     * @return array
     */
    public static function getAttachmentsStatic($id_lang, $id_product)
    {
    }
    /**
     * @return int[]
     *
     * @throws PrestaShopDatabaseException
     */
    public function getAssociatedAttachmentIds(): array
    {
    }
    /**
     * @param int $id_lang Language identifier
     *
     * @return array
     */
    public function getAttachments($id_lang)
    {
    }
    /**
     * Customization management
     *
     * @param int $id_cart Cart identifier
     * @param int|null $id_lang Language identifier
     * @param bool $only_in_cart
     * @param int|null $id_shop Shop identifier
     * @param int|null $id_customization Customization identifier
     *
     * @return array|false
     */
    public static function getAllCustomizedDatas($id_cart, $id_lang = \null, $only_in_cart = \true, $id_shop = \null, $id_customization = \null)
    {
    }
    /**
     * @param array $products
     * @param array $customized_datas
     */
    public static function addCustomizationPrice(&$products, &$customized_datas)
    {
    }
    /**
     * Add customization price for a single product
     *
     * @param array $product Product data
     * @param array $customized_datas Customized data
     */
    public static function addProductCustomizationPrice(&$product, &$customized_datas)
    {
    }
    /**
     * Customization fields label management
     *
     * @param string $field
     * @param string $value
     *
     * @return array|false
     */
    protected function _checkLabelField($field, $value)
    {
    }
    /**
     * @return bool
     */
    protected function _deleteOldLabels()
    {
    }
    /**
     * @param array $languages An array of language data
     * @param int $type Product::CUSTOMIZE_FILE or Product::CUSTOMIZE_TEXTFIELD
     *
     * @return bool
     */
    protected function _createLabel($languages, $type)
    {
    }
    /**
     * @param int $uploadable_files
     * @param int $text_fields
     *
     * @return bool
     */
    public function createLabels($uploadable_files, $text_fields)
    {
    }
    /**
     * @return bool
     */
    public function updateLabels()
    {
    }
    /**
     * @param int|false $id_lang Language identifier
     * @param int|null $id_shop Shop identifier
     *
     * @return array|bool
     */
    public function getCustomizationFields($id_lang = \false, $id_shop = \null)
    {
    }
    /**
     * check if product has an activated and required customizationFields.
     *
     * @return bool
     *
     * @throws PrestaShopDatabaseException
     */
    public function hasActivatedRequiredCustomizableFields()
    {
    }
    /**
     * @return array
     */
    public function getCustomizationFieldIds()
    {
    }
    /**
     * @return array
     */
    public function getNonDeletedCustomizationFieldIds()
    {
    }
    /**
     * @param int $fieldType |null
     *
     * @return int
     *
     * @throws PrestaShopDatabaseException
     */
    public function countCustomizationFields(?int $fieldType = \null): int
    {
    }
    /**
     * @return array
     */
    public function getRequiredCustomizableFields()
    {
    }
    /**
     * @param int $id Product identifier
     *
     * @return array
     */
    public static function getRequiredCustomizableFieldsStatic($id)
    {
    }
    /**
     * @param Context|null $context
     *
     * @return bool
     */
    public function hasAllRequiredCustomizableFields(\Context $context = \null)
    {
    }
    /**
     * Return the list of old temp products.
     *
     * @return array
     */
    public static function getOldTempProducts()
    {
    }
    /**
     * Checks if the product is in at least one of the submited categories.
     *
     * @param int $id_product Product identifier
     * @param array $categories array of category arrays
     *
     * @return bool is the product in at least one category
     */
    public static function idIsOnCategoryId($id_product, $categories)
    {
    }
    /**
     * @return string
     */
    public function getNoPackPrice()
    {
    }
    /**
     * @param int $id_customer Customer identifier
     *
     * @return bool
     */
    public function checkAccess($id_customer)
    {
    }
    /**
     * @param int $id_product Product identifier
     * @param int|bool $id_customer Customer identifier
     *
     * @return bool
     */
    public static function checkAccessStatic($id_product, $id_customer)
    {
    }
    /**
     * Add a stock movement for current product.
     *
     * Since 1.5, this method only permit to add/remove available quantities of the current product in the current shop
     *
     * @see StockManager if you want to manage real stock
     * @see StockAvailable if you want to manage available quantities for sale on your shop(s)
     * @deprecated since 1.5.0
     *
     * @param int $quantity
     * @param int $id_reason StockMvtReason identifier - useless
     * @param int|null $id_product_attribute Attribute identifier
     * @param int|null $id_order Order identifier - DEPRECATED
     * @param int|null $id_employee Employee identifier - DEPRECATED
     *
     * @return bool
     */
    public function addStockMvt($quantity, $id_reason, $id_product_attribute = \null, $id_order = \null, $id_employee = \null)
    {
    }
    /**
     * @deprecated since 1.5.0
     *
     * @param int $id_lang Language identifier
     *
     * @return array
     */
    public function getStockMvts($id_lang)
    {
    }
    /**
     * @param int $id_product Product identifier
     *
     * @return array
     */
    public static function getUrlRewriteInformations($id_product)
    {
    }
    /**
     * @return int TaxRulesGroup identifier
     */
    public function getIdTaxRulesGroup()
    {
    }
    /**
     * @param int $id_product Product identifier
     * @param Context|null $context
     *
     * @return int TaxRulesGroup identifier
     */
    public static function getIdTaxRulesGroupByIdProduct($id_product, \Context $context = \null)
    {
    }
    /**
     * Returns tax rate.
     *
     * @param Address|null $address
     *
     * @return float The total taxes rate applied to the product
     */
    public function getTaxesRate(\Address $address = \null)
    {
    }
    /**
     * Webservice getter : get product features association.
     *
     * @return array
     */
    public function getWsProductFeatures()
    {
    }
    /**
     * Webservice setter : set product features association.
     *
     * @param array $product_features Feature data
     *
     * @return bool
     */
    public function setWsProductFeatures($product_features)
    {
    }
    /**
     * Webservice getter : get virtual field default combination.
     *
     * @return int Default Attribute identifier
     */
    public function getWsDefaultCombination()
    {
    }
    /**
     * Webservice setter : set virtual field default combination.
     *
     * @param int $id_combination Default Attribute identifier
     *
     * @return bool
     */
    public function setWsDefaultCombination($id_combination)
    {
    }
    /**
     * Webservice getter : get category ids of current product for association.
     *
     * @return array
     */
    public function getWsCategories()
    {
    }
    /**
     * Webservice setter : set category ids of current product for association.
     *
     * @param array $category_ids category ids
     *
     * @return bool
     */
    public function setWsCategories($category_ids)
    {
    }
    /**
     * Webservice getter : get product accessories ids of current product for association.
     *
     * @return array
     */
    public function getWsAccessories()
    {
    }
    /**
     * Webservice setter : set product accessories ids of current product for association.
     *
     * @param array $accessories product ids
     *
     * @return bool
     */
    public function setWsAccessories($accessories)
    {
    }
    /**
     * Webservice getter : get combination ids of current product for association.
     *
     * @return array
     */
    public function getWsCombinations()
    {
    }
    /**
     * Webservice setter : set combination ids of current product for association.
     *
     * @param array $combinations combination ids
     *
     * @return bool
     */
    public function setWsCombinations($combinations)
    {
    }
    /**
     * Webservice getter : get product option ids of current product for association.
     *
     * @return array
     */
    public function getWsProductOptionValues()
    {
    }
    /**
     * Webservice getter : get virtual field position in category.
     *
     * @return int|string
     */
    public function getWsPositionInCategory()
    {
    }
    /**
     * Webservice setter : set virtual field position in category.
     *
     * @param int $position
     *
     * @return bool
     */
    public function setWsPositionInCategory($position)
    {
    }
    /**
     * Webservice getter : get virtual field id_default_image in category.
     *
     * @return int|string|null
     */
    public function getCoverWs()
    {
    }
    /**
     * Webservice setter : set virtual field id_default_image in category.
     *
     * @param int $id_image
     *
     * @return bool
     */
    public function setCoverWs($id_image)
    {
    }
    /**
     * Webservice getter : get image ids of current product for association.
     *
     * @return array
     */
    public function getWsImages()
    {
    }
    /**
     * Webservice getter : Get StockAvailable identifier and Attribute identifier
     *
     * @return array
     */
    public function getWsStockAvailables()
    {
    }
    /**
     * Webservice getter: Get product attachments ids of current product for association
     *
     * @return array<int, array{id: string}>
     */
    public function getWsAttachments(): array
    {
    }
    /**
     * Webservice setter: set product attachments ids of current product for association
     *
     * @param array<array{id: int|string}> $attachments ids
     */
    public function setWsAttachments(array $attachments): bool
    {
    }
    public function getWsTags()
    {
    }
    /**
     * Webservice setter : set tag ids of current product for association.
     *
     * @param array $tag_ids Tag identifiers
     *
     * @return bool
     */
    public function setWsTags($tag_ids)
    {
    }
    /**
     * Delete products tags entries without delete tags for webservice usage.
     *
     * @return bool Deletion result
     */
    public function deleteWsTags()
    {
    }
    /**
     * @return string
     */
    public function getWsManufacturerName()
    {
    }
    /**
     * @return bool
     */
    public static function resetEcoTax()
    {
    }
    /**
     * Set Group reduction if needed.
     */
    public function setGroupReduction()
    {
    }
    /**
     * Checks if reference exists.
     *
     * @param string $reference Product reference
     *
     * @return bool
     */
    public function existsRefInDatabase($reference)
    {
    }
    /**
     * Get all product attributes ids.
     *
     * @since 1.5.0
     *
     * @param int $id_product Product identifier
     * @param bool $shop_only
     *
     * @return array Attribute identifiers list
     */
    public static function getProductAttributesIds($id_product, $shop_only = \false)
    {
    }
    /**
     * Get label by lang and value by lang too.
     *
     * @param int $id_product Product identifier
     * @param int $id_product_attribute Attribute identifier
     *
     * @return array
     */
    public static function getAttributesParams($id_product, $id_product_attribute)
    {
    }
    /**
     * @param int $id_product Product identifier
     *
     * @return array
     */
    public static function getAttributesInformationsByProduct($id_product)
    {
    }
    /**
     * @return bool
     */
    public function hasCombinations()
    {
    }
    /**
     * Get an id_product_attribute by an id_product and one or more
     * id_attribute.
     *
     * e.g: id_product 8 with id_attribute 4 (size medium) and
     * id_attribute 5 (color blue) returns id_product_attribute 9 which
     * is the dress size medium and color blue.
     *
     * @param int $idProduct Product identifier
     * @param int|int[] $idAttributes Attribute identifier(s)
     * @param bool $findBest
     *
     * @return int
     *
     * @throws PrestaShopException
     */
    public static function getIdProductAttributeByIdAttributes($idProduct, $idAttributes, $findBest = \false)
    {
    }
    /**
     * Get the combination url anchor of the product.
     *
     * @param int $id_product_attribute Attribute identifier
     * @param bool $with_id
     *
     * @return string
     */
    public function getAnchor($id_product_attribute, $with_id = \false)
    {
    }
    /**
     * Gets the name of a given product, in the given lang.
     *
     * @since 1.5.0
     *
     * @param int $id_product Product identifier
     * @param int|null $id_product_attribute Attribute identifier
     * @param int|null $id_lang Language identifier
     *
     * @return string
     */
    public static function getProductName($id_product, $id_product_attribute = \null, $id_lang = \null)
    {
    }
    /**
     * @param bool $autodate
     * @param bool $null_values
     *
     * @return bool
     */
    public function addWs($autodate = \true, $null_values = \false)
    {
    }
    /**
     * @param bool $null_values
     *
     * @return bool
     */
    public function updateWs($null_values = \false)
    {
    }
    /**
     * For a given product, returns its real quantity.
     *
     * @since 1.5.0
     *
     * @param int $id_product Product identifier
     * @param int $id_product_attribute Attribute identifier
     * @param int $id_warehouse Warehouse identifier
     * @param int|null $id_shop Shop identifier
     *
     * @return int real_quantity
     */
    public static function getRealQuantity($id_product, $id_product_attribute = 0, $id_warehouse = 0, $id_shop = \null)
    {
    }
    /**
     * For a given product, tells if it uses the advanced stock management.
     *
     * @since 1.5.0
     *
     * @param int $id_product Product identifier
     *
     * @return bool
     */
    public static function usesAdvancedStockManagement($id_product)
    {
    }
    /**
     * This method allows to flush price cache.
     *
     * @since 1.5.0
     */
    public static function flushPriceCache()
    {
    }
    /**
     * Get list of parent categories.
     *
     * @since 1.5.0
     *
     * @param int|null $id_lang Language identifier
     *
     * @return array
     */
    public function getParentCategories($id_lang = \null)
    {
    }
    /**
     * Fill the variables used for stock management.
     */
    public function loadStockData()
    {
    }
    /**
     * Get Advanced Stock Management status for this product
     *
     * @return bool 0 for disabled, 1 for enabled
     */
    public function useAdvancedStockManagement()
    {
    }
    /**
     * Set Advanced Stock Management status for this product
     *
     * @param bool $value false for disabled, true for enabled
     */
    public function setAdvancedStockManagement($value)
    {
    }
    /**
     * Get the default category according to the shop.
     *
     * @return array{id_category_default: int}|int
     */
    public function getDefaultCategory()
    {
    }
    /**
     * Get Shop identifiers
     *
     * @param int $id_product Product identifier
     *
     * @return array
     */
    public static function getShopsByProduct($id_product)
    {
    }
    /**
     * Remove all downloadable files for product and its attributes.
     *
     * @return bool
     */
    public function deleteDownload()
    {
    }
    /**
     * Get the product type (simple, virtual, pack).
     *
     * @since in 1.5.0
     *
     * @return int
     */
    public function getType()
    {
    }
    /**
     * @return bool
     */
    public function hasAttributesInOtherShops()
    {
    }
    /**
     * @return string TaxRulesGroup identifier most used
     */
    public static function getIdTaxRulesGroupMostUsed()
    {
    }
    /**
     * For a given ean13 reference, returns the corresponding id.
     *
     * @param string $ean13
     *
     * @return int|string Product identifier
     */
    public static function getIdByEan13($ean13)
    {
    }
    /**
     * For a given reference, returns the corresponding id.
     *
     * @param string $reference
     *
     * @return int|string Product identifier
     */
    public static function getIdByReference($reference)
    {
    }
    /**
     * @return string simple, pack, virtual
     */
    public function getWsType()
    {
    }
    /**
     * Create the link rewrite if not exists or invalid on product creation
     *
     * @return bool
     */
    public function modifierWsLinkRewrite()
    {
    }
    /**
     * @return array
     */
    public function getWsProductBundle()
    {
    }
    /**
     * @param string $type_str simple, pack, virtual
     *
     * @return bool
     */
    public function setWsType($type_str)
    {
    }
    /**
     * @param array $items
     *
     * @return bool
     */
    public function setWsProductBundle($items)
    {
    }
    /**
     * @param int $id_attribute Attribute identifier
     * @param int $id_shop Shop identifier
     *
     * @return string Attribute identifier
     */
    public function isColorUnavailable($id_attribute, $id_shop)
    {
    }
    /**
     * @deprecated since 8.1 and will be removed in next major version.
     *
     * @param int $id_product Product identifier
     * @param bool $full
     *
     * @return string
     */
    public static function getColorsListCacheId($id_product, $full = \true)
    {
    }
    /**
     * @param int $id_product Product identifier
     * @param int $pack_stock_type value of Pack stock type, see constants defined in Pack class
     *
     * @return bool
     */
    public static function setPackStockType($id_product, $pack_stock_type)
    {
    }
    /**
     * Gets a list of IDs from a list of IDs/Refs. The result will avoid duplicates, and checks if given IDs/Refs exists in DB.
     * Useful when a product list should be checked before a bulk operation on them (Only 1 query => performances).
     *
     * @param int|string|int[]|string[] $ids_or_refs Product identifier(s) or reference(s)
     *
     * @return array|false Product identifiers, without duplicate and only existing ones
     */
    public static function getExistingIdsFromIdsOrRefs($ids_or_refs)
    {
    }
    /**
     * Get object of redirect_type.
     *
     * @return string|false category, product, false if unknown redirect_type
     */
    public function getRedirectType()
    {
    }
    /**
     * Return an array of customization fields IDs.
     *
     * @return array|false
     */
    public function getUsedCustomizationFieldsIds()
    {
    }
    /**
     * Remove unused customization for the product.
     *
     * @param array $customizationIds - Array of customization fields IDs
     *
     * @return bool
     *
     * @throws PrestaShopDatabaseException
     */
    public function deleteUnusedCustomizationFields($customizationIds)
    {
    }
    /**
     * Update the customization fields to be deleted if not used.
     *
     * @param array $customizationIds - Array of excluded customization fields IDs
     *
     * @return bool
     *
     * @throws PrestaShopDatabaseException
     */
    public function softDeleteCustomizationFields($customizationIds)
    {
    }
    /**
     * Update default supplier data
     *
     * @param int $idSupplier
     * @param float $wholesalePrice
     * @param string $supplierReference
     *
     * @return bool
     */
    public function updateDefaultSupplierData(int $idSupplier, string $supplierReference, float $wholesalePrice): bool
    {
    }
    /**
     * Get Product ecotax
     *
     * @param int $precision
     * @param bool $include_tax
     * @param bool $formated
     *
     * @return string|float
     */
    public function getEcotax($precision = \null, $include_tax = \true, $formated = \false)
    {
    }
    /**
     * @return string
     */
    public function getProductType(): string
    {
    }
    /**
     * Returns product type based on existing associations without taking the saved value
     * in database into account.
     *
     * @return string
     */
    public function getDynamicProductType(): string
    {
    }
    /**
     * Checks if product is still associated to its default shop, if not update with the first association found.
     */
    protected function updateDefaultShop(): void
    {
    }
}

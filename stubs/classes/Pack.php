<?php

class PackCore extends \Product
{
    /**
     * Only decrement pack quantity.
     *
     * @var int
     */
    public const STOCK_TYPE_PACK_ONLY = \PrestaShop\PrestaShop\Core\Domain\Product\Pack\ValueObject\PackStockType::STOCK_TYPE_PACK_ONLY;
    /**
     * Only decrement pack products quantities.
     *
     * @var int
     */
    public const STOCK_TYPE_PRODUCTS_ONLY = \PrestaShop\PrestaShop\Core\Domain\Product\Pack\ValueObject\PackStockType::STOCK_TYPE_PRODUCTS_ONLY;
    /**
     * Decrement pack quantity and pack products quantities.
     *
     * @var int
     */
    public const STOCK_TYPE_PACK_BOTH = \PrestaShop\PrestaShop\Core\Domain\Product\Pack\ValueObject\PackStockType::STOCK_TYPE_BOTH;
    /**
     * Use pack quantity default setting.
     *
     * @var int
     */
    public const STOCK_TYPE_DEFAULT = \PrestaShop\PrestaShop\Core\Domain\Product\Pack\ValueObject\PackStockType::STOCK_TYPE_DEFAULT;
    protected static $cachePackItems = [];
    protected static $cacheIsPack = [];
    protected static $cacheIsPacked = [];
    public static function resetStaticCache()
    {
    }
    /**
     * Is product a pack?
     *
     * @param int $id_product
     *
     * @return bool
     */
    public static function isPack($id_product)
    {
    }
    /**
     * Is product in a pack?
     * If $id_product_attribute specified, then will restrict search on the given combination,
     * else this method will match a product if at least one of all its combination is in a pack.
     *
     * @param int $id_product
     * @param int|bool $id_product_attribute Optional combination of the product
     *
     * @return bool
     */
    public static function isPacked($id_product, $id_product_attribute = \false)
    {
    }
    public static function noPackPrice($id_product)
    {
    }
    public static function noPackWholesalePrice($id_product)
    {
    }
    public static function getItems($id_product, $id_lang)
    {
    }
    /**
     * Indicates if a pack and its associated products are available for orders in the desired quantity.
     *
     * @todo This method returns true even if the pack feature is not active.
     *       Should throw an exception instead.
     *       Developers should first test if product is a pack
     *       and then if it's in stock.
     *
     * @param int $idProduct
     * @param int $wantedQuantity
     * @param Cart|null $cart
     *
     * @return bool
     *
     * @throws PrestaShopException
     */
    public static function isInStock($idProduct, $wantedQuantity = 1, \Cart $cart = \null)
    {
    }
    /**
     * Returns the available quantity of a given pack.
     *
     * By default, it returns the TRUE quantity in stock. If you want to, you can pass a $cart parameter
     * and the quantity in stock will be reduced by the quantity there is in the cart.
     *
     * @param int $idProduct Product id
     * @param int|null $idProductAttribute Product attribute id (optional)
     * @param bool|null $cacheIsPack (unused, you can pass null)
     * @param CartCore|null $cart Pass if you want to reduce the quantity by amount in cart
     * @param bool|int|null $idCustomization Product customization id (optional)
     *
     * @return int
     *
     * @throws PrestaShopException
     */
    public static function getQuantity($idProduct, $idProductAttribute = \null, $cacheIsPack = \null, \CartCore $cart = \null, $idCustomization = \null)
    {
    }
    public static function getItemTable($id_product, $id_lang, $full = \false)
    {
    }
    public static function getPacksTable($id_product, $id_lang, $full = \false, $limit = \null)
    {
    }
    public static function deleteItems($id_product, $refreshCache = \true)
    {
    }
    /**
     * Add an item to the pack.
     *
     * @param int $id_product
     * @param int $id_item
     * @param int $qty
     * @param int $id_attribute_item
     *
     * @return bool true if everything was fine
     *
     * @throws PrestaShopDatabaseException
     */
    public static function addItem($id_product, $id_item, $qty, $id_attribute_item = 0)
    {
    }
    public static function duplicate($id_product_old, $id_product_new)
    {
    }
    /**
     * This method is allow to know if a feature is used or active.
     *
     * @since 1.5.0.1
     *
     * @return bool
     */
    public static function isFeatureActive()
    {
    }
    /**
     * This method is allow to know if a Pack entity is currently used.
     *
     * @since 1.5.0
     *
     * @param string|null $table Name of table linked to entity
     * @param bool $has_active_column True if the table has an active column
     *
     * @return bool
     */
    public static function isCurrentlyUsed($table = \null, $has_active_column = \false)
    {
    }
    /**
     * For a given pack, tells if it has at least one product using the advanced stock management.
     *
     * @param int $id_product id_pack
     *
     * @return bool
     */
    public static function usesAdvancedStockManagement($id_product)
    {
    }
    /**
     * For a given pack, tells if all products using the advanced stock management.
     *
     * @param int $id_product id_pack
     *
     * @return bool
     */
    public static function allUsesAdvancedStockManagement($id_product)
    {
    }
    /**
     * Returns Packs that contains the given product in the right declinaison.
     *
     * @param int $id_item Product item id that could be contained in a|many pack(s)
     * @param int $id_attribute_item The declinaison of the product
     * @param int $id_lang
     *
     * @return array[Product] Packs that contains the given product
     */
    public static function getPacksContainingItem($id_item, $id_attribute_item, $id_lang)
    {
    }
}

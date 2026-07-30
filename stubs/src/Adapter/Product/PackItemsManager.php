<?php

namespace PrestaShop\PrestaShop\Adapter\Product;

/**
 * Class responsible of getting information about Pack Items.
 */
class PackItemsManager
{
    /**
     * Get the Products contained in the given Pack.
     *
     * @param Pack $pack
     * @param bool|int $id_lang Optional
     *
     * @return array(Product) The products contained in this Pack, with special dynamic attributes [pack_quantity, id_pack_product_attribute]
     */
    public function getPackItems($pack, $id_lang = false)
    {
    }
    /**
     * Get all Packs that contains the given item in the corresponding declination.
     *
     * @param Product $item
     * @param int $item_attribute_id
     * @param bool|int $id_lang Optional
     *
     * @return array(Pack) The packs that contains the given item, with special dynamic attribute [pack_item_quantity]
     */
    public function getPacksContainingItem($item, $item_attribute_id, $id_lang = false)
    {
    }
    /**
     * Is this product a pack?
     *
     * @param Product $product
     *
     * @return bool
     */
    public function isPack($product)
    {
    }
    /**
     * Is this product in a pack?
     * If $id_product_attribute specified, then will restrict search on the given combination,
     * else this method will match a product if at least one of all its combination is in a pack.
     *
     * @param Product $product
     * @param int|bool $id_product_attribute Optional combination of the product
     *
     * @return bool
     */
    public function isPacked($product, $id_product_attribute = false)
    {
    }
}

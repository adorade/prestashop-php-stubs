<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Exception;

/**
 * Thrown when a shop association is checked but is nonexistent for a combination.
 */
class ProductShopAssociationNotFoundException extends \PrestaShop\PrestaShop\Core\Domain\Shop\Exception\ShopAssociationNotFound
{
}

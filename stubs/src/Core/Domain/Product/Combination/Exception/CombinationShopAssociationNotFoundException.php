<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Combination\Exception;

/**
 * Thrown when a shop association is checked but is nonexistent for a combination.
 */
class CombinationShopAssociationNotFoundException extends \PrestaShop\PrestaShop\Core\Domain\Shop\Exception\ShopAssociationNotFound
{
}

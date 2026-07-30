<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Image\QueryResult\Shop;

/**
 * @template-extends ImmutableCollection<ShopImageAssociation>
 */
class ShopImageAssociationCollection extends \PrestaShop\PrestaShop\Core\Data\ImmutableCollection
{
    public static function from(\PrestaShop\PrestaShop\Core\Domain\Product\Image\QueryResult\Shop\ShopImageAssociation ...$productImages)
    {
    }
}

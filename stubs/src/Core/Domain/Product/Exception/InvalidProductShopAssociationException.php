<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Exception;

class InvalidProductShopAssociationException extends \PrestaShop\PrestaShop\Core\Domain\Product\Exception\ProductException
{
    public const EMPTY_SHOPS_ASSOCIATION = 1;
    public const SOURCE_SHOP_MISSING_IN_SHOP_ASSOCIATION = 2;
    public const SOURCE_SHOP_NOT_ASSOCIATED = 3;
}

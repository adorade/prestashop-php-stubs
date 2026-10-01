<?php

namespace PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject;

/**
 * Represents relation value when shop is not specified
 */
class NoShopId implements \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopIdInterface
{
    /**
     * Value when shop is not specified
     */
    public const NO_SHOP_ID = 0;
    /**
     * @return int
     */
    public function getValue(): int
    {
    }
}

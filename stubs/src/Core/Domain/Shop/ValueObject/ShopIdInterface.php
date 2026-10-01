<?php

namespace PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject;

/**
 * Represents a relation identifier of Shop
 * This interface allows to explicitly define whether the shop relation is optional or required.
 *
 * @see ShopId
 * @see NoShopId
 */
interface ShopIdInterface
{
    /**
     * @return int
     */
    public function getValue(): int;
}

<?php

namespace PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject;

/**
 * Shop identity
 */
class ShopId implements \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopIdInterface
{
    /**
     * @param int $shopId
     *
     * @throws ShopException
     */
    public function __construct(int $shopId)
    {
    }
    /**
     * @return int
     */
    public function getValue(): int
    {
    }
}

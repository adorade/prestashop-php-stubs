<?php

namespace PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject;

class ShopGroupId
{
    /**
     * @param int $shopGroupId
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Shop\Exception\ShopException
     */
    public function __construct(int $shopGroupId)
    {
    }
    /**
     * @return int
     */
    public function getValue(): int
    {
    }
}

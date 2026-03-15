<?php

namespace PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject;

class ShopGroupId
{
    /**
     * @param int $shopGroupId
     *
     * @throws ShopException
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

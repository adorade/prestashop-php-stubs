<?php

namespace PrestaShop\PrestaShop\Core\Shop;

interface ShopConstraintContextInterface
{
    /**
     * Returns the shop constraint for the current context.
     *
     * @return ShopConstraint
     */
    public function getShopConstraint(): \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint;
}

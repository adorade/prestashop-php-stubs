<?php

namespace PrestaShop\PrestaShop\Adapter\Shop;

/**
 * Retrieve common information from a the actual Shop.
 *
 * Depends on Context, avoid re-use of this class
 */
class ShopInformation
{
    /**
     * @param LegacyContext $legacyContext
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\LegacyContext $legacyContext)
    {
    }
    /**
     * @return array
     */
    public function getShopInformation()
    {
    }
    /**
     * @return array
     */
    public function getOverridesList(): array
    {
    }
}

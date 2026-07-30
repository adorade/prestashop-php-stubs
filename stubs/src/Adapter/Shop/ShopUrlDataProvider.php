<?php

namespace PrestaShop\PrestaShop\Adapter\Shop;

/**
 * Class ShopUrlDataProvider is responsible for providing data from shop_url table.
 */
class ShopUrlDataProvider
{
    /**
     * ShopUrlDataProvider constructor.
     *
     * @param int $contextShopId
     */
    public function __construct($contextShopId)
    {
    }
    /**
     * Gets main shop url data.
     *
     * @return ShopUrl
     *
     * @throws PrestaShopException
     */
    public function getMainShopUrl()
    {
    }
    /**
     * Checks whenever the main shop url exists for current shop context.
     *
     * @return bool
     *
     * @throws PrestaShopException
     */
    public function doesMainShopUrlExist()
    {
    }
}

<?php

namespace PrestaShop\PrestaShop\Core\Product;

class ProductPresentationSettings
{
    public $catalog_mode;
    public $catalog_mode_with_prices;
    public $restricted_country_mode;
    public $include_taxes;
    public $allow_add_variant_to_cart_from_listing;
    public $stock_management_enabled;
    public $showPrices;
    public $lastRemainingItems;
    /**
     * @var bool|null
     */
    public $showLabelOOSListingPages;
    public function shouldShowPrice()
    {
    }
}

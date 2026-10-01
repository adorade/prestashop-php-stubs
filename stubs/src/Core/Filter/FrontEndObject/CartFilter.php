<?php

namespace PrestaShop\PrestaShop\Core\Filter\FrontEndObject;

/**
 * Filters Cart objects that will be sent to the client.
 */
class CartFilter extends \PrestaShop\PrestaShop\Core\Filter\HashMapWhitelistFilter
{
    public function __construct($productsFilter)
    {
    }
}

<?php

namespace PrestaShop\PrestaShop\Core\Filter\FrontEndObject;

/**
 * Filters Customer objects that will be sent to the client.
 */
class CustomerFilter extends \PrestaShop\PrestaShop\Core\Filter\HashMapWhitelistFilter
{
    public function __construct()
    {
    }
}

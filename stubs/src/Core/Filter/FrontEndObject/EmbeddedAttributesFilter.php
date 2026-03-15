<?php

namespace PrestaShop\PrestaShop\Core\Filter\FrontEndObject;

/**
 * Filters Product EmbeddedAttributes objects that will be sent to the client.
 */
class EmbeddedAttributesFilter extends \PrestaShop\PrestaShop\Core\Filter\HashMapWhitelistFilter
{
    public function __construct()
    {
    }
}

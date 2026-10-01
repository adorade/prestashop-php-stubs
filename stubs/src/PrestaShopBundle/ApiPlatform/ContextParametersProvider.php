<?php

namespace PrestaShopBundle\ApiPlatform;

/**
 * Provides an array containing the values from PrestaShop context services so they can be accessed
 * and used via the mapping.
 */
class ContextParametersProvider
{
    public function __construct(protected readonly \PrestaShop\PrestaShop\Core\Context\ShopContext $shopContext, protected readonly \PrestaShop\PrestaShop\Core\Context\LanguageContext $languageContext, protected readonly \PrestaShop\PrestaShop\Core\Context\CurrencyContext $currencyContext, protected readonly \PrestaShop\PrestaShop\Core\Context\ApiClientContext $apiClientContext)
    {
    }
    public function getContextParameters(): array
    {
    }
}

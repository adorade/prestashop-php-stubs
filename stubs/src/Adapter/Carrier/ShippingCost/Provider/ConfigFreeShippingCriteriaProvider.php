<?php

namespace PrestaShop\PrestaShop\Adapter\Carrier\ShippingCost\Provider;

class ConfigFreeShippingCriteriaProvider implements \PrestaShop\PrestaShop\Core\Domain\Carrier\ShippingCost\Provider\FreeShippingCriteriaProviderInterface
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Adapter\Configuration $configuration)
    {
    }
    public function getCriteria(): \PrestaShop\PrestaShop\Core\Domain\Carrier\ShippingCost\Provider\FreeShippingCriteria
    {
    }
}

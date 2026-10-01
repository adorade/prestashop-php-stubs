<?php

namespace PrestaShop\PrestaShop\Core\Domain\Carrier\ShippingCost\Provider;

interface FreeShippingCriteriaProviderInterface extends \PrestaShop\PrestaShop\Core\Domain\Carrier\ShippingCost\Provider\ShippingCostProviderInterface
{
    public function getCriteria(): \PrestaShop\PrestaShop\Core\Domain\Carrier\ShippingCost\Provider\FreeShippingCriteria;
}

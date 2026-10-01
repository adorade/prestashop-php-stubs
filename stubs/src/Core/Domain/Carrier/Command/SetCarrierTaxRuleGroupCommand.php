<?php

namespace PrestaShop\PrestaShop\Core\Domain\Carrier\Command;

class SetCarrierTaxRuleGroupCommand
{
    public function __construct(int $carrierId, int $carrierTaxRuleGroupId, private \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint)
    {
    }
    public function getCarrierId(): \PrestaShop\PrestaShop\Core\Domain\Carrier\ValueObject\CarrierId
    {
    }
    public function getCarrierTaxRuleGroupId(): \PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\ValueObject\TaxRulesGroupId
    {
    }
    public function getShopConstraint(): \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint
    {
    }
}

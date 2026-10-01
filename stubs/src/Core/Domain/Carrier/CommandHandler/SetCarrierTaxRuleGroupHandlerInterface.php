<?php

namespace PrestaShop\PrestaShop\Core\Domain\Carrier\CommandHandler;

interface SetCarrierTaxRuleGroupHandlerInterface
{
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Carrier\Command\SetCarrierTaxRuleGroupCommand $command): \PrestaShop\PrestaShop\Core\Domain\Carrier\ValueObject\CarrierId;
}

<?php

namespace PrestaShop\PrestaShop\Adapter\TaxRulesGroup\CommandHandler;

/**
 * Handles bulk deletion of tax rules within a group
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
final class BulkDeleteTaxRuleHandler implements \PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\TaxRule\CommandHandler\BulkDeleteTaxRuleHandlerInterface
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Adapter\TaxRulesGroup\Repository\TaxRulesGroupRepository $taxRulesGroupRepository, private readonly \PrestaShop\PrestaShop\Adapter\TaxRulesGroup\Repository\TaxRuleRepository $taxRuleRepository)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\TaxRule\Command\BulkDeleteTaxRuleCommand $command): void
    {
    }
}

<?php

namespace PrestaShop\PrestaShop\Adapter\TaxRulesGroup\CommandHandler;

/**
 * Handles deletion of a single tax rule
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
final class DeleteTaxRuleHandler implements \PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\TaxRule\CommandHandler\DeleteTaxRuleHandlerInterface
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Adapter\TaxRulesGroup\Repository\TaxRulesGroupRepository $taxRulesGroupRepository, private readonly \PrestaShop\PrestaShop\Adapter\TaxRulesGroup\Repository\TaxRuleRepository $taxRuleRepository)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\TaxRule\Command\DeleteTaxRuleCommand $command): void
    {
    }
}

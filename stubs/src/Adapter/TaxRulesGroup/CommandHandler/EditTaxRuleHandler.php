<?php

namespace PrestaShop\PrestaShop\Adapter\TaxRulesGroup\CommandHandler;

/**
 * Handles editing a tax rule
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
final class EditTaxRuleHandler implements \PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\TaxRule\CommandHandler\EditTaxRuleHandlerInterface
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Adapter\TaxRulesGroup\Repository\TaxRulesGroupRepository $taxRulesGroupRepository, private readonly \PrestaShop\PrestaShop\Adapter\TaxRulesGroup\Repository\TaxRuleRepository $taxRuleRepository)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\TaxRule\Command\EditTaxRuleCommand $command): void
    {
    }
}

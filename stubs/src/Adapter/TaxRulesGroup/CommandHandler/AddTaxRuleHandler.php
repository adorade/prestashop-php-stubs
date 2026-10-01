<?php

namespace PrestaShop\PrestaShop\Adapter\TaxRulesGroup\CommandHandler;

/**
 * Handles adding tax rules to a tax rules group.
 * When countryId is 0, creates rules for all active countries.
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
final class AddTaxRuleHandler implements \PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\TaxRule\CommandHandler\AddTaxRuleHandlerInterface
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Adapter\TaxRulesGroup\Repository\TaxRulesGroupRepository $taxRulesGroupRepository, private readonly \PrestaShop\PrestaShop\Adapter\TaxRulesGroup\Repository\TaxRuleRepository $taxRuleRepository)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\TaxRule\Command\AddTaxRuleCommand $command): \PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\TaxRule\CommandResult\AddTaxRuleResult
    {
    }
}

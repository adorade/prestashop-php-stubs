<?php

namespace PrestaShop\PrestaShop\Adapter\TaxRulesGroup\CommandHandler;

/**
 * Handles tax rules group status toggling
 */
final class SetTaxRulesGroupStatusHandler extends \PrestaShop\PrestaShop\Adapter\TaxRulesGroup\AbstractTaxRulesGroupHandler implements \PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\CommandHandler\ToggleTaxRulesGroupStatusHandlerInterface
{
    /**
     * {@inheritdoc}
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\Exception\CannotUpdateTaxRulesGroupException
     * @throws \PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\Exception\TaxRulesGroupException
     * @throws \PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\Exception\TaxRulesGroupNotFoundException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\Command\SetTaxRulesGroupStatusCommand $command): void
    {
    }
}

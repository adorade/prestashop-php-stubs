<?php

namespace PrestaShop\PrestaShop\Adapter\TaxRulesGroup\CommandHandler;

/**
 * Handles deletion of single tax rules group
 */
final class DeleteTaxRulesGroupHandler extends \PrestaShop\PrestaShop\Adapter\TaxRulesGroup\AbstractTaxRulesGroupHandler implements \PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\CommandHandler\DeleteTaxRulesGroupHandlerInterface
{
    /**
     * {@inheritdoc}
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\Exception\CannotDeleteTaxRulesGroupException
     * @throws \PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\Exception\TaxRulesGroupNotFoundException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\Command\DeleteTaxRulesGroupCommand $command): void
    {
    }
}

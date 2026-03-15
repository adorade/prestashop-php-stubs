<?php

namespace PrestaShop\PrestaShop\Adapter\TaxRulesGroup\CommandHandler;

/**
 * Handles tax rules group addition
 */
class AddTaxRulesGroupHandler extends \PrestaShop\PrestaShop\Adapter\TaxRulesGroup\AbstractTaxRulesGroupHandler implements \PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\CommandHandler\AddTaxRulesGroupHandlerInterface
{
    /**
     * @var TaxRulesGroupRepository
     */
    protected $taxRulesGroupRepository;
    /**
     * @param TaxRulesGroupRepository $taxRulesGroupRepository
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\TaxRulesGroup\Repository\TaxRulesGroupRepository $taxRulesGroupRepository)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\Command\AddTaxRulesGroupCommand $command): \PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\ValueObject\TaxRulesGroupId
    {
    }
}

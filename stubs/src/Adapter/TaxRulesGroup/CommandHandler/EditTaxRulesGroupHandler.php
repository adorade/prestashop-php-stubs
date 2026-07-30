<?php

namespace PrestaShop\PrestaShop\Adapter\TaxRulesGroup\CommandHandler;

/**
 * Handles tax rules group edition
 */
class EditTaxRulesGroupHandler extends \PrestaShop\PrestaShop\Adapter\TaxRulesGroup\AbstractTaxRulesGroupHandler implements \PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\CommandHandler\EditTaxRulesGroupHandlerInterface
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
     *
     * @throws CannotUpdateTaxRulesGroupException
     * @throws TaxRulesGroupException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\Command\EditTaxRulesGroupCommand $command): void
    {
    }
}

<?php

namespace PrestaShop\PrestaShop\Adapter\TaxRulesGroup\CommandHandler;

/**
 * Handles tax rules group edition
 */
class EditTaxRulesGroupHandler extends \PrestaShop\PrestaShop\Adapter\TaxRulesGroup\AbstractTaxRulesGroupHandler implements \PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\CommandHandler\EditTaxRulesGroupHandlerInterface
{
    /**
     * @var \PrestaShop\PrestaShop\Adapter\TaxRulesGroup\Repository\TaxRulesGroupRepository
     */
    protected $taxRulesGroupRepository;
    /**
     * @param \PrestaShop\PrestaShop\Adapter\TaxRulesGroup\Repository\TaxRulesGroupRepository $taxRulesGroupRepository
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\TaxRulesGroup\Repository\TaxRulesGroupRepository $taxRulesGroupRepository)
    {
    }
    /**
     * {@inheritdoc}
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\Exception\CannotUpdateTaxRulesGroupException
     * @throws \PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\Exception\TaxRulesGroupException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\Command\EditTaxRulesGroupCommand $command): void
    {
    }
}

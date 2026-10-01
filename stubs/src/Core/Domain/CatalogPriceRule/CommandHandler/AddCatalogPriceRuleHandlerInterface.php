<?php

namespace PrestaShop\PrestaShop\Core\Domain\CatalogPriceRule\CommandHandler;

/**
 * Interface for handling addCatalogPriceRule command
 */
interface AddCatalogPriceRuleHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\CatalogPriceRule\Command\AddCatalogPriceRuleCommand $command
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\CatalogPriceRule\ValueObject\CatalogPriceRuleId
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\CatalogPriceRule\Command\AddCatalogPriceRuleCommand $command): \PrestaShop\PrestaShop\Core\Domain\CatalogPriceRule\ValueObject\CatalogPriceRuleId;
}

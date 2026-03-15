<?php

namespace PrestaShop\PrestaShop\Adapter\Product\CommandHandler;

/**
 * Handles @var SetAssociatedProductCategoriesCommand using legacy object model
 */
final class SetAssociatedProductCategoriesHandler implements \PrestaShop\PrestaShop\Core\Domain\Product\CommandHandler\SetAssociatedProductCategoriesHandlerInterface
{
    /**
     * @param ProductCategoryUpdater $productCategoryUpdater
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Product\Update\ProductCategoryUpdater $productCategoryUpdater)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Command\SetAssociatedProductCategoriesCommand $command): void
    {
    }
}

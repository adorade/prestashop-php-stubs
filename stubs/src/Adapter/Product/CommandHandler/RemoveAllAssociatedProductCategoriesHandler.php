<?php

namespace PrestaShop\PrestaShop\Adapter\Product\CommandHandler;

/**
 * Handles @see RemoveAllAssociatedProductCategoriesCommand using legacy object model
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
final class RemoveAllAssociatedProductCategoriesHandler implements \PrestaShop\PrestaShop\Core\Domain\Product\CommandHandler\RemoveAllAssociatedProductCategoriesHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Adapter\Product\Update\ProductCategoryUpdater $productCategoryUpdater
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Product\Update\ProductCategoryUpdater $productCategoryUpdater)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Command\RemoveAllAssociatedProductCategoriesCommand $command): void
    {
    }
}

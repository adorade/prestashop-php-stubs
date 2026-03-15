<?php

namespace PrestaShop\PrestaShop\Adapter\Product\CommandHandler;

/**
 * Handles @see RemoveAllRelatedProductsCommand using legacy object model
 */
final class RemoveAllRelatedProductsHandler implements \PrestaShop\PrestaShop\Core\Domain\Product\CommandHandler\RemoveAllRelatedProductsHandlerInterface
{
    /**
     * @param RelatedProductsUpdater $relatedProductsUpdater
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Product\Update\RelatedProductsUpdater $relatedProductsUpdater)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Command\RemoveAllRelatedProductsCommand $command): void
    {
    }
}

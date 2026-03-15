<?php

namespace PrestaShop\PrestaShop\Adapter\Product\CommandHandler;

/**
 * handles @see SetRelatedProductsCommand using legacy object models
 */
final class SetRelatedProductsHandler implements \PrestaShop\PrestaShop\Core\Domain\Product\CommandHandler\SetRelatedProductsHandlerInterface
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
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Command\SetRelatedProductsCommand $command): void
    {
    }
}

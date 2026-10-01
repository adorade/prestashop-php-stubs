<?php

namespace PrestaShop\PrestaShop\Adapter\Product\CommandHandler;

/**
 * handles @see SetRelatedProductsCommand using legacy object models
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
final class SetRelatedProductsHandler implements \PrestaShop\PrestaShop\Core\Domain\Product\CommandHandler\SetRelatedProductsHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Adapter\Product\Update\RelatedProductsUpdater $relatedProductsUpdater
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

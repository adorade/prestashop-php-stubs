<?php

namespace PrestaShop\PrestaShop\Adapter\Product\CommandHandler;

/**
 * Handles @see DeleteProductCommand using legacy object model
 */
class DeleteProductHandler implements \PrestaShop\PrestaShop\Core\Domain\Product\CommandHandler\DeleteProductHandlerInterface
{
    public function __construct(\PrestaShop\PrestaShop\Adapter\Product\ProductDeleter $productDeleter)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Command\DeleteProductCommand $command): void
    {
    }
}

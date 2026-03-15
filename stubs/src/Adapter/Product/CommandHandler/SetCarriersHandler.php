<?php

namespace PrestaShop\PrestaShop\Adapter\Product\CommandHandler;

/**
 * Handles @var SetCarriersCommand using repository
 */
class SetCarriersHandler implements \PrestaShop\PrestaShop\Core\Domain\Product\CommandHandler\SetCarriersHandlerInterface
{
    /**
     * @param ProductRepository $productRepository
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Product\Repository\ProductRepository $productRepository)
    {
    }
    /**
     * {@inheritDoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Command\SetCarriersCommand $command): void
    {
    }
}

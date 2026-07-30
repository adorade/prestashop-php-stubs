<?php

namespace PrestaShop\PrestaShop\Adapter\Product\CommandHandler;

/**
 * Updates category position using legacy object model
 */
class UpdateProductsPositionsHandler implements \PrestaShop\PrestaShop\Core\Domain\Product\CommandHandler\UpdateProductsPositionsHandlerInterface
{
    public function __construct(\PrestaShop\PrestaShop\Core\Grid\Position\PositionDefinition $positionDefinition, \PrestaShop\PrestaShop\Core\Grid\Position\PositionUpdateFactoryInterface $positionUpdateFactory, \PrestaShop\PrestaShop\Core\Grid\Position\GridPositionUpdaterInterface $positionUpdater)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Command\UpdateProductsPositionsCommand $command): void
    {
    }
}

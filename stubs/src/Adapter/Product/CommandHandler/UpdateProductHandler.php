<?php

namespace PrestaShop\PrestaShop\Adapter\Product\CommandHandler;

/**
 * Handles the @see UpdateProductCommand using legacy object model
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
class UpdateProductHandler implements \PrestaShop\PrestaShop\Core\Domain\Product\CommandHandler\UpdateProductHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Adapter\Product\Update\Filler\ProductFillerInterface $productUpdatablePropertyFiller
     * @param \PrestaShop\PrestaShop\Adapter\Product\Repository\ProductRepository $productRepository
     * @param \PrestaShop\PrestaShop\Adapter\Product\Update\ProductIndexationUpdater $productIndexationUpdater
     * @param \PrestaShop\PrestaShop\Adapter\CartRule\CartRuleDisablerService $cartRuleDisablerService
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Product\Update\Filler\ProductFillerInterface $productUpdatablePropertyFiller, \PrestaShop\PrestaShop\Adapter\Product\Repository\ProductRepository $productRepository, \PrestaShop\PrestaShop\Adapter\Product\Update\ProductIndexationUpdater $productIndexationUpdater, \PrestaShop\PrestaShop\Adapter\CartRule\CartRuleDisablerService $cartRuleDisablerService)
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\Command\UpdateProductCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Command\UpdateProductCommand $command): void
    {
    }
}

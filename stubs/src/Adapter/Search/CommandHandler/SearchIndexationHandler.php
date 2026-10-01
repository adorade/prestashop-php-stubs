<?php

namespace PrestaShop\PrestaShop\Adapter\Search\CommandHandler;

/**
 * Handles search indexation command.
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
final class SearchIndexationHandler implements \PrestaShop\PrestaShop\Core\Domain\Search\CommandHandler\SearchIndexationHandlerInterface
{
    public function __construct(protected readonly \PrestaShop\PrestaShop\Adapter\Product\Repository\ProductRepository $productRepository, protected readonly \PrestaShop\PrestaShop\Adapter\Shop\Repository\ShopRepository $shopRepository, protected readonly \PrestaShop\PrestaShop\Adapter\Shop\Repository\ShopGroupRepository $shopGroupRepository)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Search\Command\SearchIndexationCommand $command): void
    {
    }
}

<?php

namespace PrestaShop\PrestaShop\Adapter\Category\QueryHandler;

/**
 * Handles @see GetCategoriesTree using legacy object model
 */
final class GetCategoriesTreeHandler implements \PrestaShop\PrestaShop\Core\Domain\Category\QueryHandler\GetCategoriesTreeHandlerInterface
{
    /**
     * @param CategoryDisplayNameBuilder $displayNameBuilder
     * @param ContextStateManager $contextStateManager
     * @param ShopRepository $shopRepository
     * @param int $rootCategoryId
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Category\NameBuilder\CategoryDisplayNameBuilder $displayNameBuilder, \PrestaShop\PrestaShop\Adapter\ContextStateManager $contextStateManager, \PrestaShop\PrestaShop\Adapter\Shop\Repository\ShopRepository $shopRepository, int $rootCategoryId)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Category\Query\GetCategoriesTree $query): array
    {
    }
}

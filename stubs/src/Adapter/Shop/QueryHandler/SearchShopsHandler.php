<?php

namespace PrestaShop\PrestaShop\Adapter\Shop\QueryHandler;

/**
 * Responsible for getting shops for a given search term.
 */
final class SearchShopsHandler implements \PrestaShop\PrestaShop\Core\Domain\Shop\QueryHandler\SearchShopsHandlerInterface
{
    /**
     * SearchShopsHandler constructor.
     *
     * @param ShopRepository $shopRepository
     * @param ShopGroupRepository $shopGroupRepository
     */
    public function __construct(\PrestaShopBundle\Entity\Repository\ShopRepository $shopRepository, \PrestaShopBundle\Entity\Repository\ShopGroupRepository $shopGroupRepository)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Shop\Query\SearchShops $query): array
    {
    }
}

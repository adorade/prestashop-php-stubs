<?php

namespace PrestaShop\PrestaShop\Core\Domain\Shop\QueryHandler;

/**
 * Defines contract to handle @see SearchShops query
 */
interface SearchShopsHandlerInterface
{
    /**
     * @param SearchShops $query
     *
     * @return array
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Shop\Query\SearchShops $query): array;
}

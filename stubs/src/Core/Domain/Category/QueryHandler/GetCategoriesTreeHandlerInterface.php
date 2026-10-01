<?php

namespace PrestaShop\PrestaShop\Core\Domain\Category\QueryHandler;

/**
 * Defines contract for handling @see GetCategoriesTree query
 */
interface GetCategoriesTreeHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Category\Query\GetCategoriesTree $query
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Category\QueryResult\CategoryForTree[]
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Category\Query\GetCategoriesTree $query): array;
}

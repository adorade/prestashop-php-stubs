<?php

namespace PrestaShop\PrestaShop\Core\Domain\Category\QueryHandler;

/**
 * Defines contract for handling @see GetCategoriesTree query
 */
interface GetCategoriesTreeHandlerInterface
{
    /**
     * @param GetCategoriesTree $query
     *
     * @return CategoryForTree[]
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Category\Query\GetCategoriesTree $query): array;
}

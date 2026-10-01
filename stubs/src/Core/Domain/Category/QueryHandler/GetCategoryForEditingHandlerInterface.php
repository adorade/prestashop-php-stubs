<?php

namespace PrestaShop\PrestaShop\Core\Domain\Category\QueryHandler;

/**
 * Interface GetCategoryForEditingHandlerInterface.
 */
interface GetCategoryForEditingHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Category\Query\GetCategoryForEditing $query
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Category\QueryResult\EditableCategory
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Category\Query\GetCategoryForEditing $query);
}

<?php

namespace PrestaShop\PrestaShop\Core\Domain\Category\QueryHandler;

/**
 * Interface GetCategoryForEditingHandlerInterface.
 */
interface GetCategoryForEditingHandlerInterface
{
    /**
     * @param GetCategoryForEditing $query
     *
     * @return EditableCategory
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Category\Query\GetCategoryForEditing $query);
}

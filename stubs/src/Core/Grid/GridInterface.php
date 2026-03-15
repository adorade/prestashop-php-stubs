<?php

namespace PrestaShop\PrestaShop\Core\Grid;

/**
 * Interface GridInterface defines contract for grid.
 */
interface GridInterface
{
    /**
     * Get grid definition.
     *
     * @return GridDefinitionInterface
     */
    public function getDefinition();
    /**
     * Get grid data.
     *
     * @return GridDataInterface
     */
    public function getData();
    /**
     * Get grid data search criteria.
     *
     * @return SearchCriteriaInterface
     */
    public function getSearchCriteria();
    /**
     * Get grid filter form.
     *
     * @return FormInterface
     */
    public function getFilterForm();
}

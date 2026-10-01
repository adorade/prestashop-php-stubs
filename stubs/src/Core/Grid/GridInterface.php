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
     * @return \PrestaShop\PrestaShop\Core\Grid\Definition\GridDefinitionInterface
     */
    public function getDefinition();
    /**
     * Get grid data.
     *
     * @return \PrestaShop\PrestaShop\Core\Grid\Data\GridDataInterface
     */
    public function getData();
    /**
     * Get grid data search criteria.
     *
     * @return \PrestaShop\PrestaShop\Core\Grid\Search\SearchCriteriaInterface
     */
    public function getSearchCriteria();
    /**
     * Get grid filter form.
     *
     * @return \Symfony\Component\Form\FormInterface
     */
    public function getFilterForm();
}

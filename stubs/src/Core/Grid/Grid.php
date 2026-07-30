<?php

namespace PrestaShop\PrestaShop\Core\Grid;

/**
 * Class Grid is responsible for holding final Grid data.
 */
final class Grid implements \PrestaShop\PrestaShop\Core\Grid\GridInterface
{
    /**
     * @param GridDefinitionInterface $definition
     * @param GridDataInterface $data
     * @param SearchCriteriaInterface $searchCriteria
     * @param FormInterface $filtersForm
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Grid\Definition\GridDefinitionInterface $definition, \PrestaShop\PrestaShop\Core\Grid\Data\GridDataInterface $data, \PrestaShop\PrestaShop\Core\Grid\Search\SearchCriteriaInterface $searchCriteria, \Symfony\Component\Form\FormInterface $filtersForm)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getDefinition()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getSearchCriteria()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getData()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getFilterForm()
    {
    }
}

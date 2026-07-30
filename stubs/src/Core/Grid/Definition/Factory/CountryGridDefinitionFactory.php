<?php

namespace PrestaShop\PrestaShop\Core\Grid\Definition\Factory;

class CountryGridDefinitionFactory extends \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\AbstractGridDefinitionFactory
{
    use \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\BulkDeleteActionTrait;
    use \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\DeleteActionTrait;
    public const GRID_ID = 'country';
    /**
     * {@inheritdoc}
     */
    protected function getId(): string
    {
    }
    /**
     * {@inheritdoc}
     */
    protected function getName(): string
    {
    }
    /**
     * {@inheritdoc}
     */
    protected function getColumns(): \PrestaShop\PrestaShop\Core\Grid\Column\ColumnCollectionInterface
    {
    }
    /**
     * {@inheritdoc}
     */
    protected function getFilters(): \PrestaShop\PrestaShop\Core\Grid\Filter\FilterCollectionInterface
    {
    }
    /**
     * @return RowActionCollection
     */
    protected function getRowActions(): \PrestaShop\PrestaShop\Core\Grid\Action\Row\RowActionCollection
    {
    }
    /**
     * {@inheritdoc}
     */
    protected function getGridActions(): \PrestaShop\PrestaShop\Core\Grid\Action\GridActionCollectionInterface
    {
    }
    /**
     * {@inheritdoc}
     */
    protected function getBulkActions(): \PrestaShop\PrestaShop\Core\Grid\Action\Bulk\BulkActionCollectionInterface
    {
    }
}

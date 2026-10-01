<?php

namespace PrestaShop\PrestaShop\Core\Grid\Definition\Factory;

class StoreGridDefinitionFactory extends \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\AbstractGridDefinitionFactory
{
    use \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\DeleteActionTrait;
    use \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\BulkDeleteActionTrait;
    public const GRID_ID = 'store';
    protected function getId(): string
    {
    }
    protected function getName(): string
    {
    }
    protected function getColumns(): \PrestaShop\PrestaShop\Core\Grid\Column\ColumnCollectionInterface
    {
    }
    protected function getGridActions(): \PrestaShop\PrestaShop\Core\Grid\Action\GridActionCollectionInterface
    {
    }
    protected function getBulkActions(): \PrestaShop\PrestaShop\Core\Grid\Action\Bulk\BulkActionCollectionInterface
    {
    }
    /**
     * {@inheritdoc}
     */
    protected function getFilters()
    {
    }
}

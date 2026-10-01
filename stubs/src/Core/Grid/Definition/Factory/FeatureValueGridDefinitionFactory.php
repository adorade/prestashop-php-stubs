<?php

namespace PrestaShop\PrestaShop\Core\Grid\Definition\Factory;

/**
 * @see FeatureValueGridFactory - it modifies grid definition to adapt values which depends on request filters (like name and some filter columns)
 */
class FeatureValueGridDefinitionFactory extends \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\AbstractFilterableGridDefinitionFactory
{
    use \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\DeleteActionTrait;
    public const GRID_ID = 'feature_value';
    public function getDefinition(): \PrestaShop\PrestaShop\Core\Grid\Definition\GridDefinitionInterface
    {
    }
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
    protected function getGridActions(): \PrestaShop\PrestaShop\Core\Grid\Action\GridActionCollectionInterface
    {
    }
    /**
     * {@inheritdoc}
     */
    protected function getFilters(): \PrestaShop\PrestaShop\Core\Grid\Filter\FilterCollectionInterface
    {
    }
    /**
     * {@inheritdoc}
     */
    protected function getBulkActions(): \PrestaShop\PrestaShop\Core\Grid\Action\Bulk\BulkActionCollectionInterface
    {
    }
}

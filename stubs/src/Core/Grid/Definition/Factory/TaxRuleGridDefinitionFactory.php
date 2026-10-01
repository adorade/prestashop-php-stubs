<?php

namespace PrestaShop\PrestaShop\Core\Grid\Definition\Factory;

/**
 * Defines tax rules grid
 */
class TaxRuleGridDefinitionFactory extends \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\AbstractFilterableGridDefinitionFactory
{
    use \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\BulkDeleteActionTrait;
    use \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\DeleteActionTrait;
    public const GRID_ID = 'tax_rules';
    #[\Symfony\Contracts\Service\Attribute\Required]
    public function setRequestStack(\Symfony\Component\HttpFoundation\RequestStack $requestStack): void
    {
    }
    /**
     * {@inheritdoc}
     */
    protected function getId()
    {
    }
    /**
     * {@inheritdoc}
     */
    protected function getName()
    {
    }
    /**
     * {@inheritdoc}
     */
    protected function getColumns()
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
    protected function getRowActions()
    {
    }
    /**
     * {@inheritdoc}
     */
    protected function getGridActions()
    {
    }
    /**
     * {@inheritdoc}
     */
    protected function getBulkActions()
    {
    }
}

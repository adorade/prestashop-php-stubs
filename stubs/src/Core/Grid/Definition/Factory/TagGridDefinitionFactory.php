<?php

namespace PrestaShop\PrestaShop\Core\Grid\Definition\Factory;

/**
 * Class TagGridDefinitionFactory creates definition for tag grid.
 */
class TagGridDefinitionFactory extends \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\AbstractGridDefinitionFactory
{
    use \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\BulkDeleteActionTrait;
    use \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\DeleteActionTrait;
    public const GRID_ID = 'tag';
    public function __construct(\PrestaShop\PrestaShop\Core\Hook\HookDispatcherInterface $hookDispatcher, \PrestaShop\PrestaShop\Core\Form\ConfigurableFormChoiceProviderInterface $languageChoiceProvider)
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
    protected function getRowActions(): \PrestaShop\PrestaShop\Core\Grid\Action\Row\RowActionCollection
    {
    }
    /**
     * {@inheritdoc}
     */
    protected function getFilters()
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

<?php

namespace PrestaShop\PrestaShop\Core\Grid\Definition\Factory;

/**
 * Class AbstractGridDefinitionFactory implements grid definition creation.
 */
abstract class AbstractGridDefinitionFactory implements \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\GridDefinitionFactoryInterface
{
    use \PrestaShopBundle\Translation\TranslatorAwareTrait;
    /**
     * @var HookDispatcherInterface
     */
    protected $hookDispatcher;
    /**
     * @param HookDispatcherInterface|null $hookDispatcher
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Hook\HookDispatcherInterface $hookDispatcher = null)
    {
    }
    /**
     * Set hook dispatcher.
     *
     * @param HookDispatcherInterface $hookDispatcher
     *
     * @deprecated
     */
    final public function setHookDispatcher(\PrestaShop\PrestaShop\Core\Hook\HookDispatcherInterface $hookDispatcher)
    {
    }
    /**
     * {@inheritdoc}
     */
    final public function getDefinition()
    {
    }
    /**
     * Get unique grid identifier.
     *
     * @return string
     */
    abstract protected function getId();
    /**
     * Get translated grid name.
     *
     * @return string
     */
    abstract protected function getName();
    /**
     * Get defined columns for grid.
     *
     * @return ColumnCollectionInterface
     */
    abstract protected function getColumns();
    /**
     * Get defined grid actions.
     * Override this method to define custom grid actions collection.
     *
     * @return GridActionCollectionInterface
     */
    protected function getGridActions()
    {
    }
    /**
     * Get defined bulk actions.
     * Override this method to define custom bulk actions collection.
     *
     * @return BulkActionCollectionInterface
     */
    protected function getBulkActions()
    {
    }
    /**
     * Get defined grid view options.
     * Override this method to define custom view options collection.
     *
     * @return ViewOptionsCollectionInterface
     */
    protected function getViewOptions()
    {
    }
    /**
     * Get defined filters.
     * Override this method to define custom filters collection.
     *
     * @return FilterCollectionInterface
     */
    protected function getFilters()
    {
    }
}

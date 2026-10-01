<?php

namespace PrestaShop\PrestaShop\Core\Grid\Definition\Factory;

/**
 * Class AbstractGridDefinitionFactory implements grid definition creation.
 */
abstract class AbstractGridDefinitionFactory implements \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\GridDefinitionFactoryInterface
{
    use \PrestaShopBundle\Translation\TranslatorAwareTrait;
    /**
     * @var \PrestaShop\PrestaShop\Core\Hook\HookDispatcherInterface
     */
    protected $hookDispatcher;
    /**
     * @var \PrestaShop\PrestaShop\Core\ExtraProperty\Grid\ExtraPropertiesGridDefinitionModifier|null
     */
    protected $extraPropertiesGridDefinitionModifier;
    /**
     * @param \PrestaShop\PrestaShop\Core\Hook\HookDispatcherInterface $hookDispatcher
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Hook\HookDispatcherInterface $hookDispatcher)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getDefinition()
    {
    }
    public function setExtraPropertiesGridDefinitionModifier(?\PrestaShop\PrestaShop\Core\ExtraProperty\Grid\ExtraPropertiesGridDefinitionModifier $modifier): void
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
     * @return \PrestaShop\PrestaShop\Core\Grid\Column\ColumnCollectionInterface
     */
    abstract protected function getColumns();
    /**
     * Get defined grid actions.
     * Override this method to define custom grid actions collection.
     *
     * @return \PrestaShop\PrestaShop\Core\Grid\Action\GridActionCollectionInterface
     */
    protected function getGridActions()
    {
    }
    /**
     * Get defined bulk actions.
     * Override this method to define custom bulk actions collection.
     *
     * @return \PrestaShop\PrestaShop\Core\Grid\Action\Bulk\BulkActionCollectionInterface
     */
    protected function getBulkActions()
    {
    }
    /**
     * Get defined grid view options.
     * Override this method to define custom view options collection.
     *
     * @return \PrestaShop\PrestaShop\Core\Grid\Action\ViewOptionsCollectionInterface
     */
    protected function getViewOptions()
    {
    }
    /**
     * Get defined filters.
     * Override this method to define custom filters collection.
     *
     * @return \PrestaShop\PrestaShop\Core\Grid\Filter\FilterCollectionInterface
     */
    protected function getFilters()
    {
    }
}

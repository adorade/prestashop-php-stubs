<?php

namespace PrestaShop\PrestaShop\Core\Grid\Definition\Factory;

/**
 * Class responsible for providing columns, filters, actions for cms page list.
 */
class CmsPageDefinitionFactory extends \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\AbstractGridDefinitionFactory
{
    use \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\BulkDeleteActionTrait;
    use \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\DeleteActionTrait;
    public const GRID_ID = 'cms_page';
    public function __construct(\PrestaShop\PrestaShop\Core\Hook\HookDispatcherInterface $hookDispatcher, \PrestaShop\PrestaShop\Core\CommandBus\CommandBusInterface $queryBus, \Symfony\Component\HttpFoundation\RequestStack $requestStack, \PrestaShop\PrestaShop\Core\Multistore\MultistoreContextCheckerInterface $multistoreContextChecker, $isMultiStoreFeatureUsed)
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

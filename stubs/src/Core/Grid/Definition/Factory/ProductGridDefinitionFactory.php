<?php

namespace PrestaShop\PrestaShop\Core\Grid\Definition\Factory;

/**
 * Defines products grid name, its columns, actions, bulk actions and filters.
 */
class ProductGridDefinitionFactory extends \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\AbstractGridDefinitionFactory
{
    use \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\DeleteActionTrait;
    public const GRID_ID = 'product';
    public function __construct(\PrestaShop\PrestaShop\Core\Hook\HookDispatcherInterface $hookDispatcher, \PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration, \PrestaShop\PrestaShop\Core\Feature\FeatureInterface $multistoreFeature, \PrestaShop\PrestaShop\Core\Shop\ShopConstraintContextInterface $shopConstraintContext, \Symfony\Component\Form\FormFactoryInterface $formFactory, \PrestaShop\PrestaShop\Core\Grid\Action\Row\AccessibilityChecker\AccessibilityCheckerInterface $singleShopChecker, \PrestaShop\PrestaShop\Core\Grid\Action\Row\AccessibilityChecker\AccessibilityCheckerInterface $multipleShopsChecker)
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
    protected function getColumns()
    {
    }
    /**
     * {@inheritDoc}
     */
    protected function getRowActions(): \PrestaShop\PrestaShop\Core\Grid\Action\Row\RowActionCollection
    {
    }
    protected function getSingleShopRowActions(): \PrestaShop\PrestaShop\Core\Grid\Action\Row\RowActionCollection
    {
    }
    protected function getSingleMultiShopsRowActions(): \PrestaShop\PrestaShop\Core\Grid\Action\Row\RowActionCollection
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
    /**
     * @return array<string, string>
     */
    protected function getMultiShopEditionAttributes(): array
    {
    }
    protected function buildAjaxBulkAction(string $actionId, string $ajaxRoute, string $actionLabel, string $progressTitle, string $progressMessage, string $icon = '', array $routeParams = []): \PrestaShop\PrestaShop\Core\Grid\Action\Bulk\Type\AjaxBulkAction
    {
    }
}

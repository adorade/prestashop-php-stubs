<?php

namespace PrestaShop\PrestaShop\Core\Grid\Definition\Factory;

/**
 * Class CmsPageCategoryDefinitionFactory builds Grid definition for Cms page category listing.
 */
final class CmsPageCategoryDefinitionFactory extends \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\AbstractFilterableGridDefinitionFactory
{
    use \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\BulkDeleteActionTrait;
    use \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\DeleteActionTrait;
    public const GRID_ID = 'cms_page_category';
    /**
     * @param HookDispatcherInterface $hookDispatcher
     * @param RequestStack $requestStack
     * @param MultistoreContextCheckerInterface $multistoreContextChecker
     * @param bool $isMultiStoreFeatureUsed
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Hook\HookDispatcherInterface $hookDispatcher, \Symfony\Component\HttpFoundation\RequestStack $requestStack, \PrestaShop\PrestaShop\Core\Multistore\MultistoreContextCheckerInterface $multistoreContextChecker, $isMultiStoreFeatureUsed)
    {
    }
}

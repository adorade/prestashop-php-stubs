<?php

namespace PrestaShop\PrestaShop\Adapter\Grid\Search\Factory;

/**
 * Class SearchCriteriaWithCategoryParentIdFilterFactory.
 *
 * @internal
 */
final class SearchCriteriaWithCategoryParentIdFilterFactory implements \PrestaShop\PrestaShop\Core\Grid\Search\Factory\DecoratedSearchCriteriaFactory
{
    /**
     * @param \PrestaShop\PrestaShop\Adapter\Configuration $configuration
     * @param \PrestaShop\PrestaShop\Adapter\Shop\Context $shopContext
     * @param \PrestaShop\PrestaShop\Core\Feature\FeatureInterface $multistoreFeature
     * @param \PrestaShop\PrestaShop\Core\Multistore\MultistoreContextCheckerInterface $multistoreContextChecker
     * @param int $contextShopCategoryId
     * @param \Symfony\Component\HttpFoundation\RequestStack $requestStack
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Configuration $configuration, \PrestaShop\PrestaShop\Adapter\Shop\Context $shopContext, \PrestaShop\PrestaShop\Core\Feature\FeatureInterface $multistoreFeature, \PrestaShop\PrestaShop\Core\Multistore\MultistoreContextCheckerInterface $multistoreContextChecker, $contextShopCategoryId, \Symfony\Component\HttpFoundation\RequestStack $requestStack)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function createFrom(\PrestaShop\PrestaShop\Core\Grid\Search\SearchCriteriaInterface $searchCriteria)
    {
    }
}

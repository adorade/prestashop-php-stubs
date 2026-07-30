<?php

namespace PrestaShop\PrestaShop\Adapter\Category;

/**
 * Class CategoryViewDataProvider provides category view data for categories listing page.
 *
 * @internal
 */
class CategoryViewDataProvider
{
    /**
     * @param ConfigurationInterface $configuration
     * @param FeatureInterface $multishopFeature
     * @param Context $shopContext
     * @param int $contextLangId
     */
    public function __construct(\PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration, \PrestaShop\PrestaShop\Core\Feature\FeatureInterface $multishopFeature, \PrestaShop\PrestaShop\Adapter\Shop\Context $shopContext, $contextLangId)
    {
    }
    /**
     * Get category view data.
     *
     * @param int $categoryId
     *
     * @return array
     */
    public function getViewData($categoryId)
    {
    }
}

<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Options;

/**
 * Build details on the product target based on the configuration (redirection type and entity id)
 */
class RedirectTargetProvider
{
    /**
     * @param ProductPreviewRepository $productPreviewRepository
     * @param CategoryPreviewRepository $categoryPreviewRepository
     * @param LegacyContext $legacyContext
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Product\Repository\ProductPreviewRepository $productPreviewRepository, \PrestaShop\PrestaShop\Adapter\Category\Repository\CategoryPreviewRepository $categoryPreviewRepository, \PrestaShop\PrestaShop\Adapter\LegacyContext $legacyContext)
    {
    }
    /**
     * @param string $redirectType
     * @param int $redirectTargetId
     *
     * @return ProductRedirectTarget|null
     *
     * @throws CategoryNotFoundException
     * @throws ProductNotFoundException
     */
    public function getRedirectTarget(string $redirectType, int $redirectTargetId): ?\PrestaShop\PrestaShop\Core\Domain\Product\QueryResult\ProductRedirectTarget
    {
    }
}

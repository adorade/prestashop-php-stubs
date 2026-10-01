<?php

namespace PrestaShop\PrestaShop\Adapter\SEO;

/**
 * Build details on the product target based on the configuration (redirection type and entity id)
 */
class RedirectTargetProvider
{
    /**
     * @param \PrestaShop\PrestaShop\Adapter\Product\Repository\ProductPreviewRepository $productPreviewRepository
     * @param \PrestaShop\PrestaShop\Adapter\Category\Repository\CategoryPreviewRepository $categoryPreviewRepository
     * @param \PrestaShop\PrestaShop\Adapter\LegacyContext $legacyContext
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Product\Repository\ProductPreviewRepository $productPreviewRepository, \PrestaShop\PrestaShop\Adapter\Category\Repository\CategoryPreviewRepository $categoryPreviewRepository, \PrestaShop\PrestaShop\Adapter\LegacyContext $legacyContext)
    {
    }
    /**
     * @param string $redirectType
     * @param int $redirectTargetId
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\QueryResult\RedirectTargetInformation|null
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Category\Exception\CategoryNotFoundException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Product\Exception\ProductNotFoundException
     */
    public function getRedirectTarget(string $redirectType, int $redirectTargetId): ?\PrestaShop\PrestaShop\Core\Domain\QueryResult\RedirectTargetInformation
    {
    }
}

<?php

namespace PrestaShop\PrestaShop\Adapter\CMS\PageCategory\QueryHandler;

/**
 * Gets name by cms category which are used for display in cms listing.
 */
final class GetCmsPageCategoryNameForListingHandler implements \PrestaShop\PrestaShop\Core\Domain\CmsPageCategory\QueryHandler\GetCmsPageCategoryNameForListingHandlerInterface
{
    /**
     * @param int $contextLanguageId
     * @param RequestStack $requestStack
     */
    public function __construct($contextLanguageId, \Symfony\Component\HttpFoundation\RequestStack $requestStack)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\CmsPageCategory\Query\GetCmsPageCategoryNameForListing $query)
    {
    }
}

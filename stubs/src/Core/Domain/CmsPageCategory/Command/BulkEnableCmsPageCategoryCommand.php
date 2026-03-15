<?php

namespace PrestaShop\PrestaShop\Core\Domain\CmsPageCategory\Command;

/**
 * Class BulkEnableCmsPageCategoryCommand is responsible for enabling cms category pages.
 */
class BulkEnableCmsPageCategoryCommand extends \PrestaShop\PrestaShop\Core\Domain\CmsPageCategory\Command\AbstractBulkCmsPageCategoryCommand
{
    /**
     * @param int[] $cmsPageCategoryIds
     *
     * @throws CmsPageCategoryException
     */
    public function __construct(array $cmsPageCategoryIds)
    {
    }
    /**
     * @return CmsPageCategoryId[]
     */
    public function getCmsPageCategoryIds()
    {
    }
}

<?php

namespace PrestaShop\PrestaShop\Core\Domain\CmsPageCategory\Command;

/**
 * Class BulkDeleteCmsPageCategoryCommand is responsible for deleting multiple cms page categories.
 */
class BulkDeleteCmsPageCategoryCommand extends \PrestaShop\PrestaShop\Core\Domain\CmsPageCategory\Command\AbstractBulkCmsPageCategoryCommand
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

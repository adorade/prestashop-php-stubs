<?php

namespace PrestaShop\PrestaShop\Core\Domain\CmsPage\Command;

/**
 * Deletes multiple cms pages according to given array.
 */
class BulkDeleteCmsPageCommand
{
    /**
     * @param array $cmsPageIds
     *
     * @throws CmsPageException
     */
    public function __construct(array $cmsPageIds)
    {
    }
    /**
     * @return CmsPageId[]
     */
    public function getCmsPages()
    {
    }
}

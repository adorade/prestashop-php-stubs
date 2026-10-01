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
     * @throws \PrestaShop\PrestaShop\Core\Domain\CmsPage\Exception\CmsPageException
     */
    public function __construct(array $cmsPageIds)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\CmsPage\ValueObject\CmsPageId[]
     */
    public function getCmsPages()
    {
    }
}

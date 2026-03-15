<?php

namespace PrestaShop\PrestaShop\Core\Domain\CmsPage\Command;

/**
 * Disables multiple cms pages.
 */
class BulkDisableCmsPageCommand
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

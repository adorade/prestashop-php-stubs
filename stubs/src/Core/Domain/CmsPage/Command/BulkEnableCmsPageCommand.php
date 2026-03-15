<?php

namespace PrestaShop\PrestaShop\Core\Domain\CmsPage\Command;

/**
 * Enables multiple cms pages.
 */
class BulkEnableCmsPageCommand
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

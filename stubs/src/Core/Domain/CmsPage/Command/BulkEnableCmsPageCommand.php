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

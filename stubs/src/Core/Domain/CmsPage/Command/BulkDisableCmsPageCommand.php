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

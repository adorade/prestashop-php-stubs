<?php

namespace PrestaShop\PrestaShop\Core\Domain\CmsPage\Command;

/**
 * Deletes given cms page.
 */
class DeleteCmsPageCommand
{
    /**
     * @param int $cmsPageId
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\CmsPage\Exception\CmsPageException
     */
    public function __construct($cmsPageId)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\CmsPage\ValueObject\CmsPageId
     */
    public function getCmsPageId()
    {
    }
}

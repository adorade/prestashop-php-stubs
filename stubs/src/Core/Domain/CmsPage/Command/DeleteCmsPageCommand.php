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
     * @throws CmsPageException
     */
    public function __construct($cmsPageId)
    {
    }
    /**
     * @return CmsPageId
     */
    public function getCmsPageId()
    {
    }
}

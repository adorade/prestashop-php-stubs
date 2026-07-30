<?php

namespace PrestaShop\PrestaShop\Core\Domain\CmsPage\Query;

/**
 * Gets object which transfers cms page data for editing
 */
class GetCmsPageForEditing
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

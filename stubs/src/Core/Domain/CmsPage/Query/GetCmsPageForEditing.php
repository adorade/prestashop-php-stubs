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

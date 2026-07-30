<?php

namespace PrestaShop\PrestaShop\Core\Domain\CmsPage\Command;

/**
 * Changes the status of cms page.
 */
class ToggleCmsPageStatusCommand
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

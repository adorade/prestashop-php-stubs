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

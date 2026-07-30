<?php

namespace PrestaShop\PrestaShop\Core\Domain\CmsPageCategory\Command;

/**
 * Class ToggleCmsPageCategoryStatusCommand is responsible for turning on and off cms page category status.
 */
class ToggleCmsPageCategoryStatusCommand
{
    /**
     * @param int $cmsPageCategoryId
     *
     * @throws CmsPageCategoryException
     */
    public function __construct($cmsPageCategoryId)
    {
    }
    /**
     * @return CmsPageCategoryId
     */
    public function getCmsPageCategoryId()
    {
    }
}

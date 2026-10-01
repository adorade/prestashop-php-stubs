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
     * @throws \PrestaShop\PrestaShop\Core\Domain\CmsPageCategory\Exception\CmsPageCategoryException
     */
    public function __construct($cmsPageCategoryId)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\CmsPageCategory\ValueObject\CmsPageCategoryId
     */
    public function getCmsPageCategoryId()
    {
    }
}

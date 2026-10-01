<?php

namespace PrestaShop\PrestaShop\Core\Domain\CmsPageCategory\Command;

/**
 * Class DeleteCmsPageCategoryCommand is responsible for deleting cms page category.
 */
class DeleteCmsPageCategoryCommand
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

<?php

namespace PrestaShop\PrestaShop\Core\Domain\CmsPageCategory\Command;

/**
 * Class BulkDeleteCmsPageCategoryCommand is responsible for deleting multiple cms page categories.
 */
class BulkDeleteCmsPageCategoryCommand extends \PrestaShop\PrestaShop\Core\Domain\CmsPageCategory\Command\AbstractBulkCmsPageCategoryCommand
{
    /**
     * @param int[] $cmsPageCategoryIds
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\CmsPageCategory\Exception\CmsPageCategoryException
     */
    public function __construct(array $cmsPageCategoryIds)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\CmsPageCategory\ValueObject\CmsPageCategoryId[]
     */
    public function getCmsPageCategoryIds()
    {
    }
}

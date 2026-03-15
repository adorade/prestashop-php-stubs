<?php

namespace PrestaShop\PrestaShop\Core\Domain\CmsPageCategory\Command;

/**
 * Class BulkDisableCmsPageCategoryCommand is responsible for disabling cms category pages.
 */
class BulkDisableCmsPageCategoryCommand extends \PrestaShop\PrestaShop\Core\Domain\CmsPageCategory\Command\AbstractBulkCmsPageCategoryCommand
{
    /**
     * @param int[] $cmsPageCategoryIds
     *
     * @throws CmsPageCategoryConstraintException
     * @throws CmsPageCategoryException
     */
    public function __construct(array $cmsPageCategoryIds)
    {
    }
    /**
     * @return CmsPageCategoryId[]
     */
    public function getCmsPageCategoryIds()
    {
    }
}

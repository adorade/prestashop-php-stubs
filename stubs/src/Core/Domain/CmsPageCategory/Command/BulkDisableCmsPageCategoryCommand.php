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
     * @throws \PrestaShop\PrestaShop\Core\Domain\CmsPageCategory\Exception\CmsPageCategoryConstraintException
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

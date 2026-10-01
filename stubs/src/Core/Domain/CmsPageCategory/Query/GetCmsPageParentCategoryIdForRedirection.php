<?php

namespace PrestaShop\PrestaShop\Core\Domain\CmsPageCategory\Query;

/**
 * Class GetCmsPageParentCategoryIdForRedirection is responsible for providing cms page categories parent id
 * for redirecting to the right controller after create, edit, delete, toggle actions.
 */
class GetCmsPageParentCategoryIdForRedirection
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

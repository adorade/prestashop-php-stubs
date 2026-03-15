<?php

namespace PrestaShop\PrestaShop\Core\Domain\CmsPageCategory\ValueObject;

/**
 * Class CmsPageCategoryId is responsible for providing identificator for cms page category
 */
class CmsPageCategoryId
{
    /**
     * ID for the topmost Cms Page category
     */
    public const ROOT_CMS_PAGE_CATEGORY_ID = 1;
    /**
     * @param int $cmsPageCategoryId
     *
     * @throws CmsPageCategoryException
     */
    public function __construct($cmsPageCategoryId)
    {
    }
    /**
     * @return int
     */
    public function getValue()
    {
    }
}

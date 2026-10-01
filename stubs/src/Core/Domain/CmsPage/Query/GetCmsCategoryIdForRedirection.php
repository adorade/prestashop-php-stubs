<?php

namespace PrestaShop\PrestaShop\Core\Domain\CmsPage\Query;

/**
 * This class is used for getting the id which is used later on to redirect to the right page after certain controller
 * actions.
 */
class GetCmsCategoryIdForRedirection
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

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
     * @throws CmsPageException
     */
    public function __construct($cmsPageId)
    {
    }
    /**
     * @return CmsPageId
     */
    public function getCmsPageId()
    {
    }
}

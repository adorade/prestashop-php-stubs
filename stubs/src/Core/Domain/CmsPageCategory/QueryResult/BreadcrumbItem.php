<?php

namespace PrestaShop\PrestaShop\Core\Domain\CmsPageCategory\QueryResult;

/**
 * Class CmsPageCategory is responsible for providing cms page id and name combination.
 */
class BreadcrumbItem
{
    /**
     * @param int $cmsPageCategoryId
     * @param string $name
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\CmsPageCategory\Exception\CmsPageCategoryException
     */
    public function __construct($cmsPageCategoryId, $name)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\CmsPageCategory\ValueObject\CmsPageCategoryId
     */
    public function getCmsPageCategoryId()
    {
    }
    /**
     * @return string
     */
    public function getName()
    {
    }
}

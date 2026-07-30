<?php

namespace PrestaShop\PrestaShop\Adapter\CMS\Page\CommandHandler;

/**
 * Abstraction which holds all common functions required for cms page functionality.
 *
 * @internal
 */
abstract class AbstractCmsPageHandler extends \PrestaShop\PrestaShop\Adapter\Domain\AbstractObjectModelHandler
{
    /**
     * Gets cms object if it exists. If it does not exist it throws exceptions.
     *
     * @param int $cmsId
     *
     * @return CMS
     *
     * @throws CmsPageException
     */
    protected function getCmsPageIfExistsById($cmsId)
    {
    }
    /**
     * Checks whether cms page category exists by provided id.
     *
     * @param int $cmsCategoryId
     *
     * @throws CmsPageCategoryException
     */
    protected function assertCmsCategoryExists($cmsCategoryId)
    {
    }
}

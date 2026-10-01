<?php

namespace PrestaShop\PrestaShop\Core\Domain\CmsPageCategory\QueryResult;

/**
 * Class EditableCmsPageCategory
 */
class EditableCmsPageCategory
{
    /**
     * @param array $localisedName
     * @param bool $isDisplayed
     * @param int $parentId
     * @param array $localisedDescription
     * @param array $localisedMetaDescription
     * @param array $metaTitle
     * @param array $localisedFriendlyUrl
     * @param array $shopIds
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\CmsPageCategory\Exception\CmsPageCategoryException
     */
    public function __construct(array $localisedName, $isDisplayed, $parentId, array $localisedDescription, array $localisedMetaDescription, array $metaTitle, array $localisedFriendlyUrl, array $shopIds)
    {
    }
    /**
     * @return array
     */
    public function getLocalisedName()
    {
    }
    /**
     * @return bool
     */
    public function isDisplayed()
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\CmsPageCategory\ValueObject\CmsPageCategoryId
     */
    public function getParentId()
    {
    }
    /**
     * @return array
     */
    public function getLocalisedDescription()
    {
    }
    /**
     * @return array
     */
    public function getLocalisedMetaDescription()
    {
    }
    /**
     * @return array
     */
    public function getMetaTitle()
    {
    }
    /**
     * @return array
     */
    public function getLocalisedFriendlyUrl()
    {
    }
    /**
     * @return array
     */
    public function getShopIds()
    {
    }
}

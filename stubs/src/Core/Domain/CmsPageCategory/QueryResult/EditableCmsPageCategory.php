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
     * @param array $localisedMetaKeywords
     * @param array $metaTitle
     * @param array $localisedFriendlyUrl
     * @param array $shopIds
     *
     * @throws CmsPageCategoryException
     */
    public function __construct(array $localisedName, $isDisplayed, $parentId, array $localisedDescription, array $localisedMetaDescription, array $localisedMetaKeywords, array $metaTitle, array $localisedFriendlyUrl, array $shopIds)
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
     * @return CmsPageCategoryId
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
    public function getLocalisedMetaKeywords()
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

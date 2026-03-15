<?php

namespace PrestaShop\PrestaShop\Core\Domain\CmsPage\Command;

/**
 * Edits cms page
 */
class EditCmsPageCommand
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
    /**
     * @return CmsPageCategoryId|null
     */
    public function getCmsPageCategoryId()
    {
    }
    /**
     * @param int|null $cmsPageCategoryId
     *
     * @return self
     *
     * @throws CmsPageCategoryException
     */
    public function setCmsPageCategoryId($cmsPageCategoryId)
    {
    }
    /**
     * @return string[]|null
     */
    public function getLocalizedTitle()
    {
    }
    /**
     * @param string[] $localizedTitle
     *
     * @return self
     */
    public function setLocalizedTitle(array $localizedTitle)
    {
    }
    /**
     * @return string[]|null
     */
    public function getLocalizedMetaTitle()
    {
    }
    /**
     * @param string[] $localizedMetaTitle
     *
     * @return self
     */
    public function setLocalizedMetaTitle(array $localizedMetaTitle)
    {
    }
    /**
     * @return string[]|null
     */
    public function getLocalizedMetaDescription()
    {
    }
    /**
     * @param string[] $localizedMetaDescription
     *
     * @return self
     */
    public function setLocalizedMetaDescription(array $localizedMetaDescription)
    {
    }
    /**
     * @return string[]|null
     */
    public function getLocalizedMetaKeyword()
    {
    }
    /**
     * @param string[] $LocalizedMetaKeyword
     *
     * @return self
     */
    public function setLocalizedMetaKeyword(array $LocalizedMetaKeyword)
    {
    }
    /**
     * @return string[]|null
     */
    public function getLocalizedFriendlyUrl()
    {
    }
    /**
     * @param string[] $localizedFriendlyUrl
     *
     * @return self
     */
    public function setLocalizedFriendlyUrl(array $localizedFriendlyUrl)
    {
    }
    /**
     * @return string[]|null
     */
    public function getLocalizedContent()
    {
    }
    /**
     * @param string[] $localizedContent
     *
     * @return self
     */
    public function setLocalizedContent(array $localizedContent)
    {
    }
    /**
     * @return bool|null
     */
    public function isIndexedForSearch()
    {
    }
    /**
     * @param bool|null $isIndexedForSearch
     *
     * @return self
     */
    public function setIsIndexedForSearch($isIndexedForSearch)
    {
    }
    /**
     * @return bool|null
     */
    public function isDisplayed()
    {
    }
    /**
     * @param bool|null $isDisplayed
     *
     * @return self
     */
    public function setIsDisplayed($isDisplayed)
    {
    }
    /**
     * @return array|null
     */
    public function getShopAssociation()
    {
    }
    /**
     * @param array|null $shopAssociation
     *
     * @return self
     */
    public function setShopAssociation(array $shopAssociation = null)
    {
    }
}

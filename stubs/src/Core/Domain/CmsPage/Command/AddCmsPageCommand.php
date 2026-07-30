<?php

namespace PrestaShop\PrestaShop\Core\Domain\CmsPage\Command;

/**
 * Adds new cms page
 */
class AddCmsPageCommand
{
    /**
     * @param int $cmsPageCategoryId
     * @param string[] $localizedTitle
     * @param string[] $localizedMetaTitle
     * @param string[] $localizedMetaDescription
     * @param string[] $LocalizedMetaKeyword
     * @param string[] $localizedFriendlyUrl
     * @param string[] $localizedContent
     * @param bool $indexedForSearch
     * @param bool $displayed
     * @param array $shopAssociation
     *
     * @throws CmsPageCategoryException
     */
    public function __construct($cmsPageCategoryId, array $localizedTitle, array $localizedMetaTitle, array $localizedMetaDescription, array $LocalizedMetaKeyword, array $localizedFriendlyUrl, array $localizedContent, $indexedForSearch, $displayed, array $shopAssociation)
    {
    }
    /**
     * @return CmsPageCategoryId
     */
    public function getCmsPageCategory()
    {
    }
    /**
     * @return string[]
     */
    public function getLocalizedTitle()
    {
    }
    /**
     * @return string[]
     */
    public function getLocalizedMetaTitle()
    {
    }
    /**
     * @return string[]
     */
    public function getLocalizedMetaDescription()
    {
    }
    /**
     * @return string[]
     */
    public function getLocalizedMetaKeyword()
    {
    }
    /**
     * @return string[]
     */
    public function getLocalizedFriendlyUrl()
    {
    }
    /**
     * @return string[]
     */
    public function getLocalizedContent()
    {
    }
    /**
     * @return bool
     */
    public function isIndexedForSearch()
    {
    }
    /**
     * @return bool
     */
    public function isDisplayed()
    {
    }
    /**
     * @return array
     */
    public function getShopAssociation()
    {
    }
}

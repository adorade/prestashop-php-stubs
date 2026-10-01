<?php

namespace PrestaShop\PrestaShop\Core\Domain\CmsPage\QueryResult;

/**
 * Transfers cms page data for editing
 */
class EditableCmsPage
{
    /**
     * @param int $cmsPageId
     * @param int $cmsPageCategoryId
     * @param string[] $localizedTitle
     * @param string[] $localizedMetaTitle
     * @param string[] $localizedMetaDescription
     * @param string[] $localizedFriendlyUrl
     * @param string[] $localizedContent
     * @param bool $indexedForSearch
     * @param bool $displayed
     * @param array $shopAssociation
     * @param string $previewUrl
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\CmsPageCategory\Exception\CmsPageCategoryException
     * @throws \PrestaShop\PrestaShop\Core\Domain\CmsPage\Exception\CmsPageException
     */
    public function __construct($cmsPageId, $cmsPageCategoryId, array $localizedTitle, array $localizedMetaTitle, array $localizedMetaDescription, array $localizedFriendlyUrl, array $localizedContent, $indexedForSearch, $displayed, array $shopAssociation, $previewUrl)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\CmsPage\ValueObject\CmsPageId
     */
    public function getCmsPageId()
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\CmsPageCategory\ValueObject\CmsPageCategoryId
     */
    public function getCmsPageCategoryId()
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
    /**
     * @return string
     */
    public function getPreviewUrl()
    {
    }
}

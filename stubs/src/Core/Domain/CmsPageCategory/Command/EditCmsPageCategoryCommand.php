<?php

namespace PrestaShop\PrestaShop\Core\Domain\CmsPageCategory\Command;

/**
 * Edits cms page category.
 */
class EditCmsPageCategoryCommand extends \PrestaShop\PrestaShop\Core\Domain\CmsPageCategory\Command\AbstractCmsPageCategoryCommand
{
    /**
     * @param int $cmsPageCategoryId
     *
     * @throws CmsPageCategoryException
     */
    public function __construct($cmsPageCategoryId)
    {
    }
    /**
     * @return CmsPageCategoryId
     */
    public function getCmsPageCategoryId()
    {
    }
    /**
     * @return array
     */
    public function getLocalisedName()
    {
    }
    /**
     * @param array $localisedName
     *
     * @return self
     *
     * @throws CmsPageCategoryConstraintException
     */
    public function setLocalisedName(array $localisedName)
    {
    }
    /**
     * @return array
     */
    public function getLocalisedFriendlyUrl()
    {
    }
    /**
     * @param array $localisedFriendlyUrl
     *
     * @return self
     */
    public function setLocalisedFriendlyUrl(array $localisedFriendlyUrl)
    {
    }
    /**
     * @return CmsPageCategoryId
     */
    public function getParentId()
    {
    }
    /**
     * @param int $parentId
     *
     * @return self
     *
     * @throws CmsPageCategoryException
     */
    public function setParentId($parentId)
    {
    }
    /**
     * @return bool
     */
    public function isDisplayed()
    {
    }
    /**
     * @param bool $isDisplayed
     *
     * @return self
     */
    public function setIsDisplayed($isDisplayed)
    {
    }
    /**
     * @return string[]
     */
    public function getLocalisedDescription()
    {
    }
    /**
     * @param string[] $localisedDescription
     *
     * @return self
     */
    public function setLocalisedDescription(array $localisedDescription)
    {
    }
    /**
     * @return string[]
     */
    public function getLocalisedMetaTitle()
    {
    }
    /**
     * @param string[] $localisedMetaTitle
     *
     * @return self
     *
     * @throws CmsPageCategoryConstraintException
     */
    public function setLocalisedMetaTitle(array $localisedMetaTitle)
    {
    }
    /**
     * @return string[]
     */
    public function getLocalisedMetaDescription()
    {
    }
    /**
     * @param string[] $localisedMetaDescription
     *
     * @return self
     *
     * @throws CmsPageCategoryConstraintException
     */
    public function setLocalisedMetaDescription(array $localisedMetaDescription)
    {
    }
    /**
     * @return string[]
     */
    public function getLocalisedMetaKeywords()
    {
    }
    /**
     * @param string[] $localisedMetaKeywords
     *
     * @return self
     *
     * @throws CmsPageCategoryConstraintException
     */
    public function setLocalisedMetaKeywords(array $localisedMetaKeywords)
    {
    }
    /**
     * @return int[]
     */
    public function getShopAssociation()
    {
    }
    /**
     * @param int[] $shopAssociation
     *
     * @return self
     */
    public function setShopAssociation(array $shopAssociation)
    {
    }
}

<?php

namespace PrestaShop\PrestaShop\Core\Domain\CmsPageCategory\Command;

/**
 * Class AddCmsPageCategoryCommand is responsible for adding cms page category.
 */
class AddCmsPageCategoryCommand extends \PrestaShop\PrestaShop\Core\Domain\CmsPageCategory\Command\AbstractCmsPageCategoryCommand
{
    /**
     * @param array $localisedName
     * @param array $localisedFriendlyUrl
     * @param int $parentId
     * @param bool $isDisplayed
     *
     * @throws CmsPageCategoryException
     */
    public function __construct(array $localisedName, array $localisedFriendlyUrl, $parentId, $isDisplayed)
    {
    }
    /**
     * @return array
     */
    public function getLocalisedName()
    {
    }
    /**
     * @return array
     */
    public function getLocalisedFriendlyUrl()
    {
    }
    /**
     * @return CmsPageCategoryId
     */
    public function getParentId()
    {
    }
    /**
     * @return bool
     */
    public function isDisplayed()
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

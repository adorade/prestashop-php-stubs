<?php

namespace PrestaShop\PrestaShop\Core\Domain\Category\QueryResult;

/**
 * Stores category data needed for editing.
 */
class EditableCategory
{
    /**
     * @param CategoryId $id
     * @param string[] $name
     * @param bool $isActive
     * @param string[] $description
     * @param int $parentId
     * @param string[] $metaTitle
     * @param string[] $metaDescription
     * @param string[] $metaKeywords
     * @param string[] $linkRewrite
     * @param int[] $groupAssociationIds
     * @param int[] $shopAssociationIds
     * @param bool $isRootCategory
     * @param mixed $coverImage
     * @param mixed $thumbnailImage
     * @param array $menuThumbnailImages
     * @param array $subCategories
     * @param string[] $additionalDescription
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Domain\Category\ValueObject\CategoryId $id, array $name, $isActive, array $description, $parentId, array $metaTitle, array $metaDescription, array $metaKeywords, array $linkRewrite, array $groupAssociationIds, array $shopAssociationIds, $isRootCategory, $coverImage = null, $thumbnailImage = null, array $menuThumbnailImages = [], array $subCategories = [], array $additionalDescription = [])
    {
    }
    /**
     * @return CategoryId
     */
    public function getId()
    {
    }
    /**
     * @return string[]
     */
    public function getName()
    {
    }
    /**
     * @return bool
     */
    public function isActive()
    {
    }
    /**
     * @return string[]
     */
    public function getDescription()
    {
    }
    /**
     * @return string[]
     */
    public function getAdditionalDescription(): array
    {
    }
    /**
     * @return int
     */
    public function getParentId()
    {
    }
    /**
     * @return string[]
     */
    public function getMetaTitle()
    {
    }
    /**
     * @return string[]
     */
    public function getMetaDescription()
    {
    }
    /**
     * @return string[]
     */
    public function getMetaKeywords()
    {
    }
    /**
     * @return string[]
     */
    public function getLinkRewrite()
    {
    }
    /**
     * @return int[]
     */
    public function getGroupAssociationIds()
    {
    }
    /**
     * @return int[]
     */
    public function getShopAssociationIds()
    {
    }
    /**
     * @return mixed
     */
    public function getCoverImage()
    {
    }
    /**
     * @return mixed
     */
    public function getThumbnailImage()
    {
    }
    /**
     * @return array
     */
    public function getMenuThumbnailImages()
    {
    }
    /**
     * @return bool
     */
    public function isRootCategory()
    {
    }
    /**
     * @return bool
     */
    public function canContainMoreMenuThumbnails()
    {
    }
    /**
     * @return array
     */
    public function getSubCategories()
    {
    }
}

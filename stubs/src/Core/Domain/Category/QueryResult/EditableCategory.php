<?php

namespace PrestaShop\PrestaShop\Core\Domain\Category\QueryResult;

/**
 * Stores category data needed for editing.
 */
class EditableCategory
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Category\ValueObject\CategoryId $id
     * @param string[] $name
     * @param bool $isActive
     * @param string[] $description
     * @param int $parentId
     * @param string[] $metaTitle
     * @param string[] $metaDescription
     * @param string $redirectType
     * @param ?\PrestaShop\PrestaShop\Core\Domain\QueryResult\RedirectTargetInformation $categoryRedirectTarget
     * @param string[] $linkRewrite
     * @param int[] $groupAssociationIds
     * @param int[] $shopAssociationIds
     * @param bool $isRootCategory
     * @param mixed $coverImage
     * @param mixed $thumbnailImage
     * @param array $subCategories
     * @param string[] $additionalDescription
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Domain\Category\ValueObject\CategoryId $id, array $name, $isActive, array $description, $parentId, array $metaTitle, array $metaDescription, array $linkRewrite, string $redirectType, ?\PrestaShop\PrestaShop\Core\Domain\QueryResult\RedirectTargetInformation $categoryRedirectTarget, array $groupAssociationIds, array $shopAssociationIds, $isRootCategory, $coverImage = null, $thumbnailImage = null, array $subCategories = [], array $additionalDescription = [])
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Category\ValueObject\CategoryId
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
    public function getLinkRewrite()
    {
    }
    public function getRedirectType(): string
    {
    }
    public function setRedirectType(string $redirectType): void
    {
    }
    public function getRedirectTarget(): ?\PrestaShop\PrestaShop\Core\Domain\QueryResult\RedirectTargetInformation
    {
    }
    public function setRedirectTarget(?\PrestaShop\PrestaShop\Core\Domain\QueryResult\RedirectTargetInformation $categoryRedirectTarget): void
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
     * @return bool
     */
    public function isRootCategory()
    {
    }
    /**
     * @return array
     */
    public function getSubCategories()
    {
    }
}

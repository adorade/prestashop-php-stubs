<?php

namespace PrestaShop\PrestaShop\Core\Domain\Category\Command;

/**
 * Class EditRootCategoryCommand edits given root category.
 *
 * @todo: "root" keyword should be replaced by "home" to avoid confusion between the actual "root" category and "home" category.
 *         This command is actually handling the Home category edition, as the actual "root" category doesn't exist from UX perspective
 */
class EditRootCategoryCommand
{
    /**
     * @param int $categoryId
     */
    public function __construct($categoryId)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Category\ValueObject\CategoryId
     */
    public function getCategoryId()
    {
    }
    /**
     * @return string[]
     */
    public function getLocalizedNames()
    {
    }
    /**
     * @param string[] $localizedNames
     *
     * @return $this
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Category\Exception\CategoryConstraintException
     */
    public function setLocalizedNames(array $localizedNames)
    {
    }
    /**
     * @return string[]
     */
    public function getLocalizedLinkRewrites()
    {
    }
    /**
     * @param string[] $localizedLinkRewrites
     *
     * @return $this
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Category\Exception\CategoryConstraintException
     */
    public function setLocalizedLinkRewrites(array $localizedLinkRewrites)
    {
    }
    /**
     * @return string[]
     */
    public function getLocalizedDescriptions()
    {
    }
    /**
     * @param string[] $localizedDescriptions
     *
     * @return $this
     */
    public function setLocalizedDescriptions(array $localizedDescriptions)
    {
    }
    /**
     * @return string[]|null
     */
    public function getLocalizedAdditionalDescriptions(): ?array
    {
    }
    /**
     * @param string[] $localizedAdditionalDescriptions
     *
     * @return $this
     */
    public function setLocalizedAdditionalDescriptions(array $localizedAdditionalDescriptions): self
    {
    }
    /**
     * @return bool
     */
    public function isActive()
    {
    }
    /**
     * @param bool $isActive
     *
     * @return $this
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Category\Exception\CategoryConstraintException
     */
    public function setIsActive($isActive)
    {
    }
    /**
     * @return string[]
     */
    public function getLocalizedMetaTitles()
    {
    }
    /**
     * @param string[] $localizedMetaTitles
     *
     * @return $this
     */
    public function setLocalizedMetaTitles(array $localizedMetaTitles)
    {
    }
    /**
     * @return string[]
     */
    public function getLocalizedMetaDescriptions()
    {
    }
    /**
     * @param string[] $localizedMetaDescriptions
     *
     * @return $this
     */
    public function setLocalizedMetaDescriptions(array $localizedMetaDescriptions)
    {
    }
    /**
     * @return int[]
     */
    public function getAssociatedGroupIds()
    {
    }
    /**
     * @param int[] $associatedGroupIds
     *
     * @return $this
     */
    public function setAssociatedGroupIds(array $associatedGroupIds)
    {
    }
    /**
     * @return int[]
     */
    public function getAssociatedShopIds()
    {
    }
    /**
     * @param int[] $associatedShopIds
     *
     * @return $this
     */
    public function setAssociatedShopIds(array $associatedShopIds)
    {
    }
    /**
     * @return \Symfony\Component\HttpFoundation\File\UploadedFile|null
     */
    public function getCoverImage(): ?\Symfony\Component\HttpFoundation\File\UploadedFile
    {
    }
    /**
     * @param \Symfony\Component\HttpFoundation\File\UploadedFile|null $coverImage
     */
    public function setCoverImage(?\Symfony\Component\HttpFoundation\File\UploadedFile $coverImage): void
    {
    }
    /**
     * @return \Symfony\Component\HttpFoundation\File\UploadedFile|null
     */
    public function getThumbnailImage(): ?\Symfony\Component\HttpFoundation\File\UploadedFile
    {
    }
    /**
     * @param \Symfony\Component\HttpFoundation\File\UploadedFile|null $thumbnailImage
     */
    public function setThumbnailImage(?\Symfony\Component\HttpFoundation\File\UploadedFile $thumbnailImage): void
    {
    }
    public function getRedirectOption(): ?\PrestaShop\PrestaShop\Core\Domain\Category\ValueObject\RedirectOption
    {
    }
    public function setRedirectOption(?\PrestaShop\PrestaShop\Core\Domain\Category\ValueObject\RedirectOption $redirectOption): void
    {
    }
}

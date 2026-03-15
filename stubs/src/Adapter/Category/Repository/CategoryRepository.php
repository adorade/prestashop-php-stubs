<?php

namespace PrestaShop\PrestaShop\Adapter\Category\Repository;

/**
 * Provides access to Category data source
 */
class CategoryRepository extends \PrestaShop\PrestaShop\Core\Repository\AbstractObjectModelRepository
{
    /**
     * @param Connection $connection
     * @param string $dbPrefix
     */
    public function __construct(\Doctrine\DBAL\Connection $connection, string $dbPrefix)
    {
    }
    /**
     * @param CategoryId $categoryId
     *
     * @return Category
     *
     * @throws CategoryNotFoundException
     */
    public function get(\PrestaShop\PrestaShop\Core\Domain\Category\ValueObject\CategoryId $categoryId): \Category
    {
    }
    /**
     * @todo: multishop not considered
     *
     * @param CategoryId[] $categoryIds
     *
     * @return array<int, array<int, string>> [$categoryId => [$langId => $categoryName]]
     */
    public function getLocalizedNames(array $categoryIds): array
    {
    }
    /**
     * @param CategoryId $categoryId
     *
     * @throws CategoryNotFoundException
     * @throws CoreException
     */
    public function assertCategoryExists(\PrestaShop\PrestaShop\Core\Domain\Category\ValueObject\CategoryId $categoryId): void
    {
    }
    /**
     * Provides ids of categories which are not unique per shop and language.
     *
     * @param ShopId $shopId
     * @param LanguageId $languageId
     *
     * @return CategoryId[]
     */
    public function getDuplicateNameIds(\PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId $shopId, \PrestaShop\PrestaShop\Core\Domain\Language\ValueObject\LanguageId $languageId): array
    {
    }
    /**
     * @param CategoryId $categoryId
     * @param LanguageId $languageId
     *
     * @return string[]
     */
    public function getBreadcrumbParts(\PrestaShop\PrestaShop\Core\Domain\Category\ValueObject\CategoryId $categoryId, \PrestaShop\PrestaShop\Core\Domain\Language\ValueObject\LanguageId $languageId): array
    {
    }
    /**
     * @param CategoryId $categoryId
     * @param LanguageId $languageId
     * @param string $separator
     *
     * @return string
     */
    public function getBreadcrumb(\PrestaShop\PrestaShop\Core\Domain\Category\ValueObject\CategoryId $categoryId, \PrestaShop\PrestaShop\Core\Domain\Language\ValueObject\LanguageId $languageId, string $separator = ' > '): string
    {
    }
    /**
     * @param ProductId $productId
     * @param ShopConstraint $shopConstraint
     *
     * @return CategoryId[]
     */
    public function getProductCategoryIds(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint): array
    {
    }
    /**
     * @param ProductId $productId
     * @param CategoryId[] $addedCategories
     */
    public function addProductAssociations(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, array $addedCategories): void
    {
    }
    /**
     * @param ProductId $productId
     * @param CategoryId[] $removedCategories
     */
    public function removeProductAssociations(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, array $removedCategories): void
    {
    }
    public function getShopDefaultCategory(\PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId $shopId): \PrestaShop\PrestaShop\Core\Domain\Category\ValueObject\CategoryId
    {
    }
    /**
     * Returns defined product default category for the specified shop, but only if it is associated.
     *
     * @param ProductId $productId
     * @param ShopId $shopId
     *
     * @return CategoryId|null
     */
    public function getProductDefaultCategory(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId $shopId): ?\PrestaShop\PrestaShop\Core\Domain\Category\ValueObject\CategoryId
    {
    }
    /**
     * Provides category names which are not unique per shop and language.
     *
     * e.g. if certain shop contains following categories in english language:
     *      Clothes -> Men, Bags -> Men, Clothes -> Woman, Bags -> Women,
     *      then method should return ["Men", "Women"]
     *
     * @param ShopId $shopId
     * @param LanguageId $languageId
     *
     * @return string[]
     */
    protected function getDuplicateNames(\PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId $shopId, \PrestaShop\PrestaShop\Core\Domain\Language\ValueObject\LanguageId $languageId): array
    {
    }
}

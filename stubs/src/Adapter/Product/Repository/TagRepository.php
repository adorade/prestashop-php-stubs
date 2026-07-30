<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Repository;

/**
 * Accesses product Tag data source
 */
class TagRepository
{
    /**
     * @param Connection $connection
     * @param string $dbPrefix
     */
    public function __construct(\Doctrine\DBAL\Connection $connection, string $dbPrefix)
    {
    }
    public function addTagsByLanguage(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\LocalizedTags $localizedTags): void
    {
    }
    /**
     * @param ProductId $productId
     *
     * @throws CannotUpdateProductException
     * @throws CoreException
     */
    public function deleteAllTags(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId): void
    {
    }
    /**
     * @param ProductId $productId
     * @param LanguageId $languageId
     *
     * @throws CannotUpdateProductException
     * @throws CoreException
     */
    public function deleteTagsByLanguage(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, \PrestaShop\PrestaShop\Core\Domain\Language\ValueObject\LanguageId $languageId): void
    {
    }
    /**
     * @param ProductId $productId
     *
     * @return array Localized tags for a product
     */
    public function getLocalizedProductTags(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId): array
    {
    }
}

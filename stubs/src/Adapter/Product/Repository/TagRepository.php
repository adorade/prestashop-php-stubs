<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Repository;

/**
 * Accesses product Tag data source
 */
class TagRepository
{
    /**
     * @param \Doctrine\DBAL\Connection $connection
     * @param string $dbPrefix
     */
    public function __construct(\Doctrine\DBAL\Connection $connection, string $dbPrefix)
    {
    }
    public function addTagsByLanguage(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\LocalizedTags $localizedTags): void
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Product\Exception\CannotUpdateProductException
     * @throws \PrestaShop\PrestaShop\Core\Exception\CoreException
     */
    public function deleteAllTags(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId): void
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId
     * @param \PrestaShop\PrestaShop\Core\Domain\Language\ValueObject\LanguageId $languageId
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Product\Exception\CannotUpdateProductException
     * @throws \PrestaShop\PrestaShop\Core\Exception\CoreException
     */
    public function deleteTagsByLanguage(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, \PrestaShop\PrestaShop\Core\Domain\Language\ValueObject\LanguageId $languageId): void
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId
     *
     * @return array Localized tags for a product
     */
    public function getLocalizedProductTags(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId): array
    {
    }
}

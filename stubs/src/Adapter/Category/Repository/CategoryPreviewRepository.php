<?php

namespace PrestaShop\PrestaShop\Adapter\Category\Repository;

/**
 * Returns preview data for a category or a list of product
 *
 * @todo add function for the list that should be used in the new category search API
 */
class CategoryPreviewRepository
{
    public const BREADCRUMB_SEPARATOR = ' > ';
    /**
     * @param CategoryRepository $categoryRepository
     * @param \PrestaShop\PrestaShop\Adapter\Image\ImagePathFactory $categoryImagePathFactory
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Category\Repository\CategoryRepository $categoryRepository, \PrestaShop\PrestaShop\Adapter\Image\ImagePathFactory $categoryImagePathFactory)
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Category\ValueObject\CategoryId $categoryId
     * @param \PrestaShop\PrestaShop\Core\Domain\Language\ValueObject\LanguageId $languageId
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Category\QueryResult\CategoryPreview
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Category\Exception\CategoryNotFoundException
     */
    public function getPreview(\PrestaShop\PrestaShop\Core\Domain\Category\ValueObject\CategoryId $categoryId, \PrestaShop\PrestaShop\Core\Domain\Language\ValueObject\LanguageId $languageId): \PrestaShop\PrestaShop\Core\Domain\Category\QueryResult\CategoryPreview
    {
    }
}

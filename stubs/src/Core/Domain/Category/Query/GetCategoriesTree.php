<?php

namespace PrestaShop\PrestaShop\Core\Domain\Category\Query;

/**
 * Provides Category tree list where each category holds its child categories
 */
final class GetCategoriesTree
{
    /**
     * @param int $languageId
     * @param int $shopId
     */
    public function __construct(int $languageId, int $shopId)
    {
    }
    /**
     * @return LanguageId
     */
    public function getLanguageId(): \PrestaShop\PrestaShop\Core\Domain\Language\ValueObject\LanguageId
    {
    }
    /**
     * @return ShopId
     */
    public function getShopId(): \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId
    {
    }
}

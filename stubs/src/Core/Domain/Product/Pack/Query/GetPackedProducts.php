<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Pack\Query;

/**
 * Retrieves product from a pack
 */
class GetPackedProducts
{
    /**
     * @var LanguageId
     */
    protected $languageId;
    public function __construct(int $packId, int $languageId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint)
    {
    }
    /**
     * @return PackId
     */
    public function getPackId(): \PrestaShop\PrestaShop\Core\Domain\Product\Pack\ValueObject\PackId
    {
    }
    /**
     * @return LanguageId
     */
    public function getLanguageId(): \PrestaShop\PrestaShop\Core\Domain\Language\ValueObject\LanguageId
    {
    }
    /**
     * @return ShopConstraint
     */
    public function getShopConstraint(): \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint
    {
    }
}

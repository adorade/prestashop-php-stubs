<?php

namespace PrestaShop\PrestaShop\Adapter;

/**
 * @deprecated since 8.1 and will be removed in next major.
 *
 * This class will provide data from DB / ORM about product combination.
 */
class CombinationDataProvider
{
    /**
     * @param Locale $locale
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Localization\Locale $locale)
    {
    }
    /**
     * Get a combination values.
     *
     * @deprecated since 1.7.3.1 really slow, use getFormCombinations instead.
     *
     * @param int $combinationId The id_product_attribute
     *
     * @return array combinations
     */
    public function getFormCombination($combinationId)
    {
    }
    /**
     * Retrieve combinations data for a specific language id.
     *
     * @param array $combinationIds
     * @param int $languageId
     *
     * @return array a list of formatted combinations
     *
     * @throws \PrestaShopDatabaseException
     * @throws \PrestaShopException
     */
    public function getFormCombinations(array $combinationIds, $languageId)
    {
    }
    /**
     * @param array $attributesCombinations
     * @param Product $product
     *
     * @return array
     */
    public function completeCombination($attributesCombinations, $product)
    {
    }
}

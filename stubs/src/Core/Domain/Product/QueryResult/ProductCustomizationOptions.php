<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\QueryResult;

/**
 * Transfers data of product customization options
 */
class ProductCustomizationOptions
{
    /**
     * @return ProductCustomizationOptions
     */
    public static function createNotCustomizable(): \PrestaShop\PrestaShop\Core\Domain\Product\QueryResult\ProductCustomizationOptions
    {
    }
    /**
     * @param int $availableTextCustomizationsCount
     * @param int $availableFileCustomizationsCount
     *
     * @return ProductCustomizationOptions
     */
    public static function createAllowsCustomization(int $availableTextCustomizationsCount, int $availableFileCustomizationsCount): \PrestaShop\PrestaShop\Core\Domain\Product\QueryResult\ProductCustomizationOptions
    {
    }
    /**
     * @param int $availableTextCustomizationsCount
     * @param int $availableFileCustomizationsCount
     *
     * @return ProductCustomizationOptions
     */
    public static function createRequiresCustomization(int $availableTextCustomizationsCount, int $availableFileCustomizationsCount): \PrestaShop\PrestaShop\Core\Domain\Product\QueryResult\ProductCustomizationOptions
    {
    }
    /**
     * @return int
     */
    public function getCustomizabilityValue(): int
    {
    }
    /**
     * @return int
     */
    public function getAvailableTextCustomizationsCount(): int
    {
    }
    /**
     * @return int
     */
    public function getAvailableFileCustomizationsCount(): int
    {
    }
    /**
     * @return bool true if product does not have any customizations
     */
    public function isNotCustomizable(): bool
    {
    }
    /**
     * @return bool true if product has customizations, but none of them are required
     */
    public function allowsCustomization(): bool
    {
    }
    /**
     * @return bool true if product has at least one required customization
     */
    public function requiresCustomization(): bool
    {
    }
}

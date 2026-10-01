<?php

namespace PrestaShop\PrestaShop\Adapter\Discount\Repository;

/**
 * Repository for discount type operations
 */
class DiscountTypeRepository
{
    public function __construct(protected readonly \Doctrine\DBAL\Connection $connection, protected readonly string $dbPrefix)
    {
    }
    /**
     * Get all discount types grouped by discount type ID with translations
     *
     * @return array<int, array{id_cart_rule_type: int, discount_type: string, is_core: bool, enabled: bool, names: array<int, string>, descriptions: array<int, string>}>
     */
    public function getAllTypes(): array
    {
    }
    /**
     * Get all active discount types
     *
     * @return array
     */
    public function getAllActiveTypes(int $languageId): array
    {
    }
    /**
     * Get compatible types for a discount
     *
     * @param int $discountId
     *
     * @return array
     */
    public function getCompatibleTypesIdsForDiscount(int $discountId): array
    {
    }
    /**
     * Set compatible types for a discount
     *
     * @param int $discountId
     * @param array $compatibleTypeIds
     *
     * @return bool
     */
    public function setCompatibleTypesForDiscount(int $discountId, array $compatibleTypeIds): bool
    {
    }
    /**
     * Check if two discounts are compatible
     *
     * @param int $firstDiscount
     * @param int $secondDiscount
     *
     * @return bool
     */
    public function areDiscountsCompatible(int $firstDiscount, int $secondDiscount): bool
    {
    }
    /**
     * Get discount type ID by type string
     *
     * @param string $typeString
     *
     * @return int|null
     */
    public function getTypeIdByString(string $typeString): ?int
    {
    }
    /**
     * Get discount type by type string
     *
     * @param string $discountType
     *
     * @return array|null
     */
    public function getByDiscountType(string $discountType, int $languageId): ?array
    {
    }
    /**
     * Get discount type for a discount
     *
     * @param int $discountId
     *
     * @return array|null
     */
    public function getDiscountTypeForDiscount(int $discountId): ?array
    {
    }
    /**
     * Get discount information including type, priority field, and creation date
     *
     * @return array|null Array with keys: 'id', 'discount_type', 'priority', 'date_add'
     */
    public function getDiscountInfoForPriority(int $discountId): ?array
    {
    }
}

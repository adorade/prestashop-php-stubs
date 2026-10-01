<?php

namespace PrestaShop\PrestaShop\Adapter\Discount\Repository;

/**
 * This repository is used for the new Discount domain, but it still relies on the legacy CartRule ObjectModel.
 */
class DiscountRepository extends \PrestaShop\PrestaShop\Core\Repository\AbstractObjectModelRepository
{
    public function __construct(protected readonly \PrestaShop\PrestaShop\Adapter\Discount\Validate\DiscountValidator $discountValidator, protected readonly \Doctrine\DBAL\Connection $connection, protected readonly string $dbPrefix)
    {
    }
    public function add(\CartRule $cartRule): \CartRule
    {
    }
    public function get(\PrestaShop\PrestaShop\Core\Domain\Discount\ValueObject\DiscountId $discountId): \CartRule
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Discount\ValueObject\DiscountId $discountId
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Discount\ProductRuleGroup[]
     *
     * @throws \PrestaShop\PrestaShop\Core\Exception\InvalidArgumentException
     */
    public function getProductRulesGroup(\PrestaShop\PrestaShop\Core\Domain\Discount\ValueObject\DiscountId $discountId): array
    {
    }
    /**
     * @return int[]
     */
    public function getCarriersIds(\PrestaShop\PrestaShop\Core\Domain\Discount\ValueObject\DiscountId $discountId): array
    {
    }
    /**
     * @return int[]
     */
    public function getCountriesIds(\PrestaShop\PrestaShop\Core\Domain\Discount\ValueObject\DiscountId $discountId): array
    {
    }
    /**
     * @return int[]
     */
    public function getCustomerGroupsIds(\PrestaShop\PrestaShop\Core\Domain\Discount\ValueObject\DiscountId $discountId): array
    {
    }
    /**
     * @return int[]
     */
    public function getCompatibleTypesIds(\PrestaShop\PrestaShop\Core\Domain\Discount\ValueObject\DiscountId $discountId): array
    {
    }
    /**
     * @return int[]
     */
    public function getGroupsIds(\PrestaShop\PrestaShop\Core\Domain\Discount\ValueObject\DiscountId $discountId): array
    {
    }
    /**
     * @return int[]
     */
    public function getShopsIds(\PrestaShop\PrestaShop\Core\Domain\Discount\ValueObject\DiscountId $discountId): array
    {
    }
    /**
     * Returns the ID of a discount by its code.
     * null is returned if the discount does not exist.
     */
    public function getIdByCode(string $code): ?int
    {
    }
    public function partialUpdate(\CartRule $cartRule, array $updatableProperties, int $errorCode): void
    {
    }
    public function delete(\PrestaShop\PrestaShop\Core\Domain\Discount\ValueObject\DiscountId $discountId): void
    {
    }
}

<?php

namespace PrestaShop\PrestaShop\Adapter\Discount\Update;

class DiscountConditionsUpdater
{
    use \PrestaShop\PrestaShop\Adapter\Discount\Trait\ProductConditionsTrait;
    public function __construct(private readonly \PrestaShop\PrestaShop\Adapter\Discount\Repository\DiscountRepository $discountRepository, private readonly \Doctrine\DBAL\Connection $connection, private readonly string $dbPrefix)
    {
    }
    /**
     * For all provided fields, if the value is null, no modification is done and the fields remain untouched
     * (partial update), for the list of IDs if an empty array is provided the existing associations are removed
     * and no new association is created, so empty array is used to remove all existing associations.
     *
     * @param \PrestaShop\PrestaShop\Core\Domain\Discount\ValueObject\DiscountId $discountId
     * @param \PrestaShop\PrestaShop\Core\Domain\Discount\ProductRuleGroup[]|null $productConditions
     * @param int[]|null $carrierIds
     * @param int[]|null $countryIds
     * @param int[]|null $customerGroupIds
     *
     * @return void
     */
    public function update(\PrestaShop\PrestaShop\Core\Domain\Discount\ValueObject\DiscountId $discountId, ?array $productConditions = null, ?array $carrierIds = null, ?array $countryIds = null, ?array $customerGroupIds = null): void
    {
    }
}

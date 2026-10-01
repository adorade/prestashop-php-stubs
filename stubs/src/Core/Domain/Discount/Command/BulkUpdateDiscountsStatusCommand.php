<?php

namespace PrestaShop\PrestaShop\Core\Domain\Discount\Command;

/**
 * Updates provided discounts to new status
 */
class BulkUpdateDiscountsStatusCommand
{
    /**
     * @param int[] $discountIds
     * @param bool $newStatus
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Discount\Exception\DiscountConstraintException
     */
    public function __construct(array $discountIds, bool $newStatus)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Discount\ValueObject\DiscountId[]
     */
    public function getDiscountIds(): array
    {
    }
    public function getNewStatus(): bool
    {
    }
}

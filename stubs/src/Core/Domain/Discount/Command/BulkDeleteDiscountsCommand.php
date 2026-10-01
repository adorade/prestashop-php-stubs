<?php

namespace PrestaShop\PrestaShop\Core\Domain\Discount\Command;

class BulkDeleteDiscountsCommand
{
    /**
     * @param int[] $discountIds
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Discount\Exception\DiscountConstraintException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Discount\Exception\DiscountException
     */
    public function __construct(array $discountIds)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Discount\ValueObject\DiscountId[]
     */
    public function getDiscountIds(): array
    {
    }
}

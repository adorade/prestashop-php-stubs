<?php

namespace PrestaShop\PrestaShop\Core\Domain\Discount\Command;

class DuplicateDiscountCommand
{
    public function __construct(int $discountId)
    {
    }
    public function getDiscountId(): \PrestaShop\PrestaShop\Core\Domain\Discount\ValueObject\DiscountId
    {
    }
}

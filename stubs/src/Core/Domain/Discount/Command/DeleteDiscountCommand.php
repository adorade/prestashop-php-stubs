<?php

namespace PrestaShop\PrestaShop\Core\Domain\Discount\Command;

class DeleteDiscountCommand
{
    public function __construct(int $discountId)
    {
    }
    public function getDiscountId(): \PrestaShop\PrestaShop\Core\Domain\Discount\ValueObject\DiscountId
    {
    }
}

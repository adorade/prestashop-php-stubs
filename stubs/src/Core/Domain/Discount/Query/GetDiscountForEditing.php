<?php

namespace PrestaShop\PrestaShop\Core\Domain\Discount\Query;

class GetDiscountForEditing
{
    public function __construct(int $discountId)
    {
    }
    public function getDiscountId(): \PrestaShop\PrestaShop\Core\Domain\Discount\ValueObject\DiscountId
    {
    }
}

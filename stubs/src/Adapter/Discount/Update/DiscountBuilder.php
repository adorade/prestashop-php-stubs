<?php

namespace PrestaShop\PrestaShop\Adapter\Discount\Update;

class DiscountBuilder
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Adapter\Discount\Repository\DiscountTypeRepository $discountTypeRepository)
    {
    }
    public function build(\PrestaShop\PrestaShop\Core\Domain\Discount\Command\AddDiscountCommand $command): \CartRule
    {
    }
}

<?php

namespace PrestaShop\PrestaShop\Adapter\Discount\Update\Filler;

class DiscountFiller
{
    use \PrestaShop\PrestaShop\Adapter\Domain\LocalizedObjectModelTrait;
    use \PrestaShop\PrestaShop\Adapter\Discount\Trait\ProductConditionsTrait;
    public function fillUpdatableProperties(\CartRule $cartRule, \PrestaShop\PrestaShop\Core\Domain\Discount\Command\UpdateDiscountCommand $command): array
    {
    }
}

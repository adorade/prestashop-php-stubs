<?php

namespace PrestaShop\PrestaShop\Core\Domain\Carrier\ValueObject;

class CarrierConstraints
{
    public function __construct(public readonly \PrestaShop\Decimal\DecimalNumber $maxWeight, public readonly int $maxWidth, public readonly int $maxHeight, public readonly int $maxDepth)
    {
    }
}

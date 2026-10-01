<?php

namespace PrestaShop\PrestaShop\Core\Domain\Carrier\ValueObject;

class CarrierConstraints
{
    public function __construct(public readonly float $maxWeight, public readonly float $maxWidth, public readonly float $maxHeight, public readonly float $maxDepth)
    {
    }
}

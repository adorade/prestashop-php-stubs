<?php

namespace PrestaShop\PrestaShop\Core\Domain\Feature\ValueObject;

/**
 * Defines Feature ID with its constraints.
 */
class FeatureId
{
    /**
     * @param int $featureId
     */
    public function __construct(int $featureId)
    {
    }
    /**
     * @return int
     */
    public function getValue(): int
    {
    }
}

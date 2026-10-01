<?php

namespace PrestaShop\PrestaShop\Core\Pricing\ValueObject;

/**
 * Ordered collection of PriceModification steps, representing the full audit trail of a price computation.
 */
class PriceBreakdown
{
    /** @var PriceModification[] */
    protected array $steps = [];
    public function addStep(\PrestaShop\PrestaShop\Core\Pricing\ValueObject\PriceModification $step): void
    {
    }
    /**
     * @return PriceModification[]
     */
    public function getSteps(): array
    {
    }
    public function count(): int
    {
    }
}

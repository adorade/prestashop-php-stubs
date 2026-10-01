<?php

namespace PrestaShop\PrestaShop\Core\Domain\Feature\Command;

class BulkDeleteFeatureCommand
{
    /**
     * @param int[] $featureIds
     */
    public function __construct(array $featureIds)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Feature\ValueObject\FeatureId[]
     */
    public function getFeatureIds(): array
    {
    }
}

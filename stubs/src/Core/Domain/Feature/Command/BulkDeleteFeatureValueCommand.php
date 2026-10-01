<?php

namespace PrestaShop\PrestaShop\Core\Domain\Feature\Command;

class BulkDeleteFeatureValueCommand
{
    /**
     * @param int[] $featureValueIds
     */
    public function __construct(array $featureValueIds)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Feature\ValueObject\FeatureValueId[]
     */
    public function getFeatureValueIds(): array
    {
    }
}

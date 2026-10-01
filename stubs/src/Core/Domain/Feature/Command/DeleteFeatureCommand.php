<?php

namespace PrestaShop\PrestaShop\Core\Domain\Feature\Command;

class DeleteFeatureCommand
{
    public function __construct(int $featureId)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Feature\ValueObject\FeatureId
     */
    public function getFeatureId(): \PrestaShop\PrestaShop\Core\Domain\Feature\ValueObject\FeatureId
    {
    }
}

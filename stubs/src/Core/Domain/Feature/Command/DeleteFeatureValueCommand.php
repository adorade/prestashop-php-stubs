<?php

namespace PrestaShop\PrestaShop\Core\Domain\Feature\Command;

class DeleteFeatureValueCommand
{
    public function __construct(int $featureValueId)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Feature\ValueObject\FeatureValueId
     */
    public function getFeatureValueId(): \PrestaShop\PrestaShop\Core\Domain\Feature\ValueObject\FeatureValueId
    {
    }
}

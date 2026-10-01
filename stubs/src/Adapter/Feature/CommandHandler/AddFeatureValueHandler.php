<?php

namespace PrestaShop\PrestaShop\Adapter\Feature\CommandHandler;

/**
 * Handles adding of feature value using legacy model.
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
class AddFeatureValueHandler implements \PrestaShop\PrestaShop\Core\Domain\Feature\CommandHandler\AddFeatureValueHandlerInterface
{
    public function __construct(\PrestaShop\PrestaShop\Adapter\Feature\Repository\FeatureRepository $featureRepository, \PrestaShop\PrestaShop\Adapter\Feature\Repository\FeatureValueRepository $featureValueRepository)
    {
    }
    /**
     * {@inheritDoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Feature\Command\AddFeatureValueCommand $command): \PrestaShop\PrestaShop\Core\Domain\Feature\ValueObject\FeatureValueId
    {
    }
}

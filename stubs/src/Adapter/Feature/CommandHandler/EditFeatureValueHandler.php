<?php

namespace PrestaShop\PrestaShop\Adapter\Feature\CommandHandler;

/**
 * Handles edition of feature value using legacy model.
 */
class EditFeatureValueHandler implements \PrestaShop\PrestaShop\Core\Domain\Feature\CommandHandler\EditFeatureValueHandlerInterface
{
    /**
     * @param FeatureValueRepository $featureValueRepository
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Feature\Repository\FeatureValueRepository $featureValueRepository)
    {
    }
    /**
     * {@inheritDoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Feature\Command\EditFeatureValueCommand $command): void
    {
    }
}

<?php

namespace PrestaShop\PrestaShop\Core\Domain\Feature\CommandHandler;

/**
 * Describes add feature command handler
 */
interface AddFeatureHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Feature\Command\AddFeatureCommand $command
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Feature\ValueObject\FeatureId id of the created feature
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Feature\Command\AddFeatureCommand $command): \PrestaShop\PrestaShop\Core\Domain\Feature\ValueObject\FeatureId;
}

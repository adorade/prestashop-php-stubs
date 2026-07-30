<?php

namespace PrestaShop\PrestaShop\Core\Domain\Feature\CommandHandler;

/**
 * Describes add feature command handler
 */
interface AddFeatureHandlerInterface
{
    /**
     * @param AddFeatureCommand $command
     *
     * @return FeatureId id of the created feature
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Feature\Command\AddFeatureCommand $command);
}

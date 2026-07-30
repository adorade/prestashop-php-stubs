<?php

namespace PrestaShop\PrestaShop\Core\Domain\Feature\CommandHandler;

/**
 * Describes a service that handles feature edit command.
 */
interface EditFeatureHandlerInterface
{
    /**
     * @param EditFeatureCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Feature\Command\EditFeatureCommand $command);
}

<?php

namespace PrestaShop\PrestaShop\Core\Domain\Feature\CommandHandler;

/**
 * Describes edit feature value command handler
 */
interface EditFeatureValueHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Feature\Command\EditFeatureValueCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Feature\Command\EditFeatureValueCommand $command): void;
}

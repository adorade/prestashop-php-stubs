<?php

namespace PrestaShop\PrestaShop\Core\Domain\Language\CommandHandler;

/**
 * Interface for service that toggles language's status
 */
interface ToggleLanguageStatusHandlerInterface
{
    /**
     * @param ToggleLanguageStatusCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Language\Command\ToggleLanguageStatusCommand $command);
}

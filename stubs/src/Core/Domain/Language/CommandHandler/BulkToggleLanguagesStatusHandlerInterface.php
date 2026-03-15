<?php

namespace PrestaShop\PrestaShop\Core\Domain\Language\CommandHandler;

/**
 * Interface for service that toggles status for multiple languages
 */
interface BulkToggleLanguagesStatusHandlerInterface
{
    /**
     * @param BulkToggleLanguagesStatusCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Language\Command\BulkToggleLanguagesStatusCommand $command);
}

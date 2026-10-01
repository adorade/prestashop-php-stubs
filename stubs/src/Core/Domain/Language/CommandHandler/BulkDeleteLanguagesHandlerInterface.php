<?php

namespace PrestaShop\PrestaShop\Core\Domain\Language\CommandHandler;

/**
 * Interface for service that deletes languages in bulk action
 */
interface BulkDeleteLanguagesHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Language\Command\BulkDeleteLanguagesCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Language\Command\BulkDeleteLanguagesCommand $command);
}

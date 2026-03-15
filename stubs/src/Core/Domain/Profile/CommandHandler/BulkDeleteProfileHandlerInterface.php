<?php

namespace PrestaShop\PrestaShop\Core\Domain\Profile\CommandHandler;

/**
 * Interface BulkDeleteProfileHandlerInterface defines profile bulk deletion handler.
 */
interface BulkDeleteProfileHandlerInterface
{
    /**
     * Delete multiple profiles.
     *
     * @param BulkDeleteProfileCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Profile\Command\BulkDeleteProfileCommand $command);
}

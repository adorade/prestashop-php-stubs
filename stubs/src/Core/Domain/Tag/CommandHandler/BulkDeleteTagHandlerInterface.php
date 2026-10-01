<?php

namespace PrestaShop\PrestaShop\Core\Domain\Tag\CommandHandler;

/**
 * Defines contract for BulkDeleteTagHandler
 */
interface BulkDeleteTagHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Tag\Command\BulkDeleteTagCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Tag\Command\BulkDeleteTagCommand $command): void;
}

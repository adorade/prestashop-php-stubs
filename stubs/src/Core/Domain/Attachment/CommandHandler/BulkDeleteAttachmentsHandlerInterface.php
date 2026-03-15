<?php

namespace PrestaShop\PrestaShop\Core\Domain\Attachment\CommandHandler;

/**
 * Defines contract for bulk delete attachments handler
 */
interface BulkDeleteAttachmentsHandlerInterface
{
    /**
     * @param BulkDeleteAttachmentsCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Attachment\Command\BulkDeleteAttachmentsCommand $command);
}

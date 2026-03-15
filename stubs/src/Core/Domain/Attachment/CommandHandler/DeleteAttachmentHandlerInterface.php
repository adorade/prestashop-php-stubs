<?php

namespace PrestaShop\PrestaShop\Core\Domain\Attachment\CommandHandler;

/**
 * Defines contract for DeleteAttachmentHandler
 */
interface DeleteAttachmentHandlerInterface
{
    /**
     * @param DeleteAttachmentCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Attachment\Command\DeleteAttachmentCommand $command);
}

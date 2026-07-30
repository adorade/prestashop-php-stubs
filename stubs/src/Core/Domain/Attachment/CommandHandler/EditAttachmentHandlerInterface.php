<?php

namespace PrestaShop\PrestaShop\Core\Domain\Attachment\CommandHandler;

interface EditAttachmentHandlerInterface
{
    /**
     * @param EditAttachmentCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Attachment\Command\EditAttachmentCommand $command);
}

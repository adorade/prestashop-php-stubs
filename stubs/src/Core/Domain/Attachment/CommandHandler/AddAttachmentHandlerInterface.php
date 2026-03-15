<?php

namespace PrestaShop\PrestaShop\Core\Domain\Attachment\CommandHandler;

interface AddAttachmentHandlerInterface
{
    /**
     * @param AddAttachmentCommand $command
     *
     * @return AttachmentId
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Attachment\Command\AddAttachmentCommand $command): \PrestaShop\PrestaShop\Core\Domain\Attachment\ValueObject\AttachmentId;
}

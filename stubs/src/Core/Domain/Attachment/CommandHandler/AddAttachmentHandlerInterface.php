<?php

namespace PrestaShop\PrestaShop\Core\Domain\Attachment\CommandHandler;

interface AddAttachmentHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Attachment\Command\AddAttachmentCommand $command
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Attachment\ValueObject\AttachmentId
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Attachment\Command\AddAttachmentCommand $command): \PrestaShop\PrestaShop\Core\Domain\Attachment\ValueObject\AttachmentId;
}

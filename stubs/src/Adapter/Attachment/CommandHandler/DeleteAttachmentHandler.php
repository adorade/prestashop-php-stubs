<?php

namespace PrestaShop\PrestaShop\Adapter\Attachment\CommandHandler;

/**
 * Delete attachment handler
 */
final class DeleteAttachmentHandler extends \PrestaShop\PrestaShop\Adapter\Attachment\AbstractAttachmentHandler implements \PrestaShop\PrestaShop\Core\Domain\Attachment\CommandHandler\DeleteAttachmentHandlerInterface
{
    /**
     * {@inheritdoc}
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Attachment\Exception\DeleteAttachmentException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Attachment\Exception\AttachmentNotFoundException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Attachment\Command\DeleteAttachmentCommand $command)
    {
    }
}

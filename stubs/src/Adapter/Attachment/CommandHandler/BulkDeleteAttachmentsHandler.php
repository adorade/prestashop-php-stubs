<?php

namespace PrestaShop\PrestaShop\Adapter\Attachment\CommandHandler;

/**
 * Bulk delete attachments handler
 */
final class BulkDeleteAttachmentsHandler extends \PrestaShop\PrestaShop\Adapter\Attachment\AbstractAttachmentHandler implements \PrestaShop\PrestaShop\Core\Domain\Attachment\CommandHandler\BulkDeleteAttachmentsHandlerInterface
{
    /**
     * {@inheritdoc}
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Attachment\Exception\BulkDeleteAttachmentsException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Attachment\Command\BulkDeleteAttachmentsCommand $command)
    {
    }
}

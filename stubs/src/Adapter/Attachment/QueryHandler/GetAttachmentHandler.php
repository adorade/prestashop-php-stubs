<?php

namespace PrestaShop\PrestaShop\Adapter\Attachment\QueryHandler;

/**
 * Provides path and original file name of attachment
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsQueryHandler]
final class GetAttachmentHandler extends \PrestaShop\PrestaShop\Adapter\Attachment\AbstractAttachmentHandler implements \PrestaShop\PrestaShop\Core\Domain\Attachment\QueryHandler\GetAttachmentHandlerInterface
{
    /**
     * @param string $downloadDirectory
     */
    public function __construct(string $downloadDirectory)
    {
    }
    /**
     * {@inheritdoc}
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Attachment\Exception\AttachmentNotFoundException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Attachment\Query\GetAttachment $query): \PrestaShop\PrestaShop\Core\Domain\Attachment\QueryResult\Attachment
    {
    }
}

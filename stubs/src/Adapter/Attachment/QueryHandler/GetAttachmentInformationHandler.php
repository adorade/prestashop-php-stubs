<?php

namespace PrestaShop\PrestaShop\Adapter\Attachment\QueryHandler;

/**
 * Handles @see GetAttachmentInformation query using legacy object model
 */
class GetAttachmentInformationHandler implements \PrestaShop\PrestaShop\Core\Domain\Attachment\QueryHandler\GetAttachmentInformationHandlerInterface
{
    public function __construct(\PrestaShop\PrestaShop\Adapter\Attachment\AttachmentRepository $attachmentRepository)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Attachment\Query\GetAttachmentInformation $query): \PrestaShop\PrestaShop\Core\Domain\Attachment\QueryResult\AttachmentInformation
    {
    }
}

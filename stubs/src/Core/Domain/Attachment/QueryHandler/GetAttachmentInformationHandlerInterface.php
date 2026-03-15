<?php

namespace PrestaShop\PrestaShop\Core\Domain\Attachment\QueryHandler;

/**
 * Defines contract to handle @see GetAttachmentInformation query
 */
interface GetAttachmentInformationHandlerInterface
{
    /**
     * @param GetAttachmentInformation $query
     *
     * @return AttachmentInformation
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Attachment\Query\GetAttachmentInformation $query): \PrestaShop\PrestaShop\Core\Domain\Attachment\QueryResult\AttachmentInformation;
}

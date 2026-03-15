<?php

namespace PrestaShop\PrestaShop\Core\Domain\Attachment\QueryHandler;

/**
 * Defines contract for get attachment handler
 */
interface GetAttachmentHandlerInterface
{
    /**
     * @param GetAttachment $query
     *
     * @return Attachment
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Attachment\Query\GetAttachment $query): \PrestaShop\PrestaShop\Core\Domain\Attachment\QueryResult\Attachment;
}

<?php

namespace PrestaShop\PrestaShop\Core\Domain\Attachment\QueryHandler;

/**
 * Defines contract for get attachment handler
 */
interface GetAttachmentHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Attachment\Query\GetAttachment $query
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Attachment\QueryResult\Attachment
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Attachment\Query\GetAttachment $query): \PrestaShop\PrestaShop\Core\Domain\Attachment\QueryResult\Attachment;
}

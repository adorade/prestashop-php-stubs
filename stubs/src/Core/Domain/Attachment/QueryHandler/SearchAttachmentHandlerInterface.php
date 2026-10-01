<?php

namespace PrestaShop\PrestaShop\Core\Domain\Attachment\QueryHandler;

interface SearchAttachmentHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Attachment\Query\SearchAttachment $query
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Attachment\QueryResult\AttachmentInformation[]
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Attachment\Query\SearchAttachment $query): array;
}

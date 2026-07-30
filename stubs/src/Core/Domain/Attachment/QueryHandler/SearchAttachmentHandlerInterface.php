<?php

namespace PrestaShop\PrestaShop\Core\Domain\Attachment\QueryHandler;

interface SearchAttachmentHandlerInterface
{
    /**
     * @param SearchAttachment $query
     *
     * @return AttachmentInformation[]
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Attachment\Query\SearchAttachment $query): array;
}

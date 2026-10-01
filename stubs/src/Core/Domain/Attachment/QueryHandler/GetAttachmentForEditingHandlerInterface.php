<?php

namespace PrestaShop\PrestaShop\Core\Domain\Attachment\QueryHandler;

interface GetAttachmentForEditingHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Attachment\Query\GetAttachmentForEditing $query
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Attachment\QueryResult\EditableAttachment
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Attachment\Query\GetAttachmentForEditing $query): \PrestaShop\PrestaShop\Core\Domain\Attachment\QueryResult\EditableAttachment;
}

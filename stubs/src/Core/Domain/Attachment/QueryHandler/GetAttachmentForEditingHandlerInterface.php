<?php

namespace PrestaShop\PrestaShop\Core\Domain\Attachment\QueryHandler;

interface GetAttachmentForEditingHandlerInterface
{
    /**
     * @param GetAttachmentForEditing $query
     *
     * @return EditableAttachment
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Attachment\Query\GetAttachmentForEditing $query): \PrestaShop\PrestaShop\Core\Domain\Attachment\QueryResult\EditableAttachment;
}

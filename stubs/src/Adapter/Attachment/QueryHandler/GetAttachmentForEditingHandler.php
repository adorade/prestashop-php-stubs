<?php

namespace PrestaShop\PrestaShop\Adapter\Attachment\QueryHandler;

/**
 * Handles command that gets attachment for editing
 *
 * @internal
 */
final class GetAttachmentForEditingHandler implements \PrestaShop\PrestaShop\Core\Domain\Attachment\QueryHandler\GetAttachmentForEditingHandlerInterface
{
    /**
     * {@inheritdoc}
     *
     * @throws AttachmentNotFoundException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Attachment\Query\GetAttachmentForEditing $query): \PrestaShop\PrestaShop\Core\Domain\Attachment\QueryResult\EditableAttachment
    {
    }
}

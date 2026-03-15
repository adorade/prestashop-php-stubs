<?php

namespace PrestaShop\PrestaShop\Adapter\Attachment\QueryHandler;

/**
 * Handles @see SearchAttachment query using legacy object model
 */
class SearchAttachmentHandler implements \PrestaShop\PrestaShop\Core\Domain\Attachment\QueryHandler\SearchAttachmentHandlerInterface
{
    /**
     * @param AttachmentRepository $repository
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Attachment\AttachmentRepository $repository)
    {
    }
    /**
     * @param SearchAttachment $query
     *
     * @return array
     *
     * @throws EmptySearchException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Attachment\Query\SearchAttachment $query): array
    {
    }
}

<?php

namespace PrestaShop\PrestaShop\Adapter\Attachment\QueryHandler;

/**
 * Handles @see SearchAttachment query using legacy object model
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsQueryHandler]
class SearchAttachmentHandler implements \PrestaShop\PrestaShop\Core\Domain\Attachment\QueryHandler\SearchAttachmentHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Adapter\Attachment\AttachmentRepository $repository
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Attachment\AttachmentRepository $repository)
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Attachment\Query\SearchAttachment $query
     *
     * @return array
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Attachment\Exception\EmptySearchException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Attachment\Query\SearchAttachment $query): array
    {
    }
}

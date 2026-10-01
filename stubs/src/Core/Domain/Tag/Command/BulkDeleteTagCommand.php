<?php

namespace PrestaShop\PrestaShop\Core\Domain\Tag\Command;

/**
 * Deletes tag on bulk action
 */
class BulkDeleteTagCommand
{
    /**
     * @param array<int, int> $tagIds
     */
    public function __construct(array $tagIds)
    {
    }
    /**
     * @return array<int, \PrestaShop\PrestaShop\Core\Domain\Tag\ValueObject\TagId>
     */
    public function getTagIds(): array
    {
    }
}

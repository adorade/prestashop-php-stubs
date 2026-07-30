<?php

namespace PrestaShop\PrestaShop\Core\Domain\Title\Command;

/**
 * Deletes states on bulk action
 */
class BulkDeleteTitleCommand
{
    /**
     * @param array<int, int> $titleIds
     */
    public function __construct(array $titleIds)
    {
    }
    /**
     * @return array<int, TitleId>
     */
    public function getTitleIds(): array
    {
    }
}

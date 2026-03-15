<?php

namespace PrestaShop\PrestaShop\Core\Domain\State\Command;

/**
 * Deletes states on bulk action
 */
class BulkDeleteStateCommand
{
    /**
     * @param array<int, int> $stateIds
     */
    public function __construct(array $stateIds)
    {
    }
    /**
     * @return array<int, StateId>
     */
    public function getStateIds(): array
    {
    }
}

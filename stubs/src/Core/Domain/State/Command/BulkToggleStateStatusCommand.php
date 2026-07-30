<?php

namespace PrestaShop\PrestaShop\Core\Domain\State\Command;

/**
 * Toggles states status on bulk action
 */
class BulkToggleStateStatusCommand
{
    /**
     * @param bool $expectedStatus
     * @param array<int, int> $stateIds
     */
    public function __construct(bool $expectedStatus, array $stateIds)
    {
    }
    /**
     * @return bool
     */
    public function getExpectedStatus(): bool
    {
    }
    /**
     * @return array<int, StateId>
     */
    public function getStateIds(): array
    {
    }
}

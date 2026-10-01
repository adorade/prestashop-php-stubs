<?php

namespace PrestaShop\PrestaShop\Core\Domain\State\Command;

/**
 * Updates zone for given states.
 */
class BulkUpdateStateZoneCommand
{
    /**
     * @param int[] $stateIds
     * @param int $newZoneId
     */
    public function __construct(array $stateIds, int $newZoneId)
    {
    }
    /**
     * @return int[]
     */
    public function getStateIds(): array
    {
    }
    /**
     * @return int
     */
    public function getNewZoneId(): int
    {
    }
}

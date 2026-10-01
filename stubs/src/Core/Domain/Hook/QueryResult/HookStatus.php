<?php

namespace PrestaShop\PrestaShop\Core\Domain\Hook\QueryResult;

/**
 * Stores query result for getting manufacturer for viewing
 */
class HookStatus
{
    public function __construct(int $id, bool $isActive)
    {
    }
    /**
     * @return int
     */
    public function getId(): int
    {
    }
    /**
     * @return bool
     */
    public function isActive(): bool
    {
    }
}

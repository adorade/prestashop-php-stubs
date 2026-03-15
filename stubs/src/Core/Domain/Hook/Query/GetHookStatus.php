<?php

namespace PrestaShop\PrestaShop\Core\Domain\Hook\Query;

/**
 * Get current status (enabled/disabled) for a given hook
 */
class GetHookStatus
{
    /**
     * GetHookStatus constructor.
     *
     * @param int $hookId
     */
    public function __construct(int $hookId)
    {
    }
    /**
     * @return HookId
     */
    public function getHookId(): \PrestaShop\PrestaShop\Core\Domain\Hook\ValueObject\HookId
    {
    }
}

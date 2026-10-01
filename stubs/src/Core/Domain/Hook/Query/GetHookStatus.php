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
     * @param int $id
     */
    public function __construct(int $id)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Hook\ValueObject\HookId
     */
    public function getId(): \PrestaShop\PrestaShop\Core\Domain\Hook\ValueObject\HookId
    {
    }
}

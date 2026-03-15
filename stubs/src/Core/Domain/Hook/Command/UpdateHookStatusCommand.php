<?php

namespace PrestaShop\PrestaShop\Core\Domain\Hook\Command;

/**
 * Class UpdateHookStatusCommand update a given hook status
 */
class UpdateHookStatusCommand
{
    /**
     * UpdateHookStatusCommand constructor.
     *
     * @param int $hookId
     * @param bool $status
     */
    public function __construct(int $hookId, bool $status)
    {
    }
    /**
     * @return HookId
     */
    public function getHookId(): \PrestaShop\PrestaShop\Core\Domain\Hook\ValueObject\HookId
    {
    }
    /**
     * @return bool
     */
    public function getStatus(): bool
    {
    }
}

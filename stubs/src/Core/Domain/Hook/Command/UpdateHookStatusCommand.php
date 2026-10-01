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
     * @param int $id
     * @param bool $active
     */
    public function __construct(int $id, bool $active)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Hook\ValueObject\HookId
     */
    public function getHookId(): \PrestaShop\PrestaShop\Core\Domain\Hook\ValueObject\HookId
    {
    }
    /**
     * @return bool
     */
    public function isActive(): bool
    {
    }
}

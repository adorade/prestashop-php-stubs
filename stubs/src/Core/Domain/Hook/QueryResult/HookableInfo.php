<?php

namespace PrestaShop\PrestaShop\Core\Domain\Hook\QueryResult;

/**
 * Represents a hook that a module can be hooked to.
 * Returned as a list by GetPossibleHooksForModule.
 */
class HookableInfo
{
    public function __construct(public readonly int $id, public readonly string $name, public readonly string $title, public readonly bool $registered)
    {
    }
    public function getId(): int
    {
    }
    public function getName(): string
    {
    }
    public function getTitle(): string
    {
    }
    public function isRegistered(): bool
    {
    }
}

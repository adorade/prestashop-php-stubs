<?php

namespace PrestaShopBundle\ApiPlatform\Scopes;

/**
 * @internal
 */
class ApiResourceScopes
{
    public static function createModuleScopes(array $scopes, string $moduleName)
    {
    }
    public static function createCoreScopes(array $scopes)
    {
    }
    /**
     * List of scopes.
     *
     * @return string[]
     */
    public function getScopes(): array
    {
    }
    public function fromCore(): bool
    {
    }
    public function getModuleName(): ?string
    {
    }
}

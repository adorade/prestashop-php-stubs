<?php

namespace PrestaShop\PrestaShop\Adapter\Hook\FormDataProvider;

/**
 * Loads existing hook-module registration data for the edit form.
 */
class HookModuleFormDataProvider
{
    public function __construct(
        private readonly \Doctrine\DBAL\Connection $connection,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire('%database_prefix%')]
        private readonly string $dbPrefix
    )
    {
    }
    /**
     * Returns form-compatible data for the edit "Hook a module" form.
     *
     * @return array{id_module: int, id_hook: int, id_hook_original: int, exceptions: string}
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Hook\Exception\CannotUpdateHookException
     */
    public function getData(int $hookId, int $moduleId): array
    {
    }
}

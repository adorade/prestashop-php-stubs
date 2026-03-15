<?php

namespace PrestaShop\PrestaShop\Adapter\Module\Repository;

/**
 * Methods to access data source of Module
 */
class ModuleRepository extends \PrestaShop\PrestaShop\Core\Repository\AbstractObjectModelRepository
{
    /** @var string[] */
    public const ADDITIONAL_ALLOWED_MODULES = ['autoupgrade'];
    /**
     * @var string
     */
    protected $rootDir;
    /**
     * @var string
     */
    protected $moduleDir;
    /**
     * @param string $rootDir
     * @param string $moduleDir
     */
    public function __construct(string $rootDir, string $moduleDir)
    {
    }
    /**
     * @param ModuleId $moduleId
     *
     * @throws CoreException
     * @throws ModuleNotFoundException
     */
    public function assertModuleExists(\PrestaShop\PrestaShop\Core\Domain\Module\ValueObject\ModuleId $moduleId): void
    {
    }
    /**
     * Return active modules.
     *
     * @return array
     */
    public function getActiveModules(): array
    {
    }
    /**
     * Returns active module file paths.
     *
     * @return array<string, string> File paths indexed by module name
     */
    public function getActiveModulesPaths(): array
    {
    }
    /**
     * Returns an array of native modules
     *
     * @return array<string>
     */
    public function getNativeModules(): array
    {
    }
    /**
     * Returns an array of non-native module names
     *
     * @return array<int, string>
     */
    public function getNonNativeModules(): array
    {
    }
}

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
     * @param \PrestaShop\PrestaShop\Core\Domain\Module\ValueObject\ModuleId $moduleId
     *
     * @throws \PrestaShop\PrestaShop\Core\Exception\CoreException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Module\Exception\ModuleNotFoundException
     */
    public function assertModuleExists(\PrestaShop\PrestaShop\Core\Domain\Module\ValueObject\ModuleId $moduleId): void
    {
    }
    /**
     * Shops one module is enabled on (a module_shop row means "enabled on that shop"),
     * empty when it has no row at all. The module is identified by its technical name
     * (the module's primary identity), resolved through the module table.
     *
     * @return list<int>
     */
    public function getEnabledShopIds(string $technicalName): array
    {
    }
    /**
     * Return active modules (active in DB and present on the disk).
     *
     * This method must not trigger any exception because it is called during install and/or on kernel initialisation,
     * it must not block those steps in any occasion.
     *
     * @return array
     */
    public function getActiveModules(): array
    {
    }
    /**
     * Return present modules (even if those not installed in DB).
     *
     * @return array
     */
    public function getPresentModules(): array
    {
    }
    /**
     * Return installed modules (present in DB regardless of its state AND in the modules folder).
     *
     * This method must not trigger any exception because it is called during install and/or on kernel initialisation,
     * it must not block those steps in any occasion.
     *
     * @return array
     */
    public function getInstalledModules(): array
    {
    }
    /**
     * Returns installed module file paths.
     *
     * @return array<string, string> File paths indexed by module name
     */
    public function getInstalledModulesPaths(): array
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
     * Returns present module file paths.
     *
     * @return array<string, string> File paths indexed by module name
     */
    public function getPresentModulesPaths(): array
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

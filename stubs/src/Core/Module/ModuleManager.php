<?php

namespace PrestaShop\PrestaShop\Core\Module;

/**
 * Responsible for handling all actions with modules.
 *
 * If you want to refactor this in the future and searching for usage of some methods,
 * beware that they are called magically from ModuleController::moduleAction method.
 */
class ModuleManager implements \PrestaShop\PrestaShop\Core\Module\ModuleManagerInterface
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Core\Module\ModuleRepository $moduleRepository, private readonly \PrestaShop\PrestaShop\Adapter\Module\ModuleDataProvider $moduleDataProvider, private readonly \PrestaShop\PrestaShop\Adapter\Module\AdminModuleDataProvider $adminModuleDataProvider, private readonly \PrestaShop\PrestaShop\Core\Module\SourceHandler\SourceHandlerFactory $sourceFactory, private readonly \Symfony\Contracts\Translation\TranslatorInterface $translator, private readonly \Symfony\Component\EventDispatcher\EventDispatcherInterface $eventDispatcher, private readonly \PrestaShop\PrestaShop\Adapter\HookManager $hookManager, private readonly string $modulesDir, private readonly \Symfony\Component\Translation\Loader\XliffFileLoader $xliffFileLoader, private readonly ?\PrestaShopBundle\Entity\Repository\LangRepository $languageRepository = null)
    {
    }
    public function upload(string $source): string
    {
    }
    public function install(string $name, $source = null): bool
    {
    }
    public function postInstall(string $name): bool
    {
    }
    public function uninstall(string $name, bool $deleteFiles = false): bool
    {
    }
    public function delete(string $name): bool
    {
    }
    public function upgrade(string $name, $source = null): bool
    {
    }
    public function enable(string $name): bool
    {
    }
    public function disable(string $name): bool
    {
    }
    public function reset(string $name, bool $keepData = false): bool
    {
    }
    public function isInstalled(string $name): bool
    {
    }
    public function isInstalledAndActive(string $name): bool
    {
    }
    public function isEnabled(string $name): bool
    {
    }
    public function isOnDisk(string $name): bool
    {
    }
    public function getError(string $name): string
    {
    }
    /**
     * Load the module catalog in the translator (initial load only includes modules present at the beginning of the process,
     * so we manually add it in case the module has just been uploaded)
     *
     * @param string $moduleName
     *
     * @return void
     */
    protected function updateTranslatorCatalogues(string $moduleName): void
    {
    }
    protected function upgradeMigration(string $name): bool
    {
    }
}

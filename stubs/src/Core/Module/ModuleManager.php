<?php

namespace PrestaShop\PrestaShop\Core\Module;

class ModuleManager implements \PrestaShop\PrestaShop\Core\Module\ModuleManagerInterface
{
    public function __construct(\PrestaShop\PrestaShop\Core\Module\ModuleRepository $moduleRepository, \PrestaShop\PrestaShop\Adapter\Module\ModuleDataProvider $moduleDataProvider, \PrestaShop\PrestaShop\Adapter\Module\AdminModuleDataProvider $adminModuleDataProvider, \PrestaShop\PrestaShop\Core\Module\SourceHandler\SourceHandlerFactory $sourceFactory, \Symfony\Contracts\Translation\TranslatorInterface $translator, \Symfony\Component\EventDispatcher\EventDispatcherInterface $eventDispatcher, \PrestaShop\PrestaShop\Adapter\HookManager $hookManager)
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
    public function enableMobile(string $name): bool
    {
    }
    public function disableMobile(string $name): bool
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
    public function getError(string $name): string
    {
    }
    protected function upgradeMigration(string $name): bool
    {
    }
}

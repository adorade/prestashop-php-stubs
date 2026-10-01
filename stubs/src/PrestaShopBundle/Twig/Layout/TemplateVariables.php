<?php

namespace PrestaShopBundle\Twig\Layout;

/**
 * Container for variables in different templates or components
 */
class TemplateVariables
{
    public function __construct(string $isoUser, bool $isRtlLanguage, string $controllerName, bool $isMultiShop, bool $isMenuCollapsed, array $jsRouterMetadata, bool $isDebugMode, bool $installDirExists, string $version, ?string $defaultTabLink, bool $isMaintenanceEnabled, bool $isFrontOfficeAccessibleForAdmins, bool $isDisplayedWithTabs, string $baseUrl)
    {
    }
    public function getIsoUser(): string
    {
    }
    public function isRtlLanguage(): bool
    {
    }
    public function getControllerName(): string
    {
    }
    public function isMultiShop(): bool
    {
    }
    public function isMenuCollapsed(): bool
    {
    }
    public function getJsRouterMetadata(): array
    {
    }
    public function isDebugMode(): bool
    {
    }
    public function isInstallDirExists(): bool
    {
    }
    public function getVersion(): string
    {
    }
    public function getDefaultTabLink(): ?string
    {
    }
    public function isMaintenanceEnabled(): bool
    {
    }
    public function isFrontOfficeAccessibleForAdmins(): bool
    {
    }
    public function isDisplayedWithTabs(): bool
    {
    }
    public function getBaseUrl(): string
    {
    }
}

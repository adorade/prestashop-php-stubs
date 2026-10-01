<?php

namespace PrestaShopBundle\Twig\Layout;

/**
 * Allows you to define variables accessible globally in a twig rendering.
 * Only public methods will be accessible on the rendering.
 */
class PrestaShopLayoutGlobalVariables
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Adapter\LegacyContext $context, private readonly \PrestaShopBundle\Twig\Layout\TemplateVariables $templateVariables, private readonly \PrestaShopBundle\Twig\Layout\SmartyVariablesFiller $assignSmartyVariables)
    {
    }
    /**
     * Enable New theme for smarty to avoid some problems with kpis for instance...
     * Allows you to fill variables in the smarty context
     * TODO: Need to be refactored, we need to find a proper way to initialize this smarty template directory when we display a migrated page
     */
    public function setupSmarty(string $title, string $metaTitle, bool $liteDisplay): void
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
    public function installDirExists(): bool
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
    public function getBaseImgUrl(): string
    {
    }
}

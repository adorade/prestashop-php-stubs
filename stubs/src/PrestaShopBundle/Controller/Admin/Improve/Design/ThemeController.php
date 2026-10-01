<?php

namespace PrestaShopBundle\Controller\Admin\Improve\Design;

/**
 * Class ThemeController manages "Improve > Design > Theme & Logo" pages.
 */
class ThemeController extends \PrestaShopBundle\Controller\Admin\PrestaShopAdminController
{
    /**
     * Show main themes page.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))", message: 'You do not have permission to edit this.')]
    public function indexAction(
        \Symfony\Component\HttpFoundation\Request $request,
        \PrestaShop\PrestaShop\Core\Addon\Theme\ThemeProvider $themeProvider,
        \PrestaShop\PrestaShop\Adapter\Language\RTL\InstalledLanguageChecker $installedRtlLanguageChecker,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.admin.shop_logos_settings.form_handler')]
        \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $logosUploadFormHandler
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Upload shop logos.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_themes_index')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))", redirectRoute: 'admin_themes_index')]
    public function uploadLogosAction(
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.admin.shop_logos_settings.form_handler')]
        \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $logosUploadFormHandler
    ): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Export current theme.
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_themes_index')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('create', request.get('_legacy_controller'))", redirectRoute: 'admin_themes_index', message: 'You do not have permission to view this.')]
    public function exportAction(\PrestaShop\PrestaShop\Core\Addon\Theme\ThemeProvider $themeProvider, \PrestaShop\PrestaShop\Core\Addon\Theme\ThemeExporter $themeExporter): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Import new theme.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_themes_index')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('create', request.get('_legacy_controller'))", redirectRoute: 'admin_themes_index', message: 'You do not have permission to add this.')]
    public function importAction(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Enable selected theme.
     *
     * @param string $themeName
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_themes_index')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))", redirectRoute: 'admin_themes_index', message: 'You do not have permission to edit this.')]
    public function enableAction(string $themeName, \PrestaShopBundle\Service\Log\LogHandler $handler): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Delete selected theme.
     *
     * @param string $themeName
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_themes_index')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('delete', request.get('_legacy_controller'))", redirectRoute: 'admin_themes_index', message: 'You do not have permission to delete this.')]
    public function deleteAction(string $themeName): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Adapts selected theme to RTL languages.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_themes_index')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))", redirectRoute: 'admin_themes_index', message: 'You do not have permission to edit this.')]
    public function adaptToRTLLanguagesAction(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Reset theme's page layouts.
     *
     * @param string $themeName
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_themes_index')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))", redirectRoute: 'admin_themes_index', message: 'You do not have permission to edit this.')]
    public function resetLayoutsAction(string $themeName): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Show Front Office theme's pages layout customization.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function customizeLayoutsAction(\Symfony\Component\HttpFoundation\Request $request, \PrestaShopBundle\Form\Admin\Improve\Design\Theme\PageLayoutCustomizationFormFactory $pageLayoutCustomizationFormFactory, \PrestaShop\PrestaShop\Core\Addon\Theme\ThemePageLayoutsCustomizer $themePageLayoutsCustomizer): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return bool
     */
    protected function canCustomizePageLayouts(\Symfony\Component\HttpFoundation\Request $request): bool
    {
    }
    /**
     * @return \Symfony\Component\Form\FormInterface
     */
    protected function getAdaptThemeToRtlLanguageForm(): \Symfony\Component\Form\FormInterface
    {
    }
}

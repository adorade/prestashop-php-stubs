<?php

namespace PrestaShopBundle\Controller\Admin\Improve\International;

/**
 * Admin controller for the International pages.
 */
#[\PrestaShopBundle\Controller\Attribute\AllShopContext]
class TranslationsController extends \PrestaShopBundle\Controller\Admin\PrestaShopAdminController
{
    public const CONTROLLER_NAME = 'ADMINTRANSLATIONS';
    /**
     * @deprecated
     */
    public const controller_name = self::CONTROLLER_NAME;
    /**
     * Renders the translation page
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))")]
    public function overviewAction(): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Extract theme using locale and theme name.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\BinaryFileResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))")]
    public function exportThemeAction(
        \Symfony\Component\HttpFoundation\Request $request,
        \PrestaShop\PrestaShop\Core\Language\LanguageRepositoryInterface $langRepository,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.translation.theme.exporter')]
        \PrestaShopBundle\Translation\Exporter\ThemeExporter $themeExporter
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Show translations settings page.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))")]
    public function showSettingsAction(
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.admin.translations_settings.modify_translations.form_handler')]
        \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $modifyTranslationsFormHandler,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.admin.translations_settings.add_update_language.form_handler')]
        \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $addUpdateLanguageFormHandler,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.admin.translations_settings.export_catalogues.form_handler')]
        \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $exportTranslationCataloguesFormHandler,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.admin.translations_settings.copy_language.form_handler')]
        \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $copyLanguageFormHandler,
        \PrestaShop\PrestaShop\Adapter\LegacyContext $legacyContext,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.kpi_row.factory.translations_page')]
        \PrestaShop\PrestaShop\Core\Kpi\Row\HookableKpiRowFactory $kpiRowFactory
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Modify translations action.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))")]
    public function modifyTranslationsAction(
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.adapter.translation_route_finder')]
        \PrestaShop\PrestaShop\Adapter\Translations\TranslationRouteFinder $routeFinder
    ): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Add language pack for new languages and updates for the existing ones action.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('create', request.get('_legacy_controller'))")]
    public function addUpdateLanguageAction(
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.admin.translations_settings.add_update_language.form_handler')]
        \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $formHandler,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.adapter.language.pack.importer')]
        \PrestaShop\PrestaShop\Core\Language\Pack\Import\LanguagePackImporterInterface $languagePackImporter
    ): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Extract catalogues using locale.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\BinaryFileResponse|\Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('create', request.get('_legacy_controller'))")]
    public function exportCataloguesAction(
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.admin.translations_settings.export_catalogues.form_handler')]
        \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $formHandler,
        \PrestaShop\PrestaShop\Core\Language\LanguageRepositoryInterface $langRepository,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.translation.export.translation_catalogue')]
        \PrestaShop\PrestaShop\Core\Translation\Export\TranslationCatalogueExporter $translationCatalogueExporter
    ): \Symfony\Component\HttpFoundation\BinaryFileResponse|\Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Copy language action.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('create', request.get('_legacy_controller'))")]
    public function copyLanguageAction(
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.admin.translations_settings.copy_language.form_handler')]
        \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $formHandler,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.adapter.language.copier')]
        \PrestaShop\PrestaShop\Core\Language\Copier\LanguageCopierInterface $languageCopier
    ): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
}

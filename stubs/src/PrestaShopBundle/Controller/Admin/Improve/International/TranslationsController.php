<?php

namespace PrestaShopBundle\Controller\Admin\Improve\International;

/**
 * Admin controller for the International pages.
 */
class TranslationsController extends \PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController
{
    public const CONTROLLER_NAME = 'ADMINTRANSLATIONS';
    /**
     * @deprecated
     */
    public const controller_name = self::CONTROLLER_NAME;
    /**
     * Renders the translation page
     *
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))")
     */
    public function overviewAction()
    {
    }
    /**
     * Extract theme using locale and theme name.
     *
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))")
     *
     * @param Request $request
     *
     * @return BinaryFileResponse
     */
    public function exportThemeAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Show translations settings page.
     *
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))")
     *
     * @param Request $request
     *
     * @return Response
     */
    public function showSettingsAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Modify translations action.
     *
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))")
     *
     * @param Request $request
     *
     * @return RedirectResponse
     */
    public function modifyTranslationsAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Add language pack for new languages and updates for the existing ones action.
     *
     * @AdminSecurity("is_granted('create', request.get('_legacy_controller'))"))
     *
     * @param Request $request
     *
     * @return RedirectResponse
     */
    public function addUpdateLanguageAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Extract catalogues using locale.
     *
     * @AdminSecurity("is_granted('create', request.get('_legacy_controller'))")
     *
     * @param Request $request
     *
     * @return BinaryFileResponse|RedirectResponse
     */
    public function exportCataloguesAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Copy language action.
     *
     * @AdminSecurity("is_granted('create', request.get('_legacy_controller'))")
     *
     * @param Request $request
     *
     * @return RedirectResponse
     */
    public function copyLanguageAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
}

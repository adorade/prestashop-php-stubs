<?php

namespace PrestaShopBundle\Controller\Admin\Improve\Design;

/**
 * Class ThemeController manages "Improve > Design > Theme & Logo" pages.
 */
class ThemeController extends \PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController
{
    /**
     * Show main themes page.
     *
     * @AdminSecurity(
     *     "is_granted('read', request.get('_legacy_controller'))",
     *     message="You do not have permission to edit this."
     * )
     *
     * @param Request $request
     *
     * @return Response
     */
    public function indexAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Upload shop logos.
     *
     * @AdminSecurity("is_granted('update', request.get('_legacy_controller'))", redirectRoute="admin_themes_index")
     * @DemoRestricted(redirectRoute="admin_themes_index")
     *
     * @param Request $request
     *
     * @return RedirectResponse
     */
    public function uploadLogosAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Export current theme.
     *
     * @AdminSecurity(
     *     "is_granted('create', request.get('_legacy_controller'))",
     *     redirectRoute="admin_themes_index",
     *     message="You do not have permission to view this."
     * )
     * @DemoRestricted(redirectRoute="admin_themes_index")
     *
     * @return RedirectResponse
     */
    public function exportAction()
    {
    }
    /**
     * Import new theme.
     *
     * @AdminSecurity(
     *     "is_granted('create', request.get('_legacy_controller'))",
     *     redirectRoute="admin_themes_index",
     *     message="You do not have permission to add this."
     * )
     * @DemoRestricted(redirectRoute="admin_themes_index")
     *
     * @param Request $request
     *
     * @return Response
     */
    public function importAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Enable selected theme.
     *
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller'))",
     *     redirectRoute="admin_themes_index",
     *     message="You do not have permission to edit this."
     * )
     * @DemoRestricted(redirectRoute="admin_themes_index")
     *
     * @param string $themeName
     *
     * @return RedirectResponse
     */
    public function enableAction($themeName)
    {
    }
    /**
     * Delete selected theme.
     *
     * @AdminSecurity(
     *     "is_granted('delete', request.get('_legacy_controller'))",
     *     redirectRoute="admin_themes_index",
     *     message="You do not have permission to delete this."
     * )
     * @DemoRestricted(redirectRoute="admin_themes_index")
     *
     * @param string $themeName
     *
     * @return RedirectResponse
     */
    public function deleteAction($themeName)
    {
    }
    /**
     * Adapts selected theme to RTL languages.
     *
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller'))",
     *     redirectRoute="admin_themes_index",
     *     message="You do not have permission to edit this."
     * )
     * @DemoRestricted(redirectRoute="admin_themes_index")
     *
     * @param Request $request
     *
     * @return RedirectResponse
     */
    public function adaptToRTLLanguagesAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Reset theme's page layouts.
     *
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller'))",
     *     redirectRoute="admin_themes_index",
     *     message="You do not have permission to edit this."
     * )
     * @DemoRestricted(redirectRoute="admin_themes_index")
     *
     * @param string $themeName
     *
     * @return RedirectResponse
     */
    public function resetLayoutsAction($themeName)
    {
    }
    /**
     * Show Front Office theme's pages layout customization.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function customizeLayoutsAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * @param Request $request
     *
     * @return bool
     */
    protected function canCustomizePageLayouts(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * @return FormInterface
     *
     * @throws Exception
     */
    protected function getLogosUploadForm(): \Symfony\Component\Form\FormInterface
    {
    }
    /**
     * @return FormInterface
     */
    protected function getAdaptThemeToRtlLanguageForm(): \Symfony\Component\Form\FormInterface
    {
    }
}

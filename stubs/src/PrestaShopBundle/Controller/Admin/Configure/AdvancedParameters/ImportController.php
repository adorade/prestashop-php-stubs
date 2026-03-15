<?php

namespace PrestaShopBundle\Controller\Admin\Configure\AdvancedParameters;

/**
 * Responsible of "Configure > Advanced Parameters > Import" page display.
 */
class ImportController extends \PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController
{
    /**
     * Show import form & handle forwarding to legacy controller.
     *
     * @param Request $request
     *
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))")
     *
     * @return array|RedirectResponse|Response
     */
    public function importAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Handle import file upload via AJAX, sending authorization errors in JSON.
     *
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function uploadAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Delete import file.
     *
     * @AdminSecurity("is_granted('delete', request.get('_legacy_controller'))", message="You do not have permission to update this.", redirectRoute="admin_import")
     * @DemoRestricted(redirectRoute="admin_import")
     *
     * @param Request $request
     *
     * @return RedirectResponse
     */
    public function deleteAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Download import file from history.
     *
     * @AdminSecurity(
     *     "is_granted('read', request.get('_legacy_controller')) && is_granted('update', request.get('_legacy_controller')) && is_granted('create', request.get('_legacy_controller')) && is_granted('delete', request.get('_legacy_controller'))",
     *     message="You do not have permission to update this.", redirectRoute="admin_import"
     * )
     * @DemoRestricted(redirectRoute="admin_import")
     *
     * @param Request $request
     *
     * @return Response
     */
    public function downloadAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Download import sample file.
     *
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))", redirectRoute="admin_import")
     *
     * @param string $sampleName
     *
     * @return Response
     */
    public function downloadSampleAction($sampleName)
    {
    }
    /**
     * Get available entity fields.
     *
     * @AdminSecurity(
     *     "is_granted('read', request.get('_legacy_controller'))",
     *     redirectRoute="admin_import"
     * )
     *
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function getAvailableEntityFieldsAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Process the import.
     *
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller')) && is_granted('create', request.get('_legacy_controller')) && is_granted('delete', request.get('_legacy_controller'))",
     *     redirectRoute="admin_import"
     * )
     * @DemoRestricted(redirectRoute="admin_import")
     *
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function processImportAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Get generic template parameters.
     *
     * @param Request $request
     *
     * @return array
     */
    protected function getTemplateParams(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
}

<?php

namespace PrestaShopBundle\Controller\Admin\Configure\AdvancedParameters;

/**
 * Responsible of "Configure > Advanced Parameters > Import" step 2 page display.
 */
class ImportDataConfigurationController extends \PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController
{
    /**
     * Shows import data page where the configuration of importable data and the final step of import is handled.
     *
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))")
     * @DemoRestricted(redirectRoute="admin_import")
     *
     * @param Request $request
     *
     * @return RedirectResponse|Response
     */
    public function indexAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Create import data match configuration.
     *
     * @AdminSecurity("is_granted('update', request.get('_legacy_controller'))", message="You do not have permission to update this.", redirectRoute="admin_import")
     * @DemoRestricted(redirectRoute="admin_import")
     *
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function createAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Delete import data match configuration.
     *
     * @AdminSecurity("is_granted('update', request.get('_legacy_controller'))", message="You do not have permission to update this.", redirectRoute="admin_import")
     * @DemoRestricted(redirectRoute="admin_import")
     *
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function deleteAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Get import data match configuration.
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
    public function getAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
}

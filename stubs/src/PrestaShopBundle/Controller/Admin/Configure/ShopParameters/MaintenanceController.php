<?php

namespace PrestaShopBundle\Controller\Admin\Configure\ShopParameters;

/**
 * Responsible of "Configure > Shop Parameters > General > Maintenance" page.
 */
class MaintenanceController extends \PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController
{
    public const CONTROLLER_NAME = 'AdminMaintenance';
    /**
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))")
     *
     * @param Request $request
     * @param FormInterface $form
     *
     * @return Response
     */
    public function indexAction(\Symfony\Component\HttpFoundation\Request $request, \Symfony\Component\Form\FormInterface $form = null)
    {
    }
    /**
     * @param Request $request
     *
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller')) && is_granted('create', request.get('_legacy_controller')) && is_granted('delete', request.get('_legacy_controller'))",
     *     message="You do not have permission to edit this.",
     *     redirectRoute="admin_maintenance")
     * @DemoRestricted(redirectRoute="admin_maintenance")
     *
     * @return RedirectResponse
     */
    public function processFormAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
}

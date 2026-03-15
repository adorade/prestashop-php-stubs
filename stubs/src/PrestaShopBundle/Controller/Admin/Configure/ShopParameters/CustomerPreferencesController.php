<?php

namespace PrestaShopBundle\Controller\Admin\Configure\ShopParameters;

/**
 * Controller responsible of "Configure > Shop Parameters > Customer Settings" page.
 */
class CustomerPreferencesController extends \PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController
{
    /**
     * Show customer preferences page.
     *
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))", message="Access denied.")
     *
     * @param Request $request
     *
     * @return Response
     */
    public function indexAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Process the Customer Preferences configuration form.
     *
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller')) && is_granted('create', request.get('_legacy_controller')) && is_granted('delete', request.get('_legacy_controller'))",
     *     message="You do not have permission to update this.", redirectRoute="admin_customer_preferences"
     * )
     * @DemoRestricted(redirectRoute="admin_customer_preferences")
     *
     * @param Request $request
     *
     * @return Response
     */
    public function processAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
}

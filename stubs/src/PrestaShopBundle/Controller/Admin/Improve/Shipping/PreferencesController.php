<?php

namespace PrestaShopBundle\Controller\Admin\Improve\Shipping;

/**
 * Controller responsible of "Improve > Shipping > Preferences" page.
 */
class PreferencesController extends \PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController
{
    /**
     * Show shipping preferences page.
     *
     * @param Request $request
     *
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))")
     *
     * @return Response
     */
    public function indexAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller')) && is_granted('create', request.get('_legacy_controller')) && is_granted('delete', request.get('_legacy_controller'))",
     *     message="You do not have permission to edit this.",
     *     redirectRoute="admin_shipping_preferences")
     *
     * @param Request $request
     *
     * @return Response
     */
    public function processCarrierOptionsFormAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller')) && is_granted('create', request.get('_legacy_controller')) && is_granted('delete', request.get('_legacy_controller'))",
     *     message="You do not have permission to edit this.",
     *     redirectRoute="admin_shipping_preferences")
     *
     * @param Request $request
     *
     * @return Response
     */
    public function processHandlingFormAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * @return FormHandlerInterface
     */
    protected function getHandlingFormHandler(): \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface
    {
    }
    /**
     * @return FormHandlerInterface
     */
    protected function getCarrierOptionsFormHandler(): \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface
    {
    }
    /**
     * @deprecated since 8.1.0 and will be removed in next major version.
     */
    protected function renderForm($handlingForm, $carrierOptionsForm, $request)
    {
    }
}

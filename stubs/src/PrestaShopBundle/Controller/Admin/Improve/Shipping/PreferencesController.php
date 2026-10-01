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
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))")
     *
     * @return \Symfony\Component\HttpFoundation\Response
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
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
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
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function processHandlingFormAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface
     */
    protected function getHandlingFormHandler(): \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface
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

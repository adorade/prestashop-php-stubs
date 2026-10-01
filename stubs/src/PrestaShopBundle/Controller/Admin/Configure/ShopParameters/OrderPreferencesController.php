<?php

namespace PrestaShopBundle\Controller\Admin\Configure\ShopParameters;

/**
 * Controller responsible of "Configure > Shop Parameters > Order Settings" page.
 */
class OrderPreferencesController extends \PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController
{
    /**
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))")
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
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
     *     redirectRoute="admin_order_preferences")
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function processGeneralFormAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller')) && is_granted('create', request.get('_legacy_controller')) && is_granted('delete', request.get('_legacy_controller'))",
     *     message="You do not have permission to edit this.",
     *     redirectRoute="admin_order_preferences")
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function processGiftOptionsFormAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Process the Order Preferences configuration form.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $formHandler
     * @param string $hookName
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    protected function processForm(\Symfony\Component\HttpFoundation\Request $request, \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $formHandler, string $hookName)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface
     */
    protected function getGeneralFormHandler(): \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface
     */
    protected function getGiftOptionsFormHandler(): \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface
    {
    }
}

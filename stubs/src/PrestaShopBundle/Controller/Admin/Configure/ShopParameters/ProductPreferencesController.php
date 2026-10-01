<?php

namespace PrestaShopBundle\Controller\Admin\Configure\ShopParameters;

/**
 * Responsible of "Configure > Shop Parameters > Product Settings" page.
 */
class ProductPreferencesController extends \PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController
{
    /**
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
     *     message="You do not have permission to update this.",
     *     redirectRoute="admin_product_preferences"
     * )
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
     *     message="You do not have permission to update this.",
     *     redirectRoute="admin_product_preferences"
     * )
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function processPageFormAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller')) && is_granted('create', request.get('_legacy_controller')) && is_granted('delete', request.get('_legacy_controller'))",
     *     message="You do not have permission to update this.",
     *     redirectRoute="admin_product_preferences"
     * )
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function processPaginationFormAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller')) && is_granted('create', request.get('_legacy_controller')) && is_granted('delete', request.get('_legacy_controller'))",
     *     message="You do not have permission to update this.",
     *     redirectRoute="admin_product_preferences"
     * )
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function processStockFormAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Process the Product Preferences configuration form.
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
    protected function getPaginationFormHandler(): \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface
     */
    protected function getPageFormHandler(): \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface
     */
    protected function getStockFormHandler(): \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface
    {
    }
}

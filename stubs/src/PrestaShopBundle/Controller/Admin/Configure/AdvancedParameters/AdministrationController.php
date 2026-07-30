<?php

namespace PrestaShopBundle\Controller\Admin\Configure\AdvancedParameters;

/**
 * Responsible of "Configure > Advanced Parameters > Administration" page display.
 */
class AdministrationController extends \PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController
{
    public const CONTROLLER_NAME = 'AdminAdminPreferences';
    /**
     * Show Administration page.
     *
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))", message="Access denied.")
     *
     * @return Response
     */
    public function indexAction()
    {
    }
    /**
     * Process the Administration general configuration form.
     *
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller')) && is_granted('create', request.get('_legacy_controller')) && is_granted('delete', request.get('_legacy_controller'))",
     *     message="You do not have permission to update this.",
     *     redirectRoute="admin_administration")
     * @DemoRestricted(redirectRoute="admin_administration")
     *
     * @param Request $request
     *
     * @return RedirectResponse
     */
    public function processGeneralFormAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Process the Administration upload quota configuration form.
     *
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller')) && is_granted('create', request.get('_legacy_controller')) && is_granted('delete', request.get('_legacy_controller'))",
     *     message="You do not have permission to update this.",
     *     redirectRoute="admin_administration")
     * @DemoRestricted(redirectRoute="admin_administration")
     *
     * @param Request $request
     *
     * @return RedirectResponse
     */
    public function processUploadQuotaFormAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Process the Administration notifications configuration form.
     *
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller')) && is_granted('create', request.get('_legacy_controller')) && is_granted('delete', request.get('_legacy_controller'))",
     *     message="You do not have permission to update this.",
     *     redirectRoute="admin_administration"
     * )
     * @DemoRestricted(redirectRoute="admin_administration")
     *
     * @param Request $request
     *
     * @return RedirectResponse
     */
    public function processNotificationsFormAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Process the Administration configuration form.
     *
     * @param Request $request
     * @param FormHandlerInterface $formHandler
     * @param string $hookName
     *
     * @return RedirectResponse
     */
    protected function processForm(\Symfony\Component\HttpFoundation\Request $request, \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $formHandler, string $hookName)
    {
    }
    /**
     * @return FormHandlerInterface
     */
    protected function getGeneralFormHandler(): \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface
    {
    }
    /**
     * @return FormHandlerInterface
     */
    protected function getUploadQuotaFormHandler(): \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface
    {
    }
    /**
     * @return FormHandlerInterface
     */
    protected function getNotificationsFormHandler(): \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface
    {
    }
}

<?php

namespace PrestaShopBundle\Controller\Admin\Improve\International;

/**
 * Class LocalizationController is responsible for handling "Improve > International > Localization" page.
 */
class LocalizationController extends \PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController
{
    /**
     * Show localization settings page.
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
     * Process the Localization Configuration form.
     *
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller')) && is_granted('create', request.get('_legacy_controller')) && is_granted('delete', request.get('_legacy_controller'))",
     *     message="You do not have permission to edit this."
     * )
     * @DemoRestricted(redirectRoute="admin_localization_index")
     *
     * @param Request $request
     *
     * @return RedirectResponse
     */
    public function processConfigurationFormAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Process the Localization Local Units form.
     *
     * @AdminSecurity(
     *     "is_granted('read', request.get('_legacy_controller')) && is_granted('update', request.get('_legacy_controller')) && is_granted('create', request.get('_legacy_controller')) && is_granted('delete', request.get('_legacy_controller'))",
     *     message="You do not have permission to edit this."
     * )
     * @DemoRestricted(redirectRoute="admin_localization_index")
     *
     * @param Request $request
     *
     * @return RedirectResponse
     */
    public function processLocalUnitsFormAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Process the Localization Advanced form.
     *
     * @AdminSecurity(
     *     "is_granted('read', request.get('_legacy_controller')) && is_granted('update', request.get('_legacy_controller')) && is_granted('create', request.get('_legacy_controller')) && is_granted('delete', request.get('_legacy_controller'))",
     *     message="You do not have permission to edit this."
     * )
     * @DemoRestricted(redirectRoute="admin_localization_index")
     *
     * @param Request $request
     *
     * @return RedirectResponse
     */
    public function processAdvancedFormAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Process the Localization configuration form.
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
     * Handles localization pack import.
     *
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller')) && is_granted('create', request.get('_legacy_controller')) && is_granted('delete', request.get('_legacy_controller'))",
     *     message="You do not have permission to edit this."
     * )
     * @DemoRestricted(redirectRoute="admin_localization_index")
     *
     * @param Request $request
     *
     * @return RedirectResponse
     */
    public function importPackAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
}

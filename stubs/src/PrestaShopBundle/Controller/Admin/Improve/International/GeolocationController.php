<?php

namespace PrestaShopBundle\Controller\Admin\Improve\International;

/**
 * Class GeolocationController is responsible for "Improve > International > Localization > Geolocation" page.
 */
class GeolocationController extends \PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController
{
    /**
     * Show geolocation page.
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
     * Process the Geolocation ByIpAddress configuration form.
     *
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller')) && is_granted('create', request.get('_legacy_controller')) && is_granted('delete', request.get('_legacy_controller'))",
     *     message="You do not have permission to edit this.",
     *     redirectRoute="admin_geolocation_index"
     * )
     * @DemoRestricted(redirectRoute="admin_geolocation_index")
     *
     * @param Request $request
     *
     * @return RedirectResponse
     */
    public function processByIpAddressFormAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Process the Geolocation Whitelist configuration form.
     *
     * @AdminSecurity(
     *     "is_granted('read', request.get('_legacy_controller')) && is_granted('update', request.get('_legacy_controller')) && is_granted('create', request.get('_legacy_controller')) && is_granted('delete', request.get('_legacy_controller'))",
     *     message="You do not have permission to edit this.",
     *     redirectRoute="admin_geolocation_index"
     * )
     * @DemoRestricted(redirectRoute="admin_geolocation_index")
     *
     * @param Request $request
     *
     * @return RedirectResponse
     */
    public function processWhitelistFormAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Process the Geolocation Options configuration form.
     *
     * @AdminSecurity(
     *     "is_granted('read', request.get('_legacy_controller')) && is_granted('update', request.get('_legacy_controller')) && is_granted('create', request.get('_legacy_controller')) && is_granted('delete', request.get('_legacy_controller'))",
     *     message="You do not have permission to edit this.",
     *     redirectRoute="admin_geolocation_index"
     * )
     * @DemoRestricted(redirectRoute="admin_geolocation_index")
     *
     * @param Request $request
     *
     * @return RedirectResponse
     */
    public function processOptionsFormAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Process the Performance configuration form.
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
    protected function getGeolocationByIpAddressFormHandler(): \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface
    {
    }
    /**
     * @return FormHandlerInterface
     */
    protected function getGeolocationWhitelistFormHandler(): \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface
    {
    }
    /**
     * @return FormHandlerInterface
     */
    protected function getGeolocationOptionsFormHandler(): \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface
    {
    }
}

<?php

namespace PrestaShopBundle\Controller\Admin\Improve\International;

/**
 * Class GeolocationController is responsible for "Improve > International > Localization > Geolocation" page.
 */
class GeolocationController extends \PrestaShopBundle\Controller\Admin\PrestaShopAdminController
{
    /**
     * Show geolocation page.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))", message: 'Access denied.')]
    public function indexAction(
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.admin.geolocation.by_ip_address.form_handler')]
        \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $geolocationByIpAddressFormHandler,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.admin.geolocation.whitelist.form_handler')]
        \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $geolocationWhitelistFormHandler,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.admin.geolocation.options.form_handler')]
        \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $geolocationOptionsFormHandler,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.geolocation.geo_lite_city.checker')]
        \PrestaShop\PrestaShop\Core\Geolocation\GeoLite\GeoLiteCityCheckerInterface $geoLiteCityChecker
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Process the Geolocation ByIpAddress configuration form.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_geolocation_index')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller')) && is_granted('create', request.get('_legacy_controller')) && is_granted('delete', request.get('_legacy_controller'))", message: 'You do not have permission to edit this.', redirectRoute: 'admin_geolocation_index')]
    public function processByIpAddressFormAction(
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.admin.geolocation.by_ip_address.form_handler')]
        \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $geolocationByIpAddressFormHandler
    ): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Process the Geolocation Whitelist configuration form.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_geolocation_index')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller')) && is_granted('update', request.get('_legacy_controller')) && is_granted('create', request.get('_legacy_controller')) && is_granted('delete', request.get('_legacy_controller'))", message: 'You do not have permission to edit this.', redirectRoute: 'admin_geolocation_index')]
    public function processWhitelistFormAction(
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.admin.geolocation.whitelist.form_handler')]
        \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $geolocationWhitelistFormHandler
    ): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Process the Geolocation Options configuration form.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_geolocation_index')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller')) && is_granted('update', request.get('_legacy_controller')) && is_granted('create', request.get('_legacy_controller')) && is_granted('delete', request.get('_legacy_controller'))", message: 'You do not have permission to edit this.', redirectRoute: 'admin_geolocation_index')]
    public function processOptionsFormAction(
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.admin.geolocation.options.form_handler')]
        \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $geolocationOptionsFormHandler
    ): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Process the Performance configuration form.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $formHandler
     * @param string $hookName
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    protected function processForm(\Symfony\Component\HttpFoundation\Request $request, \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $formHandler, string $hookName): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
}

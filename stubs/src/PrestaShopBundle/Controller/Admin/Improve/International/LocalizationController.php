<?php

namespace PrestaShopBundle\Controller\Admin\Improve\International;

/**
 * Class LocalizationController is responsible for handling "Improve > International > Localization" page.
 */
class LocalizationController extends \PrestaShopBundle\Controller\Admin\PrestaShopAdminController
{
    /**
     * Show localization settings page.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))", message: 'Access denied.')]
    public function indexAction(
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.admin.localization.configuration.form_handler')]
        \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $configurationFormHandler,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.admin.localization.local_units.form_handler')]
        \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $localUnitsFormHandler,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.admin.localization.advanced.form_handler')]
        \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $advancedFormHandler
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Process the Localization Configuration form.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_localization_index')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller')) && is_granted('create', request.get('_legacy_controller')) && is_granted('delete', request.get('_legacy_controller'))", message: 'You do not have permission to edit this.', redirectRoute: 'admin_localization_index')]
    public function processConfigurationFormAction(
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.admin.localization.configuration.form_handler')]
        \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $configurationFormHandler
    ): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Process the Localization Local Units form.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_localization_index')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller')) && is_granted('update', request.get('_legacy_controller')) && is_granted('create', request.get('_legacy_controller')) && is_granted('delete', request.get('_legacy_controller'))", message: 'You do not have permission to edit this.')]
    public function processLocalUnitsFormAction(
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.admin.localization.local_units.form_handler')]
        \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $localUnitsFormHandler
    ): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Process the Localization Advanced form.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_localization_index')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller')) && is_granted('update', request.get('_legacy_controller')) && is_granted('create', request.get('_legacy_controller')) && is_granted('delete', request.get('_legacy_controller'))", message: 'You do not have permission to edit this.')]
    public function processAdvancedFormAction(
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.admin.localization.advanced.form_handler')]
        \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $advancedFormHandler
    ): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Process the Localization configuration form.
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
    /**
     * Handles localization pack import.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_localization_index')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller')) && is_granted('create', request.get('_legacy_controller')) && is_granted('delete', request.get('_legacy_controller'))", message: 'You do not have permission to edit this.', redirectRoute: 'admin_localization_index')]
    public function importPackAction(\Symfony\Component\HttpFoundation\Request $request, \PrestaShop\PrestaShop\Core\Localization\Pack\Import\LocalizationPackImporter $localizationPackImporter): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
}

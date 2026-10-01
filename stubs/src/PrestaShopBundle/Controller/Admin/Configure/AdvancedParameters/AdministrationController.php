<?php

namespace PrestaShopBundle\Controller\Admin\Configure\AdvancedParameters;

/**
 * Responsible for "Configure > Advanced Parameters > Administration" page display.
 */
class AdministrationController extends \PrestaShopBundle\Controller\Admin\PrestaShopAdminController
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Core\Configuration\UploadSizeConfigurationInterface $uploadSizeConfiguration)
    {
    }
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))", message: 'Access denied.')]
    public function indexAction(
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.adapter.administration.general.form_handler')]
        \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $generalFormHandler,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.adapter.administration.upload_quota.form_handler')]
        \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $uploadQuotaFormHandler,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.adapter.administration.notifications.form_handler')]
        \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $notificationsFormHandler
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Process the Administration general configuration form.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_administration')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller')) && is_granted('create', request.get('_legacy_controller')) && is_granted('delete', request.get('_legacy_controller'))", message: 'You do not have permission to update this.', redirectRoute: 'admin_administration')]
    public function processGeneralFormAction(
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.adapter.administration.general.form_handler')]
        \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $generalFormHandler
    ): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_administration')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller')) && is_granted('create', request.get('_legacy_controller')) && is_granted('delete', request.get('_legacy_controller'))", message: 'You do not have permission to update this.', redirectRoute: 'admin_administration')]
    public function processUploadQuotaFormAction(
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.adapter.administration.upload_quota.form_handler')]
        \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $uploadQuotaFormHandler
    ): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_administration')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller')) && is_granted('create', request.get('_legacy_controller')) && is_granted('delete', request.get('_legacy_controller'))", message: 'You do not have permission to update this.', redirectRoute: 'admin_administration')]
    public function processNotificationsFormAction(
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.adapter.administration.notifications.form_handler')]
        \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $notificationsFormHandler
    ): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Process the Administration configuration form.
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

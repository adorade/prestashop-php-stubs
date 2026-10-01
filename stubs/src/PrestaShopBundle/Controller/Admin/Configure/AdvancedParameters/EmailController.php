<?php

namespace PrestaShopBundle\Controller\Admin\Configure\AdvancedParameters;

/**
 * Class EmailController is responsible for handling "Configure > Advanced Parameters > E-mail" page.
 */
class EmailController extends \PrestaShopBundle\Controller\Admin\PrestaShopAdminController
{
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))", message: 'Access denied.')]
    public function indexAction(
        \Symfony\Component\HttpFoundation\Request $request,
        \PrestaShop\PrestaShop\Core\Search\Filters\EmailLogsFilter $filters,
        \PrestaShop\PrestaShop\Core\Configuration\PhpExtensionCheckerInterface $phpExtensionChecker,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.grid.factory.email_logs')]
        \PrestaShop\PrestaShop\Core\Grid\GridFactoryInterface $emailLogsGridFactory,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.admin.email_configuration.form_handler')]
        \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $emailConfigurationFormHandler
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Process email configuration saving.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_emails_index')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller')) && is_granted('create', request.get('_legacy_controller')) && is_granted('delete', request.get('_legacy_controller'))", message: 'Access denied.', redirectRoute: 'admin_emails_index')]
    public function saveOptionsAction(
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.admin.email_configuration.form_handler')]
        \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $emailConfigurationFormHandler
    ): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_emails_index')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('delete', request.get('_legacy_controller'))", message: 'Access denied.', redirectRoute: 'admin_emails_index')]
    public function deleteBulkAction(\Symfony\Component\HttpFoundation\Request $request, \PrestaShop\PrestaShop\Core\Email\EmailLogEraserInterface $emailLogEraser): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_emails_index')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('delete', request.get('_legacy_controller'))", message: 'Access denied.')]
    public function deleteAllAction(\PrestaShop\PrestaShop\Core\Email\EmailLogEraserInterface $emailLogEraser): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_emails_index')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('delete', request.get('_legacy_controller'))", message: 'Access denied.')]
    public function deleteAction(int $mailId, \PrestaShop\PrestaShop\Core\Email\EmailLogEraserInterface $emailLogEraser): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Processes test email sending.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function sendTestAction(\Symfony\Component\HttpFoundation\Request $request, \PrestaShop\PrestaShop\Core\Email\EmailConfigurationTesterInterface $emailConfigurationTester): \Symfony\Component\HttpFoundation\Response
    {
    }
}

<?php

namespace PrestaShopBundle\Controller\Admin\Configure\AdvancedParameters;

/**
 * Responsible for "Configure > Advanced Parameters > Webservice" page.
 *
 * @todo: add unit tests
 */
class WebserviceController extends \PrestaShopBundle\Controller\Admin\PrestaShopAdminController
{
    /**
     * Displays the Webservice main page.
     *
     * @param \PrestaShop\PrestaShop\Core\Search\Filters\WebserviceKeyFilters $filters - filters for webservice list
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))")]
    public function indexAction(
        \PrestaShop\PrestaShop\Core\Search\Filters\WebserviceKeyFilters $filters,
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.adapter.webservice.form_handler')]
        \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $formHandler,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.grid.factory.webservice_key')]
        \PrestaShop\PrestaShop\Core\Grid\GridFactoryInterface $gridFactory,
        \PrestaShop\PrestaShop\Core\Webservice\ServerRequirementsCheckerInterface $serverRequirementsChecker,
        \PrestaShopBundle\Form\Admin\Configure\AdvancedParameters\Webservice\WebserviceFormDataProvider $webserviceFormDataProvider
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Shows Webservice Key form and handles its submit
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response|\Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('create', request.get('_legacy_controller'))")]
    public function createAction(
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.builder.webservice_key_form_builder')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Builder\FormBuilderInterface $formBuilder,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.handler.webservice_key_form_handler')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Handler\FormHandlerInterface $formHandler
    ): \Symfony\Component\HttpFoundation\Response|\Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Redirects to webservice account form where existing webservice account record can be edited.
     *
     * @param int $webserviceKeyId
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response|\Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))", redirectRoute: 'admin_webservice_keys_index')]
    public function editAction(
        int $webserviceKeyId,
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.builder.webservice_key_form_builder')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Builder\FormBuilderInterface $formBuilder,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.handler.webservice_key_form_handler')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Handler\FormHandlerInterface $formHandler
    ): \Symfony\Component\HttpFoundation\Response|\Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Deletes single record.
     *
     * @param int $webserviceKeyId
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_webservice_keys_index')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('delete', request.get('_legacy_controller'))", message: 'You do not have permission to delete this.')]
    public function deleteAction(int $webserviceKeyId, \PrestaShop\PrestaShop\Adapter\Webservice\WebserviceKeyEraser $webserviceEraser): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Deletes selected records.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_webservice_keys_index')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('delete', request.get('_legacy_controller'))", message: 'You do not have permission to delete this.')]
    public function bulkDeleteAction(\Symfony\Component\HttpFoundation\Request $request, \PrestaShop\PrestaShop\Adapter\Webservice\WebserviceKeyEraser $webserviceEraser): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Enables status for selected rows.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_webservice_keys_index')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))", message: 'You do not have permission to edit this.')]
    public function bulkEnableAction(\Symfony\Component\HttpFoundation\Request $request, \PrestaShop\PrestaShop\Adapter\Webservice\WebserviceKeyStatusModifier $statusModifier): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Disables status for selected rows.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_webservice_keys_index')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))", message: 'You do not have permission to edit this.')]
    public function bulkDisableAction(\Symfony\Component\HttpFoundation\Request $request, \PrestaShop\PrestaShop\Adapter\Webservice\WebserviceKeyStatusModifier $statusModifier): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Toggles webservice account status.
     *
     * @param int $webserviceKeyId
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_webservice_keys_index')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))", message: 'You do not have permission to edit this.')]
    public function toggleStatusAction(int $webserviceKeyId, \PrestaShop\PrestaShop\Adapter\Webservice\WebserviceKeyStatusModifier $statusModifier): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Process the Webservice configuration form.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param \PrestaShop\PrestaShop\Core\Search\Filters\WebserviceKeyFilters $filters
     *
     * @return \Symfony\Component\HttpFoundation\Response|\Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_webservice_keys_index')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('create', request.get('_legacy_controller')) && is_granted('update', request.get('_legacy_controller')) && is_granted('delete', request.get('_legacy_controller'))", message: 'You do not have permission to edit this.')]
    public function saveSettingsAction(
        \Symfony\Component\HttpFoundation\Request $request,
        \PrestaShop\PrestaShop\Core\Search\Filters\WebserviceKeyFilters $filters,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.adapter.webservice.form_handler')]
        \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $formHandler,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.grid.factory.webservice_key')]
        \PrestaShop\PrestaShop\Core\Grid\GridFactoryInterface $gridFactory,
        \PrestaShop\PrestaShop\Core\Webservice\ServerRequirementsCheckerInterface $serverRequirementsChecker,
        \PrestaShopBundle\Form\Admin\Configure\AdvancedParameters\Webservice\WebserviceFormDataProvider $webserviceFormDataProvider
    ): \Symfony\Component\HttpFoundation\Response|\Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    protected function renderPage(\Symfony\Component\HttpFoundation\Request $request, \PrestaShop\PrestaShop\Core\Search\Filters\WebserviceKeyFilters $filters, \Symfony\Component\Form\FormInterface $form, \PrestaShop\PrestaShop\Core\Grid\GridFactoryInterface $gridFactory, \PrestaShop\PrestaShop\Core\Webservice\ServerRequirementsCheckerInterface $serverRequirementsChecker, \PrestaShopBundle\Form\Admin\Configure\AdvancedParameters\Webservice\WebserviceFormDataProvider $webserviceFormDataProvider): \Symfony\Component\HttpFoundation\Response
    {
    }
}

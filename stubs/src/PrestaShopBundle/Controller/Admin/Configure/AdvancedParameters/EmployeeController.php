<?php

namespace PrestaShopBundle\Controller\Admin\Configure\AdvancedParameters;

/**
 * Class EmployeeController handles pages under "Configure > Advanced Parameters > Team > Employees".
 */
class EmployeeController extends \PrestaShopBundle\Controller\Admin\PrestaShopAdminController
{
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))")]
    public function indexAction(
        \Symfony\Component\HttpFoundation\Request $request,
        \PrestaShop\PrestaShop\Core\Search\Filters\EmployeeFilters $filters,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.grid.factory.employee')]
        \PrestaShop\PrestaShop\Core\Grid\GridFactoryInterface $employeeGridFactory,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.admin.employee_options.form_handler')]
        \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $employeeOptionsFormHandler,
        \PrestaShop\PrestaShop\Core\Team\Employee\Configuration\OptionsCheckerInterface $employeeOptionsChecker,
        \PrestaShop\PrestaShop\Core\Util\HelperCard\DocumentationLinkProviderInterface $helperCardDocumentationLinkProvider
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Save employee options.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_employees_index')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller')) && is_granted('create', request.get('_legacy_controller')) && is_granted('delete', request.get('_legacy_controller'))")]
    public function saveOptionsAction(
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.admin.employee_options.form_handler')]
        \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $employeeOptionsFormHandler
    ): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_employees_index')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))", redirectRoute: 'admin_employees_index')]
    public function toggleStatusAction(int $employeeId): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_employees_index')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))")]
    public function bulkStatusEnableAction(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_employees_index')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))")]
    public function bulkStatusDisableAction(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_employees_index')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('delete', request.get('_legacy_controller'))")]
    public function deleteAction(int $employeeId): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_employees_index')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))")]
    public function bulkDeleteAction(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_employees_index')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('create', request.get('_legacy_controller'))")]
    public function createAction(
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.builder.employee_form_builder')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Builder\FormBuilderInterface $formBuilder,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.handler.employee_form_handler')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Handler\FormHandlerInterface $formHandler
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_employees_index')]
    public function editAction(
        int $employeeId,
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.builder.employee_form_builder')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Builder\FormBuilderInterface $formBuilder,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.handler.employee_form_handler')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Handler\FormHandlerInterface $formHandler,
        \PrestaShop\PrestaShop\Core\Employee\Access\EmployeeFormAccessCheckerInterface $formAccessChecker
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    public function toggleNavigationMenuAction(\Symfony\Component\HttpFoundation\Request $request, \PrestaShop\PrestaShop\Core\Employee\NavigationMenuTogglerInterface $navigationMenuToggler): \Symfony\Component\HttpFoundation\Response
    {
    }
    public function changeFormLanguageAction(\Symfony\Component\HttpFoundation\Request $request, \PrestaShop\PrestaShop\Core\Employee\FormLanguageChangerInterface $formLanguageChanger): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Get tabs which are accessible for given profile.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))", redirectRoute: 'admin_employees_index')]
    public function getAccessibleTabsAction(\Symfony\Component\HttpFoundation\Request $request, \PrestaShop\PrestaShop\Adapter\Tab\TabDataProvider $tabDataProvider): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))")]
    public function generatePasswordAction(): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * Get human readable error messages.
     *
     * @param \Exception $e
     *
     * @return array
     */
    protected function getErrorMessages(\Exception $e): array
    {
    }
}

<?php

namespace PrestaShopBundle\Controller\Admin\Configure\AdvancedParameters;

/**
 * Class SecurityController is responsible for displaying the
 * "Configure > Advanced parameters > Security" page.
 */
#[\PrestaShopBundle\Controller\Attribute\AllShopContext]
class SecurityController extends \PrestaShopBundle\Controller\Admin\PrestaShopAdminController
{
    /**
     * Show sessions listing page.
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))")]
    public function indexAction(
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.adapter.security.general.form_handler')]
        \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $generalFormHandler,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.adapter.security.password_policy.form_handler')]
        \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $passwordPolicyFormHandler
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Process the Security general configuration form.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller')) && is_granted('create', request.get('_legacy_controller')) && is_granted('delete', request.get('_legacy_controller'))", redirectRoute: 'admin_security')]
    public function processGeneralFormAction(
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.adapter.security.general.form_handler')]
        \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $generalFormHandler
    ): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Process the Security password policy configuration form.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller')) && is_granted('create', request.get('_legacy_controller')) && is_granted('delete', request.get('_legacy_controller'))", redirectRoute: 'admin_security')]
    public function processPasswordPolicyFormAction(
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.adapter.security.password_policy.form_handler')]
        \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $passwordPolicyFormHandler
    ): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Process the Security configuration form.
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
     * Show Employees sessions listing page.
     *
     * @param \PrestaShop\PrestaShop\Core\Search\Filters\Security\Session\EmployeeFilters $filters
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))")]
    public function employeeSessionAction(
        \Symfony\Component\HttpFoundation\Request $request,
        \PrestaShop\PrestaShop\Core\Search\Filters\Security\Session\EmployeeFilters $filters,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.grid.factory.security.session.employee')]
        \PrestaShop\PrestaShop\Core\Grid\GridFactoryInterface $sessionsEmployeesGridFactory
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Show Customers sessions listing page.
     *
     * @param \PrestaShop\PrestaShop\Core\Search\Filters\Security\Session\CustomerFilters $filters
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))")]
    public function customerSessionAction(
        \Symfony\Component\HttpFoundation\Request $request,
        \PrestaShop\PrestaShop\Core\Search\Filters\Security\Session\CustomerFilters $filters,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.grid.factory.security.session.customer')]
        \PrestaShop\PrestaShop\Core\Grid\GridFactoryInterface $sessionsCustomersGridFactory
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('delete', request.get('_legacy_controller'))")]
    public function clearCustomerSessionAction(): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('delete', request.get('_legacy_controller'))")]
    public function clearEmployeeSessionAction(): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Delete an employee session.
     *
     * @param int $sessionId
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('delete', request.get('_legacy_controller'))", redirectRoute: 'admin_security_sessions_employee_list')]
    public function deleteEmployeeSessionAction(int $sessionId): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Delete a customer session.
     *
     * @param int $sessionId
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('delete', request.get('_legacy_controller'))", redirectRoute: 'admin_security_sessions_customer_list')]
    public function deleteCustomerSessionAction(int $sessionId): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Bulk delete customer session.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('delete', request.get('_legacy_controller'))")]
    public function bulkDeleteCustomerSessionAction(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Bulk delete employee session.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('delete', request.get('_legacy_controller'))")]
    public function bulkDeleteEmployeeSessionAction(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Get human-readable error for exception.
     *
     * @param \Exception $e
     *
     * @return array
     */
    protected function getErrorMessages(\Exception $e): array
    {
    }
}

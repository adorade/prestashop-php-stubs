<?php

namespace PrestaShopBundle\Controller\Admin\Configure\AdvancedParameters;

/**
 * Class SecurityController is responsible for displaying the
 * "Configure > Advanced parameters > Security" page.
 */
class SecurityController extends \PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController
{
    /**
     * Show sessions listing page.
     *
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))")
     *
     * @return Response
     */
    public function indexAction(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Process the Security general configuration form.
     *
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller')) && is_granted('create', request.get('_legacy_controller')) && is_granted('delete', request.get('_legacy_controller'))"
     * )
     *
     * @param Request $request
     *
     * @return RedirectResponse
     */
    public function processGeneralFormAction(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Process the Security password policy configuration form.
     *
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller')) && is_granted('create', request.get('_legacy_controller')) && is_granted('delete', request.get('_legacy_controller'))"
     * )
     *
     * @param Request $request
     *
     * @return RedirectResponse
     */
    public function processPasswordPolicyFormAction(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Process the Security configuration form.
     *
     * @param Request $request
     * @param FormHandlerInterface $formHandler
     * @param string $hookName
     *
     * @return RedirectResponse
     */
    protected function processForm(\Symfony\Component\HttpFoundation\Request $request, \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $formHandler, string $hookName): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Show Employees sessions listing page.
     *
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))")
     *
     * @param EmployeeFilters $filters
     *
     * @return Response
     */
    public function employeeSessionAction(\Symfony\Component\HttpFoundation\Request $request, \PrestaShop\PrestaShop\Core\Search\Filters\Security\Session\EmployeeFilters $filters): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Show Customers sessions listing page.
     *
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))")
     *
     * @param CustomerFilters $filters
     *
     * @return Response
     */
    public function customerSessionAction(\Symfony\Component\HttpFoundation\Request $request, \PrestaShop\PrestaShop\Core\Search\Filters\Security\Session\CustomerFilters $filters): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * @AdminSecurity("is_granted('delete', request.get('_legacy_controller'))")
     *
     * @return RedirectResponse
     */
    public function clearCustomerSessionAction(): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * @AdminSecurity("is_granted('delete', request.get('_legacy_controller'))")
     *
     * @return RedirectResponse
     */
    public function clearEmployeeSessionAction(): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Delete an employee session.
     *
     * @AdminSecurity("is_granted('delete', request.get('_legacy_controller'))")
     *
     * @param int $sessionId
     *
     * @return RedirectResponse
     */
    public function deleteEmployeeSessionAction(int $sessionId): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Delete a customer session.
     *
     * @AdminSecurity("is_granted('delete', request.get('_legacy_controller'))")
     *
     * @param int $sessionId
     *
     * @return RedirectResponse
     */
    public function deleteCustomerSessionAction(int $sessionId): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Bulk delete customer session.
     *
     * @AdminSecurity("is_granted('delete', request.get('_legacy_controller'))")
     *
     * @param Request $request
     *
     * @return RedirectResponse
     */
    public function bulkDeleteCustomerSessionAction(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Bulk delete employee session.
     *
     * @AdminSecurity("is_granted('delete', request.get('_legacy_controller'))")
     *
     * @param Request $request
     *
     * @return RedirectResponse
     */
    public function bulkDeleteEmployeeSessionAction(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Get human readable error for exception.
     *
     * @param Exception $e
     *
     * @return array
     */
    protected function getErrorMessages(\Exception $e): array
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
    protected function getPasswordPolicyFormHandler(): \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface
    {
    }
}

<?php

namespace PrestaShopBundle\Controller\Admin\Configure\AdvancedParameters;

/**
 * Class EmployeeController handles pages under "Configure > Advanced Parameters > Team > Employees".
 */
class EmployeeController extends \PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController
{
    /**
     * Show employees list & options page.
     *
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))")
     *
     * @param Request $request
     * @param EmployeeFilters $filters
     *
     * @return Response
     */
    public function indexAction(\Symfony\Component\HttpFoundation\Request $request, \PrestaShop\PrestaShop\Core\Search\Filters\EmployeeFilters $filters)
    {
    }
    /**
     * Save employee options.
     *
     * @DemoRestricted(redirectRoute="admin_employees_index")
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller')) && is_granted('create', request.get('_legacy_controller')) && is_granted('delete', request.get('_legacy_controller'))"
     * )
     *
     * @param Request $request
     *
     * @return RedirectResponse
     */
    public function saveOptionsAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Toggle given employee status.
     *
     * @DemoRestricted(redirectRoute="admin_employees_index")
     * @AdminSecurity("is_granted('update', request.get('_legacy_controller'))", redirectRoute="admin_employees_index")
     *
     * @param int $employeeId
     *
     * @return RedirectResponse
     */
    public function toggleStatusAction($employeeId)
    {
    }
    /**
     * Bulk enables employee status action.
     *
     * @DemoRestricted(redirectRoute="admin_employees_index")
     * @AdminSecurity("is_granted('update', request.get('_legacy_controller'))")
     *
     * @param Request $request
     *
     * @return RedirectResponse
     */
    public function bulkStatusEnableAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Bulk disables employee status action.
     *
     * @DemoRestricted(redirectRoute="admin_employees_index")
     * @AdminSecurity("is_granted('update', request.get('_legacy_controller'))")
     *
     * @param Request $request
     *
     * @return RedirectResponse
     */
    public function bulkStatusDisableAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Delete employee.
     *
     * @DemoRestricted(redirectRoute="admin_employees_index")
     * @AdminSecurity("is_granted('delete', request.get('_legacy_controller'))")
     *
     * @param int $employeeId
     *
     * @return RedirectResponse
     */
    public function deleteAction($employeeId)
    {
    }
    /**
     * Delete employees in bulk actions.
     *
     * @DemoRestricted(redirectRoute="admin_employees_index")
     * @AdminSecurity("is_granted('update', request.get('_legacy_controller'))")
     *
     * @param Request $request
     *
     * @return RedirectResponse
     */
    public function bulkDeleteAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Show employee creation form page and handle it's submit.
     *
     * @DemoRestricted(redirectRoute="admin_employees_index")
     * @AdminSecurity("is_granted('create', request.get('_legacy_controller'))")
     *
     * @param Request $request
     *
     * @return Response
     */
    public function createAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Show Employee edit page.
     *
     * @DemoRestricted(redirectRoute="admin_employees_index")
     *
     * @param int $employeeId
     * @param Request $request
     *
     * @return Response
     */
    public function editAction($employeeId, \Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Change navigation menu status for employee.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function toggleNavigationMenuAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Change employee form language.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function changeFormLanguageAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Get tabs which are accessible for given profile.
     *
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller'))",
     *     redirectRoute="admin_employees_index"
     * )
     *
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function getAccessibleTabsAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * @return FormBuilderInterface
     */
    protected function getEmployeeFormBuilder()
    {
    }
    /**
     * @return FormHandler
     */
    protected function getEmployeeFormHandler()
    {
    }
    /**
     * Get human readable error messages.
     *
     * @param Exception $e
     *
     * @return array
     */
    protected function getErrorMessages(\Exception $e)
    {
    }
}

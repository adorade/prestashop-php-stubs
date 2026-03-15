<?php

namespace PrestaShopBundle\Controller\Admin\Improve\International;

/**
 * Responsible for handling country states data
 */
class StateController extends \PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController
{
    /**
     * Provides country states in json response
     *
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function getStatesAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Show states listing page
     *
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))")
     *
     * @param Request $request
     * @param StateFilters $filters
     *
     * @return Response
     */
    public function indexAction(\Symfony\Component\HttpFoundation\Request $request, \PrestaShop\PrestaShop\Core\Search\Filters\StateFilters $filters): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Deletes state
     *
     * @AdminSecurity("is_granted('delete', request.get('_legacy_controller'))", redirectRoute="admin_states_index")
     * @DemoRestricted(redirectRoute="admin_states_index")
     *
     * @param int $stateId
     *
     * @return RedirectResponse
     */
    public function deleteAction(int $stateId): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Handles edit form rendering and submission
     *
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller'))",
     *     redirectRoute="admin_states_index"
     * )
     *
     * @param int $stateId
     * @param Request $request
     *
     * @return Response
     */
    public function editAction(int $stateId, \Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Show "Add new" form and handle form submit.
     *
     * @AdminSecurity(
     *     "is_granted('create', request.get('_legacy_controller'))",
     *     redirectRoute="admin_states_index",
     *     message="You do not have permission to create this."
     * )
     *
     * @param Request $request
     *
     * @return Response
     */
    public function createAction(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Toggles state status
     *
     * @AdminSecurity("is_granted('update', request.get('_legacy_controller'))", redirectRoute="admin_states_index")
     * @DemoRestricted(redirectRoute="admin_states_index")
     *
     * @param int $stateId
     *
     * @return JsonResponse
     */
    public function toggleStatusAction(int $stateId): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * Delete states in bulk action.
     *
     * @AdminSecurity(
     *     "is_granted('delete', request.get('_legacy_controller'))",
     *     redirectRoute="admin_states_index",
     *     message="You do not have permission to delete this."
     * )
     *
     * @param Request $request
     *
     * @return RedirectResponse
     */
    public function deleteBulkAction(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Enables states on bulk action
     *
     * @AdminSecurity("is_granted('update', request.get('_legacy_controller'))", redirectRoute="admin_states_index")
     * @DemoRestricted(redirectRoute="admin_states_index")
     *
     * @param Request $request
     *
     * @return RedirectResponse
     */
    public function bulkEnableAction(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Disables states on bulk action
     *
     * @AdminSecurity("is_granted('update', request.get('_legacy_controller'))", redirectRoute="admin_states_index")
     * @DemoRestricted(redirectRoute="admin_states_index")
     *
     * @param Request $request
     *
     * @return RedirectResponse
     */
    public function bulkDisableAction(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
}

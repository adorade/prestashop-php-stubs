<?php

namespace PrestaShopBundle\Controller\Admin\Sell\CustomerService;

/**
 * Manages page under "Sell > Customer Service > Customer Service"
 */
class CustomerThreadController extends \PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController
{
    /**
     * Show list of customer threads
     *
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))")
     *
     * @param Request $request
     * @param CustomerThreadFilter $filters
     *
     * @return Response
     */
    public function indexAction(\Symfony\Component\HttpFoundation\Request $request, \PrestaShop\PrestaShop\Core\Search\Filters\CustomerThreadFilter $filters): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * View customer thread
     *
     * @AdminSecurity(
     *     "is_granted('read', request.get('_legacy_controller'))",
     *     message="You do not have permission to view this.",
     *     redirectRoute="admin_customer_threads_index"
     * )
     *
     * @param Request $request
     * @param int $customerThreadId
     *
     * @return Response
     */
    public function viewAction(\Symfony\Component\HttpFoundation\Request $request, int $customerThreadId)
    {
    }
    /**
     * Reply to customer thread
     *
     * @AdminSecurity(
     *     "is_granted('create', request.get('_legacy_controller')) && is_granted('update', request.get('_legacy_controller'))",
     *     message="You do not have permission to update this.",
     *     redirectRoute="admin_customer_threads_index"
     * )
     *
     * @param Request $request
     * @param int $customerThreadId
     *
     * @return RedirectResponse
     */
    public function replyAction(\Symfony\Component\HttpFoundation\Request $request, $customerThreadId)
    {
    }
    /**
     * Update customer thread status
     *
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller'))",
     *     message="You do not have permission to update this.",
     *     redirectRoute="admin_customer_threads_index"
     * )
     *
     * @param int $customerThreadId
     * @param Request $request
     *
     * @return RedirectResponse
     */
    public function updateStatusFromViewAction(int $customerThreadId, \Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Updates customer thread status directly from list page.
     *
     * @param int $customerThreadId
     * @param Request $request
     *
     * @AdminSecurity("is_granted('update', request.get('_legacy_controller'))", redirectRoute="admin_customer_threads")
     *
     * @return RedirectResponse
     */
    public function updateStatusFromListAction(int $customerThreadId, \Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Forward customer thread to another employee
     *
     * @AdminSecurity(
     *     "is_granted('create', request.get('_legacy_controller')) && is_granted('update', request.get('_legacy_controller'))",
     *     message="You do not have permission to update this.",
     *     redirectRoute="admin_customer_threads_index"
     * )
     *
     * @param Request $request
     * @param int $customerThreadId
     *
     * @return RedirectResponse
     */
    public function forwardAction(\Symfony\Component\HttpFoundation\Request $request, $customerThreadId)
    {
    }
    /**
     * Delete customer thread
     *
     * @AdminSecurity(
     *     "is_granted('delete', request.get('_legacy_controller'))",
     *     redirectRoute="admin_customer_threads"
     * )
     *
     * @param int $customerThreadId
     *
     * @return RedirectResponse
     */
    public function deleteAction(int $customerThreadId): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Bulk delete customer thread
     *
     * @AdminSecurity(
     *     "is_granted('delete', request.get('_legacy_controller'))",
     *     redirectRoute="admin_customer_threads"
     * )
     *
     * @param Request $request
     *
     * @return RedirectResponse
     */
    public function bulkDeleteAction(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
}

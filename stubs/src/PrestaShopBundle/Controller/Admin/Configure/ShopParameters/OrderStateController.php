<?php

namespace PrestaShopBundle\Controller\Admin\Configure\ShopParameters;

/**
 * Controller responsible of "Configure > Shop Parameters > Order states Settings" page.
 */
class OrderStateController extends \PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController
{
    /**
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))")
     *
     * @return Response
     */
    public function indexAction(\Symfony\Component\HttpFoundation\Request $request, \PrestaShop\PrestaShop\Core\Search\Filters\OrderStatesFilters $orderStatesFilters, \PrestaShop\PrestaShop\Core\Search\Filters\OrderReturnStatesFilters $orderReturnStatesFilters)
    {
    }
    /**
     * Process Grid search.
     *
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))")
     *
     * @return RedirectResponse
     */
    public function searchGridAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Show order_state create form & handle processing of it.
     *
     * @AdminSecurity("is_granted('create', request.get('_legacy_controller'))")
     *
     * @return Response
     */
    public function createAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Show order_state edit form & handle processing of it.
     *
     * @AdminSecurity("is_granted('update', request.get('_legacy_controller'))")
     *
     * @return Response
     */
    public function editAction(int $orderStateId, \Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Show order return state create form & handle processing of it.
     *
     * @AdminSecurity("is_granted('create', request.get('_legacy_controller'))")
     *
     * @return Response
     */
    public function createOrderReturnStateAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Show order return state edit form & handle processing of it.
     *
     * @AdminSecurity("is_granted('update', request.get('_legacy_controller'))")
     *
     * @return Response
     */
    public function editOrderReturnStateAction(int $orderReturnStateId, \Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Deletes order return state
     *
     * @AdminSecurity("is_granted('delete', request.get('_legacy_controller'))", redirectRoute="admin_order_states")
     *
     * @param int $orderReturnStateId
     *
     * @return RedirectResponse
     */
    public function deleteOrderReturnStateAction(\Symfony\Component\HttpFoundation\Request $request, int $orderReturnStateId): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Delete order return states in bulk action.
     *
     * @AdminSecurity(
     *     "is_granted('delete', request.get('_legacy_controller'))",
     *     redirectRoute="admin_order_states",
     *     message="You do not have permission to delete this."
     * )
     *
     * @param Request $request
     *
     * @return RedirectResponse
     */
    public function deleteOrderReturnStateBulkAction(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Toggle order state delivery option.
     *
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller'))",
     *     redirectRoute="admin_order_states",
     *     message="You do not have permission to edit this."
     * )
     *
     * @param int $orderStateId
     *
     * @return RedirectResponse
     */
    public function toggleDeliveryAction($orderStateId)
    {
    }
    /**
     * Toggle order state invoice option.
     *
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller'))",
     *     redirectRoute="admin_order_states",
     *     message="You do not have permission to edit this."
     * )
     *
     * @param int $orderStateId
     *
     * @return RedirectResponse
     */
    public function toggleInvoiceAction($orderStateId)
    {
    }
    /**
     * Toggle order state send_email option.
     *
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller'))",
     *     redirectRoute="admin_order_states",
     *     message="You do not have permission to edit this."
     * )
     *
     * @param int $orderStateId
     *
     * @return RedirectResponse
     */
    public function toggleSendEmailAction($orderStateId)
    {
    }
    /**
     * Deletes order state
     *
     * @AdminSecurity("is_granted('delete', request.get('_legacy_controller'))", redirectRoute="admin_order_states")
     *
     * @param int $orderStateId
     *
     * @return RedirectResponse
     */
    public function deleteAction(\Symfony\Component\HttpFoundation\Request $request, int $orderStateId): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Delete order states in bulk action.
     *
     * @AdminSecurity(
     *     "is_granted('delete', request.get('_legacy_controller'))",
     *     redirectRoute="admin_order_states",
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
}

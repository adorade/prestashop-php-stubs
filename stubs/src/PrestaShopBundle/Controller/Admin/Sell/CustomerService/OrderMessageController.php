<?php

namespace PrestaShopBundle\Controller\Admin\Sell\CustomerService;

/**
 * Manages page under "Sell > Customer Service > Order Messages"
 */
class OrderMessageController extends \PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController
{
    /**
     * Show list of Order messages
     *
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))")
     *
     * @param OrderMessageFilters $filters
     * @param Request $request
     *
     * @return Response
     */
    public function indexAction(\PrestaShop\PrestaShop\Core\Search\Filters\OrderMessageFilters $filters, \Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Create new order message
     *
     * @AdminSecurity(
     *     "is_granted('create', request.get('_legacy_controller'))",
     *     redirectRoute="admin_order_messages_index"
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
     * Edit existing order message
     *
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller'))",
     *     redirectRoute="admin_order_messages_index"
     * )
     *
     * @param int $orderMessageId
     * @param Request $request
     *
     * @return Response
     */
    public function editAction(int $orderMessageId, \Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Delete single order message
     *
     * @AdminSecurity(
     *     "is_granted('delete', request.get('_legacy_controller'))",
     *     redirectRoute="admin_order_messages_index"
     * )
     *
     * @param int $orderMessageId
     *
     * @return RedirectResponse
     */
    public function deleteAction(int $orderMessageId): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Delete order messages in bulk action
     *
     * @AdminSecurity(
     *     "is_granted('delete', request.get('_legacy_controller'))",
     *     redirectRoute="admin_order_messages_index"
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

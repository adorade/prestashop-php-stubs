<?php

namespace PrestaShopBundle\Controller\Admin\Sell\Order;

/**
 * Manages "Sell > Orders" page
 */
class OrderController extends \PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController
{
    /**
     * Default number of products per page (in case invalid value is used)
     */
    public const DEFAULT_PRODUCTS_NUMBER = 8;
    /**
     * Options used for the number of products per page
     */
    public const PRODUCTS_PAGINATION_OPTIONS = [8, 20, 50, 100];
    /**
     * Shows list of orders
     *
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))")
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param \PrestaShop\PrestaShop\Core\Search\Filters\OrderFilters $filters
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(\Symfony\Component\HttpFoundation\Request $request, \PrestaShop\PrestaShop\Core\Search\Filters\OrderFilters $filters)
    {
    }
    /**
     * Places an order from BO
     *
     * @AdminSecurity("is_granted('create', request.get('_legacy_controller'))")
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function placeAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Renders create order page.
     * Whole page dynamics are on javascript side.
     * To load specific cart pass cartId to url query params (handled by javascript)
     *
     * @AdminSecurity("is_granted('create', request.get('_legacy_controller'))")
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function createAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))", redirectRoute="admin_orders_index")
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function searchAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Generates invoice PDF for given order
     *
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))", redirectRoute="admin_orders_index")
     *
     * @param int $orderId
     */
    public function generateInvoicePdfAction($orderId)
    {
    }
    /**
     * Generates delivery slip PDF for given order
     *
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))", redirectRoute="admin_orders_index")
     *
     * @param int $orderId
     */
    public function generateDeliverySlipPdfAction($orderId)
    {
    }
    /**
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @AdminSecurity("is_granted('update', request.get('_legacy_controller'))", redirectRoute="admin_orders_index")
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function changeOrdersStatusAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))", redirectRoute="admin_orders_index")
     *
     * @param \PrestaShop\PrestaShop\Core\Search\Filters\OrderFilters $filters
     *
     * @return \PrestaShopBundle\Component\CsvResponse
     */
    public function exportAction(\PrestaShop\PrestaShop\Core\Search\Filters\OrderFilters $filters)
    {
    }
    /**
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))")
     *
     * @param int $orderId
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function viewAction(int $orderId, \Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller')) && is_granted('delete', request.get('_legacy_controller'))",
     *     redirectRoute="admin_orders_view",
     *     redirectQueryParamsToKeep={"orderId"},
     *     message="You do not have permission to edit this."
     * )
     *
     * @param int $orderId
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function partialRefundAction(int $orderId, \Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller')) && is_granted('delete', request.get('_legacy_controller'))"
     * )
     *
     * @param int $orderId
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function standardRefundAction(int $orderId, \Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller')) && is_granted('delete', request.get('_legacy_controller'))"
     * )
     *
     * @param int $orderId
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function returnProductAction(int $orderId, \Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * @AdminSecurity("is_granted('create', request.get('_legacy_controller'))", redirectRoute="admin_orders_index")
     *
     * @param int $orderId
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function addProductAction(int $orderId, \Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))", redirectRoute="admin_orders_index")
     *
     * @param int $orderId
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function getProductPricesAction(int $orderId): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))", redirectRoute="admin_orders_index")
     *
     * @param int $orderId
     */
    public function getInvoicesAction(int $orderId)
    {
    }
    /**
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))", redirectRoute="admin_orders_index")
     *
     * @param int $orderId
     */
    public function getDocumentsAction(int $orderId)
    {
    }
    /**
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))", redirectRoute="admin_orders_index")
     *
     * @param int $orderId
     */
    public function getShippingAction(int $orderId)
    {
    }
    /**
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller'))",
     *     redirectRoute="admin_orders_view",
     *     redirectQueryParamsToKeep={"orderId"},
     *     message="You do not have permission to edit this."
     * )
     *
     * @param int $orderId
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function updateShippingAction(int $orderId, \Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * @AdminSecurity(
     *     "is_granted('update', 'AdminOrders')",
     *     redirectRoute="admin_orders_view",
     *     redirectQueryParamsToKeep={"orderId"},
     *     message="You do not have permission to edit this."
     * )
     *
     * @param int $orderId
     * @param int $orderCartRuleId
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function removeCartRuleAction(int $orderId, int $orderCartRuleId): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * @AdminSecurity(
     *     "is_granted('update', 'AdminOrders')",
     *     redirectRoute="admin_orders_view",
     *     redirectQueryParamsToKeep={"orderId"},
     *     message="You do not have permission to edit this."
     * )
     *
     * @param int $orderId
     * @param int $orderInvoiceId
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function updateInvoiceNoteAction(int $orderId, int $orderInvoiceId, \Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * @AdminSecurity("is_granted('update', request.get('_legacy_controller'))", redirectRoute="admin_orders_index")
     *
     * @param int $orderId
     * @param int $orderDetailId
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function updateProductAction(int $orderId, int $orderDetailId, \Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * @AdminSecurity(
     *     "is_granted('update', 'AdminOrders')",
     *     redirectRoute="admin_orders_view",
     *     redirectQueryParamsToKeep={"orderId"},
     *     message="You do not have permission to edit this."
     * )
     *
     * @param int $orderId
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function addCartRuleAction(int $orderId, \Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * @param int $orderId
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @AdminSecurity("is_granted('update', request.get('_legacy_controller'))", redirectRoute="admin_orders_index")
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function updateStatusAction(int $orderId, \Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Updates order status directly from list page.
     *
     * @param int $orderId
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @AdminSecurity("is_granted('update', request.get('_legacy_controller'))", redirectRoute="admin_orders_index")
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function updateStatusFromListAction(int $orderId, \Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * @AdminSecurity(
     *     "is_granted('update', 'AdminOrders')",
     *     redirectRoute="admin_orders_view",
     *     redirectQueryParamsToKeep={"orderId"},
     *     message="You do not have permission to edit this."
     * )
     *
     * @param int $orderId
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function addPaymentAction(int $orderId, \Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))")
     *
     * @param int $orderId
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function previewAction(int $orderId): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * Duplicates cart from specified order
     *
     * @AdminSecurity("is_granted('update', request.get('_legacy_controller')) || is_granted('create', 'AdminOrders')")
     *
     * @param int $orderId
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function duplicateOrderCartAction(int $orderId)
    {
    }
    /**
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller'))",
     *     redirectRoute="admin_orders_view",
     *     redirectQueryParamsToKeep={"orderId"},
     *     message="You do not have permission to edit this."
     * )
     * @DemoRestricted(
     *     redirectRoute="admin_orders_view",
     *     redirectQueryParamsToKeep={"orderId"}
     * )
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param int $orderId
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function sendMessageAction(\Symfony\Component\HttpFoundation\Request $request, int $orderId): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * @AdminSecurity(
     *     "is_granted('update', 'AdminOrders')",
     *     redirectRoute="admin_orders_view",
     *     redirectQueryParamsToKeep={"orderId"},
     *     message="You do not have permission to edit this."
     * )
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function changeCustomerAddressAction(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller'))",
     *     redirectRoute="admin_orders_view",
     *     redirectQueryParamsToKeep={"orderId"},
     *     message="You do not have permission to edit this."
     * )
     *
     * @param int $orderId
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function changeCurrencyAction(int $orderId, \Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * @AdminSecurity(
     *     "is_granted('update', 'AdminOrders')",
     *     redirectRoute="admin_orders_view",
     *     redirectQueryParamsToKeep={"orderId"},
     *     message="You do not have permission to edit this."
     * )
     *
     * @param int $orderId
     * @param int $orderStatusId
     * @param int $orderHistoryId
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function resendEmailAction(int $orderId, int $orderStatusId, int $orderHistoryId): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * @AdminSecurity("is_granted('delete', request.get('_legacy_controller'))", redirectRoute="admin_orders_index")
     *
     * @param int $orderId
     * @param int $orderDetailId
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function deleteProductAction(int $orderId, int $orderDetailId): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))", redirectRoute="admin_orders_index")
     *
     * @param int $orderId
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function getDiscountsAction(int $orderId): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))", redirectRoute="admin_orders_index")
     *
     * @param int $orderId
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function getPricesAction(int $orderId): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))", redirectRoute="admin_orders_index")
     *
     * @param int $orderId
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function getPaymentsAction(int $orderId): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))", redirectRoute="admin_orders_index")
     *
     * @param int $orderId
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function getProductsListAction(int $orderId): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller'))",
     *     message="You do not have permission to generate this."
     * )
     *
     * Generates invoice for given order
     *
     * @param int $orderId
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function generateInvoiceAction(int $orderId): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Sends email with process order link to customer
     *
     * @AdminSecurity("is_granted('update', request.get('_legacy_controller')) || is_granted('create', 'AdminOrders')")
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function sendProcessOrderEmailAction(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller')) && is_granted('delete', request.get('_legacy_controller'))",
     *     redirectRoute="admin_orders_view",
     *     redirectQueryParamsToKeep={"orderId"},
     *     message="You do not have permission to edit this."
     * )
     *
     * @param int $orderId
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function cancellationAction(int $orderId, \Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * @AdminSecurity("is_granted('update', request.get('_legacy_controller'))")
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function configureProductPaginationAction(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * Method for downloading customization picture
     *
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))")
     *
     * @param int $orderId
     * @param string $value
     *
     * @return \Symfony\Component\HttpFoundation\BinaryFileResponse|\Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function displayCustomizationImageAction(int $orderId, string $value)
    {
    }
    /**
     * Set order internal note.
     *
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller')) && is_granted('create', request.get('_legacy_controller'))",
     *     redirectRoute="admin_orders_index"
     * )
     *
     * @param mixed $orderId
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function setInternalNoteAction($orderId, \Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * @AdminSecurity(
     *     "is_granted('create', request.get('_legacy_controller')) && is_granted('update', request.get('_legacy_controller'))",
     *     message="You do not have permission to perform this search."
     * )
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function searchProductsAction(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
}

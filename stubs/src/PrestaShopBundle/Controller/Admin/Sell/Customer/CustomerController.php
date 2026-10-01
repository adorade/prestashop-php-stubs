<?php

namespace PrestaShopBundle\Controller\Admin\Sell\Customer;

/**
 * Class CustomerController manages "Sell > Customers" page.
 */
class CustomerController extends \PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController
{
    /**
     * Show customers listing.
     *
     * @AdminSecurity(
     *     "is_granted('read', request.get('_legacy_controller'))",
     *     redirectRoute="admin_customers_index",
     *     message="You do not have permission to view this."
     * )
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param \PrestaShop\PrestaShop\Core\Search\Filters\CustomerFilters $filters
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(\Symfony\Component\HttpFoundation\Request $request, \PrestaShop\PrestaShop\Core\Search\Filters\CustomerFilters $filters)
    {
    }
    /**
     * @deprecated since 1.7.8 and will be removed in next major. Use CommonController:searchGridAction instead
     *
     * Process Grid search.
     *
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))")
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function searchGridAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Show customer create form & handle processing of it.
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
     * Show customer edit form & handle processing of it.
     *
     * @AdminSecurity("is_granted('update', request.get('_legacy_controller'))")
     *
     * @param int $customerId
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function editAction($customerId, \Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * View customer information.
     *
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))", redirectRoute="admin_customers_index")
     * @DemoRestricted(redirectRoute="admin_customers_index")
     *
     * @param int $customerId
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param \PrestaShop\PrestaShop\Core\Search\Filters\CustomerDiscountFilters $customerDiscountFilters
     * @param \PrestaShop\PrestaShop\Core\Search\Filters\CustomerAddressFilters $customerAddressFilters
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function viewAction($customerId, \Symfony\Component\HttpFoundation\Request $request, \PrestaShop\PrestaShop\Core\Search\Filters\CustomerDiscountFilters $customerDiscountFilters, \PrestaShop\PrestaShop\Core\Search\Filters\CustomerAddressFilters $customerAddressFilters)
    {
    }
    /**
     * Set private note about customer.
     *
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller')) && is_granted('create', request.get('_legacy_controller'))",
     *      redirectRoute="admin_customers_index"
     * )
     *
     * @param int $customerId
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function setPrivateNoteAction($customerId, \Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Transforms guest to customer
     *
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller')) && is_granted('create', request.get('_legacy_controller'))",
     *      redirectRoute="admin_customers_index"
     * )
     *
     * @param int $customerId
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function transformGuestToCustomerAction($customerId, \Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Sets required fields for customer
     *
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller')) && is_granted('create', request.get('_legacy_controller'))",
     *      redirectRoute="admin_customers_index"
     * )
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function setRequiredFieldsAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Search for customers by query.
     *
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller')) || is_granted('create', 'AdminOrders')")
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function searchAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Provides customer information for address creation in json format
     *
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))")
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function getCustomerInformationAction(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Toggle customer status.
     *
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller'))",
     *     redirectRoute="admin_customers_index",
     *     message="You do not have permission to edit this."
     * )
     *
     * @param int $customerId
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function toggleStatusAction($customerId)
    {
    }
    /**
     * Toggle customer newsletter subscription status.
     *
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller'))",
     *     redirectRoute="admin_customers_index",
     *     message="You do not have permission to edit this."
     * )
     *
     * @param int $customerId
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function toggleNewsletterSubscriptionAction($customerId)
    {
    }
    /**
     * Toggle customer partner offer subscription status.
     *
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller'))",
     *     redirectRoute="admin_customers_index",
     *     message="You do not have permission to edit this."
     * )
     *
     * @param int $customerId
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function togglePartnerOfferSubscriptionAction($customerId)
    {
    }
    /**
     * Delete customers in bulk action.
     *
     * @AdminSecurity(
     *     "is_granted('delete', request.get('_legacy_controller'))",
     *     redirectRoute="admin_customers_index",
     *     message="You do not have permission to delete this."
     * )
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function deleteBulkAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Delete customer.
     *
     * @AdminSecurity(
     *     "is_granted('delete', request.get('_legacy_controller'))",
     *     redirectRoute="admin_customers_index",
     *     message="You do not have permission to delete this."
     * )
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function deleteAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Enable customers in bulk action.
     *
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller'))",
     *     redirectRoute="admin_customers_index",
     *     message="You do not have permission to edit this."
     * )
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function enableBulkAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Disable customers in bulk action.
     *
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller'))",
     *     redirectRoute="admin_customers_index",
     *     message="You do not have permission to edit this."
     * )
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function disableBulkAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Export filtered customers
     *
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))")
     *
     * @param \PrestaShop\PrestaShop\Core\Search\Filters\CustomerFilters $filters
     *
     * @return \PrestaShopBundle\Component\CsvResponse
     */
    public function exportAction(\PrestaShop\PrestaShop\Core\Search\Filters\CustomerFilters $filters)
    {
    }
    /**
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller')) || is_granted('create', 'AdminOrders')")
     *
     * @param int $customerId
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function getCartsAction(int $customerId)
    {
    }
    /**
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller')) || is_granted('create', 'AdminOrders')")
     *
     * @param int $customerId
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function getOrdersAction(int $customerId)
    {
    }
}

<?php

namespace PrestaShopBundle\Controller\Admin\Sell\Address;

/**
 * Class manages "Sell > Customers > Addresses" page.
 */
class AddressController extends \PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController
{
    /**
     * Show addresses listing page
     *
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))")
     *
     * @param Request $request
     * @param AddressFilters $filters
     *
     * @return Response
     */
    public function indexAction(\Symfony\Component\HttpFoundation\Request $request, \PrestaShop\PrestaShop\Core\Search\Filters\AddressFilters $filters): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Process addresses required fields configuration form.
     *
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller')) && is_granted('create', request.get('_legacy_controller')) && is_granted('delete', request.get('_legacy_controller'))",
     *     redirectRoute="admin_addresses_index"
     * )
     *
     * @param Request $request
     *
     * @return RedirectResponse
     *
     * @throws Exception
     */
    public function saveRequiredFieldsAction(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Deletes address
     *
     * @AdminSecurity("is_granted('delete', request.get('_legacy_controller'))", redirectRoute="admin_addresses_index")
     *
     * @param int $addressId
     *
     * @return RedirectResponse
     */
    public function deleteAction(\Symfony\Component\HttpFoundation\Request $request, int $addressId): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Delete addresses in bulk action.
     *
     * @AdminSecurity(
     *     "is_granted('delete', request.get('_legacy_controller'))",
     *     redirectRoute="admin_addresses_index",
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
     * Show "Add new" form and handle form submit.
     *
     * @AdminSecurity(
     *     "is_granted('create', request.get('_legacy_controller'))",
     *     redirectRoute="admin_addresses_index",
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
     * Handles edit form rendering and submission
     *
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller'))",
     *     redirectRoute="admin_addresses_index"
     * )
     *
     * @param int $addressId
     * @param Request $request
     *
     * @return Response
     */
    public function editAction(int $addressId, \Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Handles edit form rendering and submission for order address
     *
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller'))",
     *     redirectRoute="admin_orders_index"
     * )
     *
     * @param int $orderId
     * @param string $addressType
     * @param Request $request
     *
     * @return Response
     */
    public function editOrderAddressAction(int $orderId, string $addressType, \Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Handles edit form rendering and submission for cart address
     *
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller'))",
     *     redirectRoute="admin_orders_index"
     * )
     *
     * @param int $cartId
     * @param string $addressType
     * @param Request $request
     *
     * @return Response
     */
    public function editCartAddressAction(int $cartId, string $addressType, \Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\Response
    {
    }
}

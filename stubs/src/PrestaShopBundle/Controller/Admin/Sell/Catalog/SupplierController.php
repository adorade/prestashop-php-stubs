<?php

namespace PrestaShopBundle\Controller\Admin\Sell\Catalog;

/**
 * Class SupplierController is responsible for "Sell > Catalog > Brands & Suppliers > Suppliers" page.
 */
class SupplierController extends \PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController
{
    /**
     * Show suppliers listing.
     *
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))")
     *
     * @param Request $request
     * @param SupplierFilters $filters
     *
     * @return Response
     */
    public function indexAction(\Symfony\Component\HttpFoundation\Request $request, \PrestaShop\PrestaShop\Core\Search\Filters\SupplierFilters $filters)
    {
    }
    /**
     * Displays supplier creation form and handles form submit which creates new supplier.
     *
     * @AdminSecurity(
     *     "is_granted('create', request.get('_legacy_controller'))",
     *     redirectRoute="admin_suppliers_index",
     *     message="You do not have permission to add this."
     * )
     *
     * @param Request $request
     *
     * @return Response
     */
    public function createAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Deletes supplier.
     *
     * @AdminSecurity(
     *     "is_granted('delete', request.get('_legacy_controller'))",
     *     redirectRoute="admin_suppliers_index",
     *     message="You do not have permission to delete this."
     * )
     * @DemoRestricted(
     *     redirectRoute="admin_suppliers_index"
     * )
     *
     * @param int $supplierId
     *
     * @return RedirectResponse
     */
    public function deleteAction($supplierId)
    {
    }
    /**
     * Bulk deletion of suppliers.
     *
     * @AdminSecurity(
     *     "is_granted('delete', request.get('_legacy_controller'))",
     *     redirectRoute="admin_suppliers_index",
     *     message="You do not have permission to delete this."
     * )
     * @DemoRestricted(
     *     redirectRoute="admin_suppliers_index"
     * )
     *
     * @param Request $request
     *
     * @return RedirectResponse
     */
    public function bulkDeleteAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Bulk disables supplier statuses.
     *
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller'))",
     *     redirectRoute="admin_suppliers_index",
     *     message="You do not have permission to edit this."
     * )
     * @DemoRestricted(
     *     redirectRoute="admin_suppliers_index"
     * )
     *
     * @param Request $request
     *
     * @return RedirectResponse
     */
    public function bulkDisableAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Bulk enables supplier statuses.
     *
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller'))",
     *     redirectRoute="admin_suppliers_index",
     *     message="You do not have permission to edit this."
     * )
     * @DemoRestricted(
     *     redirectRoute="admin_suppliers_index"
     * )
     *
     * @param Request $request
     *
     * @return RedirectResponse
     */
    public function bulkEnableAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Displays edit supplier form and submits form.
     *
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller'))",
     *     redirectRoute="admin_suppliers_index",
     *     message="You do not have permission to edit this."
     * )
     *
     * @param Request $request
     * @param int $supplierId
     *
     * @return Response
     */
    public function editAction(\Symfony\Component\HttpFoundation\Request $request, $supplierId)
    {
    }
    /**
     * Toggles supplier active status.
     *
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller'))",
     *     redirectRoute="admin_suppliers_index",
     *     message="You do not have permission to edit this."
     * )
     * @DemoRestricted(
     *     redirectRoute="admin_suppliers_index"
     * )
     *
     * @param int $supplierId
     *
     * @return RedirectResponse
     */
    public function toggleStatusAction($supplierId)
    {
    }
    /**
     * Views supplier products information.
     *
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))")
     *
     * @param Request $request
     * @param int $supplierId
     *
     * @return Response
     */
    public function viewAction(\Symfony\Component\HttpFoundation\Request $request, $supplierId)
    {
    }
    /**
     * Exports to csv visible suppliers list data.
     *
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))")
     *
     * @param SupplierFilters $filters
     *
     * @return CsvResponse
     */
    public function exportAction(\PrestaShop\PrestaShop\Core\Search\Filters\SupplierFilters $filters)
    {
    }
    /**
     * Deletes supplier logo image.
     *
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller'))",
     *     message="You do not have permission to edit this.",
     *     redirectRoute="admin_suppliers_edit",
     *     redirectQueryParamsToKeep={"supplierId"}
     * )
     *
     * @param Request $request
     * @param int $supplierId
     *
     * @return RedirectResponse
     */
    public function deleteLogoImageAction(\Symfony\Component\HttpFoundation\Request $request, int $supplierId): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * @return string
     */
    protected function getSettingsTipMessage()
    {
    }
}

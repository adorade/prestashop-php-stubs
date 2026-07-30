<?php

namespace PrestaShopBundle\Controller\Admin\Sell\Catalog;

/**
 * Manages "Sell > Catalog > Brands & Suppliers > Brands" page
 */
class ManufacturerController extends \PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController
{
    /**
     * Show manufacturers listing page.
     *
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))")
     *
     * @return Response
     */
    public function indexAction(\Symfony\Component\HttpFoundation\Request $request, \PrestaShop\PrestaShop\Core\Search\Filters\ManufacturerFilters $manufacturerFilters, \PrestaShop\PrestaShop\Core\Search\Filters\ManufacturerAddressFilters $manufacturerAddressFilters)
    {
    }
    /**
     * Provides filters functionality
     *
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))")
     *
     * @return RedirectResponse
     */
    public function searchAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Show & process manufacturer creation.
     *
     * @AdminSecurity(
     *     "is_granted('create', request.get('_legacy_controller'))"
     * )
     *
     * @return Response
     */
    public function createAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * View single manufacturer details
     *
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))")
     *
     * @param int $manufacturerId
     *
     * @return Response
     */
    public function viewAction(\Symfony\Component\HttpFoundation\Request $request, $manufacturerId)
    {
    }
    /**
     * Show & process manufacturer editing.
     *
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller'))"
     * )
     *
     * @param int $manufacturerId
     *
     * @return Response
     */
    public function editAction(\Symfony\Component\HttpFoundation\Request $request, $manufacturerId)
    {
    }
    /**
     * Deletes manufacturer
     *
     * @AdminSecurity("is_granted('delete', request.get('_legacy_controller'))", redirectRoute="admin_manufacturers_index")
     * @DemoRestricted(redirectRoute="admin_manufacturers_index")
     *
     * @param int|string $manufacturerId
     *
     * @return RedirectResponse
     */
    public function deleteAction($manufacturerId)
    {
    }
    /**
     * Deletes manufacturers on bulk action
     *
     * @AdminSecurity("is_granted('delete', request.get('_legacy_controller'))", redirectRoute="admin_manufacturers_index")
     * @DemoRestricted(redirectRoute="admin_manufacturers_index")
     *
     * @return RedirectResponse
     */
    public function bulkDeleteAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Enables manufacturers on bulk action
     *
     * @AdminSecurity("is_granted('update', request.get('_legacy_controller'))", redirectRoute="admin_manufacturers_index")
     * @DemoRestricted(redirectRoute="admin_manufacturers_index")
     *
     * @return RedirectResponse
     */
    public function bulkEnableAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Disables manufacturers on bulk action
     *
     * @AdminSecurity("is_granted('update', request.get('_legacy_controller'))", redirectRoute="admin_manufacturers_index")
     * @DemoRestricted(redirectRoute="admin_manufacturers_index")
     *
     * @return RedirectResponse
     */
    public function bulkDisableAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Toggles manufacturer status
     *
     * @AdminSecurity("is_granted('update', request.get('_legacy_controller'))", redirectRoute="admin_manufacturers_index")
     * @DemoRestricted(redirectRoute="admin_manufacturers_index")
     *
     * @param int $manufacturerId
     *
     * @return RedirectResponse
     */
    public function toggleStatusAction($manufacturerId)
    {
    }
    /**
     * Export filtered manufacturers.
     *
     * @AdminSecurity(
     *     "is_granted('read', request.get('_legacy_controller')) && is_granted('update', request.get('_legacy_controller')) && is_granted('create', request.get('_legacy_controller')) && is_granted('delete', request.get('_legacy_controller'))",
     *     redirectRoute="admin_manufacturers_index"
     * )
     * @DemoRestricted(redirectRoute="admin_manufacturers_index")
     *
     * @return Response
     */
    public function exportAction(\PrestaShop\PrestaShop\Core\Search\Filters\ManufacturerFilters $filters)
    {
    }
    /**
     * Deletes manufacturer logo image.
     *
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller'))",
     *     message="You do not have permission to edit this.",
     *     redirectRoute="admin_manufacturers_edit",
     *     redirectQueryParamsToKeep={"manufacturerId"}
     * )
     *
     * @param Request $request
     * @param int $manufacturerId
     *
     * @return RedirectResponse
     */
    public function deleteLogoImageAction(\Symfony\Component\HttpFoundation\Request $request, int $manufacturerId): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Deletes address
     *
     * @AdminSecurity("is_granted('delete', request.get('_legacy_controller'))", redirectRoute="admin_manufacturers_index")
     * @DemoRestricted(redirectRoute="admin_manufacturers_index")
     *
     * @param int $addressId
     *
     * @return RedirectResponse
     */
    public function deleteAddressAction($addressId)
    {
    }
    /**
     * Export filtered manufacturer addresses.
     *
     * @AdminSecurity(
     *     "is_granted('read', request.get('_legacy_controller')) && is_granted('update', request.get('_legacy_controller')) && is_granted('create', request.get('_legacy_controller')) && is_granted('delete', request.get('_legacy_controller'))",
     *     redirectRoute="admin_manufacturers_index"
     * )
     * @DemoRestricted(redirectRoute="admin_manufacturers_index")
     *
     * @return Response
     */
    public function exportAddressAction(\PrestaShop\PrestaShop\Core\Search\Filters\ManufacturerAddressFilters $filters)
    {
    }
    /**
     * Deletes adresses in bulk action
     *
     * @AdminSecurity("is_granted('delete', request.get('_legacy_controller'))", redirectRoute="admin_manufacturers_index")
     * @DemoRestricted(redirectRoute="admin_manufacturers_index")
     *
     * @return RedirectResponse
     */
    public function bulkDeleteAddressAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Show & process address creation.
     *
     * @AdminSecurity("is_granted('create', request.get('_legacy_controller'))")
     *
     * @return Response
     */
    public function createAddressAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Show & process address editing.
     *
     * @AdminSecurity("is_granted('update', request.get('_legacy_controller'))")
     *
     * @param int $addressId
     *
     * @return Response
     */
    public function editAddressAction(\Symfony\Component\HttpFoundation\Request $request, $addressId)
    {
    }
}

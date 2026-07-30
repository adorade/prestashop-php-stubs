<?php

namespace PrestaShopBundle\Controller\Admin\Improve\Shipping;

/**
 * Responsible for handling "Improve > Shipping > Carriers" page.
 */
class CarriersController extends \PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController
{
    /**
     * Show carriers listing page
     *
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))")
     *
     * @param Request $request
     * @param CarrierFilters $filters
     *
     * @return Response
     */
    public function indexAction(\Symfony\Component\HttpFoundation\Request $request, \PrestaShop\PrestaShop\Core\Search\Filters\CarrierFilters $filters): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Process Grid search.
     *
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))")
     *
     * @param Request $request
     *
     * @return RedirectResponse
     */
    public function searchAction(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Redirect to carrier wizard for carrier editing.
     *
     * @AdminSecurity("is_granted('update', request.get('_legacy_controller'))")
     *
     * @param int $carrierId
     *
     * @return RedirectResponse
     */
    public function editAction(int $carrierId): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Deletes carrier.
     *
     * @AdminSecurity(
     *     "is_granted('delete', request.get('_legacy_controller'))",
     *     redirectRoute="admin_carriers_index",
     * )
     * @DemoRestricted(redirectRoute="admin_carriers_index")
     *
     * @param int $carrierId
     *
     * @return RedirectResponse
     */
    public function deleteAction(int $carrierId): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Toggles carrier status.
     *
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller'))",
     *     redirectRoute="admin_carriers_index",
     *     message="You need permission to edit this."
     * )
     *
     * @DemoRestricted(redirectRoute="admin_carriers_index")
     *
     * @param int $carrierId
     *
     * @return RedirectResponse
     */
    public function toggleStatusAction(int $carrierId): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Toggles carrier is-free status
     *
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller'))",
     *     redirectRoute="admin_carriers_index",
     *     message="You need permission to edit this."
     * )
     *
     * @DemoRestricted(redirectRoute="admin_carriers_index")
     *
     * @param int $carrierId
     *
     * @return RedirectResponse
     */
    public function toggleIsFreeAction(int $carrierId): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Changes carrier position
     *
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller'))",
     *     redirectRoute="admin_carriers_index",
     *     message="You need permission to edit this."
     * )
     *
     * @DemoRestricted(redirectRoute="admin_carriers_index")
     *
     * @param Request $request
     *
     * @return RedirectResponse
     */
    public function updatePositionAction(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Bulk deletes carriers.
     *
     * @AdminSecurity(
     *     "is_granted('delete', request.get('_legacy_controller'))",
     *     redirectRoute="admin_carriers_index",
     * )
     * @DemoRestricted(redirectRoute="admin_carriers_index")
     *
     * @param Request $request
     *
     * @return RedirectResponse
     */
    public function bulkDeleteAction(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Enables carrier status on bulk action.
     *
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller'))",
     *     redirectRoute="admin_carriers_index",
     * )
     * @DemoRestricted(redirectRoute="admin_carriers_index")
     *
     * @param Request $request
     *
     * @return RedirectResponse
     */
    public function bulkEnableStatusAction(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Disables carrier status on bulk action.
     *
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller'))",
     *     redirectRoute="admin_carriers_index",
     * )
     * @DemoRestricted(redirectRoute="admin_carriers_index")
     *
     * @param Request $request
     *
     * @return RedirectResponse
     */
    public function bulkDisableStatusAction(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
}

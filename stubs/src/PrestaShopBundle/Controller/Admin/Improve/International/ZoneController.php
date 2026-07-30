<?php

namespace PrestaShopBundle\Controller\Admin\Improve\International;

/**
 * ZoneController is responsible for handling "Improve > International > Locations > Zones"
 */
class ZoneController extends \PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController
{
    /**
     * Show all zones.
     *
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))")
     *
     * @param Request $request
     * @param ZoneFilters $zoneFilters
     *
     * @return Response
     */
    public function indexAction(\Symfony\Component\HttpFoundation\Request $request, \PrestaShop\PrestaShop\Core\Search\Filters\ZoneFilters $zoneFilters): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Provides filters functionality.
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
     * Show "Add new" zone form and handles its submit.
     *
     * @AdminSecurity(
     *     "is_granted('create', request.get('_legacy_controller'))",
     *     redirectRoute="admin_zones_index",
     *     message="You need permission to create new zone."
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
     * Displays zone edit for and handles its submit.
     *
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller'))",
     *     redirectRoute="admin_zones_index",
     *     message="You need permission to edit this."
     * )
     *
     * @param int $zoneId
     * @param Request $request
     *
     * @return Response
     */
    public function editAction(int $zoneId, \Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Deletes zone.
     *
     * @AdminSecurity(
     *     "is_granted('delete', request.get('_legacy_controller'))",
     *     redirectRoute="admin_zones_index",
     *     message="You need permission to delete this."
     * )
     *
     * @DemoRestricted(redirectRoute="admin_zones_index")
     *
     * @param int $zoneId
     *
     * @return RedirectResponse
     */
    public function deleteAction(int $zoneId): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Toggles zone active status.
     *
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller'))",
     *     redirectRoute="admin_zones_index",
     *     message="You do not have permission to edit this."
     * )
     *
     * @DemoRestricted(
     *     redirectRoute="admin_zones_index"
     * )
     *
     * @param int $zoneId
     *
     * @return RedirectResponse
     */
    public function toggleStatusAction(int $zoneId): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Deletes zones in bulk action
     *
     * @AdminSecurity("is_granted('delete', request.get('_legacy_controller'))", redirectRoute="admin_zones_index")
     * @DemoRestricted(redirectRoute="admin_zones_index")
     *
     * @param Request $request
     *
     * @return RedirectResponse
     */
    public function bulkDeleteAction(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Bulk toggles zones status.
     *
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller'))",
     *     redirectRoute="admin_zones_index",
     * )
     * @DemoRestricted(redirectRoute="admin_zones_index")
     *
     * @param string $status
     * @param Request $request
     *
     * @return RedirectResponse
     */
    public function bulkToggleStatus(string $status, \Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
}

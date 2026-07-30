<?php

namespace PrestaShopBundle\Controller\Admin\Configure\AdvancedParameters;

/**
 * Class ProfileController is responsible for displaying the
 * "Configure > Advanced parameters > Team > Profiles" page.
 */
class ProfileController extends \PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController
{
    /**
     * Show profiles listing page.
     *
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))")
     *
     * @param ProfileFilters $filters
     *
     * @return Response
     */
    public function indexAction(\PrestaShop\PrestaShop\Core\Search\Filters\ProfileFilters $filters)
    {
    }
    /**
     * Used for applying filtering actions.
     *
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))")
     *
     * @param Request $request
     *
     * @return RedirectResponse
     */
    public function searchAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Show profile's create page
     *
     * @AdminSecurity("is_granted('create', request.get('_legacy_controller'))")
     * @DemoRestricted(redirectRoute="admin_profiles_index")
     *
     * @param Request $request
     *
     * @return Response
     */
    public function createAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Shows profile edit form.
     *
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller'))",
     *     message="You do not have permission to edit this."
     * )
     * @DemoRestricted(redirectRoute="admin_profiles_index")
     *
     * @param int $profileId
     * @param Request $request
     *
     * @return Response
     */
    public function editAction($profileId, \Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Delete a profile.
     *
     * @AdminSecurity(
     *     "is_granted('delete', request.get('_legacy_controller'))",
     *     message="You do not have permission to edit this."
     * )
     * @DemoRestricted(redirectRoute="admin_profiles_index")
     *
     * @param int $profileId
     *
     * @return RedirectResponse
     */
    public function deleteAction($profileId)
    {
    }
    /**
     * Bulk delete profiles.
     *
     * @AdminSecurity(
     *     "is_granted('delete', request.get('_legacy_controller'))",
     *     message="You do not have permission to edit this."
     * )
     * @DemoRestricted(redirectRoute="admin_profiles_index")
     *
     * @param Request $request
     *
     * @return RedirectResponse
     */
    public function bulkDeleteAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Get human readable error for exception.
     *
     * @return array
     */
    protected function getErrorMessages()
    {
    }
}

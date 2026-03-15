<?php

namespace PrestaShopBundle\Controller\Admin\Configure\ShopParameters;

/**
 * Controller responsible of "Configure > Shop Parameters > Customer Settings > Titles" page.
 */
class TitleController extends \PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController
{
    /**
     * Show customer titles page.
     *
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))", message="Access denied.")
     *
     * @param Request $request
     * @param TitleFilters $filters
     *
     * @return Response
     */
    public function indexAction(\Symfony\Component\HttpFoundation\Request $request, \PrestaShop\PrestaShop\Core\Search\Filters\TitleFilters $filters): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Displays and handles currency form.
     *
     * @AdminSecurity(
     *     "is_granted('create', request.get('_legacy_controller'))",
     *     redirectRoute="admin_title_index",
     *     message="You need permission to create this."
     * )
     *
     * @return Response
     */
    public function createAction(): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Displays title form.
     *
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller'))",
     *     redirectRoute="admin_title_index",
     *     message="You need permission to edit this."
     * )
     *
     * @param int $titleId
     *
     * @return Response
     */
    public function editAction(int $titleId): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Deletes title.
     *
     * @AdminSecurity(
     *     "is_granted('delete', request.get('_legacy_controller'))",
     *     redirectRoute="admin_title_index",
     *     message="You need permission to delete this."
     * )
     * @DemoRestricted(redirectRoute="admin_title_index")
     *
     * @param int $titleId
     *
     * @return RedirectResponse
     */
    public function deleteAction(int $titleId): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Deletes titles in bulk action
     *
     * @AdminSecurity("is_granted('delete', request.get('_legacy_controller'))", redirectRoute="admin_title_index")
     * @DemoRestricted(redirectRoute="admin_title_index")
     *
     * @param Request $request
     *
     * @return RedirectResponse
     */
    public function bulkDeleteAction(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
}

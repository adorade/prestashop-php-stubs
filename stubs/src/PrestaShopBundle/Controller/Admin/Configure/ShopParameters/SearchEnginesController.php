<?php

namespace PrestaShopBundle\Controller\Admin\Configure\ShopParameters;

/**
 * Responsible for handling "Configure > Shop Parameters > Traffic & SEO > Search Engines" page.
 */
class SearchEnginesController extends \PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController
{
    /**
     * Show search engines listing page.
     *
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))")
     *
     * @param Request $request
     * @param SearchEngineFilters $filters
     *
     * @return Response
     */
    public function indexAction(\Symfony\Component\HttpFoundation\Request $request, \PrestaShop\PrestaShop\Core\Search\Filters\SearchEngineFilters $filters): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Shows search engine creation form page and handle its submit.
     *
     * @AdminSecurity("is_granted('create', request.get('_legacy_controller'))")
     *
     * @param Request $request
     *
     * @return Response
     */
    public function createAction(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Show search engine edit form page and handles its submit.
     *
     * @AdminSecurity("is_granted('update', request.get('_legacy_controller'))")
     *
     * @param int $searchEngineId
     * @param Request $request
     *
     * @return Response
     */
    public function editAction(int $searchEngineId, \Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Deletes search engine.
     *
     * @AdminSecurity(
     *     "is_granted('delete', request.get('_legacy_controller'))",
     *     redirectRoute="admin_search_engines_index",
     * )
     *
     * @param int $searchEngineId
     *
     * @return RedirectResponse
     */
    public function deleteAction(int $searchEngineId): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Deletes search engines in bulk action.
     *
     * @AdminSecurity(
     *     "is_granted('delete', request.get('_legacy_controller'))",
     *     redirectRoute="admin_search_engines_index",
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

<?php

namespace PrestaShopBundle\Controller\Admin\Improve\Design;

/**
 * Class CmsPageController is responsible for handling the logic in "Improve -> Design -> pages" page.
 */
class CmsPageController extends \PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController
{
    /**
     * Responsible for displaying page content.
     *
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))")
     *
     * @param CmsPageCategoryFilters $categoryFilters
     * @param CmsPageFilters $cmsFilters
     * @param Request $request
     *
     * @return Response
     */
    public function indexAction(\PrestaShop\PrestaShop\Core\Search\Filters\CmsPageCategoryFilters $categoryFilters, \PrestaShop\PrestaShop\Core\Search\Filters\CmsPageFilters $cmsFilters, \Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * @deprecated since 1.7.8 and will be removed in next major. Use CommonController:searchGridAction instead
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
     * Creates cms page
     *
     * @AdminSecurity(
     *     "is_granted('create', request.get('_legacy_controller'))",
     *     redirectRoute="admin_cms_pages_index",
     *     redirectQueryParamsToKeep={"id_cms_category"},
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
     *  @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller'))",
     *     redirectRoute="admin_cms_pages_index",
     *     redirectQueryParamsToKeep={"id_cms_category"},
     *     message="You do not have permission to edit this."
     * )
     *
     * @param Request $request
     * @param int $cmsPageId
     *
     * @return Response
     */
    public function editAction(\Symfony\Component\HttpFoundation\Request $request, $cmsPageId)
    {
    }
    /**
     * Displays cms category page form and handles create new cms page category logic.
     *
     * @AdminSecurity(
     *     "is_granted('create', request.get('_legacy_controller'))",
     *     redirectRoute="admin_cms_pages_index",
     *     redirectQueryParamsToKeep={"id_cms_category"},
     *     message="You do not have permission to add this."
     * )
     *
     * @param Request $request
     *
     * @return Response
     */
    public function createCmsCategoryAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Displays cms category page form and handles update cms page category logic.
     *
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller'))",
     *     redirectRoute="admin_cms_pages_index",
     *     redirectQueryParamsToKeep={"id_cms_category"},
     *     message="You do not have permission to edit this."
     * )
     *
     * @param int $cmsCategoryId
     * @param Request $request
     *
     * @return Response
     */
    public function editCmsCategoryAction($cmsCategoryId, \Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Deletes cms page category and all its children categories.
     *
     * @AdminSecurity(
     *     "is_granted('delete', request.get('_legacy_controller'))",
     *     redirectRoute="admin_cms_pages_index",
     *     redirectQueryParamsToKeep={"id_cms_category"},
     *     message="You do not have permission to delete this."
     * )
     * @DemoRestricted(
     *     redirectRoute="admin_cms_pages_index",
     *     redirectQueryParamsToKeep={"id_cms_category"}
     * )
     *
     * @param int $cmsCategoryId
     *
     * @return RedirectResponse
     */
    public function deleteCmsCategoryAction($cmsCategoryId)
    {
    }
    /**
     * Deletes multiple cms page categories.
     *
     * @AdminSecurity(
     *     "is_granted('delete', request.get('_legacy_controller'))",
     *     redirectRoute="admin_cms_pages_index",
     *     redirectQueryParamsToKeep={"id_cms_category"},
     *     message="You do not have permission to delete this."
     * )
     * @DemoRestricted(
     *     redirectRoute="admin_cms_pages_index",
     *     redirectQueryParamsToKeep={"id_cms_category"}
     * )
     *
     * @param Request $request
     *
     * @return RedirectResponse
     */
    public function deleteBulkCmsCategoryAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Updates cms page category position.
     *
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller'))",
     *     redirectRoute="admin_cms_pages_index",
     *     redirectQueryParamsToKeep={"id_cms_category"},
     *     message="You do not have permission to edit this."
     * )
     * @DemoRestricted(
     *     redirectRoute="admin_cms_pages_index",
     *     redirectQueryParamsToKeep={"id_cms_category"}
     * )
     *
     * @param Request $request
     *
     * @return RedirectResponse
     */
    public function updateCmsCategoryPositionAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Updates cms page listing position.
     *
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller'))",
     *      redirectRoute="admin_cms_pages_index",
     *      redirectQueryParamsToKeep={"id_cms_category"},
     *      message="You do not have permission to edit this."
     * )
     * @DemoRestricted(
     *     redirectRoute="admin_cms_pages_index",
     *     redirectQueryParamsToKeep={"id_cms_category"}
     * )
     *
     * @return RedirectResponse
     */
    public function updateCmsPositionAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Toggles cms page category status.
     *
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller'))",
     *      redirectRoute="admin_cms_pages_index",
     *      redirectQueryParamsToKeep={"id_cms_category"},
     *      message="You do not have permission to edit this."
     * )
     * @DemoRestricted(
     *     redirectRoute="admin_cms_pages_index",
     *     redirectQueryParamsToKeep={"id_cms_category"}
     * )
     *
     * @param int $cmsCategoryId
     *
     * @return RedirectResponse
     */
    public function toggleCmsCategoryAction($cmsCategoryId)
    {
    }
    /**
     * Changes multiple cms page category statuses to enabled.
     *
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller'))",
     *     redirectRoute="admin_cms_pages_index",
     *     redirectQueryParamsToKeep={"id_cms_category"},
     *     message="You do not have permission to edit this."
     * )
     * @DemoRestricted(
     *     redirectRoute="admin_cms_pages_index",
     *     redirectQueryParamsToKeep={"id_cms_category"}
     * )
     *
     * @param Request $request
     *
     * @return RedirectResponse
     */
    public function bulkCmsPageCategoryStatusEnableAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Changes multiple cms page category statuses to disabled.
     *
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller'))",
     *     redirectRoute="admin_cms_pages_index",
     *     redirectQueryParamsToKeep={"id_cms_category"},
     *     message="You do not have permission to edit this."
     * )
     * @DemoRestricted(
     *     redirectRoute="admin_cms_pages_index",
     *     redirectQueryParamsToKeep={"id_cms_category"}
     * )
     *
     * @param Request $request
     *
     * @return RedirectResponse
     */
    public function bulkCmsPageCategoryStatusDisableAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Toggles cms page listing status.
     *
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller'))",
     *     redirectRoute="admin_cms_pages_index",
     *     redirectQueryParamsToKeep={"id_cms_category"},
     *     message="You do not have permission to edit this."
     * )
     * @DemoRestricted(
     *     redirectRoute="admin_cms_pages_index",
     *     redirectQueryParamsToKeep={"id_cms_category"}
     * )
     *
     * @param int $cmsId
     *
     * @return RedirectResponse
     */
    public function toggleCmsAction($cmsId)
    {
    }
    /**
     * Disables multiple cms pages.
     *
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller'))",
     *     redirectRoute="admin_cms_pages_index",
     *     redirectQueryParamsToKeep={"id_cms_category"},
     *     message="You do not have permission to edit this."
     * )
     * @DemoRestricted(
     *     redirectRoute="admin_cms_pages_index",
     *     redirectQueryParamsToKeep={"id_cms_category"}
     * )
     *
     * @param Request $request
     *
     * @return RedirectResponse
     */
    public function bulkDisableCmsPageStatusAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Enables multiple cms pages.
     *
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller'))",
     *     redirectRoute="admin_cms_pages_index",
     *     redirectQueryParamsToKeep={"id_cms_category"},
     *     message="You do not have permission to edit this."
     * )
     * @DemoRestricted(
     *     redirectRoute="admin_cms_pages_index",
     *     redirectQueryParamsToKeep={"id_cms_category"}
     * )
     *
     * @param Request $request
     *
     * @return RedirectResponse
     */
    public function bulkEnableCmsPageStatusAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Deletes multiple cms pages.
     *
     * @AdminSecurity(
     *     "is_granted('delete', request.get('_legacy_controller'))",
     *     redirectRoute="admin_cms_pages_index",
     *     redirectQueryParamsToKeep={"id_cms_category"},
     *     message="You do not have permission to delete this."
     * )
     * @DemoRestricted(
     *     redirectRoute="admin_cms_pages_index",
     *     redirectQueryParamsToKeep={"id_cms_category"}
     * )
     *
     * @param Request $request
     *
     * @return RedirectResponse
     */
    public function bulkDeleteCmsPageAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Deletes cms page by given id.
     *
     * @AdminSecurity(
     *     "is_granted('delete', request.get('_legacy_controller'))",
     *     redirectRoute="admin_cms_pages_index",
     *     redirectQueryParamsToKeep={"id_cms_category"},
     *     message="You do not have permission to delete this."
     * )
     * @DemoRestricted(
     *     redirectRoute="admin_cms_pages_index",
     *     redirectQueryParamsToKeep={"id_cms_category"}
     * )
     *
     * @param int $cmsId
     *
     * @return RedirectResponse
     */
    public function deleteCmsAction($cmsId)
    {
    }
}

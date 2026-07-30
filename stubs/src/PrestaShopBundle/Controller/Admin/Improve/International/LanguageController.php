<?php

namespace PrestaShopBundle\Controller\Admin\Improve\International;

/**
 * Class LanguageController manages "Improve > International > Localization > Languages".
 */
class LanguageController extends \PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController
{
    /**
     * Show languages listing page.
     *
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))")
     *
     * @param Request $request
     * @param LanguageFilters $filters
     *
     * @return Response
     */
    public function indexAction(\Symfony\Component\HttpFoundation\Request $request, \PrestaShop\PrestaShop\Core\Search\Filters\LanguageFilters $filters)
    {
    }
    /**
     * @deprecated since 1.7.8 and will be removed in next major. Use CommonController:searchGridAction instead
     *
     * Process Grid search.
     *
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))")
     *
     * @param Request $request
     *
     * @return RedirectResponse
     */
    public function searchGridAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Show language creation form page and handle its submit.
     *
     * @AdminSecurity("is_granted('create', request.get('_legacy_controller'))")
     *
     * @param Request $request
     *
     * @return Response
     */
    public function createAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Show language edit form page and handle its submit.
     *
     * @AdminSecurity("is_granted('update', request.get('_legacy_controller'))")
     *
     * @param int $languageId
     * @param Request $request
     *
     * @return Response
     */
    public function editAction($languageId, \Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Deletes language
     *
     * @AdminSecurity("is_granted('delete', request.get('_legacy_controller'))", redirectRoute="admin_languages_index")
     * @DemoRestricted(redirectRoute="admin_languages_index")
     *
     * @param int $languageId
     *
     * @return RedirectResponse
     */
    public function deleteAction($languageId)
    {
    }
    /**
     * Deletes languages in bulk action
     *
     * @AdminSecurity("is_granted('delete', request.get('_legacy_controller'))", redirectRoute="admin_languages_index")
     * @DemoRestricted(redirectRoute="admin_languages_index")
     *
     * @param Request $request
     *
     * @return RedirectResponse
     */
    public function bulkDeleteAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Toggles language status
     *
     * @AdminSecurity("is_granted('update', request.get('_legacy_controller'))", redirectRoute="admin_languages_index")
     * @DemoRestricted(redirectRoute="admin_languages_index")
     *
     * @param int $languageId
     *
     * @return RedirectResponse
     */
    public function toggleStatusAction($languageId)
    {
    }
    /**
     * Toggles languages status in bulk action
     *
     * @AdminSecurity("is_granted('update', request.get('_legacy_controller'))", redirectRoute="admin_languages_index")
     * @DemoRestricted(redirectRoute="admin_languages_index")
     *
     * @param Request $request
     * @param string $status
     *
     * @return RedirectResponse
     */
    public function bulkToggleStatusAction(\Symfony\Component\HttpFoundation\Request $request, $status)
    {
    }
}

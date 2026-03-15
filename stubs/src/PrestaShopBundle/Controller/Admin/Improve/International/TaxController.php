<?php

namespace PrestaShopBundle\Controller\Admin\Improve\International;

/**
 * Responsible for handling "Improve > International > Taxes" page.
 */
class TaxController extends \PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController
{
    /**
     * Show taxes page.
     *
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))")
     *
     * @param Request $request
     * @param TaxFilters $filters
     *
     * @return Response
     */
    public function indexAction(\Symfony\Component\HttpFoundation\Request $request, \PrestaShop\PrestaShop\Core\Search\Filters\TaxFilters $filters)
    {
    }
    /**
     * Process tax options configuration form.
     *
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller')) && is_granted('create', request.get('_legacy_controller')) && is_granted('delete', request.get('_legacy_controller'))",
     *     redirectRoute="admin_taxes_index"
     * )
     * @DemoRestricted(redirectRoute="admin_taxes_index")
     *
     * @param Request $request
     *
     * @return RedirectResponse
     */
    public function saveOptionsAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * @deprecated since 1.7.8 and will be removed in next major. Use CommonController:searchGridAction instead
     *
     * Provides filters functionality.
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
     * @AdminSecurity(
     *     "is_granted('create', request.get('_legacy_controller'))",
     *     redirectRoute="admin_taxes_index",
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
     * Handles tax edit
     *
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller'))",
     *     redirectRoute="admin_taxes_index",
     * )
     *
     * @param Request $request
     * @param int $taxId
     *
     * @return Response
     */
    public function editAction(\Symfony\Component\HttpFoundation\Request $request, $taxId)
    {
    }
    /**
     * Deletes tax.
     *
     * @AdminSecurity(
     *     "is_granted('delete', request.get('_legacy_controller'))",
     *     redirectRoute="admin_taxes_index",
     * )
     * @DemoRestricted(redirectRoute="admin_taxes_index")
     *
     * @param int $taxId
     *
     * @return RedirectResponse
     */
    public function deleteAction($taxId)
    {
    }
    /**
     * Toggles status.
     *
     * @param int $taxId
     *
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller'))",
     *     redirectRoute="admin_taxes_index",
     * )
     * @DemoRestricted(redirectRoute="admin_taxes_index")
     *
     * @return RedirectResponse
     */
    public function toggleStatusAction($taxId)
    {
    }
    /**
     * Enables taxes status on bulk action.
     *
     * @param Request $request
     *
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller'))",
     *     redirectRoute="admin_taxes_index",
     * )
     * @DemoRestricted(redirectRoute="admin_taxes_index")
     *
     * @return RedirectResponse
     */
    public function bulkEnableStatusAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Disables taxes status on bulk action.
     *
     * @param Request $request
     *
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller'))",
     *     redirectRoute="admin_taxes_index",
     * )
     * @DemoRestricted(redirectRoute="admin_taxes_index")
     *
     * @return RedirectResponse
     */
    public function bulkDisableStatusAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Delete taxes on bulk action.
     *
     * @param Request $request
     *
     * @AdminSecurity(
     *     "is_granted('delete', request.get('_legacy_controller'))",
     *     redirectRoute="admin_taxes_index",
     * )
     * @DemoRestricted(redirectRoute="admin_taxes_index")
     *
     * @return RedirectResponse
     */
    public function bulkDeleteAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
}

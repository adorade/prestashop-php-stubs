<?php

namespace PrestaShopBundle\Controller\Admin\Improve\International;

/**
 * Class CurrencyController is responsible for handling "Improve -> International -> Localization -> Currencies" page.
 */
class CurrencyController extends \PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController
{
    /**
     * Show currency page.
     *
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))")
     *
     * @param CurrencyFilters $filters
     * @param Request $request
     *
     * @return Response
     */
    public function indexAction(\PrestaShop\PrestaShop\Core\Search\Filters\CurrencyFilters $filters, \Symfony\Component\HttpFoundation\Request $request)
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
     * Displays and handles currency form.
     *
     * @AdminSecurity(
     *     "is_granted('create', request.get('_legacy_controller'))",
     *     redirectRoute="admin_currencies_index",
     *     message="You need permission to create this."
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
     * Displays currency form.
     *
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller'))",
     *     redirectRoute="admin_currencies_index",
     *     message="You need permission to edit this."
     * )
     *
     * @param int $currencyId
     * @param Request $request
     *
     * @return Response
     */
    public function editAction($currencyId, \Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Deletes currency.
     *
     * @AdminSecurity(
     *     "is_granted('delete', request.get('_legacy_controller'))",
     *     redirectRoute="admin_currencies_index",
     *     message="You need permission to delete this."
     * )
     * @DemoRestricted(redirectRoute="admin_currencies_index")
     *
     * @param int $currencyId
     *
     * @return RedirectResponse
     */
    public function deleteAction($currencyId)
    {
    }
    /**
     * Get the data for a currency (from CLDR)
     *
     * @param string $currencyIsoCode
     *
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))")
     * @DemoRestricted(redirectRoute="admin_currencies_index")
     *
     * @return JsonResponse
     */
    public function getReferenceDataAction($currencyIsoCode)
    {
    }
    /**
     * Toggles status.
     *
     * @param int $currencyId
     *
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller'))",
     *     redirectRoute="admin_currencies_index",
     *     message="You need permission to edit this."
     * )
     * @DemoRestricted(redirectRoute="admin_currencies_index")
     *
     * @return RedirectResponse
     */
    public function toggleStatusAction($currencyId)
    {
    }
    /**
     * Refresh exchange rates.
     *
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller'))",
     *     redirectRoute="admin_currencies_index",
     *     message="You need permission to edit this."
     * )
     * @DemoRestricted(redirectRoute="admin_currencies_index")
     *
     * @return RedirectResponse
     */
    public function refreshExchangeRatesAction()
    {
    }
    /**
     * Handles ajax request which updates live exchange rates.
     *
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function updateLiveExchangeRatesAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Toggles currencies status in bulk action
     *
     * @AdminSecurity("is_granted('update', request.get('_legacy_controller'))", redirectRoute="admin_currencies_index")
     * @DemoRestricted(redirectRoute="admin_currencies_index")
     *
     * @param Request $request
     * @param string $status
     *
     * @return RedirectResponse
     */
    public function bulkToggleStatusAction(\Symfony\Component\HttpFoundation\Request $request, $status)
    {
    }
    /**
     * Deletes currencies in bulk action
     *
     * @AdminSecurity("is_granted('delete', request.get('_legacy_controller'))", redirectRoute="admin_currencies_index")
     * @DemoRestricted(redirectRoute="admin_currencies_index")
     *
     * @param Request $request
     *
     * @return RedirectResponse
     */
    public function bulkDeleteAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
}

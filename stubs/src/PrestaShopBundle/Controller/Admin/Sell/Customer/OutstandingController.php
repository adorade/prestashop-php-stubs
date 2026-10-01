<?php

namespace PrestaShopBundle\Controller\Admin\Sell\Customer;

/**
 * Class OutstandingController manages "Sell > Customers > Outstandings" page.
 */
class OutstandingController extends \PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController
{
    /**
     * Show list of outstandings.
     *
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))")
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param \PrestaShop\PrestaShop\Core\Search\Filters\OutstandingFilters $filters
     */
    public function indexAction(\Symfony\Component\HttpFoundation\Request $request, \PrestaShop\PrestaShop\Core\Search\Filters\OutstandingFilters $filters)
    {
    }
    /**
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))", redirectRoute="admin_outstanding_index")
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function searchAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
}

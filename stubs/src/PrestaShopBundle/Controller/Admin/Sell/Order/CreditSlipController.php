<?php

namespace PrestaShopBundle\Controller\Admin\Sell\Order;

/**
 * Responsible for Sell > Orders > Credit slips page
 */
class CreditSlipController extends \PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController
{
    /**
     * Show credit slips listing page.
     *
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))")
     *
     * @param Request $request
     * @param CreditSlipFilters $creditSlipFilters
     *
     * @return Response
     */
    public function indexAction(\Symfony\Component\HttpFoundation\Request $request, \PrestaShop\PrestaShop\Core\Search\Filters\CreditSlipFilters $creditSlipFilters)
    {
    }
    /**
     * @deprecated since 1.7.8 and will be removed in next major. Use CommonController:searchGridAction instead
     *
     * Provides filters functionality
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
     * Generates PDF of requested credit slip by provided id
     *
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))")
     *
     * @param int $creditSlipId
     *
     * @return Response
     */
    public function generatePdfAction($creditSlipId)
    {
    }
    /**
     * Generates PDF of credit slips found by requested date range
     *
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))")
     *
     * @param Request $request
     *
     * @return Response
     */
    public function generatePdfByDateAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
}

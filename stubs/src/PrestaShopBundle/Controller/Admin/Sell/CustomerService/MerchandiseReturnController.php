<?php

namespace PrestaShopBundle\Controller\Admin\Sell\CustomerService;

/**
 * Class MerchandiseReturnController responsible for "Sell > Customer Service > Merchandise Returns" page
 */
class MerchandiseReturnController extends \PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController
{
    /**
     * Render merchandise returns grid and options.
     *
     * @AdminSecurity(
     *     "is_granted('read', request.get('_legacy_controller'))",
     *     redirectRoute="admin_merchandise_returns_index"
     * )
     *
     * @param Request $request
     * @param MerchandiseReturnFilters $filters
     *
     * @return Response|RedirectResponse
     */
    public function indexAction(\Symfony\Component\HttpFoundation\Request $request, \PrestaShop\PrestaShop\Core\Search\Filters\MerchandiseReturnFilters $filters): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Edit existing order return
     *
     * @AdminSecurity(
     *     "is_granted(['update'], request.get('_legacy_controller'))",
     *     redirectRoute="admin_merchandise_returns_index"
     * )
     *
     * @param int $orderReturnId
     * @param Request $request
     *
     * @return Response
     */
    public function editAction(int $orderReturnId, \Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\Response
    {
    }
}

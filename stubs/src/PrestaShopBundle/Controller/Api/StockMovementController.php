<?php

namespace PrestaShopBundle\Controller\Api;

class StockMovementController extends \PrestaShopBundle\Controller\Api\ApiController
{
    /**
     * @var StockMovementRepository
     */
    public $stockMovementRepository;
    /**
     * @var QueryStockMovementParamsCollection
     */
    public $queryParams;
    /**
     * @AdminSecurity("is_granted(['read'], request.get('_legacy_controller'))")
     *
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function listMovementsAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * @AdminSecurity("is_granted(['read'], request.get('_legacy_controller'))")
     *
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function listMovementsEmployeesAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * @AdminSecurity("is_granted(['read'], request.get('_legacy_controller'))")
     *
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function listMovementsTypesAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
}

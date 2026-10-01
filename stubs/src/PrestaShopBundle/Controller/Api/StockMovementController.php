<?php

namespace PrestaShopBundle\Controller\Api;

class StockMovementController extends \PrestaShopBundle\Controller\Api\ApiController
{
    /**
     * @var \PrestaShopBundle\Entity\Repository\StockMovementRepository
     */
    public $stockMovementRepository;
    /**
     * @var \PrestaShopBundle\Api\QueryStockMovementParamsCollection
     */
    public $queryParams;
    /**
     * @AdminSecurity("is_granted(['read'], request.get('_legacy_controller'))")
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function listMovementsAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * @AdminSecurity("is_granted(['read'], request.get('_legacy_controller'))")
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function listMovementsEmployeesAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * @AdminSecurity("is_granted(['read'], request.get('_legacy_controller'))")
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function listMovementsTypesAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
}

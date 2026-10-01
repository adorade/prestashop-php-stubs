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
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))")]
    public function listMovementsAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))")]
    public function listMovementsEmployeesAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))")]
    public function listMovementsTypesAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
}

<?php

namespace PrestaShopBundle\Controller\Api;

class StockController extends \PrestaShopBundle\Controller\Api\ApiController
{
    /**
     * @var StockRepository
     */
    public $stockRepository;
    /**
     * @var QueryStockParamsCollection
     */
    public $queryParams;
    /**
     * @var MovementsCollection;
     */
    public $movements;
    /**
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function listProductsAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function editProductAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function bulkEditProductsAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * @param Request $request
     *
     * @return CsvResponse|JsonResponse
     */
    public function listProductsExportAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
}

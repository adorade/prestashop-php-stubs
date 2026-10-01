<?php

namespace PrestaShopBundle\Controller\Api;

class StockController extends \PrestaShopBundle\Controller\Api\ApiController
{
    /**
     * @var \PrestaShopBundle\Entity\Repository\StockRepository
     */
    public $stockRepository;
    /**
     * @var \PrestaShopBundle\Api\QueryStockParamsCollection
     */
    public $queryParams;
    /**
     * @var MovementsCollection;
     */
    public $movements;
    /**
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function listProductsAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function editProductAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function bulkEditProductsAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \PrestaShopBundle\Component\CsvResponse|\Symfony\Component\HttpFoundation\JsonResponse
     */
    public function listProductsExportAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
}

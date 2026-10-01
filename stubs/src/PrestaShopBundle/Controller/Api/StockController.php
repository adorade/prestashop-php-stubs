<?php

namespace PrestaShopBundle\Controller\Api;

class StockController extends \PrestaShopBundle\Controller\Api\ApiController
{
    public function __construct(private readonly \Symfony\Contracts\Translation\TranslatorInterface $translator, private readonly \PrestaShopBundle\Entity\Repository\StockRepository $stockRepository, private readonly \PrestaShopBundle\Api\QueryStockParamsCollection $queryParams, private readonly \PrestaShopBundle\Api\Stock\MovementsCollection $movements)
    {
    }
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

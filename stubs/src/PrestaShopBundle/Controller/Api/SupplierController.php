<?php

namespace PrestaShopBundle\Controller\Api;

class SupplierController extends \PrestaShopBundle\Controller\Api\ApiController
{
    /**
     * @var SupplierRepository
     */
    public $supplierRepository;
    /**
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function listSuppliersAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
}

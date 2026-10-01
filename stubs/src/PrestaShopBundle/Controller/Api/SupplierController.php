<?php

namespace PrestaShopBundle\Controller\Api;

class SupplierController extends \PrestaShopBundle\Controller\Api\ApiController
{
    /**
     * @var \PrestaShopBundle\Entity\Repository\SupplierRepository
     */
    public $supplierRepository;
    /**
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function listSuppliersAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
}

<?php

namespace PrestaShopBundle\Controller\Api;

class ManufacturerController extends \PrestaShopBundle\Controller\Api\ApiController
{
    /**
     * @var ManufacturerRepository
     */
    public $manufacturerRepository;
    /**
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function listManufacturersAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
}

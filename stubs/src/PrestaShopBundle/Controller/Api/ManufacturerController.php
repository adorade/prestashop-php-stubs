<?php

namespace PrestaShopBundle\Controller\Api;

class ManufacturerController extends \PrestaShopBundle\Controller\Api\ApiController
{
    /**
     * @var \PrestaShopBundle\Entity\Repository\ManufacturerRepository
     */
    public $manufacturerRepository;
    /**
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function listManufacturersAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
}

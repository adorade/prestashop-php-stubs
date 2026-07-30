<?php

namespace PrestaShopBundle\Controller\Api;

class FeatureController extends \PrestaShopBundle\Controller\Api\ApiController
{
    /**
     * @var FeatureAttributeRepository
     */
    public $featureAttributeRepository;
    /**
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function listFeaturesAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
}

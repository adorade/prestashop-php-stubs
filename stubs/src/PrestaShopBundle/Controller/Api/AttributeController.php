<?php

namespace PrestaShopBundle\Controller\Api;

class AttributeController extends \PrestaShopBundle\Controller\Api\ApiController
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
    public function listAttributesAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
}

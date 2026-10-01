<?php

namespace PrestaShopBundle\Controller\Api;

class FeatureController extends \PrestaShopBundle\Controller\Api\ApiController
{
    /**
     * @var \PrestaShopBundle\Entity\Repository\FeatureAttributeRepository
     */
    public $featureAttributeRepository;
    /**
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function listFeaturesAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
}

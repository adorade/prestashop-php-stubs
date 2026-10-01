<?php

namespace PrestaShopBundle\Controller\Api;

class AttributeController extends \PrestaShopBundle\Controller\Api\ApiController
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
    public function listAttributesAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
}

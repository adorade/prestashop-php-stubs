<?php

namespace PrestaShopBundle\Controller\Api\Improve\Design;

class PositionsController extends \PrestaShopBundle\Controller\Api\ApiController
{
    /**
     * Update positions.
     *
     * @AdminSecurity("is_granted(['update'], request.get('_legacy_controller'))")
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function updateAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
}

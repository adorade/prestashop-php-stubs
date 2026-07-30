<?php

namespace PrestaShopBundle\Controller\Admin\Sell\Catalog\Product;

class SpecificPriceController extends \PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController
{
    /**
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))")
     */
    public function listAction(\Symfony\Component\HttpFoundation\Request $request, int $productId): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * @AdminSecurity("is_granted('create', request.get('_legacy_controller'))")
     *
     * @return Response
     */
    public function createAction(\Symfony\Component\HttpFoundation\Request $request, int $productId): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))")
     *
     * @return Response
     */
    public function editAction(\Symfony\Component\HttpFoundation\Request $request, int $specificPriceId): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * @AdminSecurity("is_granted('delete', request.get('_legacy_controller'))")
     *
     * @param Request $request
     * @param int $specificPriceId
     *
     * @return JsonResponse
     */
    public function deleteAction(\Symfony\Component\HttpFoundation\Request $request, int $specificPriceId): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
}

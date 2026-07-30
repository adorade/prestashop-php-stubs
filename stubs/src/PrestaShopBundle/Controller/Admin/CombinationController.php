<?php

namespace PrestaShopBundle\Controller\Admin;

/**
 * @deprecated since 8.1 and will be removed in next major.
 */
class CombinationController extends \PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController
{
    /**
     * Generate combination
     *
     * @AdminSecurity(
     *     "is_granted('create', 'ADMINPRODUCTS_') && is_granted('update', 'ADMINPRODUCTS_')"
     * )
     *
     * @return Response
     */
    public function generateCombinationFormAction($combinationIds)
    {
    }
    /**
     * Get all Combinations for a product.
     *
     * @AdminSecurity("is_granted('read', 'ADMINPRODUCTS_')")
     *
     * @param int $idProduct The product id
     *
     * @return JsonResponse
     */
    public function getProductCombinationsAction($idProduct)
    {
    }
}

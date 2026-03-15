<?php

namespace PrestaShopBundle\Controller\Admin\Configure\AdvancedParameters;

/**
 * Admin controller to manage shops.
 */
class ShopController extends \PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController
{
    /**
     * Search for shops by query.
     *
     * @param string $searchTerm
     *
     * @return JsonResponse
     */
    public function searchAction(string $searchTerm): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
}

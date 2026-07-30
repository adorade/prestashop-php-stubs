<?php

namespace PrestaShopBundle\Controller\Admin;

/**
 * @deprecated since 8.1 and will be removed in next major.
 *
 * Admin controller for the Category pages.
 */
class CategoryController extends \PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController
{
    /**
     * Process Ajax Form to add a simple category (name and parent category).
     *
     * @param Request $request
     *
     * @return string
     */
    public function addSimpleCategoryFormAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Get Categories formatted like ajax_product_file.php.
     *
     * @param int $limit
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function getAjaxCategoriesAction($limit, \Symfony\Component\HttpFoundation\Request $request)
    {
    }
}

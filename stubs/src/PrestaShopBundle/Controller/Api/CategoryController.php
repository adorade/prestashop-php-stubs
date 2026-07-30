<?php

namespace PrestaShopBundle\Controller\Api;

class CategoryController extends \PrestaShopBundle\Controller\Api\ApiController
{
    /**
     * @var CategoryRepository
     */
    public $categoryRepository;
    /**
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function listCategoriesAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
}

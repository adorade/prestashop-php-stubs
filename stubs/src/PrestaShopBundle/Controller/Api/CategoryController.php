<?php

namespace PrestaShopBundle\Controller\Api;

class CategoryController extends \PrestaShopBundle\Controller\Api\ApiController
{
    /**
     * @var \PrestaShopBundle\Entity\Repository\CategoryRepository
     */
    public $categoryRepository;
    /**
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function listCategoriesAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
}

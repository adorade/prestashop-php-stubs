<?php

namespace PrestaShopBundle\Service\Grid;

class ResponseBuilder
{
    /**
     * @param GridFilterFormFactoryInterface $filterFormFactory
     * @param Router $router
     * @param AdminFilterRepository $adminFilterRepository
     * @param int|null $employeeId
     * @param int $shopId
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Grid\Filter\GridFilterFormFactoryInterface $filterFormFactory, \Symfony\Component\Routing\Router $router, \PrestaShopBundle\Entity\Repository\AdminFilterRepository $adminFilterRepository, ?int $employeeId, int $shopId, \Symfony\Component\HttpFoundation\Session\Session $session)
    {
    }
    /**
     * @param GridDefinitionFactoryInterface $definitionFactory
     * @param Request $request
     * @param string $filterId
     * @param string $redirectRoute
     * @param array $queryParamsToKeep
     *
     * @return RedirectResponse
     */
    public function buildSearchResponse(\PrestaShop\PrestaShop\Core\Grid\Definition\Factory\GridDefinitionFactoryInterface $definitionFactory, \Symfony\Component\HttpFoundation\Request $request, $filterId, $redirectRoute, array $queryParamsToKeep = [])
    {
    }
}

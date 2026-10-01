<?php

namespace PrestaShopBundle\Service\Grid;

class ResponseBuilder
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Grid\Filter\GridFilterFormFactoryInterface $filterFormFactory
     * @param \Symfony\Component\Routing\Router $router
     * @param \PrestaShopBundle\Entity\Repository\AdminFilterRepository $adminFilterRepository
     * @param int|null $employeeId
     * @param int $shopId
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Grid\Filter\GridFilterFormFactoryInterface $filterFormFactory, \Symfony\Component\Routing\Router $router, \PrestaShopBundle\Entity\Repository\AdminFilterRepository $adminFilterRepository, ?int $employeeId, int $shopId, \Symfony\Component\HttpFoundation\Session\Session $session)
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\GridDefinitionFactoryInterface $definitionFactory
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param string $filterId
     * @param string $redirectRoute
     * @param array $queryParamsToKeep
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function buildSearchResponse(\PrestaShop\PrestaShop\Core\Grid\Definition\Factory\GridDefinitionFactoryInterface $definitionFactory, \Symfony\Component\HttpFoundation\Request $request, $filterId, $redirectRoute, array $queryParamsToKeep = [])
    {
    }
}

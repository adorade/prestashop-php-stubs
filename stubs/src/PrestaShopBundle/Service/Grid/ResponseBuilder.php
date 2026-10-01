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
     * @param \Symfony\Component\HttpFoundation\RequestStack $requestStack
     */
    public function __construct(private readonly \PrestaShop\PrestaShop\Core\Grid\Filter\GridFilterFormFactoryInterface $filterFormFactory, private readonly \Symfony\Component\Routing\Router $router, private readonly \PrestaShopBundle\Entity\Repository\AdminFilterRepository $adminFilterRepository, private readonly ?int $employeeId, private readonly int $shopId, private readonly \Symfony\Component\HttpFoundation\RequestStack $requestStack)
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

<?php

namespace PrestaShopBundle\Service\Grid;

/**
 * Before we introduced the filterId notion to store/clean filters on grids the solution
 * used controller and action as a key to retrieve and filter. The filters were not scoped
 * in the request either (which prevented having two grids on the same page).
 * This class is responsible for building the controller response just like it worked before
 * filterId, this allows us to keep a backward compatibility in CommonController::searchAction.
 */
class ControllerResponseBuilder
{
    /**
     * @param GridFilterFormFactoryInterface $filterFormFactory
     * @param Router $router
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Grid\Filter\GridFilterFormFactoryInterface $filterFormFactory, \Symfony\Component\Routing\Router $router)
    {
    }
    /**
     * @param GridDefinitionFactoryInterface $definitionFactory
     * @param Request $request
     * @param string $redirectRoute
     * @param array $queryParamsToKeep
     *
     * @return RedirectResponse
     */
    public function buildSearchResponse(\PrestaShop\PrestaShop\Core\Grid\Definition\Factory\GridDefinitionFactoryInterface $definitionFactory, \Symfony\Component\HttpFoundation\Request $request, $redirectRoute, array $queryParamsToKeep = [])
    {
    }
}

<?php

namespace PrestaShopBundle\Routing\Converter;

/**
 * Class AbstractLegacyRouteProvider.
 */
abstract class AbstractLegacyRouteProvider implements \PrestaShopBundle\Routing\Converter\LegacyRouteProviderInterface
{
    /**
     * @var array|null
     */
    protected $controllersActions;
    /**
     * This is the only method that child classes need to implement.
     *
     * @return LegacyRoute[]
     */
    abstract public function getLegacyRoutes();
    /**
     * @return array
     */
    public function getControllersActions()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getActionsByController($controller)
    {
    }
    /**
     * Return the LegacyRoute object matching $controller and $action.
     *
     * @param string $controller
     * @param string|null $action
     *
     * @return LegacyRoute
     *
     * @throws RouteNotFoundException
     */
    public function getLegacyRouteByAction($controller, $action)
    {
    }
}

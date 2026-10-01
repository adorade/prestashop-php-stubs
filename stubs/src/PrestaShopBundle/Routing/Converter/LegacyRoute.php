<?php

namespace PrestaShopBundle\Routing\Converter;

/**
 * Class LegacyRoute contains the info about a route, its legacyLinks, legacyParameters
 * and controller actions hash map. This class can be built simply based on the routeDefaults
 * parameters and its name.
 */
class LegacyRoute
{
    /**
     * @param string $routeName
     * @param array $legacyLinks
     * @param array $routeParameters
     */
    public function __construct($routeName, array $legacyLinks, array $routeParameters)
    {
    }
    /**
     * @param string|null $action
     *
     * @return bool
     */
    public static function isIndexAction($action)
    {
    }
    /**
     * @param string $routeName
     * @param array $routeDefaults
     *
     * @return LegacyRoute
     */
    public static function buildLegacyRoute($routeName, array $routeDefaults)
    {
    }
    /**
     * @return string
     */
    public function getRouteName()
    {
    }
    /**
     * @return array
     */
    public function getLegacyLinks()
    {
    }
    /**
     * @return array
     */
    public function getRouteParameters()
    {
    }
    /**
     * @return array
     */
    public function getControllersActions()
    {
    }
}

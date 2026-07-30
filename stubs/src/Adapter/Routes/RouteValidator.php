<?php

namespace PrestaShop\PrestaShop\Adapter\Routes;

/**
 * Class RouteValidator is responsible for validating routes.
 */
class RouteValidator
{
    /**
     * Check for a route pattern validity.
     *
     * @param string $pattern to validate
     *
     * @return bool Validity is ok or not
     */
    public function isRoutePattern($pattern)
    {
    }
    /**
     * Check if a route rule contain all required keywords of default route definition.
     *
     * @param string $routeId
     * @param string $rule Rule to verify
     *
     * @return array - returns list of missing keywords
     *
     * @throws PrestaShopException
     */
    public function doesRouteContainsRequiredKeywords($routeId, $rule)
    {
    }
}

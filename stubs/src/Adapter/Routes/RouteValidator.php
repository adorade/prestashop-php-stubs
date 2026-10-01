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
     * @deprecated since 9.0.1, use isRouteValid instead.
     */
    public function doesRouteContainsRequiredKeywords($routeId, $rule)
    {
    }
    /**
     * Check if a route rule is valid.
     *
     * @param string $routeId
     * @param string $rule Rule to verify
     *
     * @return array - returns list of missing or unknown keywords
     *
     * @throws \PrestaShopException
     */
    public function isRouteValid(string $routeId, string $rule): array
    {
    }
}

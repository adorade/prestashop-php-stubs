<?php

namespace PrestaShopBundle\Routing\Linter;

/**
 * Interface for service that performs linting on route
 */
interface RouteLinterInterface
{
    /**
     * @param Route $route
     *
     * @throws LinterException when linting error occurs
     */
    public function lint($routeName, \Symfony\Component\Routing\Route $route);
}

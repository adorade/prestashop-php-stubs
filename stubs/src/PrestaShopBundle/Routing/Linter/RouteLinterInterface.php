<?php

namespace PrestaShopBundle\Routing\Linter;

/**
 * Interface for service that performs linting on route
 */
interface RouteLinterInterface
{
    /**
     * @param \Symfony\Component\Routing\Route $route
     *
     * @throws \PrestaShopBundle\Routing\Linter\Exception\LinterException when linting error occurs
     */
    public function lint($routeName, \Symfony\Component\Routing\Route $route);
}

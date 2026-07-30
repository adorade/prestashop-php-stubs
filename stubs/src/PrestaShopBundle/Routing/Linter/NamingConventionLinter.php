<?php

namespace PrestaShopBundle\Routing\Linter;

/**
 * Checks that route and contoller follows naming conventions
 */
final class NamingConventionLinter implements \PrestaShopBundle\Routing\Linter\RouteLinterInterface
{
    /**
     * {@inheritdoc}
     */
    public function lint($routeName, \Symfony\Component\Routing\Route $route)
    {
    }
}

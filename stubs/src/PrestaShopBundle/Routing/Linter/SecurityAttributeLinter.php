<?php

namespace PrestaShopBundle\Routing\Linter;

/**
 * Checks if SecurityAnnotation is configured for route's controller action
 */
final class SecurityAttributeLinter implements \PrestaShopBundle\Routing\Linter\RouteLinterInterface
{
    /**
     * @param \Symfony\Component\Routing\Route $route
     *
     * @return \PrestaShopBundle\Security\Attribute\AdminSecurity[]
     *
     * @throws \ReflectionException
     * @throws \PrestaShopBundle\Routing\Linter\Exception\LinterException
     */
    public function getRouteSecurityAttributes(\Symfony\Component\Routing\Route $route)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function lint($routeName, \Symfony\Component\Routing\Route $route)
    {
    }
}

<?php

namespace PrestaShopBundle\Routing\Linter;

/**
 * Checks if SecurityAnnotation is configured for route's controller action
 */
final class SecurityAnnotationLinter implements \PrestaShopBundle\Routing\Linter\RouteLinterInterface
{
    /**
     * @param Reader $annotationReader
     */
    public function __construct(\Doctrine\Common\Annotations\Reader $annotationReader)
    {
    }
    /**
     * @param string $routeName
     * @param Route $route
     *
     * @return AdminSecurity
     *
     * @throws \ReflectionException
     * @throws LinterException
     */
    public function getRouteSecurityAnnotation($routeName, \Symfony\Component\Routing\Route $route)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function lint($routeName, \Symfony\Component\Routing\Route $route)
    {
    }
}

<?php

namespace PrestaShopBundle\Routing\Linter;

/**
 * Checks if SecurityAnnotation is configured for route's controller action
 */
final class SecurityAnnotationLinter implements \PrestaShopBundle\Routing\Linter\RouteLinterInterface
{
    /**
     * @param \Doctrine\Common\Annotations\Reader $annotationReader
     */
    public function __construct(\Doctrine\Common\Annotations\Reader $annotationReader)
    {
    }
    /**
     * @param string $routeName
     * @param \Symfony\Component\Routing\Route $route
     *
     * @return \PrestaShopBundle\Security\Annotation\AdminSecurity
     *
     * @throws \ReflectionException
     * @throws \PrestaShopBundle\Routing\Linter\Exception\LinterException
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

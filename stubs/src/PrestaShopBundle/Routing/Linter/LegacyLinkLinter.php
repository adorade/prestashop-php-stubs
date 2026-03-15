<?php

namespace PrestaShopBundle\Routing\Linter;

/**
 * Responsible for checking route _legacy_link configuration
 */
final class LegacyLinkLinter implements \PrestaShopBundle\Routing\Linter\RouteLinterInterface
{
    /**
     * Checks if _legacy_link is configured to route.
     * Returns true if configured, false if not.
     *
     * {@inheritdoc}
     */
    public function lint($routeName, \Symfony\Component\Routing\Route $route)
    {
    }
}

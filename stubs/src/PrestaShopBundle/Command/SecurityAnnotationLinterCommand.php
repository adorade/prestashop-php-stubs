<?php

namespace PrestaShopBundle\Command;

/**
 * Checks if all admin routes have @AdminSecurity configured
 *
 * @see \PrestaShopBundle\Security\Annotation\AdminSecurity
 */
final class SecurityAnnotationLinterCommand extends \Symfony\Component\Console\Command\Command
{
    public const ACTION_LIST_ALL = 'list';
    public const ACTION_FIND_MISSING = 'find-missing';
    public function __construct(\PrestaShopBundle\Routing\Linter\AdminRouteProvider $adminRouteProvider, \PrestaShopBundle\Routing\Linter\SecurityAnnotationLinter $securityAnnotationLinter)
    {
    }
    /**
     * @param string $expression
     *
     * @return string
     */
    public static function parseExpression($expression)
    {
    }
    /**
     * @return string[]
     */
    public static function getAvailableActions()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function configure()
    {
    }
}

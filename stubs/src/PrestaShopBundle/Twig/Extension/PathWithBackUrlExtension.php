<?php

namespace PrestaShopBundle\Twig\Extension;

/**
 * This class adds a function to twig template which points to back url if such is found in current request.
 */
class PathWithBackUrlExtension extends \Twig\Extension\AbstractExtension
{
    /**
     * @param RoutingExtension $routingExtension
     * @param BackUrlProvider $backUrlProvider
     * @param RequestStack|null $requestStack
     */
    public function __construct(\Symfony\Bridge\Twig\Extension\RoutingExtension $routingExtension, \PrestaShop\PrestaShop\Core\Util\Url\BackUrlProvider $backUrlProvider, $requestStack)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getFunctions()
    {
    }
    /**
     * Gets original path or back url path.
     *
     * @param string $name - route name
     * @param array $parameters - route parameters
     * @param bool $relative
     *
     * @return string
     */
    public function getPathWithBackUrl($name, $parameters = [], $relative = false)
    {
    }
}

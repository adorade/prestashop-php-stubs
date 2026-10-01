<?php

namespace PrestaShopBundle\Twig\Extension;

/**
 * This class adds a function to twig template which points to back url if such is found in current request.
 */
class PathWithBackUrlExtension extends \Twig\Extension\AbstractExtension
{
    public function __construct(private readonly \Symfony\Component\Routing\Generator\UrlGeneratorInterface $urlGenerator, private readonly \PrestaShop\PrestaShop\Core\Util\Url\BackUrlProvider $backUrlProvider, private readonly \Symfony\Component\HttpFoundation\RequestStack $requestStack)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getFunctions(): array
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
    public function getPathWithBackUrl(string $name, array $parameters = [], bool $relative = false): string
    {
    }
}

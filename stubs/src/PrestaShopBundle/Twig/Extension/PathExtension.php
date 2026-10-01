<?php

namespace PrestaShopBundle\Twig\Extension;

/**
 * This class adds a function to twig template which points to back url if such is found in current request.
 */
class PathExtension extends \Twig\Extension\AbstractExtension
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Adapter\LegacyContext $context, private readonly \PrestaShop\PrestaShop\Core\Security\Hashing $hashing, private readonly string $cookieKey)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getFunctions(): array
    {
    }
    /**
     * Get path for legacy link.
     *
     * @param string $controllerName
     * @param array $parameters
     *
     * @return string
     */
    public function getLegacyPath(string $controllerName, array $parameters = []): string
    {
    }
    /**
     * Get token for legacy controller, this method mimics the same behaviour as Tools::getAdminToken.
     *
     * @param string $controllerName
     *
     * @return string
     */
    public function getLegacyAdminToken(string $controllerName): string
    {
    }
}

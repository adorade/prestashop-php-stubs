<?php

namespace PrestaShop\PrestaShop\Adapter\Admin;

/**
 * This UrlGeneratorInterface implementation (in a Sf service) will provides Legacy URLs.
 *
 * To be used by Symfony controllers, to generate a link to a Legacy page.
 * Call an instance of it through the Symfony container:
 * $container->get('prestashop.core.admin.url_generator_legacy');
 * Or via the UrlGeneratorFactory (as Sf service):
 * $container->get('prestashop.core.admin.url_generator_factory')->forLegacy();
 */
class UrlGenerator implements \Symfony\Component\Routing\Generator\UrlGeneratorInterface
{
    /**
     * Constructor.
     *
     * @param LegacyContext $legacyContext
     * @param Router $router
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\LegacyContext $legacyContext, \Symfony\Component\Routing\Router $router)
    {
    }
    /**
     * @param string $name
     * @param array $parameters
     * @param int $referenceType
     *
     * @return string
     */
    public function generate($name, $parameters = [], $referenceType = self::ABSOLUTE_PATH)
    {
    }
    /**
     * Try to get controller & parameters with mapping options.
     *
     * If failed to find options, then return the input values.
     *
     * @param string $routeName
     * @param string[] $parameters The route parameters to convert
     *
     * @return array{0: string, 1: array<string>} An array with: the legacy controller name, then the parameters array
     */
    final public function getLegacyOptions($routeName, $parameters = [])
    {
    }
    /**
     * {@inheritdoc}
     */
    public function setContext(\Symfony\Component\Routing\RequestContext $context)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getContext()
    {
    }
}

<?php

namespace PrestaShopBundle\Bridge\Smarty;

/**
 * This class is used to put all needed variable in the Smarty object,
 * and to render smarty as a symfony response.
 */
class SmartyBridge
{
    public const LAYOUT = 'layout.tpl';
    /**
     * @param \PrestaShop\PrestaShop\Adapter\LegacyContext $legacyContext
     * @param \PrestaShop\PrestaShop\Adapter\Configuration $configuration
     * @param ConfiguratorInterface[] $configurators
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\LegacyContext $legacyContext, \PrestaShop\PrestaShop\Adapter\Configuration $configuration, iterable $configurators)
    {
    }
    /**
     * @param string $content
     * @param \PrestaShopBundle\Bridge\AdminController\ControllerConfiguration $controllerConfiguration
     * @param \Symfony\Component\HttpFoundation\Response|null $response
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function render(string $content, \PrestaShopBundle\Bridge\AdminController\ControllerConfiguration $controllerConfiguration, \Symfony\Component\HttpFoundation\Response $response = null): \Symfony\Component\HttpFoundation\Response
    {
    }
}

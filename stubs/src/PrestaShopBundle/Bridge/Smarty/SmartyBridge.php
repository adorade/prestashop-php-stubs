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
     * @param LegacyContext $legacyContext
     * @param Configuration $configuration
     * @param ConfiguratorInterface[] $configurators
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\LegacyContext $legacyContext, \PrestaShop\PrestaShop\Adapter\Configuration $configuration, iterable $configurators)
    {
    }
    /**
     * @param string $content
     * @param ControllerConfiguration $controllerConfiguration
     * @param Response|null $response
     *
     * @return Response
     */
    public function render(string $content, \PrestaShopBundle\Bridge\AdminController\ControllerConfiguration $controllerConfiguration, \Symfony\Component\HttpFoundation\Response $response = null): \Symfony\Component\HttpFoundation\Response
    {
    }
}

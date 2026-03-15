<?php

namespace PrestaShopBundle\EventListener;

/**
 * This listener converts the request routing information (if present) into an array
 * of legacy parameters which is then injected into the Tools class allowing to access
 * former legacy parameters using the same Tools::getValue and the same parameter name.
 *
 * Note: this is limited to parameters defined in the routing via _legacy_link and _legacy_parameters
 */
class LegacyParametersListener
{
    /**
     * @param LegacyParametersConverter $converter
     */
    public function __construct(\PrestaShopBundle\Routing\Converter\LegacyParametersConverter $converter)
    {
    }
    /**
     * @param RequestEvent $event
     */
    public function onKernelRequest(\Symfony\Component\HttpKernel\Event\RequestEvent $event)
    {
    }
}

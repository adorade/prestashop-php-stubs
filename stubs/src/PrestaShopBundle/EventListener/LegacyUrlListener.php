<?php

namespace PrestaShopBundle\EventListener;

/**
 * Converts any legacy url into a migrated Symfony url (if it exists) and redirect to it.
 */
class LegacyUrlListener
{
    /**
     * @param \PrestaShopBundle\Routing\Converter\LegacyUrlConverter $converter
     */
    public function __construct(\PrestaShopBundle\Routing\Converter\LegacyUrlConverter $converter)
    {
    }
    /**
     * @param \Symfony\Component\HttpKernel\Event\RequestEvent $event
     */
    public function onKernelRequest(\Symfony\Component\HttpKernel\Event\RequestEvent $event)
    {
    }
}

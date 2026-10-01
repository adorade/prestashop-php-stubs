<?php

namespace PrestaShopBundle\EventListener\API;

/**
 * Middleware that is triggered during `kernel.request` event on Symfony routing process, to trigger error response when
 * proper environment does not meet the requirements.
 *
 * For APi requests we force HTTPs protocol with TLSv1.2+
 */
class SSLMiddlewareListener
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration, private readonly bool $isDebug)
    {
    }
    /**
     * Registered as `kernel.request` event listener.
     *
     * If the condition needs a redirection to HTTPS, then the current process is interrupted, the headers are sent directly.
     *
     * @param \Symfony\Component\HttpKernel\Event\RequestEvent $event
     */
    public function onKernelRequest(\Symfony\Component\HttpKernel\Event\RequestEvent $event): void
    {
    }
}

<?php

namespace PrestaShopBundle\EventListener\Admin;

/**
 * Middleware that is triggered during `kernel.request` event on Symfony routing process, to redirect to HTTPS in some cases.
 *
 * If PS_SSL_ENABLED & REFERER is HTTPS
 * Then redirect to the equivalent URL to HTTPS.
 */
class SSLMiddlewareListener
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration)
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

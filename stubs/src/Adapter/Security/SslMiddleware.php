<?php

namespace PrestaShop\PrestaShop\Adapter\Security;

/**
 * Middleware that is triggered during kernel.request event on Symfony routing process, to redirect to HTTPS in some cases.
 *
 * If PS_SSL_ENABLED & (PS_SSL_ENABLED_EVERYWHERE | REFERER is HTTPS)
 * Then redirect to the equivalent URL to HTTPS.
 * Warning : will lost post data,
 */
class SslMiddleware
{
    /**
     * Registered as kernel.request event listener.
     *
     * If the condition needs a redirection to HTTPS, then the current process is interrupted, the headers are sent directly.
     *
     * @param RequestEvent $event
     */
    public function onKernelRequest(\Symfony\Component\HttpKernel\Event\RequestEvent $event)
    {
    }
}

<?php

namespace PrestaShopBundle\EventListener;

/**
 * Each Symfony url is automatically tokenized to avoid CSRF fails using XSS failures.
 *
 * If token in url is not found or invalid, the user is redirected to a warning page
 */
class TokenizedUrlsListener
{
    public function __construct(\Symfony\Component\Security\Csrf\CsrfTokenManager $tokenManager, \Symfony\Component\Routing\RouterInterface $router, $username, \PrestaShop\PrestaShop\Adapter\LegacyContext $legacyContext)
    {
    }
    public function onKernelRequest(\Symfony\Component\HttpKernel\Event\KernelEvent $event)
    {
    }
}

<?php

namespace PrestaShopBundle\EventListener\Admin;

/**
 * Each Symfony url is automatically tokenized to avoid CSRF fails using XSS failures.
 *
 * If token in url is not found or invalid, the user is redirected to a warning page
 */
class TokenizedUrlsListener
{
    public function __construct(private readonly \Symfony\Component\Routing\RouterInterface $router, private readonly \PrestaShopBundle\Security\Admin\UserTokenManager $userTokenManager, private readonly \Symfony\Component\Security\Http\AccessMapInterface $map)
    {
    }
    public function onKernelRequest(\Symfony\Component\HttpKernel\Event\RequestEvent $event): void
    {
    }
}

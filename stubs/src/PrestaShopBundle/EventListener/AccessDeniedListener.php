<?php

namespace PrestaShopBundle\EventListener;

/**
 * Allow a redirection to the right url when using BetterSecurity annotation.
 */
class AccessDeniedListener
{
    public function __construct(\Symfony\Component\Routing\RouterInterface $router, \Symfony\Contracts\Translation\TranslatorInterface $translator, \Symfony\Component\HttpFoundation\Session\Session $session)
    {
    }
    /**
     * @param GetResponseForExceptionEvent $event
     */
    public function onKernelException(\Symfony\Component\HttpKernel\Event\GetResponseForExceptionEvent $event)
    {
    }
}

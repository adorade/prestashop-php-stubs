<?php

namespace PrestaShopBundle\EventListener;

/**
 * Allow a redirection to the right url when using BetterSecurity annotation.
 */
class DemoModeEnabledListener
{
    /**
     * DemoModeEnabledListener constructor.
     *
     * @param RouterInterface $router
     * @param TranslatorInterface $translator
     * @param Session $session
     * @param Reader $annotationReader
     * @param bool $isDemoModeEnabled
     */
    public function __construct(\Symfony\Component\Routing\RouterInterface $router, \Symfony\Contracts\Translation\TranslatorInterface $translator, \Symfony\Component\HttpFoundation\Session\Session $session, \Doctrine\Common\Annotations\Reader $annotationReader, $isDemoModeEnabled)
    {
    }
    /**
     * @param FilterControllerEvent $event
     */
    public function onKernelController(\Symfony\Component\HttpKernel\Event\FilterControllerEvent $event)
    {
    }
}

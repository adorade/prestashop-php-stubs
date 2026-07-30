<?php

namespace PrestaShopBundle\EventListener;

/**
 * Allow a redirection to the right url when using ModuleActivated annotation
 * and the module is inactive.
 */
class ModuleActivatedListener
{
    /**
     * @param RouterInterface $router
     * @param TranslatorInterface $translator
     * @param Session $session
     * @param Reader $annotationReader
     * @param ModuleRepository $moduleRepository
     */
    public function __construct(\Symfony\Component\Routing\RouterInterface $router, \Symfony\Contracts\Translation\TranslatorInterface $translator, \Symfony\Component\HttpFoundation\Session\Session $session, \Doctrine\Common\Annotations\Reader $annotationReader, \PrestaShop\PrestaShop\Core\Module\ModuleRepository $moduleRepository)
    {
    }
    /**
     * @param FilterControllerEvent $event
     *
     * @throws AnnotationException
     * @throws \ReflectionException
     */
    public function onKernelController(\Symfony\Component\HttpKernel\Event\FilterControllerEvent $event)
    {
    }
}

<?php

namespace PrestaShopBundle\EventListener;

/**
 * Allow a redirection to the right url when using ModuleActivated annotation
 * and the module is inactive.
 */
class ModuleActivatedListener
{
    /**
     * @param \Symfony\Component\Routing\RouterInterface $router
     * @param \Symfony\Contracts\Translation\TranslatorInterface $translator
     * @param \Symfony\Component\HttpFoundation\Session\Session $session
     * @param \Doctrine\Common\Annotations\Reader $annotationReader
     * @param \PrestaShop\PrestaShop\Core\Module\ModuleRepository $moduleRepository
     */
    public function __construct(\Symfony\Component\Routing\RouterInterface $router, \Symfony\Contracts\Translation\TranslatorInterface $translator, \Symfony\Component\HttpFoundation\Session\Session $session, \Doctrine\Common\Annotations\Reader $annotationReader, \PrestaShop\PrestaShop\Core\Module\ModuleRepository $moduleRepository)
    {
    }
    /**
     * @param \Symfony\Component\HttpKernel\Event\FilterControllerEvent $event
     *
     * @throws \Doctrine\Common\Annotations\AnnotationException
     * @throws \ReflectionException
     */
    public function onKernelController(\Symfony\Component\HttpKernel\Event\FilterControllerEvent $event)
    {
    }
}

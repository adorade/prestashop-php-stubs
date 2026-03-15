<?php

namespace PrestaShopBundle\Form\Admin\Sell\Product\EventListener;

class VirtualProductFileListener implements \Symfony\Component\EventDispatcher\EventSubscriberInterface
{
    public function __construct(\PrestaShopBundle\Form\FormCloner $formCloner)
    {
    }
    /**
     * {@inheritDoc}
     */
    public static function getSubscribedEvents()
    {
    }
    /**
     * Remove form constraints if there is no virtual file added, to avoid invalidating the form for nothing
     *
     * @param FormEvent $event
     */
    public function adaptFormConstraints(\Symfony\Component\Form\FormEvent $event): void
    {
    }
}

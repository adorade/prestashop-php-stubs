<?php

namespace PrestaShopBundle\Form\Admin\Sell\Product\EventListener;

class CombinationListener implements \Symfony\Component\EventDispatcher\EventSubscriberInterface
{
    /**
     * {@inheritDoc}
     */
    public static function getSubscribedEvents(): array
    {
    }
    /**
     * @param FormEvent $event
     */
    public function adaptCombinationForm(\Symfony\Component\Form\FormEvent $event): void
    {
    }
}

<?php

namespace PrestaShopBundle\Form\Admin\Type\EventListener;

class PriceReductionListener implements \Symfony\Component\EventDispatcher\EventSubscriberInterface
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
    public function adaptReductionField(\Symfony\Component\Form\FormEvent $event): void
    {
    }
}

<?php

namespace PrestaShopBundle\Form\Admin\Sell\Product\EventListener;

/**
 * Adapts the attribute of target input depending on which type has been selected, this
 * automatically adapts the label, placeholders and search url for entities.
 */
class RedirectOptionListener implements \Symfony\Component\EventDispatcher\EventSubscriberInterface
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
    public function updateRedirectionOptions(\Symfony\Component\Form\FormEvent $event): void
    {
    }
}

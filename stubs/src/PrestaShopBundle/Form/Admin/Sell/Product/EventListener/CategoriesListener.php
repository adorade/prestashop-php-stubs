<?php

namespace PrestaShopBundle\Form\Admin\Sell\Product\EventListener;

class CategoriesListener implements \Symfony\Component\EventDispatcher\EventSubscriberInterface
{
    /**
     * @param FormCloner $formCloner
     */
    public function __construct(\PrestaShopBundle\Form\FormCloner $formCloner)
    {
    }
    /**
     * {@inheritDoc}
     */
    public static function getSubscribedEvents(): array
    {
    }
    /**
     * @param FormEvent $event
     */
    public function updateDefaultCategoryChoices(\Symfony\Component\Form\FormEvent $event): void
    {
    }
}

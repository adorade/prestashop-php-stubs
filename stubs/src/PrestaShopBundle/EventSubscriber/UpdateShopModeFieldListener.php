<?php

namespace PrestaShopBundle\EventSubscriber;

class UpdateShopModeFieldListener implements \Symfony\Component\EventDispatcher\EventSubscriberInterface
{
    public function __construct(private readonly \PrestaShopBundle\Service\Form\ImprovedB2bTabsToggler $toggler)
    {
    }
    public static function getSubscribedEvents()
    {
    }
    public function onPostSubmit(): void
    {
    }
}

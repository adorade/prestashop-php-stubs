<?php

namespace PrestaShopBundle\EventListener\Admin;

final class ImprovedB2bFeatureFlagListener
{
    public function __construct(private readonly \PrestaShopBundle\Service\Form\ImprovedB2bTabsToggler $toggler)
    {
    }
    public function postUpdate(\PrestaShopBundle\Entity\FeatureFlag $featureFlag, \Doctrine\ORM\Event\PostUpdateEventArgs $event): void
    {
    }
}

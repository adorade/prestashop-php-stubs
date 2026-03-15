<?php

namespace PrestaShopBundle\Form\Admin\Sell\Product\EventListener;

/**
 * This listener dynamically updates the form depending on the product type, like
 * is it virtual, a pack, does it have combinations, ...
 */
class ProductTypeListener implements \Symfony\Component\EventDispatcher\EventSubscriberInterface
{
    /**
     * @param HookInformationProvider $hookInformationProvider
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Hook\HookInformationProvider $hookInformationProvider)
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
    public function adaptProductForm(\Symfony\Component\Form\FormEvent $event): void
    {
    }
    protected function removeCombinations(\Symfony\Component\Form\FormInterface $form): void
    {
    }
    protected function removeProductSuppliers(\Symfony\Component\Form\FormInterface $form): void
    {
    }
    protected function removeSuppliers(\Symfony\Component\Form\FormInterface $form): void
    {
    }
    protected function removeStock(\Symfony\Component\Form\FormInterface $form): void
    {
    }
    protected function removePackStockType(\Symfony\Component\Form\FormInterface $form): void
    {
    }
    protected function removePack(\Symfony\Component\Form\FormInterface $form): void
    {
    }
    protected function removeVirtualProduct(\Symfony\Component\Form\FormInterface $form): void
    {
    }
    protected function removeStockMovementsIfNecessary(\Symfony\Component\Form\FormInterface $form, array $data): void
    {
    }
    protected function removeShipping(\Symfony\Component\Form\FormInterface $form): void
    {
    }
    protected function removeEcotax(\Symfony\Component\Form\FormInterface $form): void
    {
    }
}

<?php

namespace PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataProvider;

/**
 * Provides data for order return edit form
 */
class OrderReturnFormDataProvider implements \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataProvider\FormDataProviderInterface
{
    /**
     * @param CommandBusInterface $queryBus
     */
    public function __construct(\PrestaShop\PrestaShop\Core\CommandBus\CommandBusInterface $queryBus, \Symfony\Component\Routing\RouterInterface $router, \Symfony\Contracts\Translation\TranslatorInterface $translator, string $dateFormat)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getData($orderReturnId): array
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getDefaultData(): array
    {
    }
}

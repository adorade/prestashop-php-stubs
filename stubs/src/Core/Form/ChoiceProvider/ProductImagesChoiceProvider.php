<?php

namespace PrestaShop\PrestaShop\Core\Form\ChoiceProvider;

final class ProductImagesChoiceProvider implements \PrestaShop\PrestaShop\Core\Form\ConfigurableFormChoiceProviderInterface
{
    /**
     * @param CommandBusInterface $queryBus
     */
    public function __construct(\PrestaShop\PrestaShop\Core\CommandBus\CommandBusInterface $queryBus, int $defaultShopId, ?int $contextShopId)
    {
    }
    /**
     * {@inheritDoc}
     */
    public function getChoices(array $options): array
    {
    }
}

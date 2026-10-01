<?php

namespace PrestaShop\PrestaShop\Adapter\Form\ChoiceProvider;

final class AvailableCarriersForShipmentChoiceProvider implements \PrestaShop\PrestaShop\Core\Form\ConfigurableFormChoiceProviderInterface
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Core\CommandBus\CommandBusInterface $commandBus, private readonly \PrestaShopBundle\Entity\Repository\ShipmentRepository $shipmentRepository, private readonly \Symfony\Contracts\Translation\TranslatorInterface $translator)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getChoices(array $options): array
    {
    }
}

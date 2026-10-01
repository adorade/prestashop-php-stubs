<?php

namespace PrestaShopBundle\Form\Admin\Sell\Order\Shipment;

class EditShipmentType extends \Symfony\Component\Form\AbstractType
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Adapter\Form\ChoiceProvider\AvailableCarriersForShipmentChoiceProvider $availableCarriersForShipmentChoiceProvider, private readonly \Symfony\Contracts\Translation\TranslatorInterface $translator)
    {
    }
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options): void
    {
    }
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver): void
    {
    }
}

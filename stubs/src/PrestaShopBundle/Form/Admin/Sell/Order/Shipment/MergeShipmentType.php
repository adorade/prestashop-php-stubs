<?php

namespace PrestaShopBundle\Form\Admin\Sell\Order\Shipment;

class MergeShipmentType extends \Symfony\Component\Form\AbstractType
{
    public function __construct(private readonly \Symfony\Contracts\Translation\TranslatorInterface $translator)
    {
    }
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options): void
    {
    }
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver): void
    {
    }
}

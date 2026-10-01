<?php

namespace PrestaShopBundle\Form\Admin\Sell\Discount;

class DiscountTypeChoiceType extends \Symfony\Component\Form\Extension\Core\Type\ChoiceType
{
    public function __construct(protected readonly \Symfony\Contracts\Translation\TranslatorInterface $translator, protected readonly \PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface $choiceProvider)
    {
    }
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver)
    {
    }
}

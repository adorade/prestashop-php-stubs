<?php

namespace PrestaShopBundle\Form\Admin\Type;

/**
 * Combines a money input with a currency selector in a single input-group.
 */
class CurrencyMoneyType extends \Symfony\Component\Form\AbstractType
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Core\Currency\CurrencyDataProviderInterface $currencyDataProvider, private readonly \PrestaShop\PrestaShop\Core\Form\ChoiceProvider\CurrencyByIdChoiceProvider $currencyByIdChoiceProvider)
    {
    }
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options): void
    {
    }
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver): void
    {
    }
    public function getBlockPrefix(): string
    {
    }
}

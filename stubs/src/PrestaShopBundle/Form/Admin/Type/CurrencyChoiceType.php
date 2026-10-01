<?php

namespace PrestaShopBundle\Form\Admin\Type;

class CurrencyChoiceType extends \Symfony\Component\Form\AbstractType
{
    public function __construct(\PrestaShop\PrestaShop\Core\Currency\CurrencyDataProviderInterface $currencyDataProvider, \PrestaShop\PrestaShop\Core\Form\ChoiceProvider\CurrencyByIdChoiceProvider $currencyByIdChoiceProvider)
    {
    }
    public function getParent(): string
    {
    }
    /**
     * {@inheritDoc}
     */
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver): void
    {
    }
}

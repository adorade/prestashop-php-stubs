<?php

namespace PrestaShopBundle\Form\Admin\Type;

/**
 * Responsible for creating form for price reduction
 */
class PriceReductionType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, array $locales, \Symfony\Component\EventDispatcher\EventSubscriberInterface $eventSubscriber, \PrestaShop\PrestaShop\Core\Form\ChoiceProvider\ReductionTypeChoiceProvider $reductionTypeChoiceProvider, \PrestaShop\PrestaShop\Core\Currency\CurrencyDataProviderInterface $currencyDataProvider)
    {
    }
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver)
    {
    }
}

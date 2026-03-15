<?php

namespace PrestaShopBundle\Form\Admin\Type;

/**
 * Responsible for creating form for price reduction
 */
class PriceReductionType extends \PrestaShopBundle\Form\Admin\Type\CommonAbstractType
{
    public function __construct(\Currency $defaultCurrency, \Symfony\Component\EventDispatcher\EventSubscriberInterface $eventSubscriber, \PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface $taxInclusionChoiceProvider)
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

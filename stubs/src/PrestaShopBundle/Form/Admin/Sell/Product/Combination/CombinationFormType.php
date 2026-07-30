<?php

namespace PrestaShopBundle\Form\Admin\Sell\Product\Combination;

/**
 * Form to edit Combination details.
 */
class CombinationFormType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    /**
     * @param TranslatorInterface $translator
     * @param array $locales
     * @param EventSubscriberInterface $combinationListener
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, array $locales, \Symfony\Component\EventDispatcher\EventSubscriberInterface $combinationListener)
    {
    }
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
    }
    /**
     * {@inheritDoc}
     */
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver)
    {
    }
}

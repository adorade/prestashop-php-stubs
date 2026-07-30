<?php

namespace PrestaShopBundle\Form\Admin\Sell\Product\Category;

class CategoriesType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    /**
     * @param TranslatorInterface $translator
     * @param array $locales
     * @param ConfigurableFormChoiceProviderInterface $defaultCategoryChoiceProvider
     * @param EventSubscriberInterface $eventSubscriber
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, array $locales, \PrestaShop\PrestaShop\Core\Form\ConfigurableFormChoiceProviderInterface $defaultCategoryChoiceProvider, \Symfony\Component\EventDispatcher\EventSubscriberInterface $eventSubscriber)
    {
    }
    /**
     * {@inheritDoc}
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

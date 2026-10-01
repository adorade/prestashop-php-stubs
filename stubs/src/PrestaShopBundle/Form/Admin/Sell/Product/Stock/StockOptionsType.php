<?php

namespace PrestaShopBundle\Form\Admin\Sell\Product\Stock;

class StockOptionsType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    /**
     * @param \Symfony\Contracts\Translation\TranslatorInterface $translator
     * @param array $locales
     * @param \Symfony\Component\Routing\RouterInterface $router
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, array $locales, \Symfony\Component\Routing\RouterInterface $router)
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

<?php

namespace PrestaShopBundle\Form\Admin\Configure\ShopParameters\ProductPreferences;

/**
 * Class generates "General" form
 * in "Configure > Shop Parameters > Product Settings" page.
 */
class GeneralType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    /**
     * @param TranslatorInterface $translator
     * @param array $locales
     * @param LegacyContext $legacyContext
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, array $locales, \PrestaShop\PrestaShop\Adapter\LegacyContext $legacyContext)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
    }
}

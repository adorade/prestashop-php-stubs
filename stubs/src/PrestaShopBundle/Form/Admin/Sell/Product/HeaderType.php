<?php

namespace PrestaShopBundle\Form\Admin\Sell\Product;

class HeaderType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    /**
     * @param \Symfony\Contracts\Translation\TranslatorInterface $translator
     * @param array $locales
     * @param bool $stockManagementEnabled
     * @param bool $isEcotaxEnabled
     * @param \PrestaShopBundle\Form\Toolbar\ToolbarButtonsProviderInterface $toolbarButtonsProvider
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, array $locales, bool $stockManagementEnabled, bool $isEcotaxEnabled, \PrestaShopBundle\Form\Toolbar\ToolbarButtonsProviderInterface $toolbarButtonsProvider)
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

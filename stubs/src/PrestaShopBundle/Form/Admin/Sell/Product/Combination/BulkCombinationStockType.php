<?php

namespace PrestaShopBundle\Form\Admin\Sell\Product\Combination;

class BulkCombinationStockType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    /**
     * @param TranslatorInterface $translator
     * @param array $locales
     * @param bool $stockManagementEnabled
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, array $locales, bool $stockManagementEnabled)
    {
    }
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
    }
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver)
    {
    }
}

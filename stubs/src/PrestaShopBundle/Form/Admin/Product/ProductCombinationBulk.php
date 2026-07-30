<?php

namespace PrestaShopBundle\Form\Admin\Product;

/**
 * @deprecated since 8.1 and will be removed in next major.
 *
 * This form class is responsible to generate the form for bulk combination feature
 * Note this form is not validated from the server side.
 */
class ProductCombinationBulk extends \PrestaShopBundle\Form\Admin\Type\CommonAbstractType
{
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, \PrestaShop\PrestaShop\Adapter\Configuration $configuration)
    {
    }
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
    }
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver)
    {
    }
    public function getBlockPrefix()
    {
    }
}

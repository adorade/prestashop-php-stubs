<?php

namespace PrestaShopBundle\Form\Admin\Sell\Product;

/**
 * This form type is used to copy data from one shop to some others, you can also unselect/remove some
 * shops. The content of the shop is based on the product initial shops and the whole list of selectable
 * shops.
 */
class ProductShopsType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
    }
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver)
    {
    }
}

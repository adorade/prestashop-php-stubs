<?php

namespace PrestaShopBundle\Form\Admin\Product;

/**
 * @deprecated since 8.1 and will be removed in next major.
 *
 * This form class is responsible to generate the basic product suppliers form.
 */
class ProductSupplierCombination extends \PrestaShopBundle\Form\Admin\Type\CommonAbstractType
{
    /**
     * Constructor.
     *
     * @param object $contextLegacy
     * @param object $currencyAdapter
     */
    public function __construct($contextLegacy, $currencyAdapter)
    {
    }
    /**
     * {@inheritdoc}
     *
     * Builds form
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
     * Returns the block prefix of this type.
     *
     * @return string The prefix name
     */
    public function getBlockPrefix()
    {
    }
}

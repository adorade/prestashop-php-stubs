<?php

namespace PrestaShopBundle\Form\Admin\Feature;

/**
 * This Class is responsible to generate the product Features form.
 */
class ProductFeature extends \PrestaShopBundle\Form\Admin\Type\CommonAbstractType
{
    /**
     * Constructor.
     *
     * @param object $translator
     * @param object $legacyContext
     * @param object $router
     * @param object $featureDataProvider
     */
    public function __construct($translator, $legacyContext, $router, $featureDataProvider)
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
     * Returns the block prefix of this type.
     *
     * @return string The prefix name
     */
    public function getBlockPrefix()
    {
    }
}

<?php

namespace PrestaShopBundle\Form\Admin\Product;

/**
 * @deprecated since 8.1 and will be removed in next major.
 *
 * This form class is responsible to generate the product options form.
 */
class ProductOptions extends \PrestaShopBundle\Form\Admin\Type\CommonAbstractType
{
    /**
     * Constructor.
     *
     * @param object $translator
     * @param object $legacyContext
     * @param object $supplierDataProvider
     * @param object $attachmentDataprovider
     * @param object $router
     */
    public function __construct($translator, $legacyContext, $supplierDataProvider, $attachmentDataprovider, $router)
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

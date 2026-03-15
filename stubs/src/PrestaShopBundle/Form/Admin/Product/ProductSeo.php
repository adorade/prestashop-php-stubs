<?php

namespace PrestaShopBundle\Form\Admin\Product;

/**
 * @deprecated since 8.1 and will be removed in next major.
 *
 * This form class is responsible to generate the product SEO form.
 */
class ProductSeo extends \PrestaShopBundle\Form\Admin\Type\CommonAbstractType
{
    /**
     * @var LegacyContext
     */
    public $context;
    /**
     * @var TranslatorInterface
     */
    public $translator;
    /**
     * Constructor.
     *
     * @param TranslatorInterface $translator
     * @param LegacyContext $legacyContext
     * @param Router $router
     */
    public function __construct($translator, $legacyContext, $router)
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
    /**
     * {@inheritdoc}
     */
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver)
    {
    }
}

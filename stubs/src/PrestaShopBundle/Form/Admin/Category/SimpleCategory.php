<?php

namespace PrestaShopBundle\Form\Admin\Category;

/**
 * @deprecated since 8.1 and will be removed in next major.
 *
 * This form class is responsible to generate the basic category form
 * Name (not translated), and parent category selector.
 */
class SimpleCategory extends \PrestaShopBundle\Form\Admin\Type\CommonAbstractType
{
    /**
     * Constructor.
     *
     * @param object $translator
     * @param object $categoryDataProvider
     */
    public function __construct($translator, $categoryDataProvider)
    {
    }
    /**
     * Create and format a valid array keys categories that can be validate by the choice SF2 cform component.
     *
     * @param array $list The nested array categories
     */
    protected function formatValidList($list)
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

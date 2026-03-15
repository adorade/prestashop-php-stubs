<?php

namespace PrestaShopBundle\Form\Admin\Sell\Catalog;

/**
 * Type that builds a product feature add/edit form.
 */
class FeatureType extends \Symfony\Component\Form\AbstractType
{
    use \PrestaShopBundle\Translation\TranslatorAwareTrait;
    /**
     * @param bool $isMultistoreFeatureActive
     */
    public function __construct($isMultistoreFeatureActive)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
    }
}

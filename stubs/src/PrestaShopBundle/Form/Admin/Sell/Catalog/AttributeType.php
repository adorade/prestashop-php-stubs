<?php

namespace PrestaShopBundle\Form\Admin\Sell\Catalog;

/**
 * Form type for attribute add/edit
 */
class AttributeType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, array $locales, protected readonly \PrestaShop\PrestaShop\Core\Form\ChoiceProvider\AttributeGroupChoiceProvider $attributeGroupChoiceProvider, protected readonly \PrestaShop\PrestaShop\Core\Feature\FeatureInterface $multistoreFeature)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
    }
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver)
    {
    }
}

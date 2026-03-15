<?php

namespace PrestaShopBundle\Form\Admin\Type;

/**
 * Class ShopChoiceTreeType.
 */
class ShopChoiceTreeType extends \Symfony\Component\Form\AbstractType
{
    /**
     * @param array $shopTreeChoices
     * @param DataTransformerInterface $stringArrayToIntegerArrayDataTransformer
     */
    public function __construct(array $shopTreeChoices, \Symfony\Component\Form\DataTransformerInterface $stringArrayToIntegerArrayDataTransformer)
    {
    }
    /**
     * {@inheritdoc}
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
     * {@inheritdoc}
     */
    public function getParent()
    {
    }
}

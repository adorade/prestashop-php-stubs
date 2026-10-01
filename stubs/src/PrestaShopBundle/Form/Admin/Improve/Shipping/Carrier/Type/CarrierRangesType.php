<?php

namespace PrestaShopBundle\Form\Admin\Improve\Shipping\Carrier\Type;

/**
 * CarrierRangesType is a form type used to create Carrier ranges fo form.
 *
 * $builder
 *     ->add('ranges', CarrierRangesType::class, [
 *         'label' => 'Ranges',
 *     ])
 * ;
 */
class CarrierRangesType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
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
    public function getBlockPrefix()
    {
    }
}

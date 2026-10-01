<?php

namespace PrestaShopBundle\Form\Admin\Type;

/**
 * This form class is responsible to create a geolocation latitude/longitude coordinates field.
 */
class GeoCoordinatesType extends \Symfony\Component\Form\AbstractType
{
    /**
     * @param \Symfony\Contracts\Translation\TranslatorInterface $translator
     */
    public function __construct(private readonly \Symfony\Contracts\Translation\TranslatorInterface $translator)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options): void
    {
    }
    /**
     * {@inheritdoc}
     */
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver): void
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix(): string
    {
    }
}

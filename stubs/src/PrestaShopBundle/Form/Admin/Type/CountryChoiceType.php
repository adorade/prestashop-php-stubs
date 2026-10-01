<?php

namespace PrestaShopBundle\Form\Admin\Type;

/**
 * Class CountryChoiceType is responsible for providing country choices with -- symbol in front of array.
 */
class CountryChoiceType extends \Symfony\Component\Form\AbstractType
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface&\PrestaShop\PrestaShop\Core\Form\FormChoiceAttributeProviderInterface $countriesChoiceProvider, private readonly \Symfony\Contracts\Translation\TranslatorInterface $translator)
    {
    }
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options): void
    {
    }
    /**
     * {@inheritdoc}
     */
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver): void
    {
    }
    public function getChoiceAttr($value, $key)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getParent(): string
    {
    }
}

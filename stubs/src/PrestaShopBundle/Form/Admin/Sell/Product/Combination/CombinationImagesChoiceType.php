<?php

namespace PrestaShopBundle\Form\Admin\Sell\Product\Combination;

class CombinationImagesChoiceType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    /**
     * @param TranslatorInterface $translator
     * @param array<int, array<string, mixed>> $locales
     * @param ConfigurableFormChoiceProviderInterface $imagesChoiceProvider
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, array $locales, \PrestaShop\PrestaShop\Core\Form\ConfigurableFormChoiceProviderInterface $imagesChoiceProvider)
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
    public function getParent(): string
    {
    }
}

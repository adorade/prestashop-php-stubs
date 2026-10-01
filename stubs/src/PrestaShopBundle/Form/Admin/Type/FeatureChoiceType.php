<?php

namespace PrestaShopBundle\Form\Admin\Type;

class FeatureChoiceType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, array $locales, protected readonly \PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface $featureChoiceProvider)
    {
    }
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver): void
    {
    }
    public function getParent(): string
    {
    }
}

<?php

namespace PrestaShopBundle\Form\Admin\Type;

class LocaleChoiceType extends \Symfony\Component\Form\AbstractType
{
    public function __construct(\PrestaShop\PrestaShop\Adapter\LegacyContext $legacyContext)
    {
    }
    public function getParent(): string
    {
    }
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver): void
    {
    }
    /**
     * Get locales to be used in form type.
     *
     * @return array
     */
    protected function getLocaleChoices(): array
    {
    }
}

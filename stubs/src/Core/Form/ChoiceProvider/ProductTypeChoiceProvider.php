<?php

namespace PrestaShop\PrestaShop\Core\Form\ChoiceProvider;

class ProductTypeChoiceProvider implements \PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface, \PrestaShop\PrestaShop\Core\Form\FormChoiceAttributeProviderInterface
{
    /**
     * @param \Symfony\Contracts\Translation\TranslatorInterface $translator
     * @param \PrestaShop\PrestaShop\Core\Feature\FeatureInterface $combinationFeature
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, \PrestaShop\PrestaShop\Core\Feature\FeatureInterface $combinationFeature)
    {
    }
    /**
     * {@inheritDoc}
     */
    public function getChoicesAttributes()
    {
    }
    /**
     * {@inheritDoc}
     */
    public function getChoices()
    {
    }
}
